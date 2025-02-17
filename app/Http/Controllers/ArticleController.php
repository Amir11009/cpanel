<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::latest()->paginate(5);
        $categories=Category::all();
        $last_arts=Article::orderBy('id', 'DESC')->take(3)->get();
        return view('article',compact('articles','categories','last_arts'));
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
//        return $article;
//        die();
        $categories=Category::all();
        $last_arts=Article::orderBy('id', 'DESC')->take(3)->get();
        return view('article-single',compact('article','categories','last_arts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        //
    }

    public function search(Request $request)
    {
        $title=$request['title'];
        $articles=Article::where('title', 'like', '%' . $title . '%')->get();
        $categories=Category::all();
        $last_arts=Article::orderBy('id', 'DESC')->take(3)->get();
        return view('article',compact('articles','categories','last_arts'));
    }
}
