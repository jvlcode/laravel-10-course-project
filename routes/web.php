<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about-us',[HomeController::class,'aboutUs']);

Route::group(['prefix' => 'admin236'],function() {
    Route::get('/user/{id}',function($id) {
        return 'User ID is <b>'.$id .'</b>';
    });
    Route::get('/settings',function() {
        return 'Settings';
    });
});



Route::get('/article/technology/elon-musk-buys-twitter',function() {
    return 'Elon musk buys the twitter in the year 2023';
})->name('article');

// Employee Routes
// Route::get('/employees',[EmployeeController::class,'index'])->name('employee.index');
// Route::get('/employees/create',[EmployeeController::class,'create'])->name('employee.create');
// Route::post('/employees/store', [EmployeeController::class, 'store'])->name('employee.store');
// Route::get('/employees/{employee}',[EmployeeController::class,'show'])->name('employee.show');
// Route::get('/employees/{employee}/edit',[EmployeeController::class,'edit'])->name('employee.edit');
// Route::put('/employees/{employee}',[EmployeeController::class,'update'])->name('employee.update');
// Route::delete('/employees/{employee}',[EmployeeController::class,'destroy'])->name('employee.destroy');

//Resource Route
Route::resource('employee',EmployeeController::class);