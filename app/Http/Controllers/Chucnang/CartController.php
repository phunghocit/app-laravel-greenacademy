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
        $vattu = VatTu::find($request->vattu_id);
        $vattukho = VatTuKho::find($request->vattu_id);
        if($vattu && $vattukho){
            // dd($vattukho);
            $cart = session()->get('cart') ?? [];

            // $imageLink = (is_null($vattu->image_url) || !file_exists("images/" . $product->image_url))
            // ? 'default-product-image.png' : $product->image_url;
            $cart[$request->vattu_id]  = [
                'id' => $vattu->vt_ma,
                'ten' => $vattu->vt_ten,
                'kho' => $vattukho->kho_id,
                'gia' => $vattu->vt_gia,
                'dvt' => $vattu->dvt_id,
                'qty' => ($cart[$request->vattu_id]['qty'] ?? 0) + $request->qty,
                'thanhtien' =>  (($cart[$request->vattu_id]['qty'] ?? 0) + $request->qty) *$vattu->vt_gia,

            ];
            //Add cart into session
            session()->put('cart', $cart);
            return response()->json(['message' => 'Add product success!']);
        }else{
            return response()->json(['message' => 'Add product failed!'], Response::HTTP_NOT_FOUND);
        }
    // dd($cart);
            // return response()->json(['message' => 'Add product success!', 'total_product' => $totalProduct, 'total_price' =>  $totalPrice]);
        // }else{
            // return response()->json(['message' => 'Add product failed!'], Response::HTTP_NOT_FOUND);
        // }
        // return $cart;
    }
}
