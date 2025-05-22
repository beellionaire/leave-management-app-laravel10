<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LeaveController;
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
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


// Leave
route::get('/leave', [LeaveController::class, 'index'])->name('leave.index');

route::get('/set-leave', [LeaveController::class, 'setLeavePage'])->name('leave.setLeavePage');

route::get('/leave-assign-update', [LeaveController::class, 'assignUpdatePage'])->name('leave.assignUpdatePage');

route::get('/leave-assign-update/assign', [LeaveController::class, 'transactionAssignPage'])->name('leave.transactionAssignPage');

route::get('/leave-assign-update/update', [LeaveController::class, 'transactionUpdatePage'])->name('leave.transactionUpdatePage');

route::get('/leave/history', [LeaveController::class, 'historyPage'])->name('leave.historyPage');
