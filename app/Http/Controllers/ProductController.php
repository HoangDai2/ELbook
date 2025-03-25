<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::with('category')->get();
        return view('admin.product.index', [
            'products' => $products,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::get();

        return view('admin.product.create',[
            'categories' => $categories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function store(Request $request)
     {
         if ($request->isMethod('POST')) {

             $request->validate([
                 'name' => 'required|string|max:255',
                 'price' => 'required|numeric',
                 'category_id' => 'required|integer|exists:categories,id',
                 'description' => 'nullable|string',
                 'quantity' => 'required|integer|min:1',
                 'author' => 'nullable|string|max:255',
                 'publisher' => 'nullable|string|max:255',
                 'specified_age' => 'nullable|string|max:10',
                 'language' => 'nullable|string|max:50',
                 'year_of_publication' => 'nullable|integer|min:1900|max:' . date('Y'),
                 'page_number' => 'nullable|integer|min:1',
                 'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
             ]);

             DB::beginTransaction();

             try {
                 // Lưu sản phẩm
                 $product = Product::create($request->only([
                     'name',
                     'price',
                     'category_id',
                     'description',
                     'quantity',
                     'author',
                     'publisher',
                     'specified_age',
                     'language',
                     'year_of_publication',
                     'page_number',
                 ]) + ['product_code' => Str::random(10)]);

                 // Lưu ảnh sản phẩm
                 if ($request->hasFile('images')) {
                     foreach ($request->file('images') as $image) {
                         $path = $image->store('products', 'public');

                         ProductImage::create([
                             'product_id' => $product->id,
                             'path' => $path,
                         ]);
                     }
                 }

                 DB::commit();

                 return redirect()->route('product.index')->with('success', 'Sản phẩm và ảnh đã được thêm thành công!');
             } catch (\Exception $e) {
                 DB::rollBack();

                 \Log::error('Lỗi khi lưu sản phẩm: ' . $e->getMessage());

                 return redirect()->back()->with('error', 'Đã xảy ra lỗi khi thêm sản phẩm. Vui lòng thử lại!');
             }
         }
     }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::with('category', 'images')->find($id);

        return view('admin.product.show', [
            'product' => $product,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::with('category', 'images')->find($id);
        $categories = Category::get();
        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Product not found');
        }

        return view('admin.product.update', [
            'product' => $product,
            'categories'=> $categories,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, string $id)
    {
        if ($request->isMethod('PUT')) {
            $params = $request->except('_token', '_method');
            DB::beginTransaction();

            try {
                // Lấy sản phẩm cần sửa
                $product = Product::findOrFail($id);

                // Cập nhật thông tin sản phẩm
                $product->update($params);

                // Nếu có ảnh mới, xóa ảnh cũ và lưu ảnh mới
                if ($request->hasFile('images')) {
                    // Kiểm tra file ảnh
                    foreach ($request->file('images') as $image) {
                        if (!$image->isValid()) {
                            throw new \Exception('File ảnh không hợp lệ.');
                        }
                    }

                    // Xóa tất cả ảnh cũ
                    $oldImagePaths = $product->images->pluck('path')->toArray();
                    Storage::delete(array_map(fn($path) => 'public/' . $path, $oldImagePaths));
                    $product->images()->delete();

                    // Lưu ảnh mới
                    $newImages = [];
                    foreach ($request->file('images') as $image) {
                        $path = $image->store('products', 'public');
                        $newImages[] = [
                            'product_id' => $product->id,
                            'path' => $path,
                        ];
                    }
                    ProductImage::insert($newImages);
                }

                DB::commit();

                return redirect()->route('product.index')->with('success', 'Sản phẩm đã được cập nhật thành công!');
            } catch (ModelNotFoundException $e) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Không tìm thấy sản phẩm.');
            } catch (QueryException $e) {
                DB::rollBack();
                return redirect()->back()->with('error', 'Lỗi truy vấn cơ sở dữ liệu.');
            } catch (\Exception $e) {
                DB::rollBack();
                \Log::error('Lỗi khi cập nhật sản phẩm: ' . $e->getMessage());
                return redirect()->back()->with('error', 'Đã xảy ra lỗi khi cập nhật sản phẩm. Vui lòng thử lại!');
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( Request $request ,string $id)
    {
        if($request->isMethod('DELETE')){
            $product = Product::find($id);
            $product->delete();
            return redirect()->route('product.index');
        }
        return view('admin.product.index');
    }
}
