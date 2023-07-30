@extends('layouts.master')
@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý Nhà Phân Phối<br/>
                        <small></small>
                    </h3>
                </header>
            </div>                      
        </div>
    </div>
</section>

@stop
@section('main-content')
<div class="span16" >
    <div class="box-header">
        <div class="row">
            <div class="span11">
                <fieldset>
                    <a href="{{ route('nhaphanphoi.create') }}" class="btn btn-info"><i class="icon-plus"></i>Thêm</a>
                    <a href="#" class="btn btn-info"><i class="icon-print"></i>&nbsp&nbspIn&nbsp&nbsp&nbsp&nbsp&nbsp</a>
                </fieldset>
            </div>
            <div class="" >
                <fieldset>
                    <input id="current-pass-control" name="" class="span4" type="text" value="" autocomplete="false">
                    <a href="#" class="btn btn-info" style="margin-top: -8px"><i class="icon-search"></i>Tìm kiếm</a>
                </fieldset>
            </div>
        </div>
        
    </div>
    <table class="table table-bordered table-hover tablesorter" id="sample-table">
        <thead style="background:#EFEFEF;">
            <tr>
                <th class="span2">Mã NPP</th>
                <th class="span7">Tên NPP</th>
                <th class="span6">Khu vực</th>
                <th class="span5">Địa chỉ</th>
                <th class="span2">SĐT</th>
                <th class="span3">Email</th>
                <th class="span2">Tài khoản</th>
                <th class="span4">NV Đại diện</th>
                <th class="span3"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($nhaphanphoi as $item)
        <tr>
                <td>{!! $item->npp_ma !!}</td>
                <td>{!! $item->npp_ten !!}</td>
                <td>
                    <?php $khuvuc = DB::table('khuvuc')->where('id',$item->kv_id)->first(); ?>
                @if (!empty($khuvuc->kv_ten))
                    {!! $khuvuc->kv_ten !!}
                @else
                    {!! NULL !!}
                @endif
                </td>
                <td>{!! $item->npp_diachi !!}</td>
                <td>{!! $item->npp_sdt !!}</td>
                <td>{!! $item->npp_email !!}</td>
                <td>{!! $item->npp_taikhoan !!}</td>
                <td>{!! $item->npp_nhanviendaidien !!}</td>
                <td>
                    <form method="POST" action="{{ route('nhaphanphoi.delete', ['id' => $item->id]) }}">
                        @csrf
                        <a href="{{ route('nhaphanphoi.show', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
                        <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <!-- {{-- @if($product->trashed()) --}}
    
                    {{-- @endif --}} -->
                </td>
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>
@endsection
