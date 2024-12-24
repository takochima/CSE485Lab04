<?php

namespace App\Http\Controllers;

use App\Models\OrderDetail;
use App\Models\Order;
use App\Models\Order_details;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orderDetails = Order_details::paginate(5);
        return view('order_details.index', compact('orderDetails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order_details.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|integer|exists:orders,id',
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'required|integer',
        ]);

        $orderDetail = new Order_details([
            'order_id' => $request->order_id,
            'product_id' => $request->product_id,
            'quantity' => $request->quantity,
        ]);

        $orderDetail->save();

        return redirect()->route('order_details.index')->with('success', 'Thêm chi tiết đơn hàng thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $orderDetail = Order_details::findOrFail($id);
        return view('order_details.show', compact('orderDetail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $orderDetail = Order_details::findOrFail($id);
        return view('order_details.edit', compact('orderDetail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $orderDetail = Order_details::findOrFail($id);

        $validatedData = $request->validate([
            'order_id' => 'required|integer|exists:orders,id',
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'required|integer',
        ]);

        $orderDetail->update($validatedData);

        return redirect()->route('order_details.show', $orderDetail->id)
            ->with('success', 'Cập nhật chi tiết đơn hàng thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $orderDetail = Order_details::findOrFail($id);

    // Xóa order detail
    $orderDetail->delete();
    return redirect()->route('order_details.index')
                     ->with('success', 'Xoá chi tiết đơn hành thành công.');
    }
}
