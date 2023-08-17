<?php

namespace App\Http\Controllers\ChucNang;

use App\Http\Controllers\Controller;
use App\Models\ChiTietXuatKho;
use App\Models\CongTrinh;
use App\Models\Kho;
use App\Models\VatTu;
use App\Models\XuatKho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class XuatKhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('xuatkho')->get();
        return view('chucnang.xuatkho.list', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // $donvitinh = DonViTinh::all();
        // $nhomvattu = NhomVatTu::all();
        // $nhasanxuat = NhaSanXuat::all();
        // $nhaphanphoi = NhaPhanPhoi::all();
        // $chatluong = ChatLuong::all();
        $kho = Kho::all();
        $congtrinh = CongTrinh::all();
        $vattu = VatTu::all();
 
        $nv = DB::table('nhanvien')->where('user_id',Auth::user()->id)->first();
        $cart = session()->get('cart') ?? [];
        return view('chucnang.xuatkho.create',compact('nv','cart','congtrinh','vattu','kho'));
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
        $cart = session()->get('cart') ?? [];
        // dd(session()->get('cart'));
        // $totalProduct = count($cart);
        $totalPrice = $this->calculateTotalPrice($cart);

// dd($totalPrice);
        // $vattu->vt_ma = $request->ma;
		// $content = $cart->content();
		// $total = $cart->total();
		$xuatkho = new XuatKho();
		$xuatkho->xk_ma = $request->id;
		$xuatkho->xk_ngaylap = date('Y-m-d');
		$xuatkho->xk_lydo = $request->lydo;
		$xuatkho->xk_diachi = $request->diachi;
		$xuatkho->xk_tongtien = $totalPrice;
		$xuatkho->ct_id =  $request->ct_id ;
		$xuatkho->nv_id = $request->nv;
		$xuatkho->save();
        // dd($cart);
		foreach ($cart as  $item) {
			$chitiet = new ChiTietXuatKho();
			$chitiet->ctxk_soluong = $item['qty'];
			$chitiet->ctxk_thanhtien = $item['qty']*$item['gia'];
			$chitiet->vt_id = $item['id'];
			$chitiet->xk_id = $xuatkho->id;
			$chitiet->save();
			$vt = DB::table('vattukho')
				->where(
					'vt_id',$item['id']
					)
				->where('kho_id',$item['kho']
					)
				->first();
			if (!is_null($vt)) {
				DB::table('vattukho')
				->where(
					'vt_id',$item['id']
					)
				->where('kho_id',$item['kho']
					)
				->update([
					'sl_xuat' => $vt->sl_xuat + $item['qty'],
					'sl_ton' => $vt->sl_ton - $item['qty'],
					]);
				
			} 
		}

		// session()->destroy();
        session()->forget('cart');

        // return view('chucnang.nhapkho.list');
        return redirect()->route('xuatkho.index');
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
