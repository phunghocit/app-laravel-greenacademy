<?php

namespace App\Http\Controllers\Danhmuc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ChatLuongController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $chatluong = DB::table('chatluong')->get();
        return view('danhmuc.chatluong.list', compact('chatluong'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('danhmuc.chatluong.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = DB::table('chatluong')->insert([
            'cl_ma' => $request->ma,
            'cl_ten'=> $request->ten,
 
            ]);
            $msg = $data ? 'Thêm khu vực mới thành công!' : 'Thêm khu vực mới thất bại!';
    
            return redirect()->route('chatluong.index')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('chatluong')->where('id', $id)->first();
		return view('danhmuc.chatluong.update', ['data' => $data]);
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
        $check = DB::table('chatluong')
        ->where('id', $id)
        ->update([
            'cl_ten'=> $request->ten,
        ]);

        $message = $check ? 'Cập nhật thành công' : 'Cập nhật thất bại';

        return redirect()->route('chatluong.index')->with('message', $message);
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $check = DB::table('chatluong')->where('id',$id)->delete();
        $message = $check ? 'Xoá thành công!' : 'Xoá thất bại!';
		return redirect()->route('danhmuc.chatluong.index')->with('message', $message);
    }
}
