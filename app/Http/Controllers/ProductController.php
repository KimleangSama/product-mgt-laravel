<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $limit = 10;
        $products = Product::paginate($limit);
        return view('products.index', [
            'products' => $products
        ])->with('i', (request()->input('page', 1) - 1) * $limit);
    }

    public function create()
    {
        $categories = Category::all();
        return view('products.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'categories' => 'required',
            'subcategories' => 'required',
            'image' => 'required'
        ]);
        $product = new Product();
        $product->name = ''.$request->name;
        $product->description = ''.$request->description;
        $product->price = $request->price;
        $product->category_id = $request->categories;
        $product->subcategory_id = $request->subcategories;
        if ($request->image) {
            $originFileName = $request->image->getClientOriginalName();
            $request->image->storeAs('public/products', $originFileName);
            $product->image = ''.$originFileName;
        }
        $product->save();
        return redirect()->route('products.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
