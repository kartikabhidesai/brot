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

Route::match(['get', 'post'], '/', ['as' => 'home', 'uses' => 'frontend\DashboardController@dashboard']);
Route::match(['get', 'post'], 'contactus', ['as' => 'contactus', 'uses' => 'frontend\ContactusController@contactus']);
Route::match(['get', 'post'], 'product', ['as' => 'product', 'uses' => 'frontend\ProductController@product']);
Route::match(['get', 'post'], 'myaccount', ['as' => 'myaccount', 'uses' => 'frontend\MyaccountController@myaccount']);
Route::match(['get', 'post'], 'login', ['as' => 'login', 'uses' => 'frontend\DashboardController@login']);
Route::match(['get', 'post'], 'checkout', ['as' => 'checkout', 'uses' => 'frontend\DashboardController@checkout']);
Route::match(['get', 'post'], 'cart', ['as' => 'cart', 'uses' => 'frontend\DashboardController@cart']);




// Admin Route

Route::match(['get', 'post'], 'admin-login', ['as' => 'admin-login', 'uses' => 'admin\LoginController@login']);
Route::match(['get', 'post'], 'register', ['as' => 'register', 'uses' => 'admin\LoginController@register']);
Route::match(['get', 'post'], 'forgotpassword', ['as' => 'forgotpassword', 'uses' => 'admin\LoginController@forgotpassword']);
$adminPrefix = "";
Route::group(['prefix' => $adminPrefix, 'middleware' => ['admin']], function() {
Route::match(['get', 'post'], 'dashboard', ['as' => 'dashboard', 'uses' => 'admin\dashboard\DashboardController@dashboard']);




//category
Route::match(['get', 'post'], 'Add-Category', ['as' => 'Add-Category', 'uses' => 'admin\category\CategoryController@newcategory']);
Route::match(['get', 'post'], 'Category-List', ['as' => 'Category-List', 'uses' => 'admin\category\CategoryController@categorylist']);
Route::match(['get', 'post'], 'Update-Category/{id}', ['as' => 'Update-Category', 'uses' => 'admin\category\CategoryController@editcategory']);
Route::match(['get', 'post'], 'category-ajax-action', ['as' => 'categoryajaxaction', 'uses' => 'admin\category\CategoryController@categoryajaxaction']);


//Sub Category
Route::match(['get', 'post'], 'Subcategory-list', ['as' => 'Subcategory-list', 'uses' => 'admin\subcategory\SubcategoryController@index']);
Route::match(['get', 'post'], 'Edit-subcategory/{id}', ['as' => 'Edit-subcategory', 'uses' => 'admin\subcategory\SubcategoryController@editsubcategory']);
Route::match(['get', 'post'], 'Add-subcategory', ['as' => 'Add-subcategory', 'uses' => 'admin\subcategory\SubcategoryController@add']);
Route::match(['get', 'post'], 'subcategory-ajax-action', ['as' => 'categoryajaxaction', 'uses' => 'admin\subcategory\SubcategoryController@ajaxaction']);
Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'admin\LoginController@logout']);

//Size
Route::match(['get', 'post'], 'Size-list', ['as' => 'Size-list', 'uses' => 'admin\size\SizeController@index']);
Route::match(['get', 'post'], 'Edit-size/{id}', ['as' => 'Edit-size', 'uses' => 'admin\size\SizeController@editsize']);
Route::match(['get', 'post'], 'Add-size', ['as' => 'Add-size', 'uses' => 'admin\size\SizeController@add']);
Route::match(['get', 'post'], 'size-ajaxaction', ['as' => 'Size-ajax-action', 'uses' => 'admin\size\SizeController@ajaxaction']);

//product
Route::match(['get', 'post'], 'product-list', ['as' => 'product-list', 'uses' => 'admin\product\ProductController@index']);
Route::match(['get', 'post'], 'Add-product', ['as' => 'Add-product', 'uses' => 'admin\product\ProductController@add']);
Route::match(['get', 'post'], 'Edit-Product/{id}', ['as' => 'Edit-Product', 'uses' => 'admin\product\ProductController@edit']);
Route::match(['get', 'post'], 'Product-ajaxaction', ['as' => 'Product-ajaxaction', 'uses' => 'admin\product\ProductController@ajaxaction']);

});