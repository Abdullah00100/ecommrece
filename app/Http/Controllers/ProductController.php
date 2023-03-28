<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::latest()->get();
        return view('CMS.Product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('CMS.Product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $data = $request->validated();
        if ($request->hasFile('image')) {
            $path = upload($request->file('image'), 'products/images');
            $data = $request->except('image');
            $data['image'] = $path;
        }
        Product::create($data);

        return redirect()->route('products.index')->with('success', 'Added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('CMS.Product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $result = Product::find($id);
        return view('CMS.Product.edit', compact('result'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $data = $request->validated();
        $result = Product::find($id);
        if ($request->hasFile('image')) {
            deleteFile($result->image);
            $path = upload($request->file('image'), 'products/images');
            $data = $request->except('image');
            $data['image'] = $path;
        }

        $result->update($data);

        return redirect()->route('products.index')->with('success', 'Updated Successfully ');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        if (Storage::exists('public/' . $product->image)) {

            deleteFile($product->image);
        }
        return 'Deleted successfully';
    }
}
