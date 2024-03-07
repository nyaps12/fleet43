<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\SubAdminController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

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


Route::get('/',[AuthController::class,'landingPage']);

//// GOGOGLE

Route::get('/auth/google',[AuthController::class,'googlepage']);
Route::get('/auth/google/callback',[AuthController::class,'googlecallback']);

Route::get('/admin/login',[AuthController::class,'loadBackEnd']);
Route::post('/admin/login',[AuthController::class,'backEnd'])->name('admin.login');

Route::get('/login',[AuthController::class,'loadLogin']);
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

// ********** Super Admin Routes *********
Route::group(['prefix' => 'super-admin','middleware'=>['web','isSuperAdmin']],function(){
    Route::get('/dashboard',[SuperAdminController::class,'dashboard']);

    Route::get('/users',[SuperAdminController::class,'users'])->name('superAdminUsers');
    Route::get('/manage-role',[SuperAdminController::class,'manageRole'])->name('manageRole');
    Route::post('/update-role',[SuperAdminController::class,'updateRole'])->name('updateRole');
});

// ********** Admin Routes *********
Route::group(['prefix' => 'admin','middleware'=>['web','isAdmin']],function(){
    Route::get('/dashboard',[AdminController::class,'dashboard']);


    // mag add new route
    Route::get('/vehicleList',[AdminController::class,'vehiclelist'])->name('vehicle.list');
    Route::get('/vehicleaAdd',[AdminController::class,'vehicleAdd'])->name('vehicle.add');
    Route::post('/add-vehicle',[AdminController::class,'addVehicle'])->name('addVehicle');


    Route::get('/driveradd', [AdminController::class, 'driveradd'])->name('driver.add');
    Route::get('/driverlist', [AdminController::class, 'driverlist'])->name('driver.list');
    Route::post('/add-driver', [AdminController::class, 'addDriver'])->name('addDriver');


    Route::get('/fuel-management',[AdminController::class,'fuelmanage'])->name('fuel.manage');
    Route::get('/add-fuel',[AdminController::class,'fueladd'])->name('fuel.add');

    Route::get('/tracking-history',[AdminController::class,'tracking'])->name('tracking');
    Route::get('/live-location',[AdminController::class,'location'])->name('location');

    Route::get('/income-and-expenses',[AdminController::class,'income_and_expenses'])->name('income-and-expenses');
    Route::get('/fuel',[AdminController::class,'fuel'])->name('fuel');
});


// ********** User Routes *********
Route::group(['middleware'=>['web','isUser']],function(){
    Route::get('/dashboard',[UserController::class,'dashboard']);


});
