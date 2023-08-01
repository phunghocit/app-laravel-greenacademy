<?php

namespace App\Http\Controllers\Danhmuc;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CongTrinhController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $congtrinh = DB::table('congtrinh')->get();
        return view('danhmuc.congtrinh.list', compact('congtrinh'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('danhmuc.congtrinh.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $data = DB::table('congtrinh')->insert([
            'ct_ma' => $request->ma,
            'ct_ten'=> $request->ten,
 
            ]);
            $msg = $data ? 'Thêm mới thành công!' : 'Thêm mới thất bại!';
    
            return redirect()->route('congtrinh.index')->with('message', $msg);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('congtrinh')->where('id', $id)->first();
		return view('danhmuc.congtrinh.update', ['data' => $data]);
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
                // dd($id, $request->all());
                $check = DB::table('congtrinh')
                ->where('id', $id)
                ->update([
                    'ct_ten' => $request->ten,
                ]);
        
                $message = $check ? 'Cập nhật thành công' : 'Cập nhật thất bại';
        
                return redirect()->route('congtrinh.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // dd($id);
        $check = DB::table('congtrinh')->where('id',$id)->delete();
        $message = $check ? 'Xoá thành công!' : 'Xoá thất bại!';
		return redirect()->route('congtrinh.index')->with('message', $message);        
    }
}
