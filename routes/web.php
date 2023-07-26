<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Chucnang\NhapKhoController;
use App\Http\Controllers\Danhmuc\KhoController;
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
    return view('app');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Route::get('/GreenAcademy',function (){
    //     return view('app');
    // })->name('greenacademy');
    Route::get('nhapkho/create', function (){
        return view('nhapkho.create');
    })->name('nhapkho.create');
    Route::get('/nhapkho', [NhapKhoController::class, 'index'])->name('nhapkho.index');

    Route::get('logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');
    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');
    // ==============Kho===============
    Route::get('/kho', [KhoController::class, 'index'])->name('kho.index');
    Route::get('nhapkho/create', function (){
        return view('chucnang.nhapkho.create');
    })->name('nhapkho.create');

    Route::get('kho/create', [KhoController::class, 'create'])->name('kho.create');
    Route::post('kho/save', [KhoController::class, 'store'])->name('kho.save');
    Route::get('kho/{id}', [KhoController::class, 'show'])->name('kho.show');
    Route::post('kho/{id}', [KhoController::class, 'update'])
    ->name('kho.update');
    Route::post('kho/delete/{id}', [KhoController::class, 'destroy'])
    ->name('kho.delete');

    
});

require __DIR__.'/auth.php';
