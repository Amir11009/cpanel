<?php

namespace App\Http\Controllers\Admin;


use App\Page;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PageController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pages = Page::all()->get();
        return  view('admin.page.index',compact('pages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=$request['image'];
        $target='images/page/';
        $width=0;
        $height=0;
        $image = $this->ImageUploader($file,$target,$width,$height);

        $page = Page::create([
            'title' => $request['title'],
            'slug' => $request['slug'],
            'text' => $request['text'],
            'status'=>$request['status'],
            'image' => $image
        ]);
        return redirect(route('page.index'));
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
        //
        $page =Page::find($id);
        return view('admin.page.edit',compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::where('id', $id)->first();
        if($request->hasFile('image')){
            $file=$request['image'];
            $target='images/page/';
            $width=0;
            $height=0;
            $image = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$page->image;
            if(is_file($old_image)) {
                unlink($old_image);
            }

            Page::where('id',$id)->Update(array('image'=>$image));
        }
        $data= $request->except('image');
        $page->update($data);
        return redirect()->back()->with(array(
            'page_update' => 'success',
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $page = Page::find($id);
        $page->delete();
        return redirect(route('page.index'));
    }
}
