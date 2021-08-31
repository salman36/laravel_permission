<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;

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
    return view('auth.login');
});

// Login routes for Admin//
Route::post('/auth/login/user',[MainController::class,'loginrequest'])->name('login.request');
Route::get('/auth/logout/user',[MainController::class,'logout'])->name('logout.request');


Route::group(['middleware'=>['auth']], function(){
    
    Route::get('/admin/dashboard',[MainController::class,'dashboard'])->name('dashboard');

        // Product test for advance controller tecxhnique
        Route::get('/products/indexpage',[ProductController::class,'index'])->name('products.index');
        Route::get('/products/create',[ProductController::class,'create'])->name('product.create');
        Route::post('/products/store',[ProductController::class,'store'])->name('product.store');
        Route::get('/products/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
        Route::post('/products/update',[ProductController::class,'update'])->name('product.update');
        Route::post('/products/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');


    
            Route::group(['middleware'=>['SuperAdmin']], function(){
            // Admin controller creation view edit Update and Delete
                
            Route::get('/admins',[AdminController::class,'index'])->name('admin.all');
            Route::get('/create/admin',[AdminController::class,'view'])->name('admin.register');
            Route::post('/save/admin',[AdminController::class,'save'])->name('admin.save');
            Route::get('/roles',[RoleController::class,'index'])->name('role.all');
            Route::get('/create/role',[RoleController::class,'view'])->name('role.create');
            Route::post('/save/role',[RoleController::class,'save'])->name('role.save');
            
        


            });
     
                
            Route::group(['middleware'=>['admin']], function(){
                // Admin controller creation view edit Update and Delete

                    // Route::get('/admin/check', function(){
                    //         return "it works";
                    // });
                    Route::get('/roles',[RoleController::class,'index'])->name('role.all');
                    Route::get('/create/role',[RoleController::class,'view'])->name('role.create');
                    Route::post('/save/role',[RoleController::class,'save'])->name('role.save');
                    
                
                });



                Route::group(['middleware'=>['Authorcheck']], function(){
                    // Admin controller creation view edit Update and Delete
    
                        // Route::get('/admin/check', function(){
                        //         return "it works";
                        // });
                       
                        
                        Route::get('/dailyreport',[AccountController::class,'dailyrep'])->name('daily.report');
                        Route::get('/monthlyreport',[AccountController::class,'monthlyrep'])->name('monthly.report');
                    
                    });
         
       
    // Account controller creation view edit Update and Delete
    // Roles route

     
    });
    

  
















Auth::routes();


