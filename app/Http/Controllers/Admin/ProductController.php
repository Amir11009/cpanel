<?php

namespace App\Http\Controllers\Admin;

use App\Color;
use App\ProductCategory;
use App\Off_product;
use App\Product;
use App\Product_image;
use App\Size;
use App\Special_product;
use App\New_product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class ProductController extends AdminController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product_categories=ProductCategory::where('status',1)->get();
        $colors=Color::all();
        $sizes=Size::all();
        return view('admin.product.create',compact('product_categories','colors','sizes'));
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
        $target='images/product/';
        $width=0;
        $height=0;
        $main_image = $this->ImageUploader($file,$target,$width,$height);

        $product=Product::create([
            'user_id'=>auth()->user()->id,
            'category_id'=>$request['category_id'],
            'title'=>$request['title'],
            'slug'=>$request['slug'],
            'code'=>$request['code'],
            'description'=>$request['description'],
            'user_price'=>$request['user_price'],
            'off_percent'=>$request['off_percent'],
            'off_rial'=>$request['off_rial'],
            'rate'=>$request['rate'],
            'mojood'=>$request['mojood'],
            'made_by'=>$request['made_by'],
            'product_count'=>$request['product_count'],
            'order_score'=>$request['order_score'],
            'weight'=>$request['weight'],
            'status'=>$request['status'],
            'image'=>$main_image,
        ]);

        $other_images=$request['other_image'];
        if(count($other_images)>0){
            foreach ($other_images as $other){
                $target='images/product/other_image/';
                $width=0;
                $height=0;
                $other_image = $this->ImageUploader($other,$target,$width,$height);
                DB::table('product_images')->insert(
                    ['product_id' => $product->id, 'image' => $other_image]
                );
            }
        }

        if($request['off_percent']>0 || $request['off_rial']>0){
            Off_product::create([
                'product_id'=>$product->id
            ]);
        }

        $product->sizes()->attach(request('size'));
        $product->colors()->attach(request('color'));
        return redirect(route('product.index'))->with(array(
            'product_create' => 'success',
        ));
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
    public function edit(Product $product)
    {
            $product_categories=ProductCategory::where('status',1)->get();
            $colors=Color::all();
            $sizes=Size::all();
            $images=Product_image::where('product_id',$product->id)->get();
            return view('admin.product.edit',compact('product','product_categories','colors','sizes','images'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if($request->hasFile('image')){
            $file=$request['image'];
            $target='images/product/';
            $width=0;
            $height=0;
            $main_image = $this->ImageUploader($file,$target,$width,$height);
            $old_image=$product->image;
            if(is_file($old_image)) {
                unlink($old_image);
            }
            Product::Where('id',$product->id)->Update(array('image'=>$main_image));
        }

        $data=$request->except('image');
        $product->update($data);

        DB::table('color_product')
            ->where('product_id', $product->id)
            ->delete();

        DB::table('product_size')
            ->where('product_id', $product->id)
            ->delete();

        $product->sizes()->attach(request('size'));
        $product->colors()->attach(request('color'));

    //FOR ADD IN OFF_PRODUCT TABLE
        $off_pro_count=Off_product::where('id',$product->id)->get()->count();
        if($request['off_percent']>0 || $request['off_rial']>0){
            if($off_pro_count==0) {
                Off_product::create([
                    'product_id' => $product->id
                ]);
            }
        }
        if($request['off_percent']==0 || $request['off_rial']==0){
            if($off_pro_count>0) {
                Off_product::where('product_id',$product->id)->delete();
            }
        }
    //FOR ADD IN OFF_PRODUCT TABLE
        
        if($request['product_count']>0){
            Product::where('id',$product->id)->update(['mojood'=>1]);
        }

        return redirect()->back()->with(array(
            'product_update' => 'success',
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        foreach(Product_image::where('product_id',$product->id)->get() as $images) {

            $old_image = 'images/product/' . $images->image;
            if (is_file($old_image)) {
                unlink($old_image);
            }
        }

        DB::table('product_images')
            ->where('product_id', $product->id)
            ->delete();

        $off_pro_count=Off_product::where('product_id',$product->id)->get()->count();
        if($off_pro_count>0) {
            Off_product::where('product_id',$product->id)->delete();
        }
        
        $new_pro_count=New_product::where('product_id',$product->id)->get()->count();
        if($new_pro_count>0) {
            New_product::where('product_id',$product->id)->delete();
        }
        
        $special_pro_count=Special_product::where('product_id',$product->id)->get()->count();
        if($special_pro_count>0) {
            Special_product::where('product_id',$product->id)->delete();
        }
        $product->tags()->detach();

        $product->delete();
        return redirect()->back()->with(array(
            'product_delete' => 'success',
        ));
    }

    public function Special_pro(Product $product)
    {
        $product_id = $product->id;
        Special_product::create([
            'product_id' => $product_id,
        ]);
//        return redirect(route('product.index'));
        return redirect()->back()->with(array(
            'special_add' => 'success',
        ));
    }

    public function off_pro(Product $product)
    {
        Off_product::create([
            'off_name' => "تست",
            'group_sub1_id' => $product->group_sub1->id,
            'group_type' => "زیرگروه1",
            'status' => 0,
        ]);


        return redirect(route('product.index'));
    }

    public function add_special_pro(Request $request)
    {
        $product_id=$request['pro_id'];
        $special_count=Special_product::where('product_id',$product_id)->get()->count();
        if($special_count==0){
            Special_product::create([
                'product_id' => $product_id,
            ]);
            return response()->json(['addSpecialPro' => 'success']);
        }
        else{
            Special_product::where('product_id',$product_id)->delete();
            return response()->json(['delSpecialPro' => 'success']);
        }
    }

    public function add_new_pro(Request $request)
    {
        $product_id=$request['pro_id'];
        $new_count=New_product::where('product_id',$product_id)->get()->count();
        if($new_count==0){
            New_product::create([
                'product_id' => $product_id,
            ]);
            return response()->json(['addNewPro' => 'success']);
        }
        else{
            New_product::where('product_id',$product_id)->delete();
            return response()->json(['delNewPro' => 'success']);
        }
    }
}
