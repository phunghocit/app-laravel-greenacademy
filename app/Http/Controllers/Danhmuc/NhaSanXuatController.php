<?php

namespace App\Http\Controllers\Danhmuc;

use App\Http\Controllers\Controller;
use App\Models\KhuVuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhaSanXuatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nhasanxuat = DB::table('nhasanxuat')->get();
        return view('danhmuc.nhasanxuat.list', compact('nhasanxuat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $khuvuc = KhuVuc::all();
        return view('danhmuc.nhasanxuat.create')->with('khuvuc', $khuvuc);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nhasanxuat = DB::table('nhasanxuat')->insert([
            'nsx_ma' => $request->ma,
            'nsx_ten'=> $request->ten,
            'kv_id'=> $request->kv_id,
            ]);
            $msg = $nhasanxuat ? 'Thêm mới thành công!' : 'Thêm mới thất bại!';
    
            return redirect()->route('nhasanxuat.index')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $khuvuc = KhuVuc::all();
        $nhasanxuat = DB::table('nhasanxuat')->where('id', $id)->first();
        return view('danhmuc.nhasanxuat.update', ['nhasanxuat' => $nhasanxuat, 'khuvuc' => $khuvuc]);
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
        $check = DB::table('nhasanxuat')
        ->where('id', $id)
        ->update([
			'nsx_ten' => $request->ten,
			'kv_id' => $request->kv_id,
        ]);

        $message = $check ? 'Cập nhật thành công' : 'Cập nhật thất bại';

        return redirect()->route('nhasanxuat.index')->with('message', $message);    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = DB::table('nhasanxuat')->where('id',$id)->delete();
        // $productCategory = Kho::find($id);
        // $check = $productCategory->delete();
        $message = $check ? 'Xoá thành công!' : 'Xoá thất bại!';
		return redirect()->route('nhasanxuat.index')->with('message', $message);
    }
}
