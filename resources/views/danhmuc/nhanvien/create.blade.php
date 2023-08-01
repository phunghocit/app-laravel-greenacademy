@extends('layouts.master')
@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý nhân viên<br/>
                        <small>Thêm</small>
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
        <form role="form" method="POST" action="{{ route('nhanvien.save') }}">
            @csrf
            <div class="row">
                <div id="acct-password-row" class="span5">
                    <fieldset>
                        <div class="control-group ">
                            <label class="control-label">Mã Nhân viên</label>
                            <div class="controls">
                                <input id="current-pass-control" name="ma" class="span4" type="text" value="{!! old('txtMa') !!}" autocomplete="false">
         
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Tên Nhân viên</label>
                            <div class="controls">
                                <input id="new-pass-control" name="ten" class="span4" type="text" value="{!! old('txtTen') !!}" autocomplete="false">

                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <label>Giới tính</label>
                                <div class="input-group">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gioitinh" id="inputRdGioitinh" value="Nam" checked="checked">
                                                Nam
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="gioitinh" id="inputRdGioitinh" value="Nữ" >
                                                Nữ
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Địa chỉ</label>
                            <div class="controls">
                                <textarea id="" name="diachi" class="span4" rows="3" type="text">{!! old('txtDiachi') !!}</textarea>
    
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Ngày sinh</label>
                            <div class="controls">
                                <input id="" name="ngaysinh" class="span4" type="date" value="">

                            </div>
                        </div>
                    </fieldset>
                </div>
                <div id="acct-verify-row" class="span5">
                    <fieldset>
                        <div class="control-group ">
                            <label class="control-label">CMND</label>
                            <div class="controls">
                                <input id="current-pass-control" name="cmnd" class="span4" type="text" value="{!! old('txtCMND') !!}">

                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">SĐT</label>
                            <div class="controls">
                                <input id="current-pass-control" name="sdt" class="span4" type="text" value="{!! old('txtSDT') !!}">

                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Email</label>
                            <div class="controls">
                                <input id="current-pass-control" name="email" class="span4" type="text" value="{!! old('txtEmail') !!}">

                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Ngày vào làm</label>
                            <div class="controls">
                                <input id="" name="nvl" class="span4" type="date" value="">

                            </div>
                        </div>
                        
                    </fieldset>
                    </div>
                    <div id="acct-verify-row" class="span4">
                        <fieldset>
                            <div class="form-group">
                            <label class="col-md-4 control-label">Tài khoản</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                            <div class="form-group">
                            <label class="col-md-4 control-label">Mật khẩu</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Xác nhận lại mật khẩu</label>
                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">
                            </div>
                        </div>
                            <div class="control-group ">
                                    <label class="control-label">Quyền</label>
                                    <div class="controls">
                                        <select class="span4" name="quyen"  id="input" class="form-control" >
                                            <option>--Chọn--</option>
                                            @foreach ($quyen as $item)
                                            <option value="{{ $item->id }}">{{ $item->nd_ten }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                        </fieldset>
                    </div>
                </div>
            </div>
            <footer id="submit-actions" class="form-actions">
                <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>Lưu</button>
                    <a href="{!! URL::route('nhanvien.index') !!}" class="btn"><i class="icon-remove"></i>Huỷ</a>
            </footer>
        </form>
    </div>
</section>
@endsection
@section('js-custom')
<script>

</script>
@endsection