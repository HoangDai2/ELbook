<?php

namespace App\Http\Controllers;

use App\Models\Vouchers;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vouchers = Vouchers::all();
        return view('admin.vouchers.index', compact('vouchers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vouchers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|unique:vouchers|max:50',
            'discount' => 'required|numeric|min:0',
            'type' => 'required|in:fixed,percentage',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'usage_limit' => 'nullable|integer|min:1',
        ]);

        Vouchers::create($request->all());

        return redirect()->route('voucher.index')->with('success', 'Voucher đã được thêm!');
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
        $voucher = Vouchers::findOrFail($id);
        return view('admin.vouchers.update', compact('voucher'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $voucher = Vouchers::findOrFail($id);

        $request->validate([
            'code' => 'required|string|max:50|unique:vouchers,code,' . $voucher->id,
            'discount' => 'required|numeric|min:0',
            'type' => 'required|in:fixed,percentage',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
            'usage_limit' => 'nullable|integer|min:1',
        ]);

        $voucher->update($request->all());

        return redirect()->route('voucher.index')->with('success', 'Voucher đã được cập nhật!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $voucher = Vouchers::findOrFail($id);
        $voucher->delete();

        return redirect()->route('voucher.index')->with('success', 'Voucher đã được xóa!');
    }
}
