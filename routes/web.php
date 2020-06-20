<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/resetpass', 'ResetPassController@mail');


Route::get('/', 'WelcomeController@index');
Route::post('/', 'WelcomeController@index');

Route::get('/brands', 'BrandController@index');

Route::get('/account', function () {
    return view('account');
});

Route::get('/reset', function () {
    return view('/auth/passwords/email');
});

Route::get('/gift', function () {
    return view('gift');
});

//Route::get('/policy', function () {
//    return view('policy');
//});
Route::resource('policy', 'PolicyController');

Route::get('/verify', function () {
    return view('verify');
});

Route::get('/shop', 'ProductController@index');

Route::get('/single-product/{product}', 'ProductController@detail');

Route::get('/productCategory/{id}', 'ProductController@filter');

Route::get('/group_main/{group_main}', 'GroupMainController@filter');
Route::get('/group_sub1/{group_sub1}', 'GroupSub1Controller@filter');
Route::get('/group_sub2/{group_sub2}', 'GroupSub2Controller@filter');

Route::get('/services/{serviceCategory}/{service}', 'ServiceController@show');

Route::get('/services/{serviceCategory}', 'ServiceCategoryController@show');

Route::get('/services', 'ServiceCategoryController@index');

Route::get('portfolio', 'SampleController@index');
Route::resource('articlecomment', 'ArticleCommentController');

Route::get('/portfolio/{id}', 'SampleController@show');

Route::post('/order/save/{product}', 'OrderController@store');
Route::get('/order/removeitem/{id}', 'OrderController@removeitem');

Route::post('/cart/edit/{order_id}', 'OrderdetailController@update');

Route::get('/pay/{order_id}', 'OrderdetailController@pay');

Route::get('/pay/ok/{order_id}', 'OrderController@pay_ok');

Route::get('/cart/{order_id}', 'OrderController@cart');
Route::get('/cart', 'OrderController@newcart');
Route::post('/cart/add', 'OrderController@addnewcart');

Route::post('/search/article', 'ArticleController@search');
Route::get('/article', 'ArticleController@index');
Route::get('/category/{category}', 'CategoryController@show');
Route::get('/article-single/{article}', 'ArticleController@show');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/pics', function () {
    return view('pics');
});

Route::get('/delivery', function () {
    return view('delivery');
});

Route::get('/404', function () {
    return view('404');
});


Route::post('/product/search', 'ProductController@search');

