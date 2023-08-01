@extends('layouts.master')
@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý chất lượng<br/>
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
@endsection

@section('main-content')
<div class="span16" >
        <div class="box-header">
            <div class="row">
                <div class="span11">
                    <fieldset>
                        <a href="{{ route('chatluong.create') }}" class="btn btn-info"><i class="icon-plus"></i>&nbspThêm</a>
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
                    <th class="span3">Mã chất lượng</th>
                    <th>Tên chất lượng</th>
                    <th class="span2"></th>
                </tr>
            </thead>
            <tbody>
            @foreach ($chatluong as $item)
            <tr>
                    <td>{!! $item->cl_ma !!}</td>
                    <td>{!! $item->cl_ten !!}</td>
                    <td class="td-actions">
                        <form method="post" action="">
                            @csrf
                            <a href="{{ route('chatluong.show', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach 
            </tbody>
        </table>
    </div>
@endsection