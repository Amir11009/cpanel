<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Category;
use App\Tag;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ArticleController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles=Article::all();
        return view('admin.article.index',compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $tags = Tag::where('status',1)->get();
        return view('admin.article.create',compact('categories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request['main_image'];
        $target='images/article/';
        $width=0;
        $height=0;
        $main_image = $this->ImageUploader($file,$target,$width,$height);

        $file=$request['short_image'];
        $target='images/article/short_image/';
        $width=0;
        $height=0;
        $short_image = $this->ImageUploader($file,$target,$width,$height);

        $article=Article::create([
            'title'=>$request['title'],
            'slug'=>$request['slug'],
            'description'=>$request['description'],
            'text'=>$request['text'],
            'main_image'=>$main_image,
            'short_image'=>$short_image,
        ]);
        $article->category()->attach(request('category'));
        $article->tags()->attach(request('tag_id[]'));
        return redirect(route('article.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article=Article::find($id);
        $categories=Category::all();
        $tags = Tag::where('status',1)->get();
        return view('admin.article.edit',compact('article','categories','tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $article=Article::find($id);
        if($request->hasFile('main_image')){
            $file=$request['main_image'];
            $target='images/article/';
            $width=0;
            $height=0;
            $main_image = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$article->main_image;
            if(is_file($old_image)) {
                unlink($old_image);
            }
            Article::Where('id',$article->id)->Update(array('main_image'=>$main_image));
        }

        if($request->hasFile('short_image')){
            $file=$request['short_image'];
            $target='images/article/short_image';
            $width=0;
            $height=0;
            $short_image = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$article->short_image;
            if(is_file($old_image)) {
                unlink($old_image);
            }
            Article::Where('id',$article->id)->Update(array('short_image'=>$short_image));
        }

        $data=$request->except('main_image','short_image');
        $article->update($data);
        DB::table('article_category')
            ->where('article_id', $article->id)
            ->delete();
        DB::table('article_tag')
            ->where('article_id', $article->id)
            ->delete();
        $article->tags()->attach(request('tag_id[]'));
        return redirect(route('article.edit',['id'=>$article->id]));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article=Article::find($id);
        $count=DB::table('article_category')->where('article_id',$article->id)->get()->count();
        if($count>0){
            DB::table('article_category')->where('article_id',$article->id)->delete();
        }
        $article->article_comments()->delete();
        $article->delete();
        return redirect(route('article.index'));
    }
}
