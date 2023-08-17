@extends('layouts.master')
@section('header-content')
<h1>Quản lý kho hàng</h1>
@endsection
@section('main-content')
<div class="span3">
    <div class="box">
        <div class="box-header">
            <p><b>Thống kê</b></p>
        </div>
        <div class="box-content">
            <form class="form-inline">
            <a href="{{ URL::route('tongkho') }}" class="btn btn-default btn-lg btn-block" > Tồn kho tổng hợp</a>
            <a href="{{ URL::route('khonhomvattu') }}" class="btn btn-default btn-lg btn-block" > Nhóm vật tư</a>
            <a href="{{ URL::route('khochatluong') }}" class="btn btn-default btn-lg btn-block" > Chất lượng vật tư</a>
            <a href="{{ URL::route('khonhaphanphoi') }}" class="btn btn-default btn-lg btn-block" > Nhà phân phối</a>
            </form>
        </div>
    </div>
</div>
@yield('child-content-khohang')
@endsection