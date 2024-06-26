<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[ProductController::class,'openHome']);

Route::get('/dashboard',[ProductController::class,'openHome'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('admin',function (){
    return view('admin');
});
require __DIR__.'/auth.php';



// about section 
Route::get('aboutus',[ProductController::class, 'openAboutus']);

// admin section
Route::get('admin',[ProductController::class, 'openAdmin']);
Route::get('editCustomer/{id}',[ProductController::class, 'toEditCustomer']);

// view products 
Route::get('top',[ProductController::class, 'openTop']);
Route::get('bottom',[ProductController::class, 'openBottom']);
Route::get('shoes',[ProductController::class, 'openShoes']);
Route::get('fullset',[ProductController::class, 'openFullset']);
Route::get('Buy1Get1Free',[ProductController::class, 'openBuy1Get1Free']);
Route::get('summerCollection',[ProductController::class, 'Summer']);

// delete products
Route::get('deleteProduct/{id}',[ProductController::class, 'toDeleteProduct']);

//edit products
Route::get('editProduct/{id}',[ProductController::class, 'toEditProduct']);
Route::post('updateProduct/{id}',[ProductController::class, 'updateItemInProduct']);

//add products
Route::get('addProduct',[ProductController::class, 'openAddProduct']);
Route::post('addProduct',[ProductController::class, 'addItemInProduct']);

//carts
Route::get('cart',[ProductController::class,'openCart']);
Route::get('cart/{id}',[ProductController::class,'addToCart']);
Route::get('cartDelete/{id}',[ProductController::class,'deleteCart']);

Route::get('viewd',[ProductController::class,'viewdi']);
Route::get('privacyandpolicy',[ProductController::class,'openprivaryandpolicy']);
Route::get('termsandcondition',[ProductController::class,'opentermsandcondition']);
Route::get('viewcartitem/{id}',[ProductController::class,'viewitem']);