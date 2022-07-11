<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Partner;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('products.index', [
            'records' => Product::simplePaginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create', [
            'categories' => Category::all(),
            'partners' => Partner::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'partner_id' => 'required',
            'category_id' => 'required',
            'miniDescription' => 'required',
            'description' => 'required',
            'images*' => 'required',
        ]);
        $images = $request->images;
        $imagesUrls = [];
        foreach ($images as $key => $image) {
            $var = date_create();
            $time = date_format($var, 'YmdHis');
            $imageUrl = $time . '-' . $image->getClientOriginalName();
            $image->move(public_path() . '/uploads/products/', $imageUrl);

            array_push($imagesUrls, $imageUrl);
        }

        Product::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'reference' => $request->reference,
            'price' => $request->price,
            'partner_id' => $request->partner_id,
            'category_id' => $request->category_id,
            'miniDescription' => $request->miniDescription,
            'description' => $request->description,
            'imageUrls' => json_encode($imagesUrls),
            'technicalSheet' => $request->technicalSheet,
        ]);

        return back()->with('success', 'Product Created successfully');
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
