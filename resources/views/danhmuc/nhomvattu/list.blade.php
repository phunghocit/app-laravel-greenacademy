@extends('layouts.master')
@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý nhóm vật tư<br/>
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
                    <a href="{{ route('nhomvattu.create') }}" class="btn btn-info"><i class="icon-plus"></i>Thêm</a>
                    <a href="#" class="btn btn-info"><i class="icon-print"></i>In</a>
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
                <th class="span3">Mã Nhóm vật tư</th>
                <th>Tên Nhóm vật tư</th>
                <th class="span2"></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($nhomvattu as $item)
        <tr>
                <td>{!! $item->nvt_ma !!}</td>
                <td>{!! $item->nvt_ten !!}</td>
                <td>
                    <form method="POST" action="{{ route('nhomvattu.delete', ['id' => $item->id]) }}">
                        @csrf
                        <a href="{{ route('nhomvattu.show', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
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

@section('js-custom')

@endsection