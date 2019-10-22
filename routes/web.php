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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//Customer Route

$customerPrefix = "";
Route::group(['prefix' => $customerPrefix, 'middleware' => ['customer']], function() {

});
//Login
Route::match(['get', 'post'], 'login', ['as' => 'login', 'uses' => 'frontend\LoginController@login']);
Route::match(['get', 'post'], 'front-logout', ['as' => 'front-logout', 'uses' => 'frontend\LoginController@logout']);
Route::match(['get', 'post'], 'front-register', ['as' => 'front-register', 'uses' => 'frontend\LoginController@register']);

//Dashboard
Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'frontend\DashboardController@dashboard']);
Route::match(['get', 'post'], 'front-dashboard', ['as' => 'front-dashboard', 'uses' => 'frontend\DashboardController@dashboard']);
Route::match(['get', 'post'], 'dashboard-ajaxaction', ['as' => 'dashboard-ajaxaction', 'uses' => 'frontend\DashboardController@ajaxaction']);

//Product
Route::match(['get', 'post'], 'product/{id?}', ['as' => 'product', 'uses' => 'frontend\ProductController@product']);
Route::match(['get', 'post'], 'product-details/{id}', ['as' => 'product-details', 'uses' => 'frontend\ProductController@productdetails']);

//Cart
Route::match(['get', 'post'], 'cart/{id}', ['as' => 'cart', 'uses' => 'frontend\CartController@cart']);
Route::match(['get', 'post'], 'cart-list', ['as' => 'cart-list', 'uses' => 'frontend\CartController@cartlist']);
Route::match(['get', 'post'], 'cart-ajaxaction', ['as' => 'cart-ajaxaction', 'uses' => 'frontend\CartController@ajaxaction']);

//Contact Us
Route::match(['get', 'post'], 'contact-us', ['as' => 'contact-us', 'uses' => 'frontend\ContactusController@contactus']);

//Checkout
Route::match(['get', 'post'], 'checkout', ['as' => 'checkout', 'uses' => 'frontend\CheckoutController@checkout']);

//My Order
Route::match(['get', 'post'], 'myorder', ['as' => 'myorder', 'uses' => 'frontend\OrderController@myorder']);

//Emial
Route::match(['get', 'post'], 'testingmail', ['as' => 'testingmail', 'uses' => 'admin\LoginController@testingmail']);

//Customer Route End

// Admin Route Start

Route::match(['get', 'post'], 'admin-login', ['as' => 'admin-login', 'uses' => 'admin\LoginController@login']);
Route::match(['get', 'post'], 'register', ['as' => 'register', 'uses' => 'admin\LoginController@register']);
Route::match(['get', 'post'], 'forgotpassword', ['as' => 'forgotpassword', 'uses' => 'admin\LoginController@forgotpassword']);
Route::match(['get', 'post'], 'createpassword', ['as' => 'createpassword', 'uses' => 'admin\LoginController@createpassword']);
$adminPrefix = "";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['admin']], function() {
Route::match(['get', 'post'], 'dashboard', ['as' => 'dashboard', 'uses' => 'admin\dashboard\DashboardController@dashboard']);

Route::match(['get', 'post'], 'details', ['as' => 'details', 'uses' => 'admin\details\DetailsController@index']);

Route::match(['get', 'post'], 'slider', ['as' => 'slider', 'uses' => 'admin\slider\SliderController@index']);
Route::match(['get', 'post'], 'add-slider', ['as' => 'add-slider', 'uses' => 'admin\slider\SliderController@add']);
Route::match(['get', 'post'], 'slider-ajaxAction', ['as' => 'slider-ajaxAction', 'uses' => 'admin\slider\SliderController@ajaxAction']);

//category
Route::match(['get', 'post'], 'add-category', ['as' => 'add-category', 'uses' => 'admin\category\CategoryController@newcategory']);
Route::match(['get', 'post'], 'category-list', ['as' => 'category-list', 'uses' => 'admin\category\CategoryController@categorylist']);
Route::match(['get', 'post'], 'update-category/{id}', ['as' => 'update-category', 'uses' => 'admin\category\CategoryController@editcategory']);
Route::match(['get', 'post'], 'category-ajax-action', ['as' => 'categoryajaxaction', 'uses' => 'admin\category\CategoryController@categoryajaxaction']);


//Sub Category
Route::match(['get', 'post'], 'subcategory-list', ['as' => 'subcategory-list', 'uses' => 'admin\subcategory\SubcategoryController@index']);
Route::match(['get', 'post'], 'edit-subcategory/{id}', ['as' => 'edit-subcategory', 'uses' => 'admin\subcategory\SubcategoryController@editsubcategory']);
Route::match(['get', 'post'], 'add-subcategory', ['as' => 'add-subcategory', 'uses' => 'admin\subcategory\SubcategoryController@add']);
Route::match(['get', 'post'], 'subcategory-ajax-action', ['as' => 'categoryajaxaction', 'uses' => 'admin\subcategory\SubcategoryController@ajaxaction']);
Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'admin\LoginController@logout']);

//Size
Route::match(['get', 'post'], 'size-list', ['as' => 'size-list', 'uses' => 'admin\size\SizeController@index']);
Route::match(['get', 'post'], 'edit-size/{id}', ['as' => 'edit-size', 'uses' => 'admin\size\SizeController@editsize']);
Route::match(['get', 'post'], 'add-size', ['as' => 'add-size', 'uses' => 'admin\size\SizeController@add']);
Route::match(['get', 'post'], 'size-ajaxaction', ['as' => 'size-ajax-action', 'uses' => 'admin\size\SizeController@ajaxaction']);

//product
Route::match(['get', 'post'], 'product-list', ['as' => 'product-list', 'uses' => 'admin\product\ProductController@index']);
Route::match(['get', 'post'], 'add-product', ['as' => 'add-product', 'uses' => 'admin\product\ProductController@add']);
Route::match(['get', 'post'], 'edit-product/{id}', ['as' => 'edit-product', 'uses' => 'admin\product\ProductController@edit']);
Route::match(['get', 'post'], 'product-ajaxaction', ['as' => 'product-ajaxaction', 'uses' => 'admin\product\ProductController@ajaxaction']);

//product
Route::match(['get', 'post'], 'order', ['as' => 'order', 'uses' => 'admin\order\OrderController@order']);
Route::match(['get', 'post'], 'order-ajaxaction', ['as' => 'order-ajaxaction', 'uses' => 'admin\order\OrderController@ajaxaction']);
});

//Admin Route End