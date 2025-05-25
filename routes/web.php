<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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


Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');



Route::middleware(['auth', 'checkRole:Admin'])->group(function () {});

Route::middleware(['auth', 'checkRole:Pegawai'])->group(function () {});


// Leave
route::get('/leave', [LeaveController::class, 'index'])->name('leave.index');

route::get('/set-leave', [LeaveController::class, 'setLeavePage'])->name('leave.setLeavePage');

route::get('/leave-assign-update', [LeaveController::class, 'assignUpdatePage'])->name('leave.assignUpdatePage');

route::get('/leave-assign-update/assign', [LeaveController::class, 'transactionAssignPage'])->name('leave.transactionAssignPage');

route::get('/leave-assign-update/update', [LeaveController::class, 'transactionUpdatePage'])->name('leave.transactionUpdatePage');

route::get('/leave/history', [LeaveController::class, 'historyPage'])->name('leave.historyPage');

route::get('/leave-info', [LeaveController::class, 'leaveInfoPage'])->name('leave.leaveInfoPage');

route::get('/leave/balance', [LeaveController::class, 'leaveBalancePage'])->name('leave.leaveBalancePage');

route::prefix('message')->name('message.')->group(function () {
    route::get('/request-leave', [MessageController::class, 'requestLeavePage'])->name('requestLeavePage');
});
