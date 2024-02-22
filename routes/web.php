<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Account Route
Route::get('/admin/logout', [AdminController::class, 'destroy'])->name('admin.logout');
Route::get('/employee/logout', [AdminController::class, 'destroy'])->name('employee.logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::get('/admin/change/password', [AdminController::class, 'ChangePassword'])->name('change.password');
    Route::post('/admin/update/password', [AdminController::class, 'UpdatePassword'])->name('update.password');

    //employee controller
    Route::controller(EmployeeController::class)->group(function () {
        Route::get('/all/employee', 'AllEmployee')->name('all.employee');
        Route::get('/add/employee', 'AddEmployee')->name('add.employee');
        Route::post('/employee/profile/store', 'StoreEmployee')->name('employee.store');
        Route::get('/edit/employee/{id}', 'EditEmployee')->name('edit.employee');
        Route::post('/employee/profile/update', 'UpdateEmployee')->name('employee.update');
        Route::get('/delete/employee/{id}', 'DeleteEmployee')->name('delete.employee');
    });

    //customer controller
    Route::controller(CustomerController::class)->group(function () {
        Route::get('/all/customer', 'AllCustomer')->name('all.customer');
        Route::get('/add/customer', 'AddCustomer')->name('add.customer');
        Route::get('/edit/customer/{id}', 'EditCustomer')->name('edit.customer');
        Route::post('/customer/store', 'StoreCustomer')->name('customer.store');
        Route::get('/edit/customer/{id}', 'EditCustomer')->name('edit.customer');
        Route::post('/customer/profile/update', 'UpdateCustomer')->name('customer.update');
        Route::get('/delete/customer/{id}', 'DeleteCustomer')->name('delete.customer');
    });
});




require __DIR__ . '/auth.php';
