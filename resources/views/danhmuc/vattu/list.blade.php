@extends('layouts.master')

@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý Vật tư<br/>
                        <small></small>
                    </h3>
                </header>
            </div>                      
        </div>
    </div>
</section>
@endsection
@section('main-content')
<div class="span16" >
        <div class="box-header">
            <div class="row">
                <div class="span11">
                    <fieldset>
                        <a href="{{ route('vattu.create') }}" class="btn btn-info"><i class="icon-plus"></i>&nbspThêm</a>
                        <a href="" class="btn btn-info" target="_blank"><i class="icon-print" ></i>&nbsp&nbspIn&nbsp&nbsp&nbsp&nbsp&nbsp</a>
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
                    <th class="header headerSortDown" class="span3">Mã VT</th>
                    <th class="td-actions header" class="span4">Tên VT</th>
                    <th class="td-actions header">Đơn vị tính</th>
                    <th class="td-actions header" class="span3">Nhóm vật tư</th>
                    <th class="td-actions header" class="span3">Xuất xứ</th>
                    <th class="td-actions header" class="span3">Nhà phân phối</th>
                    <th class="td-actions header">Chất lượng</th>
                    <th class="td-actions header">Giá</th>
                    <th class="span2"></th>
                </tr>
            </thead>
            <tbody>
                 
            </tbody>
        </table>
    </div>
@endsection

