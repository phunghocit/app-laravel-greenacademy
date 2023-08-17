<?php

namespace App\Http\Controllers\ChucNang;

use App\Http\Controllers\Controller;
use App\Models\VatTu;
use App\Models\VatTuKho;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CartController extends Controller
{
    public function calculateTotalPrice(array $cart){
        $totalPrice = 0;
        foreach($cart as $item){
            $totalPrice += $item['qty'] * $item['price'];
        }
        return number_format($totalPrice, 2);
    }
    public function addToCart(Request $request){
        // dd($request->vattu_id);
        $vattu = VatTu::find($request->vattu_id);
        $vattukho = VatTuKho::where('vt_id','=',$request->vattu_id)->where('kho_id','=',$request->kho)->first();
        // dd( $vattukho );
        if($vattu && $vattukho){
            // dd($vattukho);
            $cart = session()->get('cart') ?? [];

            $cart[$request->vattu_id]  = [
                'id' => $vattu->id,
                'ten' => $vattu->vt_ten,
                'kho' => $vattukho->kho_id,
                'gia' => $vattu->vt_gia,
                'dvt' => $vattu->dvt_id,
                'qty' => ($cart[$request->vattu_id]['qty'] ?? 1) + $request->qty,
                'thanhtien' =>  (($cart[$request->vattu_id]['qty'] ?? 0) + $request->qty) *$vattu->vt_gia,

            ];
            //Add cart into session
            session()->put('cart', $cart);
            // dd($cart);
            return response()->json(['message' => 'Nhập kho thành công!']);
        }else{
            return response()->json(['message' => 'Lỗi hoặc kho chưa có sản phẩm này!'], Response::HTTP_NOT_FOUND);
        }
    // dd($cart);
            // return response()->json(['message' => 'Add product success!', 'total_product' => $totalProduct, 'total_price' =>  $totalPrice]);
        // }else{
            // return response()->json(['message' => 'Add product failed!'], Response::HTTP_NOT_FOUND);
        // }
        // return $cart;
    }
    public function deleteItemInCart($vt_id){
        $cart = session()->get('cart') ?? [];
        if(array_key_exists($vt_id, $cart)){
            unset($cart[$vt_id]);
            session()->put('cart', $cart);
        }else{
            return response()->json(['message' => 'Remove product failed!'], Response::HTTP_BAD_REQUEST);
        }
        $totalProduct = count($cart);
        $totalPrice = $this->calculateTotalPrice($cart);
        return response()->json(['message' => 'Remove product success!', 'total_product' => $totalProduct, 'total_price' =>  $totalPrice]);
    }
}
