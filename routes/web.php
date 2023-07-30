<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Chucnang\NhapKhoController;
use App\Http\Controllers\Danhmuc\KhoController;
use App\Http\Controllers\Danhmuc\KhuVucController;
use App\Http\Controllers\Danhmuc\NhaPhanPhoiController;
use App\Http\Controllers\Danhmuc\NhaSanXuatController;
use App\Http\Controllers\Danhmuc\VatTuController;
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

    // ==============Khu vuc===============
    Route::get('/khuvuc', [KhuVucController::class, 'index'])->name('khuvuc.index');
    Route::get('khuvuc/create', [KhuVucController::class, 'create'])->name('khuvuc.create');
    Route::post('khuvuc/save', [KhuVucController::class, 'store'])->name('khuvuc.save');
    Route::get('khuvuc/{id}', [KhuVucController::class, 'show'])->name('khuvuc.show');
    Route::post('khuvuc/update/{id}', [KhuVucController::class, 'update'])
    ->name('khuvuc.update');
    Route::post('khuvuc/delete/{id}', [KhuVucController::class, 'destroy'])
    ->name('khuvuc.delete');
    // ==============Nhà sản xuất===============
    Route::get('/nhasanxuat', [NhaSanXuatController::class, 'index'])->name('nhasanxuat.index');
    Route::get('nhasanxuat/create', [NhaSanXuatController::class, 'create'])->name('nhasanxuat.create');
    Route::post('nhasanxuat/save', [NhaSanXuatController::class, 'store'])->name('nhasanxuat.save');
    Route::get('nhasanxuat/{id}', [NhaSanXuatController::class, 'show'])->name('nhasanxuat.show');
    Route::post('nhasanxuat/update/{id}', [NhaSanXuatController::class, 'update'])
    ->name('nhasanxuat.update');
    Route::post('nhasanxuat/delete/{id}', [NhaSanXuatController::class, 'destroy'])
    ->name('nhasanxuat.delete');
    // ==============Nhà phân phối===============
    Route::get('/nhaphanphoi', [NhaPhanPhoiController::class, 'index'])->name('nhaphanphoi.index');
    Route::get('nhaphanphoi/create', [NhaPhanPhoiController::class, 'create'])->name('nhaphanphoi.create');
    Route::post('nhaphanphoi/save', [NhaPhanPhoiController::class, 'store'])->name('nhaphanphoi.save');
    Route::get('nhaphanphoi/{id}', [NhaPhanPhoiController::class, 'show'])->name('nhaphanphoi.show');
    Route::post('nhaphanphoi/update/{id}', [NhaPhanPhoiController::class, 'update'])
    ->name('nhaphanphoi.update');
    Route::post('khuvuc/delete/{id}', [NhaPhanPhoiController::class, 'destroy'])
    ->name('nhaphanphoi.delete');

    // ==============Vat tu===============
    Route::get('/vattu', [VatTuController::class, 'index'])->name('vattu.index');
    Route::get('vattu/create', function (){
        return view('danhmuc.vattu.create');
    })->name('vattu.create');
    // ==============Nhóm vật tư===============
    // ==============Đơn vị tính===============
    // ==============Chất lượng===============
    // ==============Kho===============
    Route::get('/kho', [KhoController::class, 'index'])->name('kho.index');
    Route::get('nhapkho/create', function (){
        return view('chucnang.nhapkho.create');
    })->name('nhapkho.create');

    Route::get('kho/create', [KhoController::class, 'create'])->name('kho.create');
    Route::post('kho/save', [KhoController::class, 'store'])->name('kho.save');
    Route::get('kho/{id}', [KhoController::class, 'show'])->name('kho.show');
    Route::post('kho/update/{id}', [KhoController::class, 'update'])
    ->name('kho.update');
    Route::post('kho/delete/{id}', [KhoController::class, 'destroy'])
    ->name('kho.delete');
    // Route::delete('kho/delete/{id}', [KhoController::class, 'destroy'])
    // ->name('kho.delete');
    // ==============Công trình===============
    // ==============Phòng ban===============
    // ==============Nhân viên===============
});

require __DIR__.'/auth.php';
