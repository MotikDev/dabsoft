<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();

        foreach ($products as $product) {
            $product->slug_url = Str::slug($product->title);
        }

        return view('pages.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $validated = $request->validated();
        $product = new Product();
        $product->category = $validated['category'];
        $product->title = $validated['title'];
        $product->summary = $validated['summary'];
        $product->description = $validated['description'];
        $product->location = $validated['location'];
        $product->amount = $validated['amount'];
        $product->square_meter = $validated['sqm'];
        $product->user_id = auth()->user()->id;

        $photos = [];
        foreach ($request->file('photos') as $photo) {
            $path = $photo->store('photos', 'public');
            $photos[] = $path;
        }

        $product->photos = $photos;

        $product->save();

        return redirect()->back()->with('status', 'Product added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $property)
    {
        return view('pages.property', compact('property'));
    }

    public function showCategory($type)
    {
        $category = Product::whereCategory($type)->get();

        foreach ($category as $product) {
            $product->slug_url = Str::slug($product->title);
        }

        return view('pages.category', compact('category', 'type'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
