<?php

namespace App\Http\Controllers\Danhmuc;

use App\Http\Controllers\Controller;
use App\Models\ChatLuong;
use App\Models\DonViTinh;
use App\Models\Kho;
use App\Models\NhaPhanPhoi;
use App\Models\NhaSanXuat;
use App\Models\NhomVatTu;
use App\Models\VatTu;
use App\Models\VatTuKho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VatTuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vattu = DB::table('vattu')->get();
        return view('danhmuc.vattu.list', compact('vattu'));
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
        
        return view('danhmuc.vattu.create',compact('donvitinh','nhomvattu','nhasanxuat','nhaphanphoi','chatluong','kho'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //     $vattu = DB::table('vattu')->insert([
	// 	'vt_ma' => $request->ma,
	// 	'vt_ten' => $request->ten,
	// 	'dvt_id' => $request->dvt,
	// 	'nvt_id' => $request->nvt,
	// 	'cl_id' => $request->cl,
	// 	'nsx_id' => $request->nsx,
	// 	'npp_id' => $request->npp,
	// 	'vt_gia' => $request->gia,
    //     ]);

	// 	$soluong = DB::table('vattukho')->insert([
	// 	// 'vt_id' => $vattu->id,
	// 	'kho_id' => $request->kho,
	// 	'sl_nhap' => $request->sl,
	// 	'sl_ton' => $request->sl,
	// 	'sl_xuat' => 0,
    // ]);

    $kho = Kho::all();
    $vattu = new VatTu;
    $vattu->vt_ma = $request->ma;
    $vattu->vt_ten = $request->ten;
    $vattu->dvt_id = $request->dvt;
    $vattu->nvt_id = $request->nvt;
    $vattu->cl_id = $request->cl;
    $vattu->nsx_id = $request->nsx;
    $vattu->npp_id = $request->npp;
    $vattu->vt_gia = $request->gia;
    $vattu->save();
    foreach ($kho as $item) {
        if ($request->kho != $item->id) {
        $soluong = new VatTuKho;
        $soluong->vt_id = $vattu->id;
        $soluong->kho_id = $item->id;
        $soluong->sl_nhap = 0;
        $soluong->sl_ton = 0;
        $soluong->sl_xuat = 0;
        $soluong->save();
        }else{
            $soluong = new VatTuKho;
            $soluong->vt_id = $vattu->id;
            $soluong->kho_id = $request->kho;
            $soluong->sl_nhap = $request->sl;
            $soluong->sl_ton = $request->sl;
            $soluong->sl_xuat = 0;
            $soluong->save();
        }
    }
		return redirect()->route('vattu.index')->with(['flash_level'=>'success','flash_message'=>'Thêm thành công!!!']);
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
