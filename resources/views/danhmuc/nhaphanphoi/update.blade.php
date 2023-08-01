@extends('layouts.master')
@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý Kho<br/>
                        <small>Sửa</small>
                    </h3>
                </header>
            </div>
        </div>
    </div>
</section>
@stop
@section('main-content')
<section>
    <div class="container">
        <form role="form" method="POST" action="{{ route('nhaphanphoi.update',['id' => $nhaphanphoi->id]) }}">
            @csrf
        <div class="row">
            <div id="acct-password-row" class="span7">
                <fieldset>
                    <div class="control-group ">
                        <label class="control-label">Mã Nhà phân phối</label>
                        <div class="controls">
                            <input id="current-pass-control" name="ma" class="span4" type="text" disabled="true" value="{!! $nhaphanphoi->npp_ma !!}">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Tên Nhà phân phối</label>
                        <div class="controls">
                            <input id="current-pass-control" name="ten" class="span4" type="text" value="{!! $nhaphanphoi->npp_ten !!}">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Khu vực</label>
                        <div class="controls">
                            <select name="selKV" id="input" class="form-control">
                                <option value="">-- Chọn --</option>
                                @foreach ($khuvuc as $item)
                                <option @if($nhaphanphoi->kv_id === $item->id) selected @endif value="{{ $item->id }}">{{ $item->kv_ten }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Địa chỉ</label>
                        <div class="controls">
                            <textarea id="" name="diachi" class="span4" rows="4" type="text">{!! $nhaphanphoi->npp_diachi !!}</textarea>
 
                        </div>
                    </div>
                </fieldset>
            </div>
            <div id="acct-verify-row" class="span9">
                <fieldset>
                    <div class="control-group ">
                        <label class="control-label">SĐT</label>
                        <div class="controls">
                            <input id="current-pass-control" name="sdt" class="span4" type="text" value="{!! $nhaphanphoi->npp_sdt !!}">
     
                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Email</label>
                        <div class="controls">
                            <input id="current-pass-control" name="email" class="span4" type="text" value="{!! $nhaphanphoi->npp_email !!}">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Tài khoản</label>
                        <div class="controls">
                            <input id="current-pass-control" name="taikhoan" class="span4" type="text" value="{!! $nhaphanphoi->npp_taikhoan !!}">

                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">NV Đại diện</label>
                        <div class="controls">
                            <input id="current-pass-control" name="nhanviendaidien" class="span4" type="text" value="{!! $nhaphanphoi->npp_nhanviendaidien !!}">

                        </div>
                    </div>
                </fieldset>
            </div>
        </div>
        <footer id="submit-actions" class="form-actions">
            <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu&nbsp&nbsp</button>
            <a href="{!! URL::route('nhaphanphoi.index') !!}" class="btn"><i class="icon-remove"></i>&nbsp&nbspHủy&nbsp&nbsp</a>
        </footer>
        </form>
    </div>
</section>
@endsection
@section('js-custom')
<script>
    ClassicEditor
        .create( document.querySelector( '#ghichu' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection