<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', [
            'categories' => $categories,
        ]);
    }

        /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->isMethod('POST')) {
            $params = $request->except('_token');
            Category::create([
                'name'=> $params['CategoryName'],
                'description'=> $params['Description'],
            ]);
            return redirect()->route('category.index');
        } else {
            return view('admin.category.create');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::find($id);

        if (!$category) {
            return redirect()->route('category.index')->with('error', 'category not found');
        }
        return view('admin.category.update', [
            'category' => $category,

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        if ($request->isMethod('PUT')) {
            $params  = $request->except('_token','_method');
            DB::table('categories')
            ->where('id', $id)
            ->update($params);
            return redirect()->route('category.index')->with('success', 'Category updated successfully');

        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request ,string $id)
    {
        if($request->isMethod('DELETE'))
        {
            $category = Category::find($id);
            $category->delete();
            return redirect()->route('category.index')->with('success', 'Category deleted successfully');
        }
    }
}
