<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\http\Controllers\Admin\CatagoryController;
use App\http\Controllers\Admin\RateController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Customer\PropertyController;
use App\Http\Controllers\Frontend\CompareController;

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

//Route::get('/', function () {
  //  return view('welcome');
//});

Route::get('/',[FrontController::class,'index']);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth' , 'isAdmin'])->group(function () { 
  
    Route::get('/dashboard', 'Admin\FrontendController@index' );
    
    Route::get('catagories', 'Admin\CatagoryController@index'); 

    Route::get('verified-property', 'Admin\CatagoryController@verified_list'); 

    Route::get('add-catagory', 'Admin\CatagoryController@add');

    Route::post('insert-catagory', 'Admin\CatagoryController@insert');

    Route::get('edit-prop/{id}',[CatagoryController::class,'edit']);

    Route::put('update-prop/{id}',[CatagoryController::class,'update']);

    Route::get('delete-prop/{id}',[CatagoryController::class,'destroy']);    

    Route::get('rate', 'Admin\RateController@index'); 

    Route::get('add-rate','Admin\RateController@add');

    Route::post('insert-rate', 'Admin\RateController@insert');

    Route::get('edit-rate/{id}',[RateController::class,'edit']);

    Route::put('update-rate/{id}',[RateController::class,'update']);

    Route::get('delete-rate/{id}',[RateController::class,'destroy']);

    Route::get('verify-property',[CatagoryController::class,'verify']);

    Route::post('verify-prop/{id}',[CatagoryController::class,'verified']); 

    Route::get('reject-prop/{id}',[CatagoryController::class,'reject']); 

    Route::get('view-prop-image/{id}',[CatagoryController::class,'viewimg']); 

    Route::get('view-prop-back',[CatagoryController::class,'back']);

    Route::get('remove-verified-prop/{id}',[CatagoryController::class,'removeverified']);

});


Route::middleware(['auth' , 'isCustomer'])->group(function () { 

  Route::get('property',[PropertyController::class,'index']);

  Route::get('add-property', 'Customer\PropertyController@add');

  Route::post('insert-property', 'Customer\PropertyController@insert');

  Route::get('compare-property', 'Customer\PropertyController@compare');

  Route::get('edit-cus-prop/{id}','Customer\PropertyController@edit');

  Route::put('update-cus-prop/{id}','Customer\PropertyController@update');

  Route::get('delete-cus-prop/{id}','Customer\PropertyController@deleteprop');

  Route::get('buy-property', 'Frontend\FrontController@view');

  Route::get('view-property/{type}',[FrontController::class,'viewproperty']);

  Route::get('valuate-property', 'Customer\ValuateController@value');

  Route::get('about', 'Frontend\FrontController@about');

  Route::get('view-property/{cata_type}/{prop_id}', 'Frontend\FrontController@propertyview');

  Route::get('view-property//{prop_id}', 'Frontend\FrontController@propertyviewindex');

  Route::post('compare-move', 'Frontend\FrontController@move');

  Route::get('remove-compare/{id}',[FrontController::class,'remove']);

  Route::get('view-in-compare', 'Frontend\FrontController@view');

  Route::post('value-property', 'Customer\ValuateController@valuate');

});