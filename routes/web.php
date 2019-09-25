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



// Admin Route
Route::match(['get', 'post'], 'admin-login', ['as' => 'admin-login', 'uses' => 'admin\LoginController@login']);
Route::match(['get', 'post'], 'register', ['as' => 'register', 'uses' => 'admin\LoginController@register']);
Route::match(['get', 'post'], 'forgotpassword', ['as' => 'forgotpassword', 'uses' => 'admin\LoginController@forgotpassword']);


Route::match(['get', 'post'], 'dashboard', ['as' => 'dashboard', 'uses' => 'admin\dashboard\DashboardController@dashboard']);


//category
Route::match(['get', 'post'], 'Add-Category', ['as' => 'Add-Category', 'uses' => 'admin\category\CategoryController@newcategory']);
Route::match(['get', 'post'], 'Category-List', ['as' => 'Category-List', 'uses' => 'admin\category\CategoryController@categorylist']);
Route::match(['get', 'post'], 'Update-Category/{id}', ['as' => 'Update-Category', 'uses' => 'admin\category\CategoryController@editcategory']);
Route::match(['get', 'post'], 'category-ajax-action', ['as' => 'categoryajaxaction', 'uses' => 'admin\category\CategoryController@categoryajaxaction']);

//Sub Category
Route::match(['get', 'post'], 'Subcategory-list', ['as' => 'Subcategory-list', 'uses' => 'admin\subcategory\SubcategoryController@index']);
Route::match(['get', 'post'], 'Edit-subcategory', ['as' => 'edit-subcategory', 'uses' => 'admin\subcategory\SubcategoryController@edit']);
Route::match(['get', 'post'], 'Add-subcategory', ['as' => 'Add-subcategory', 'uses' => 'admin\subcategory\SubcategoryController@add']);

Route::match(['get', 'post'], 'logout', ['as' => 'logout', 'uses' => 'admin\LoginController@logout']);
