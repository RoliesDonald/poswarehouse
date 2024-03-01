<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\AttendenceController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\SalaryController;
use App\Http\Controllers\Backend\SupplierController;
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
        Route::post('/customer/store', 'StoreCustomer')->name('customer.store');
        Route::get('/edit/customer/{id}', 'EditCustomer')->name('edit.customer');
        Route::post('/customer/profile/update', 'UpdateCustomer')->name('customer.update');
        Route::get('/delete/customer/{id}', 'DeleteCustomer')->name('delete.customer');
    });

    //Supplier controller
    Route::controller(SupplierController::class)->group(function () {
        // Route::get('/all/supplier', 'AllSupplier')->name('all.supplier');
        Route::get('/alls/supplier', 'AllsSupplier')->name('alls.supplier');
        Route::get('/add/supplier', 'AddSupplier')->name('add.supplier');
        Route::post('/supplier/store', 'StoreSupplier')->name('supplier.store');
        Route::get('/edit/supplier/{id}', 'EditSupplier')->name('edit.supplier');
        Route::post('/update/supplier', 'UpdateSupplier')->name('supplier.update');
        Route::get('/delete/supplier/{id}', 'DeleteSupplier')->name('delete.supplier');
        Route::get('/detail/supplier/{id}', 'DetailSupplier')->name('detail.supplier');
    });

    //Advance Salary controller
    Route::controller(SalaryController::class)->group(function () {
        Route::get('/all/advance/salary', 'AllAdvanSalary')->name('all.advansalary');
        Route::get('/add/advsalary', 'AddAdvanceSalary')->name('add.advansalary');
        Route::post('/store/advance/salary', 'StoreAdvanceSalary')->name('advance.salary.store');
        Route::get('/edit/advsalary/{id}', 'EditAdvanceSalary')->name('edit.advance.salary');
        Route::post('/update/advance/salary', 'UpdateAdvanceSalary')->name('advance.salary.update');
        Route::get('/pay/salary', 'PaySalary')->name('pay.salary');
    });

    //Pay Salary controller
    Route::controller(SalaryController::class)->group(function () {
        Route::get('/pay/salary', 'PaySalary')->name('pay.salary');
        Route::get('/pay/now/salary/{id}', 'PayNowSalary')->name('pay.now.salary');
        Route::post('/employee/salary/store', 'EmployeeSalaryStore')->name('employee.salary.store');
        Route::get('/lastmonth/salary', 'LastMonthSalary')->name('lastmonth.salary');
    });

    //Attendence controller
    Route::controller(AttendenceController::class)->group(function () {
        Route::get('/employee/attend/list', 'EmployeeAttendList')->name('employee.attend.list');
        Route::get('/add/employee/attend', 'AddEmployeeAttendence')->name('add.employee.attend');
        Route::post('/store/employee/attend', 'StoreEmployeeAttendence')->name('employee.attend.store');
        Route::get('/edit/employee/attend/{date}', 'EditEmployeeAttendence')->name('edit.employee.attend');
        Route::get('/view/employee/attend/{date}', 'ViewEmployeeAttendence')->name('view.employee.attend');
    });
});




require __DIR__ . '/auth.php';
