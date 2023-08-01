<?php

namespace App\Http\Controllers\Danhmuc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PhongBanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $phongban = DB::table('phongban')->get();
        return view('danhmuc.phongban.list', compact('phongban'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('danhmuc.phongban.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = DB::table('phongban')->insert([
            'pb_ma' => $request->ma,
            'pb_ten'=> $request->ten,
 
            ]);
            $msg = $data ? 'Thêm mới thành công!' : 'Thêm mới thất bại!';
    
            return redirect()->route('phongban.index')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('phongban')->where('id', $id)->first();
		return view('danhmuc.phongban.update', ['data' => $data]);
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
        $check = DB::table('phongban')
        ->where('id', $id)
        ->update([
            'pb_ten'=> $request->ten,
        ]);

        $message = $check ? 'Cập nhật thành công' : 'Cập nhật thất bại';

        return redirect()->route('phongban.index')->with('message', $message);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = DB::table('phongban')->where('id',$id)->delete();
        // $productCategory = Kho::find($id);
        // $check = $productCategory->delete();
        $message = $check ? 'Xoá thành công!' : 'Xoá thất bại!';
		return redirect()->route('danhmuc.phongban.index')->with('message', $message);
    }
}