Route::middleware(['auth', 'BlockAdminUrl'])->namespace('Admin')->prefix('')->group(function () {
//Route::prefix('')->namespace('Admin')->group(function () {
    $this::get('/11', function (){
    });
    $this::resource('/admin/cpanel', 'CpanelController');
    $this::resource('/admin/setting', 'SettingController');

    $this::resource('/admin/contact', 'ContactController');

    $this::resource('/admin/about', 'AboutController');

    Route::post('/admin/add_pro_special', 'ProductController@add_special_pro')->name('addSpecialPro');

    Route::post('/admin/add_pro_new', 'ProductController@add_new_pro')->name('addNewPro');

    $this::resource('/admin/ip', 'IpController');

    $this::resource('/admin/service', 'ServiceController');
    Route::get('admin/service/delete/{service}', 'ServiceController@destroy');

    $this::resource('/admin/service_category', 'ServiceCategoryController');
//    Route::get('admin/service_category/delete/{service_category}','ServiceCategoryController@destroy');

    $this::resource('/admin/product', 'ProductController');
    Route::get('admin/product/delete/{product}', 'ProductController@destroy');
    Route::get('admin/product/special/{product}', 'ProductController@Special_pro');

    $this::resource('/admin/product_category', 'ProductCategoryController');
    Route::get('admin/product_category/delete/{product_category}', 'ProductCategoryController@destroy');

    $this::resource('/admin/category', 'CategoryController');
    Route::get('admin/category/delete/{category}', 'CategoryController@destroy');

    $this::resource('/admin/slider', 'SliderController');
    Route::get('/slider/delete/{slider}', 'SliderController@destroy');

    $this::resource('/admin/article', 'ArticleController');
    Route::get('admin/article/delete/{article}', 'ArticleController@destroy');

    $this::resource('/admin/message', 'MessageController');
    Route::get('admin/message/delete/{message}', 'MessageController@destroy');
    Route::get('/admin/message/{message}', 'MessageController@update');

    $this::resource('/admin/group_main', 'GroupMainController');
    Route::get('admin/group_main/delete/{group_main}', 'GroupMainController@destroy');

    $this::resource('/admin/group_sub1', 'GroupSub1Controller');
    Route::get('admin/group_sub1/delete/{group_sub1}', 'GroupSub1Controller@destroy');
    Route::get('admin/group_sub1/off/{group_sub1}', 'GroupSub1Controller@off_pro');

    $this::resource('/admin/group_sub2', 'GroupSub2Controller');
    Route::get('admin/group_sub2/delete/{group_sub2}', 'GroupSub2Controller@destroy');

    $this::resource('/admin/size', 'SizeController');
    Route::get('admin/size/delete/{size}', 'SizeController@destroy');

    $this::resource('/admin/unit_price', 'UnitPriceController');
    Route::get('admin/unit_price/delete/{unit_price}', 'UnitPriceController@destroy');

    $this::resource('/admin/color', 'ColorController');
    Route::get('admin/color/delete/{color}', 'ColorController@destroy');

    $this::resource('/admin/brand', 'BrandController');
    Route::get('admin/brand/delete/{brand}', 'BrandController@destroy');

    $this::resource('/admin/off_product', 'OffProductController');

    Route::get('admin/off_product/delete/{off_product}', 'OffProductController@destroy');
    Route::get('admin/off/all', 'OffProductController@off_all_index');
    Route::get('admin/off/all/edit/{id}', 'OffProductController@off_all_edit');
    Route::post('admin/off/all/update/{id}', 'OffProductController@off_all_update');

    $this::resource('/admin/special_product', 'SpecialProductController');

    Route::get('admin/special_product/delete/{special_product}', 'SpecialProductController@destroy');

    $this::resource('/admin/order', 'OrderController');
    Route::get('admin/order/delete/{order}', 'OrderController@destroy');

    $this::resource('/admin/order_detail', 'OrderDetailController');
    Route::get('admin/order_detail/delete/{order_detail}', 'OrderDetailController@destroy');

    $this::resource('/admin/order_score', 'OrderScoreController');
    Route::get('admin/order_score/delete/{order_score}', 'OrderScoreController@destroy');

    $this::resource('/admin/users', 'UserController');
    Route::get('admin/users/delete/{user}', 'UserController@destroy');

    Route::get('admin/send_price', 'AdminController@send_price');
    Route::post('admin/send_price/edit', 'AdminController@send_price_edit');

    $this::resource('/admin/sample', 'SampleController');
    Route::get('/sample/delete/{sample}', 'SampleController@destroy');
    $this::resource('/admin/policy', 'PolicyController');
    $this::resource('/admin/ourTeam', 'OurTeamController');
    $this::resource('/admin/comments', 'ArticleCommentController');
});


Route::prefix('')->namespace('User')->group(function () {

//    $this::resource('/admin/message','MessageController');
//    Route::get('admin/message/delete/{message}','MessageController@destroy');
//    Route::get('/admin/message/{message}','MessageController@update');
    Route::get('/user/dashboard', function () {
        return view('user.home');
    });

    $this::resource('/user/order', 'OrderController');
    Route::get('user/order/delete/{order}', 'OrderController@destroy');

    $this::resource('/user/order_detail', 'OrderDetailController');
    Route::get('user/order_detail/delete/{order_detail}', 'OrderDetailController@destroy');

    Route::get('/user/change_pass', 'ChangePassController@change_pass');
    Route::post('/user/change_pass_update', 'ChangePassController@change_pass_update');

    Route::post('user/zarinpal', 'OrderController@payZarin');
    $this::get('user/zarinpal/checker', 'OrderController@payZarinChecker');

    $this::resource('/user/users', 'UserController');
    Route::get('/user/profile/{user}', 'UserController@profile');
});

//Route::group(['namespace'=>'Admin','middleware'=>['auth'],'prefix'=>'admin'],function (){
//    $this::resource('/product','ProductController');
//    Route::get('admin/product/delete/{product}','ProductController@destroy');
//});

Route::post('contact/save', 'MessageController@store');

Route::get('order_detail/remove/{orderdetail}', 'OrderdetailController@destroy');