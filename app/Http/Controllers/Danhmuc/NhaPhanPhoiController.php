<?php

namespace App\Http\Controllers\Danhmuc;

use App\Http\Controllers\Controller;
use App\Models\KhuVuc;
use App\Models\NhaPhanPhoi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhaPhanPhoiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nhaphanphoi = DB::table('nhaphanphoi')->get();
        return view('danhmuc.nhaphanphoi.list', compact('nhaphanphoi'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $khuvuc = KhuVuc::all();
        return view('danhmuc.nhaphanphoi.create')->with('khuvuc', $khuvuc);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nhaphanphoi = DB::table('nhaphanphoi')->insert([
            'npp_ma' => $request->ma,
            'npp_ten'=> $request->ten,
            'kv_id'=> $request->kv_id,
            'npp_diachi'=> $request->diachi,
            'npp_sdt'=> $request->sdt,
            'npp_email'=> $request->email,
            'npp_taikhoan'=> $request->taikhoan,
            'npp_nhanviendaidien'=> $request->nhanviendaidien,


            ]);
            $msg = $nhaphanphoi ? 'Thêm mới thành công!' : 'Thêm mới thất bại!';
    
            return redirect()->route('nhaphanphoi.index')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $khuvuc = KhuVuc::all();
        $nhaphanphoi = DB::table('nhaphanphoi')->where('id', $id)->first();
        return view('danhmuc.nhaphanphoi.update', ['nhaphanphoi' => $nhaphanphoi, 'khuvuc' => $khuvuc]);
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
        $check = DB::table('nhaphanphoi')
        ->where('id', $id)
        ->update([
            'npp_ten'=> $request->ten,
            'kv_id'=> $request->kv_id,
            'npp_diachi'=> $request->diachi,
            'npp_sdt'=> $request->sdt,
            'npp_email'=> $request->email,
            'npp_taikhoan'=> $request->taikhoan,
            'npp_nhanviendaidien'=> $request->nhanviendaidien,
        ]);

        $message = $check ? 'Cập nhật thành công' : 'Cập nhật thất bại';

        return redirect()->route('nhaphanphoi.index')->with('message', $message);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
                // dd($id);
                $check = DB::table('nhaphanphoi')->where('id',$id)->delete();
                // $check = Kho::find($id);
                // dd($check);
                // $check = $productCategory->delete();
                $message = $check ? 'Xoá thành công!' : 'Xoá thất bại!';
                return redirect()->route('nhaphanphoi.index')->with('message', $message);
    }
}
