<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/admin/leads/{leadId}', [LeadController::class, 'show']);
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
    // Add other admin routes here
});
