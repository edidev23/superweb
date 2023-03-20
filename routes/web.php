<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('adminhome');

// report ticket
Route::get('admin/report/all-destination', [App\Http\Controllers\Admin\Eticketing\ReportController::class, 'allDestination']);
Route::get('admin/report/tourist-visitors', [App\Http\Controllers\Admin\Eticketing\ReportController::class, 'touristVisitors']);
Route::get('admin/report/', [App\Http\Controllers\Admin\Eticketing\ReportController::class, 'allDestination']);
Route::get('admin/report/tabuhan', [App\Http\Controllers\Admin\Eticketing\ReportController::class, 'ticketTabuhan']);
Route::get('admin/report/mustika-conservasi', [App\Http\Controllers\Admin\Eticketing\ReportController::class, 'ticketMustikaConservasi']);
// print 
Route::post('admin/report/all-destination/print', [App\Http\Controllers\Admin\Eticketing\ReportController::class, 'printAllDestination']);
Route::post('admin/report/tabuhan/print', [App\Http\Controllers\Admin\Eticketing\ReportController::class, 'printTicketTabuhan']);
Route::post('admin/report/mustika-conservasi/print', [App\Http\Controllers\Admin\Eticketing\ReportController::class, 'printTicketMustikaConservasi']);

// data ticket
Route::get('admin/ticket/all-destination', [App\Http\Controllers\Admin\Eticketing\DataTicketController::class, 'allDestination']);
Route::get('admin/ticket/tabuhan', [App\Http\Controllers\Admin\Eticketing\DataTicketController::class, 'ticketTabuhan']);
Route::get('admin/ticket/mustika-conservasi', [App\Http\Controllers\Admin\Eticketing\DataTicketController::class, 'ticketMustikaConservasi']);

// eticketing users
Route::get('admin/eticketing-users/request', [App\Http\Controllers\Admin\Eticketing\EticketingUsersController::class, 'request']);
Route::get('admin/eticketing-users/manage', [App\Http\Controllers\Admin\Eticketing\EticketingUsersController::class, 'manage']);
Route::get('admin/eticketing-users/tracking', [App\Http\Controllers\Admin\Eticketing\EticketingUsersController::class, 'tracking']);
