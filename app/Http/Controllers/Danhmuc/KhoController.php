<?php

namespace App\Http\Controllers\Danhmuc;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKhoRequest;
use App\Models\Kho;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
		$kho = DB::table('kho')->get();
        return view('danhmuc.kho.list', compact('kho'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('Thêm');
        return view('danhmuc.kho.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKhoRequest $request)
    {
        // dd($request->all());

        $kho = DB::table('kho')->insert([
            'kho_ma' => $request->ma,
            'kho_ten'=> $request->ten,
            'kho_lienhe'=> $request->lienhe,
            'kho_diachi' => $request->diachi,
            'kho_sdt' => $request->sdt,
            'kho_quanly' => $request->quanly,
            'kho_ghichu' => $request->ghichu,
            ]);
            $msg = $kho ? 'Thêm kho mới thành công!' : 'Thêm kho mới thất bại!';
    
            return redirect()->route('kho.index')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $kho = DB::select('select * from kho where id = ?', [$id]);
        // return view('kho.detail', ['kho' => $kho]);
        $kho = DB::table('kho')->where('id', $id)->first();
		return view('danhmuc.kho.edit', compact('kho'));
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
        $check = DB::table('kho')
        ->where('id', $id)
        ->update([
			'kho_ten' => $request->ten,
			'kho_lienhe' => $request->lienhe,
			'kho_diachi' => $request->diachi,
			'kho_sdt' => $request->sdt,
			'kho_quanly' => $request->quanly,
			'kho_ghichu' => $request->ghichu
        ]);

        $message = $check ? 'Cập nhật thành công' : 'Cập nhật thất bại';

        return redirect()->route('kho.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        dd($id);
        $check = DB::table('kho')->where('id',$id)->delete();
        // $productCategory = Kho::find($id);
        // $check = $productCategory->delete();
        $message = $check ? 'Xoá thành công!' : 'Xoá thất bại!';
		return redirect()->route('danhmuc.kho.index')->with('message', $message);
    }
}
