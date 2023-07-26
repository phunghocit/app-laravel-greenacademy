@extends('layouts.master')
@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý Kho<br/>
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
                        <a href="{!! URL::route('kho.create') !!}" class="btn btn-info"><i class="icon-plus"></i>&nbspThêm</a>
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
                    <th class="span2">Mã Kho</th>
                    <th class="span3">Tên Kho</th>
                    <th class="span3">Liên hệ</th>
                    <th class="span4">Địa chỉ</th>
                    <th class="span2">SĐT</th>
                    <th class="span3">Quản lý</th>
                    <th class="span4">Ghi chú</th>
                    <th class="span2"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($kho as $item)
            <tr>
                <td>{!! $item->kho_ma !!}</td>
                <td>{!! $item->kho_ten !!}</td>
                <td>{!! $item->kho_lienhe !!}</td>
                <td>{!! $item->kho_diachi !!}</td>
                <td>{!! $item->kho_sdt !!}</td>
                <td>{!! $item->kho_quanly !!}</td>
                <td>{!! $item->kho_ghichu !!}</td>
                <td>
                    <form method="POST" action="{{ route('kho.delete', ['id' => $item->id]) }}">
                        @csrf
                        @method('delete')
                        <a href="{{ route('kho.show', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
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
@stop
