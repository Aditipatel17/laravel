<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allproduct =products::all();
        // dd($allproduct);
       return view('viewallproduct',compact("allproduct"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('addproductpage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,products  $products)
    {
        // dd($request->all());
      $products->name = $request->name;
      $products->price = $request->price;
      $products->quantity = $request->quantity;
       $products->save();
       return redirect("product");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit($id,products $products)
    {
    //    $editproduct = $products->find($id);
       $editproduct = products::find($id);
      return view("editproduct",compact("editproduct"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, products $products)
    {
        $updateproduct = products::find($id);
        // dd($updateproduct);
        $updateproduct->name = $request->name;
        $updateproduct->price = $request->price;
        $updateproduct->quantity = $request->quantity;
        $updateproduct->save();
        return redirect("product");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy($id,products $products)
    {
       $productdelete = products::find($id);
       $productdelete->delete();
       return redirect("product");
    }
}
