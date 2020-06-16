<?php

namespace App\Http\Controllers;

use App\ArticleComment;
use App\ProductComment;
use Illuminate\Http\Request;

class ProductCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $product = $request['product_id'];
        $product_comment = ProductComment::create([
            'name'  => $request['name'],
            'email' => $request['email'],
            'text'  => $request['text'],
            'product_id' => $product
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductComment  $productComment
     * @return \Illuminate\Http\Response
     */
    public function show(ProductComment $productComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductComment  $productComment
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductComment $productComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductComment  $productComment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductComment $productComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductComment  $productComment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductComment $productComment)
    {
        //
    }
}
