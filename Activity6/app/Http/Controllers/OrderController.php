<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function customer(Request $request)
    {
        return view('customer', [
            'customer_id' => $request->query('customer_id'),
            'name' => $request->query('name'),
            'address' => $request->query('address')
        ]);
    }

    // Item View
    public function item(Request $request)
    {
        return view('item', [
            'item_no' => $request->query('item_no'),
            'name' => $request->query('name'),
            'price' => $request->query('price')
        ]);
    }

    // Order View
    public function order(Request $request)
    {
        return view('order', [
            'customer_id' => $request->query('customer_id'),
            'name' => $request->query('name'),
            'order_no' => $request->query('order_no'),
            'date' => $request->query('date')
        ]);
    }

    // Order Details View
    public function orderDetails(Request $request)
    {
        return view('orderdetails', [
            'trans_no' => $request->query('trans_no'),
            'order_no' => $request->query('order_no'),
            'item_id' => $request->query('item_id'),
            'name' => $request->query('name'),
            'price' => $request->query('price'),
            'qty' => $request->query('qty')
        ]);
    }
}
