<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
    
        $products = Product::when($search, function ($query, $search) {
            return $query->where('name', 'like', "%{$search}%");
        })->orderBy('id', 'desc')->paginate(10);
    
        return view('products.index', compact('products', 'search'));
    }

    public function create() {
        return view('products.create');
    }
    

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer'
        ]);
    
        Product::create($request->all());
    
        return redirect()->route('products.index')->with('success', 'Product added successfully.');
    }
    

    public function show(Product $product) {
        return view('products.show', compact('product'));
    }
    

    public function edit(Product $product) {
        return view('products.edit', compact('product'));
    }
    

    public function update(Request $request, Product $product) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'stock_quantity' => 'required|integer'
        ]);
    
        $product->update($request->all());
    
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
    

    public function destroy(Product $product) {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
    
}
