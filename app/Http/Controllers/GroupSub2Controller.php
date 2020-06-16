<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Group_main;
use App\Group_sub1;
use App\Group_sub2;
use App\Product;
use App\Unit_price;
use Illuminate\Http\Request;

class GroupSub2Controller extends Controller
{
    public function filter(Group_sub2 $group_sub2)
    {
        $group_name=$group_sub2->group_sub1->group_main->name."\r\n/\r\n".$group_sub2->group_sub1->name."\r\n/\r\n".$group_sub2->name;
        $group_sub2_id=$group_sub2->id;
        $group_sub1_id=$group_sub2->group_sub1_id;

        $group_sub1_id_dbs=Group_sub1::where('id',$group_sub1_id)->get();
        foreach ($group_sub1_id_dbs as $group_sub1_id_db){
            $group_main_id=$group_sub1_id_db->group_main_id;
        }
        $products=$group_sub2->products()->paginate(50);
        $brand_id="";
        $group_mains=Group_main::where('status',1)->get();
        $group_sub1s=Group_sub1::where([['group_main_id',$group_sub2->group_sub1->group_main_id],['status',1]])->get();
        $group_sub2s=Group_sub2::where([['group_sub1_id',$group_sub2->group_sub1->id],['status',1]])->get();
        $brands=Brand::all();
        $unit_prices=Unit_price::where('status',1)->get();
        foreach ($unit_prices as $unit_price){
            $main_unit_price=$unit_price->price;
        }
        return view('shop',compact('main_unit_price','brands','products','group_mains','group_sub1s','group_sub2s','group_name','group_sub2_id','group_sub1_id','group_main_id','brand_id'));
    }

    public function filter_brand(Group_sub2 $group_sub2 , Brand $brand)
    {
        $group_name=$group_sub2->group_sub1->group_main->name."\r\n/\r\n".$group_sub2->group_sub1->name."\r\n/\r\n".$group_sub2->name;
        $group_sub2_id=$group_sub2->id;
        $group_sub1_id=$group_sub2->group_sub1_id;

        $group_sub1_id_dbs=Group_sub1::where('id',$group_sub1_id)->get();
        foreach ($group_sub1_id_dbs as $group_sub1_id_db){
            $group_main_id=$group_sub1_id_db->group_main_id;
        }

        $products=Product::where([['status',1],['group_sub2_id',$group_sub2_id],['name','LIKE','%'.$brand->e_name.'%']])->paginate(50);
        $brand_id=$brand->id;
        $group_mains=Group_main::where('status',1)->get();
        $group_sub1s=Group_sub1::where([['group_main_id',$group_sub2->group_sub1->group_main_id],['status',1]])->get();
        $group_sub2s=Group_sub2::where([['group_sub1_id',$group_sub2->group_sub1->id],['status',1]])->get();
        $brands=Brand::all();
        return view('shop',compact('brands','products','group_mains','group_sub1s','group_sub2s','group_name','group_sub2_id','group_sub1_id','group_main_id','brand_id'));
    }
}
