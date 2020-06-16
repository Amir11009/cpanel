<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Group_main;
use App\Group_sub1;
use App\Group_sub2;
use App\Product;
use App\Unit_price;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GroupMainController extends Controller
{
    public function filter(Group_main $group_main)
    {
        $group_name=$group_main->name;
        $group_main_id=$group_main->id;
        $products=$group_main->products()->where('status',1)->paginate(100);
        $brand_id="";
        $group_mains=Group_main::where('status',1)->get();
        $group_sub1s=Group_sub1::where([['group_main_id',$group_main->id],['status',1]])->get();
        $group_sub2s=Group_sub2::where('status',1)->get();
        $brands=Brand::all();
        $unit_prices=Unit_price::where('status',1)->get();
        foreach ($unit_prices as $unit_price){
            $main_unit_price=$unit_price->price;
        }

        $off_all_count=DB::table('off_alls')->where('status',1)->get()->count();
        $off_all='';
        if($off_all_count>0){
            $off_all=DB::table('off_alls')->where('status',1)->get()->first();
        }
        return view('shop',compact('off_all','off_all_count','main_unit_price','brands','products','group_mains','group_sub1s','group_sub2s','group_name','group_main_id','brand_id'));
    }

    public function filter_brand(Group_main $group_main , Brand $brand)
    {
        $group_name=$group_main->name;
        $group_main_id=$group_main->id;

        $products=Product::where([['status',1],['group_main_id',$group_main_id],['name','LIKE','%'.$brand->e_name.'%']])->paginate(50);
        $brand_id=$brand->id;
        $group_mains=Group_main::where('status',1)->get();
        $group_sub1s=Group_sub1::where([['group_main_id',$group_main->id],['status',1]])->get();
        $group_sub2s=Group_sub2::where('status',1)->get();
        $brands=Brand::all();

        $off_all_count=DB::table('off_alls')->where('status',1)->get()->count();
        if($off_all_count>0){
            $off_all=DB::table('off_alls')->where('status',1)->get()->first();
        }
        return view('shop',compact('off_all','off_all_count','brands','products','group_mains','group_sub1s','group_sub2s','group_name','group_main_id','brand_id'));
    }
}
