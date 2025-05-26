<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\MessageController;
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

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/logout', [Authcontroller::class, 'logout'])->name('logout');
Route::post('/postLogin', [AuthController::class, 'postLogin'])->name('postLogin');

Route::middleware(['auth', 'checkRole:Admin,Pegawai'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('message')->name('message.')->group(function () {
        Route::get('/request-leave', [MessageController::class, 'requestLeavePage'])->name('requestLeavePage');
    });
});

Route::middleware(['auth', 'checkRole:Admin'])->group(function () {

    Route::get('/employee', [EmployeeController::class, 'index'])->name('employee.index');
    Route::get('/employee/add-employee', [EmployeeController::class, 'create'])->name('employee.addEmployee');
    Route::post('/employee/add-employee', [EmployeeController::class, 'store'])->name('employee.store');
    Route::get('/employee/edit-employee/{id}', [EmployeeController::class, 'edit'])->name('employee.edit');
    Route::patch('/employee/edit-employee/{id}', [EmployeeController::class, 'update'])->name('employee.update');


    Route::get('/leave', [LeaveController::class, 'index'])->name('leave.index');
    Route::get('/set-leave', [LeaveController::class, 'setLeavePage'])->name('leave.setLeavePage');
    Route::get('/leave-assign-update', [LeaveController::class, 'assignUpdatePage'])->name('leave.assignUpdatePage');
    Route::get('/leave-assign-update/assign', [LeaveController::class, 'transactionAssignPage'])->name('leave.transactionAssignPage');
    Route::get('/leave-assign-update/update', [LeaveController::class, 'transactionUpdatePage'])->name('leave.transactionUpdatePage');
    Route::get('/leave/history', [LeaveController::class, 'historyPage'])->name('leave.historyPage');
    Route::get('/leave/balance', [LeaveController::class, 'leaveBalancePage'])->name('leave.leaveBalancePage');
});

Route::middleware(['auth', 'checkRole:Pegawai'])->group(function () {

    Route::get('/leave-info', [LeaveController::class, 'leaveInfoPage'])->name('leave.leaveInfoPage');
});
