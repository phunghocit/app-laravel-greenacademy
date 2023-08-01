<?php

namespace App\Http\Controllers\Chucnang;

use App\Http\Controllers\Controller;
use App\Models\ChatLuong;
use App\Models\DonViTinh;
use App\Models\Kho;
use App\Models\NhaPhanPhoi;
use App\Models\NhaSanXuat;
use App\Models\NhomVatTu;
use App\Models\VatTu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
class NhapKhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('chucnang.nhapkho.list');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $donvitinh = DonViTinh::all();
        $nhomvattu = NhomVatTu::all();
        $nhasanxuat = NhaSanXuat::all();
        $nhaphanphoi = NhaPhanPhoi::all();
        $chatluong = ChatLuong::all();
        $kho = Kho::all();
        $vattu = VatTu::all();

        $nv =DB::table('nhanvien')->where('user_id',Auth::user()->id)->first();
        
        return view('chucnang.nhapkho.create',compact('donvitinh','nhomvattu','nhasanxuat','nhaphanphoi','chatluong','kho','vattu','nv'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
