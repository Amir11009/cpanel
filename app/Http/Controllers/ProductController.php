<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Group_main;
use App\Group_sub1;
use App\Group_sub2;
use App\Order;
use App\ProductCategory;
use App\Orderdetail;
use App\Pro_size;
use App\Product;
use App\Product_image;
use App\Size;
use App\Unit_price;
use Illuminate\Http\Request;
use Hekmatinasser\Verta\Verta;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('status', 1)->latest()->paginate(14);
        $group_mains = Group_main::where('status', 1)->get();
        $group_sub1s = Group_sub1::where('status', 1)->get();
        $product_categories=ProductCategory::where('status',1)->get();
        $group_sub2s = Group_sub2::where('status', 1)->get();
        $brands = Brand::all();
        $unit_prices = Unit_price::where('status', 1)->get();
        foreach ($unit_prices as $unit_price) {
            $main_unit_price = $unit_price->price;
        }
        $off_all_count = DB::table('off_alls')->where('status', 1)->get()->count();
        $off_all = '';
        if ($off_all_count > 0) {
            $off_all = DB::table('off_alls')->where('status', 1)->get()->first();
        }
        return view('shop', compact('off_all','product_categories', 'off_all_count', 'main_unit_price', 'products', 'group_mains', 'group_sub1s', 'group_sub2s', 'brands'));
    }

    public function detail($id)
    {
        $slug=$id;
        $product=Product::where('slug',$slug)->get()->first();
        $images = Product_image::where('product_id', $product->id)->get();
        $last_products = Product::where('status', 1)->latest()->take(5)->get();
        $product_in_groups = Product::where([['category_id', $product->category_id], ['status', 1]])->orderBy('id', 'DESC')->take(3)->get();
        $order_details = Orderdetail::where('product_id', $product->id)->get();
        $unit_price_count = Unit_price::where('status', 1)->get()->count();
        $main_unit_price=0;
        if($unit_price_count>0) {
            $unit_price = Unit_price::where('status', 1)->get()->first();
            $main_unit_price = $unit_price->price;
        }
        $product_price = 0;
        if (Auth::check() && auth()->user()->type == "ajent" && $product->ajent_price > 0) {
            if ($product->off == 0) {
                $product_price = $product->ajent_price;
            } else {
                $product_price = $product->ajent_price - $product->off;
            }
        } else {
            if ($product->off == 0) {
                $product_price = $product->user_price;
            } else {
                $product_price = $product->user_price - $product->off;
            }
        }

        $off_all_count = DB::table('off_alls')->where('status', 1)->get()->count();
        if ($off_all_count > 0) {
            $off_all = DB::table('off_alls')->where('status', 1)->get()->first();
            $product_price = ($product->user_price) - ($product->user_price * ($off_all->off / 100));
        }

        return view('single-product', compact('off_all_count', 'main_unit_price', 'order_details', 'product', 'images', 'last_products', 'product_in_groups', 'product_price'));
    }

    public function search(Request $request)
    {
        $search = $request['search'];
        $products = Product::where([['status', 1], ['title', 'like', '%' . $search . '%']])->latest()->paginate(50);
        $products_count = Product::where([['status', 1], ['title', 'like', '%' . $search . '%']])->get()->count();
        $group_mains = Group_main::where('status', 1)->get();
        $group_sub1s = Group_sub1::where('status', 1)->get();
        $group_sub2s = Group_sub2::where('status', 1)->get();
        $brands = Brand::all();
        $unit_prices = Unit_price::where('status', 1)->get();
        $product_categories=ProductCategory::where('status',1)->get();
        foreach ($unit_prices as $unit_price) {
            $main_unit_price = $unit_price->price;
        }
        if ($products_count == 0) {
            return redirect('/shop')->with(array(
                'search_fail' => 'success',
            ));
        } else {
            return view('shop', compact('main_unit_price', 'products', 'group_mains', 'group_sub1s', 'group_sub2s', 'brands', 'products_count','product_categories'));
        }
    }

    public function filter($id)
    {
        $product_cat =ProductCategory::where('slug',$id)->get()->first();
        $products = Product::where([['status', 1], ['category_id', $product_cat->id]])->latest()->paginate(20);
        $products_count = Product::where([['status', 1], ['category_id', $product_cat->id]])->get()->count();
        $product_categories=ProductCategory::where('status',1)->get();
        $group_sub2s = Group_sub2::where('status', 1)->get();
        $brands = Brand::all();
        $unit_prices = Unit_price::where('status', 1)->get();
        foreach ($unit_prices as $unit_price) {
            $main_unit_price = $unit_price->price;
        }
        $off_all_count = DB::table('off_alls')->where('status', 1)->get()->count();
        $off_all = '';
        if ($off_all_count > 0) {
            $off_all = DB::table('off_alls')->where('status', 1)->get()->first();
        }
        if ($products_count == 0) {
            return redirect('/shop')->with(array(
                'filter' => 'fail',
            ));
        } else {
            return view('shop', compact('off_all','product_categories','product_cat', 'off_all_count', 'main_unit_price', 'products', 'group_mains', 'group_sub1s', 'group_sub2s', 'brands'));
        }
    }

}
