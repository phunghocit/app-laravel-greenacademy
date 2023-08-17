<?php

namespace App\Http\Controllers\Danhmuc;

use App\Http\Controllers\Controller;
use App\Models\NguoiDung;
use App\Models\NhanVien;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class NhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nhanvien = DB::table('nhanvien')->get();
        return view('danhmuc.nhanvien.list', compact('nhanvien'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $quyen = NguoiDung::all();
        return view('danhmuc.nhanvien.create')->with('quyen', $quyen);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//         DB::table('users')->insert([
//         'name' => $request->name,
//         'email' => $request->email,
//         'password' => Hash::make($request->password),
//         'role' => $request->quyen,
//         'remember_token' => $request->_token,
//         ]);

//         $user = User::latest()->take(1)->get();
// dd($user);
// 		DB::table('nhanvien')->insert([
// 		'nv_ma' => $request->txtMa,
// 		'nv_ten' => $request->txtTen,
// 		'nv_gioitinh' => $request->rdGioitinh,
// 		'nv_ngaysinh' => $request->dateNgaysinh,
// 		'nv_cmnd' => $request->txtCMND,
// 		'nv_diachi' => $request->txtDiachi,
// 		'nv_sdt' => $request->txtSDT,
// 		'nv_email' => $request->txtEmail,
// 		'nv_ngayvaolam' => $request->dateNVL,
// 		'user_id' => $user->id,
//         ]);
//         // $msg = $data ? 'Thêm khu vực mới thành công!' : 'Thêm khu vực mới thất bại!';
    
//         return redirect()->route('khuvuc.index');

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->dob = $request->ngaysinh;
        $user->role = $request->quyen;
        $user->remember_token = $request->_token;
        $user->save();


		$nhanvien = new NhanVien;
		$nhanvien->nv_ma = $request->ma;
		$nhanvien->nv_ten = $request->ten;
		$nhanvien->nv_gioitinh = $request->gioitinh;
		$nhanvien->nv_ngaysinh = $request->ngaysinh;
		$nhanvien->nv_cmnd = $request->cmnd;
		$nhanvien->nv_diachi = $request->diachi;
		$nhanvien->nv_sdt = $request->sdt;
		$nhanvien->nv_email = $request->email;
		$nhanvien->nv_ngayvaolam = $request->nvl;
		$nhanvien->user_id = $user->id;
		$nhanvien->save();
		return redirect()->route('nhanvien.index')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công!!!']);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
