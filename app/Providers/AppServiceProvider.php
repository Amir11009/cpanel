<?php

namespace App\Providers;

use App\About;
use App\Brand;
use App\Contact;
use App\Group_main;
use App\Group_sub1;
use App\Group_sub2;
use App\ProductCategory;
use App\Message;
use App\Order;
use App\Orderdetail;
use App\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use stdClass;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        Schema::defaultStringLength(191);
        
        view()->composer('layout.layout', function($view){
            $brands=Brand::all();
            $group_mains=Group_main::where('status',1)->get();
            $contact = Contact::first();
            $settings=Setting::where('status',1)->get()->first();
            $product_categories=ProductCategory::where('status',1)->get();
            $view->with(compact('brands', 'group_mains', 'contact', 'main_services','settings','product_categories'));
        });

        view()->composer('layout.layout', function($view)
        {
            if(Auth::check()) {
                $user_id = auth()->user()->id;
                $order_count = Order::where([['user_id', $user_id], ['status', 0], ['success', 0]])->get()->count();
                if($order_count>0){
                    $order = Order::where([['user_id', $user_id], ['status', 0], ['success', 0]])->get()->first();
                    $order_detail_count = Orderdetail::where('order_id', $order->id)->get()->count();
                    $order_details=Orderdetail::where('order_id',$order->id)->get();
                    $sum=0;
                    foreach ($order_details as $order_detail){
                        $sum+=$order_detail->unit_price*$order_detail->count_one;
                    }
                    $product_categories=ProductCategory::where('status',1)->get();
                    $view->with(compact('order_count','order','order_detail_count','order_details','sum','product_categories'));
                }
                else {
                    $view->with(compact('order_count'));
                }
            }
        });

        view()->composer('layouts.admin', function($view)
        {
            $messages = Message::where('status','0')->get();

            $orders = Order::where('status','0')->get();
            $view->with(compact('messages','orders'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
