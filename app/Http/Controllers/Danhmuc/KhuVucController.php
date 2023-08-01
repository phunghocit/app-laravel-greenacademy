<?php

namespace App\Http\Controllers\Danhmuc;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKhuVucRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhuVucController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $khuvuc = DB::table('khuvuc')->get();
        return view('danhmuc.khuvuc.list', compact('khuvuc'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('danhmuc.khuvuc.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKhuVucRequest $request)
    {
        $data = DB::table('khuvuc')->insert([
            'kv_ma' => $request->ma,
            'kv_ten'=> $request->ten,
 
            ]);
            $msg = $data ? 'Thêm mới thành công!' : 'Thêm mới thất bại!';
    
            return redirect()->route('khuvuc.index')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('khuvuc')->where('id', $id)->first();
		return view('danhmuc.khuvuc.update', ['data' => $data]);
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
    public function update(StoreKhuVucRequest $request, string $id)
    {
        $check = DB::table('khuvuc')
        ->where('id', $id)
        ->update([
            'kv_ten'=> $request->ten,
        ]);

        $message = $check ? 'Cập nhật thành công' : 'Cập nhật thất bại';

        return redirect()->route('khuvuc.index')->with('message', $message);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = DB::table('khuvuc')->where('id',$id)->delete();
        // $productCategory = Kho::find($id);
        // $check = $productCategory->delete();
        $message = $check ? 'Xoá thành công!' : 'Xoá thất bại!';
		return redirect()->route('danhmuc.khuvuc.index')->with('message', $message);
    }
}
