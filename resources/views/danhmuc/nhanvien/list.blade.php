@extends('layouts.master')
@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý nhân viên<br/>
                        <small></small>
                    </h3>
                </header>
            </div>    
        </div>
        <div class="row">
            @if (session('message'))
            <div class="alert-success">
                {{ session('message') }}
            </div>
            @endif
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
                    <a href="{{ route('nhanvien.create') }}" class="btn btn-info"><i class="icon-plus"></i>Thêm</a>
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
    <table class="table table-bordered table-hover tablesorter" id="#data-table">
        <thead style="background:#EFEFEF;">
            <tr>
                <th class="span">Mã NV</th>
                <th class="span">Tên NV</th>
                <th class="span">Giới tính</th>
                <th class="span">Ngày sinh</th>
                <th class="span">Địa chỉ</th>
                <th class="span">CMND</th>
                <th class="span">SĐT</th>
                <th class="span">Email</th>
                <th class="span">Ngày vào làm</th>
                <th class="span"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($nhanvien as $item)
        <tr>
                <td>{!! $item->nv_ma !!}</td>
                <td>{!! $item->nv_ten !!}</td>
                <td>{!! $item->nv_gioitinh !!}</td>
                <td>{!! $item->nv_ngaysinh !!}</td>
                <td>{!! $item->nv_diachi !!}</td>
                <td>{!! $item->nv_cmnd !!}</td>
                <td>{!! $item->nv_sdt !!}</td>
                <td>{!! $item->nv_email !!}</td>
                <td>{!! $item->nv_ngayvaolam !!}</td>
                
                <td class="td-actions">
                    <form method="post" action="">
                        @csrf
                        <a href="{{ route('nhanvien.show', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
                        <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach    
        </tbody>
    </table>
</div>
@stop
@section('js-custom')
<script>
    $(function () {
      $('#data-table').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": true,
        "responsive": true,
      });
    });
  </script>
@endsection