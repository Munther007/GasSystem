<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserManagementController;
use Illuminate\Support\Facades\Route;

use Spatie\Activitylog\Models\Activity ;

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

Route::get('/activity', function () {
    return Activity::all();
    return view('test');
});

Route::get('/', function () {
    return view('home');
});

Route::get('cars/create' , [CarController::class , 'create'])->name('cars.create');


// ----------------------------- user userManagement -----------------------//
Route::get('userManagement', [UserManagementController::class, 'index'])->middleware('auth')->name('userManagement');
Route::get('user/add/new', [UserManagementController::class, 'addNewUser'])->middleware('auth')->name('user/add/new');
Route::post('user/add/save', [UserManagementController::class, 'addNewUserSave'])->name('user/add/save');
Route::get('view/detail/{id}', [UserManagementController::class, 'viewDetail'])->middleware('auth');
Route::post('update', [UserManagementController::class, 'update'])->name('update');
Route::get('delete_user/{id}', [UserManagementController::class, 'delete'])->middleware('auth');
Route::get('activity/log', [UserManagementController::class, 'activityLog'])->middleware('auth')->name('activity/log');
Route::get('activity/login/logout', [UserManagementController::class, 'activityLogInLogOut'])->middleware('auth')->name('activity/login/logout');


//Route::get('/print-info',[PrintController::class , 'carinfo']);
//Route::get('/prnpriview3',[PrintController::class , 'prnpriview3']);
//Route::get('/generate-pdf', [CarController::class, 'generatePDF']);

Route::get('/generate-pdf', [CarController::class, 'export2']);

Route::get('/getcookies' , [CarController::class , 'getCookies']);
Route::get('/scan', function () {
    return view('scan');})->name('scan');
Route::post('/scan' , [CarController::class , 'checkBarcode'])->name('check');





Route::middleware(['auth'])->prefix('cars')->group(function () {
    Route::get('cars/{id}' , [CarController::class , 'show'])->name('show');
    Route::post('cars/{id}' , [CarController::class , 'update'])->name('cars.update');

    Route::get('cars/{id}/edit' , [CarController::class , 'show2'])->name('show2');
//    Route::post('cars/{id}/edit' , [CarController::class , 'update'])->name('cars.update');

    Route::delete('/cars/{id}/edit' , [CarController::class , 'destroy'])->name('cars.destroy');
});


Route::get('cars/create' , [CarController::class , 'create'])->name('cars.create');
Route::get('cars/{id}' , [CarController::class , 'show'])->name('cars.show');
Route::post('/cars.create' , [CarController::class])->name('cars.store');
Route::resource('/cars', CarController::class)->parameters([
    'cars' => 'cars.index' ,
    'cars.create' => 'create' ,
    'cars.store' => 'cars.store' ,
    'cars.show' => 'cars.show' ,
    'cars.update' => 'cars.update' ,
    'cars.destroy' => 'cars.destroy'
]);

Route::resource('users' ,UserController::class)->parameters([
    'users' => 'users.index'
]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth','admin'])->prefix('admin')->as('admin.')->group(function () {
    Route::get('/',[\App\Http\Livewire\Admin\Admin\AdminIndex::class , 'index'])->name('index');
    Route::get('/user',\App\Http\Livewire\Admin\User\UserIndex::class)->name('user.index')->can('viewAny', \App\Models\User::class);
    Route::get('/role',\App\Http\Livewire\Admin\Role\RoleIndex::class)->name('role.index')->can('viewAny', \App\Models\Role::class);
});
Route::get('/print-users',[PrintController::class , 'index']);
Route::get('/prnpriview',[PrintController::class , 'prnpriview']);
Route::get('users/export/', [UserController::class, 'export']);

Route::get('/print-cars',[PrintController::class , 'index2']);
Route::get('/prnpriview2',[PrintController::class , 'prnpriview2']);
Route::get('cars/export/', [CarController::class, 'export']);
