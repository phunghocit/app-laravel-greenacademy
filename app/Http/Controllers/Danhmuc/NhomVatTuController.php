<?php

namespace App\Http\Controllers\Danhmuc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NhomVatTuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nhomvattu = DB::table('nhomvattu')->get();
        return view('danhmuc.nhomvattu.list', compact('nhomvattu'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('danhmuc.nhomvattu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nhomvattu = DB::table('nhomvattu')->insert([
            'nvt_ma' => $request->ma,
            'nvt_ten'=> $request->ten,
            ]);
            $msg = $nhomvattu ? 'Thêm mới thành công!' : 'Thêm mới thất bại!';
    
            return redirect()->route('nhomvattu.index')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('nhomvattu')->where('id', $id)->first();
		return view('danhmuc.nhomvattu.update', ['data' => $data]);
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
        $check = DB::table('nhomvattu')
        ->where('id', $id)
        ->update([
            'nvt_ten'=> $request->ten,
        ]);

        $message = $check ? 'Cập nhật thành công' : 'Cập nhật thất bại';

        return redirect()->route('nhomvattu.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = DB::table('nhomvattu')->where('id',$id)->delete();
        // $productCategory = Kho::find($id);
        // $check = $productCategory->delete();
        $message = $check ? 'Xoá thành công!' : 'Xoá thất bại!';
		return redirect()->route('nhomvattu.index')->with('message', $message);
    }
}
