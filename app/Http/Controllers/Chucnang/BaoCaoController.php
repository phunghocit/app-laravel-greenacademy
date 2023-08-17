<?php

namespace App\Http\Controllers\ChucNang;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BaoCaoController extends Controller
{
    public function Khohang()
	{
		$data = DB::table('kho')->get();
		return view('chucnang.baocao.khohang',compact('data'));
	}
    public function thekho()
	{

		$data = DB::table('vattu')
			->get();
		return view('chucnang.baocao.thekho',compact('data'));
	}
    public function tongkho()
	{
		$data = DB::table('kho')->get();
		return view('chucnang.baocao.baocaokho',compact('data'));
	}
    public function nhomvattu()
	{
		$data = DB::table('nhomvattu')
			->get();
            
		return view('chucnang.baocao.baocaonhomvt',compact('data'));
	}
    
	public function chatluong()
	{
		$data = DB::table('chatluong')
			->get();
		return view('chucnang.baocao.baocaochatluong',compact('data'));
	}
    public function npp()
	{
		$data = DB::table('nhaphanphoi')
			->get();
		return view('chucnang.baocao.baocaonpp',compact('data'));
	}
}
