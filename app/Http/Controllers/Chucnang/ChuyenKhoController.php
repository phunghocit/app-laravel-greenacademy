<?php

namespace App\Http\Controllers\ChucNang;

use App\Http\Controllers\Controller;
use App\Models\Kho;
use App\Models\NhaPhanPhoi;
use App\Models\VatTu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ChuyenKhoController extends Controller
{
    public function index()
    {
        $data = DB::table('chuyenkho')->get();
        return view('chucnang.chuyenkho.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // session()->forget('cart');
        // $donvitinh = DonViTinh::all();
        // $nhomvattu = NhomVatTu::all();
        // $nhasanxuat = NhaSanXuat::all();
        $nhaphanphoi = NhaPhanPhoi::all();
        // $chatluong = ChatLuong::all();
        $kho = Kho::all();
        $vattu = VatTu::all();
 
        $nv =DB::table('nhanvien')->where('user_id',Auth::user()->id)->first();
        $cart = session()->get('cart') ?? [];
        return view('chucnang.chuyenkho.create',compact('nv','nhaphanphoi','vattu','kho','cart'));
    }

    /**
     * Store a newly created resource in storage.                   
     */
    
     public function calculateTotalPrice(array $cart){
        $totalPrice = 0;
        foreach($cart as $item){
            $totalPrice += $item['qty'] * $item['gia'];
        }
        return $totalPrice;
    }
    public function store(Request $request)
    {
        // dd($request->all());
//         $cart = session()->get('cart') ?? [];
//         // dd(session()->get('cart'));
//         // $totalProduct = count($cart);
//         $totalPrice = $this->calculateTotalPrice($cart);

// // dd($totalPrice);
//         // $vattu->vt_ma = $request->ma;
// 		// $content = $cart->content();
// 		// $total = $cart->total();
// 		$nhapkho = new NhapKho;
// 		$nhapkho->nk_ma = $request->id;
// 		$nhapkho->nk_ngaylap = date('Y-m-d');
// 		$nhapkho->nk_lydo = $request->lydo;
// 		$nhapkho->nk_tongtien = $totalPrice;
// 		$nhapkho->npp_id =  $request->npp_id ;
// 		$nhapkho->nv_id = $request->nv;
// 		$nhapkho->save();
//         // dd($cart);
// 		foreach ($cart as  $item) {
// 			$chitiet = new ChiTietNhapKho;
// 			$chitiet->ctnk_soluong = $item['qty'];
// 			$chitiet->ctnk_thanhtien = $item['qty']*$item['gia'];
// 			$chitiet->vt_id = $item['id'];
// 			$chitiet->nk_id = $nhapkho->id;
// 			$chitiet->save();
// 			$vt = DB::table('vattukho')
// 				->where(
// 					'vt_id',$item['id']
// 					)
// 				->where('kho_id',$item['kho']
// 					)
// 				->first();
//                 // dd($vt);
// 			if (!is_null($vt)) {
// 				DB::table('vattukho')
// 				->where(
// 					'vt_id',$item['id']
// 					)
// 				->where('kho_id',$item['kho']
// 					)
// 				->update([
// 					'sl_nhap' => $vt->sl_nhap + $item['qty'],
// 					'sl_ton' => $vt->sl_ton + $item['qty'],
// 					]);
				
// 			} else {
// 				$soluong = new VatTuKho;
// 				$soluong->vt_id = $item['id'];
// 				$soluong->kho_id = $item['kho'];
// 				$soluong->sl_nhap = $item['qty'];
// 				$soluong->sl_ton = $item['qty'];
// 				$soluong->sl_xuat = 0;
// 				$soluong->save();
// 			}
// 		}

// 		// session()->destroy();
//         session()->forget('cart');

//         // return view('chucnang.nhapkho.list');
//         return redirect()->route('nhapkho.index');

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
