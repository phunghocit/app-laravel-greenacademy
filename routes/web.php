<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Chucnang\NhapKhoController;
use App\Http\Controllers\Danhmuc\ChatLuongController;
use App\Http\Controllers\Danhmuc\CongTrinhController;
use App\Http\Controllers\Danhmuc\DonViTinhController;
use App\Http\Controllers\Danhmuc\KhoController;
use App\Http\Controllers\Danhmuc\KhuVucController;
use App\Http\Controllers\Danhmuc\NhanVienController;
use App\Http\Controllers\Danhmuc\NhaPhanPhoiController;
use App\Http\Controllers\Danhmuc\NhaSanXuatController;
use App\Http\Controllers\Danhmuc\NhomVatTuController;
use App\Http\Controllers\Danhmuc\PhongBanController;
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
    Route::get('/GreenAcademy',function (){
        return view('app');
    })->name('greenacademy');

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
    Route::post('nhaphanphoi/delete/{id}', [NhaPhanPhoiController::class, 'destroy'])
    ->name('nhaphanphoi.delete');

    // ==============Vat tu===============
    Route::get('/vattu', [VatTuController::class, 'index'])->name('vattu.index');
    Route::get('vattu/create', [VatTuController::class, 'create'])->name('vattu.create');
    Route::post('vattu/save', [VatTuController::class, 'store'])->name('vattu.save');
    Route::get('vattu/{id}', [VatTuController::class, 'show'])->name('vattu.show');
    Route::post('vattu/update/{id}', [VatTuController::class, 'update'])
    ->name('vattu.update');
    Route::post('vattu/delete/{id}', [VatTuController::class, 'destroy'])
    ->name('vattu.delete');
    // ==============Nhóm vật tư===============
    Route::get('/nhomvattu', [NhomVatTuController::class, 'index'])->name('nhomvattu.index');
    Route::get('nhomvattu/create', [NhomVatTuController::class, 'create'])->name('nhomvattu.create');
    Route::post('nhomvattu/save', [NhomVatTuController::class, 'store'])->name('nhomvattu.save');
    Route::get('nhomvattu/{id}', [NhomVatTuController::class, 'show'])->name('nhomvattu.show');
    Route::post('nhomvattu/update/{id}', [NhomVatTuController::class, 'update'])
    ->name('nhomvattu.update');
    Route::post('nhomvattu/delete/{id}', [NhomVatTuController::class, 'destroy'])
    ->name('nhomvattu.delete');
    // ==============Đơn vị tính===============
    Route::get('/donvitinh', [DonViTinhController::class, 'index'])->name('donvitinh.index');
    Route::get('donvitinh/create', [DonViTinhController::class, 'create'])->name('donvitinh.create');
    Route::post('donvitinh/save', [DonViTinhController::class, 'store'])->name('donvitinh.save');
    Route::get('donvitinh/{id}', [DonViTinhController::class, 'show'])->name('donvitinh.show');
    Route::post('donvitinh/update/{id}', [DonViTinhController::class, 'update'])
    ->name('donvitinh.update');
    Route::post('donvitinh/delete/{id}', [DonViTinhController::class, 'destroy'])
    ->name('donvitinh.delete');
    // ==============Chất lượng===============
    Route::get('/chatluong', [ChatLuongController::class, 'index'])->name('chatluong.index');
    Route::get('chatluong/create', [ChatLuongController::class, 'create'])->name('chatluong.create');
    Route::post('chatluong/save', [ChatLuongController::class, 'store'])->name('chatluong.save');
    Route::get('chatluong/{id}', [ChatLuongController::class, 'show'])->name('chatluong.show');
    Route::post('chatluong/update/{id}', [ChatLuongController::class, 'update'])
    ->name('chatluong.update');
    Route::post('chatluong/delete/{id}', [ChatLuongController::class, 'destroy'])
    ->name('chatluong.delete');
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
    Route::get('/congtrinh', [CongTrinhController::class, 'index'])->name('congtrinh.index');
    Route::get('congtrinh/create', [CongTrinhController::class, 'create'])->name('congtrinh.create');
    Route::post('congtrinh/save', [CongTrinhController::class, 'store'])->name('congtrinh.save');
    Route::get('congtrinh/{id}', [CongTrinhController::class, 'show'])->name('congtrinh.show');
    Route::post('congtrinh/update/{id}', [CongTrinhController::class, 'update'])
    ->name('congtrinh.update');
    Route::post('congtrinh/delete/{id}', [ChaCongTrinhControllertLuongController::class, 'destroy'])
    ->name('congtrinh.delete');
    // ==============Phòng ban===============
    Route::get('/phongban', [PhongBanController::class, 'index'])->name('phongban.index');
    Route::get('phongban/create', [PhongBanController::class, 'create'])->name('phongban.create');
    Route::post('phongban/save', [PhongBanController::class, 'store'])->name('phongban.save');
    Route::get('phongban/{id}', [PhongBanController::class, 'show'])->name('phongban.show');
    Route::post('phongban/update/{id}', [PhongBanController::class, 'update'])
    ->name('phongban.update');
    Route::post('phongban/delete/{id}', [PhongBanController::class, 'destroy'])
    ->name('phongban.delete');
    // ==============Nhân viên===============
    Route::get('/nhanvien', [NhanVienController::class, 'index'])->name('nhanvien.index');
    Route::get('nhanvien/create', [NhanVienController::class, 'create'])->name('nhanvien.create');
    Route::post('nhanvien/save', [NhanVienController::class, 'store'])->name('nhanvien.save');
    Route::get('nhanvien/{id}', [NhanVienController::class, 'show'])->name('nhanvien.show');
    Route::post('nhanvien/update/{id}', [NhanVienController::class, 'update'])
    ->name('nhanvien.update');
    Route::post('nhanvien/delete/{id}', [NhanVienController::class, 'destroy'])
    ->name('nhanvien.delete');
    // ==============Nhập kho===============
    Route::get('/nhapkho', [NhapKhoController::class, 'index'])->name('nhapkho.index');
    Route::get('nhapkho/create', [NhapKhoController::class, 'create'])->name('nhapkho.create');
    Route::post('nhapkho/save', [NhapKhoController::class, 'store'])->name('nhapkho.save');
    Route::get('nhapkho/{id}', [NhapKhoController::class, 'show'])->name('nhapkho.show');
    Route::post('nhapkho/update/{id}', [NhapKhoController::class, 'update'])
    ->name('nhapkho.update');
    Route::post('nhapkho/delete/{id}', [NhapKhoController::class, 'destroy'])
    ->name('nhapkho.delete');

});

require __DIR__.'/auth.php';
