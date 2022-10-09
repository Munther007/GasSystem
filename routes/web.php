<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

//Route::get('/club' , function(){
//    return view('club.home');
//});

Route::resource('users' ,UserController::class)->parameters([
    'users' => 'users.index'
]);
Route::get('cars/create' , [CarController::class , 'create'])->name('cars.create');

Route::get('cars/{id}' , [CarController::class , 'show'])->name('cars.show');
//Route::post('/cars.create' , CarController::class)->name('cars.store');
Route::resource('/cars', CarController::class)->parameters([
    'cars' => 'cars.index' ,
    'cars.create' => 'create' ,
    'cars.store' => 'cars.store' ,
    'cars.show' =>'cars.show'
]);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth','admin'])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/',\App\Http\Livewire\Admin\Admin\AdminIndex::class)->name('index');
    Route::get('/user',\App\Http\Livewire\Admin\User\UserIndex::class)->name('user.index')->can('viewAny', \App\Models\User::class);
    Route::get('/role',\App\Http\Livewire\Admin\Role\RoleIndex::class)->name('role.index')->can('viewAny', \App\Models\Role::class);
});
