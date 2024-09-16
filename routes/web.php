<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/orders', 'OrderController'); // order.index
Route::resource('/products', 'ProductController'); //product.index
Route::resource('/suppliers', 'SupplierController'); //supplier.index
Route::resource('/users', 'UserController');  //user.index
Route::resource('/companies', 'CompanyController'); //company.index
Route::resource('/transactions', 'TransactionController'); //transaction.index
Route::get('barcode', 'ProductController@GetProductBarcodes')->name('products.barcode'); //barcode.index

Route::resource('/sections', 'SectionController'); // sections.index
Route::resource('/categories', 'CategoryController'); // categories.index
Route::resource('/subcategories', 'SubCategoryController'); // subcategories.index

Route::delete('/delete/{id}', 'product@destroy')->name('delete'); //delete.index
