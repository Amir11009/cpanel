<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function ImageUploader($file,$target,$width,$height)
    {

        $filename =Str::lower(time() . "-" . $file->getClientOriginalName());
        $path=$target;
        $files = $file->move($path, $filename);
        $img = Image::make($files->getRealPath());
        if($width!=0 && $height!=0) {
            $img->resize($width,$height);
        }
        $img->save($path.$filename);
        return $path.$filename;
    }

//    public function ImageUploader($file,$count)
//    {
//        $i = 0;
//        $image_name[]=array();
//        while ($count > $i) {
//            $filename =Str::lower(time() . "-" . $file[$i]->getClientOriginalName());
////            $path =public_path('/images/product/');
//            $path="images/product/";
//            $files = $file[$i]->move($path, $filename);
//            $img = Image::make($files->getRealPath());
//            $img->resize(400, 400);
//            $img->save($path . $filename);
//            array_push($image_name,$filename);
//            $i++;
//        }
//        unset($image_name[0]);
//        return $image_name;
//    }

    public function ImageUploader_main_image($file)
    {
            $filename =Str::lower(time() . "-" . $file->getClientOriginalName());
//            $path =public_path('/images/product/');
        $path="images/product/";
            $files = $file->move($path, $filename);
            $img = Image::make($files->getRealPath());
            $img->resize(400, 400);
            $img->save($path . $filename);

        return $filename;
    }

    public function ImageUploader_article($file)
    {
        $filename =Str::lower(time() . "-" . $file->getClientOriginalName());
//        $path =public_path('/images/article/');
        $path="images/article/";
        $files = $file->move($path, $filename);
        $img = Image::make($files->getRealPath());
        $img->resize(1144, 510);
        $img->save($path . $filename);

        return $filename;
    }

    public function ImageUploader_group_sub1($file)
    {
        $filename =Str::lower(time() . "-" . $file->getClientOriginalName());
        $path =public_path('/img/group_sub1/');
        $files = $file->move($path, $filename);
        $img = Image::make($files->getRealPath());
        $img->resize(150, 150);
        $img->save($path . $filename);
        return $filename;
    }

    public function ImageUploader_group_sub2($file)
    {
        $filename =Str::lower(time() . "-" . $file->getClientOriginalName());
        $path =public_path('/img/group_sub2/');
        $files = $file->move($path, $filename);
        $img = Image::make($files->getRealPath());
        $img->resize(150, 150);
        $img->save($path . $filename);
        return $filename;
    }

    public function ImageUploader_brand($file)
    {
        $filename =Str::lower(time() . "-" . $file->getClientOriginalName());
        $path =public_path('/img/brand/');
        $files = $file->move($path, $filename);
        $img = Image::make($files->getRealPath());
        $img->resize(140, 60);
        $img->save($path . $filename);
        return $filename;
    }

    public function send_price()
    {
        $send_price=DB::table('send_price')->get()->first();
        return view('admin.send_price.edit',compact('send_price'));
    }

    public function send_price_edit(Request $request)
    {
        $price=$request['price'];
        $id=$request['id'];
        DB::table('send_price')->where('id',$id)->update(['price'=>$price]);
        return redirect()->back();
    }
}
