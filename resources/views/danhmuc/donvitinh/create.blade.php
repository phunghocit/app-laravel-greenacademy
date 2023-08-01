

@extends('layouts.master')

@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý khu vực<br/>
                        <small>Thêm</small>
                    </h3>
                </header>
            </div>                      
        </div>
    </div>
</section>
@endsection
@section('main-content')
<section>
    <div class="container">
        <form role="form" method="POST" action="{{ route('donvitinh.save') }}">
            @csrf
        <div id="acct-password-row" class="span7">
            <fieldset>
                <div class="control-group ">
                    <label class="control-label">Mã Đơn vị tính</label>
                    <div class="controls">
                        <input id="current-pass-control" name="ma" class="span4" type="text" " autocomplete="false">
                        <div>
                            @error('ma')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="control-group ">
                    <label class="control-label">Tên Đơn vị tính</label>
                    <div class="controls">
                        <input id="new-pass-control" name="ten" class="span4" type="text" autocomplete="false">
                        <div>
                            @error('ten')
                                <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </fieldset>
            <footer id="submit-actions" class="form-actions">
                <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>Lưu</button>
                <a href="{!! URL::route('donvitinh.index') !!}" class="btn"><i class="icon-remove"></i>Huỷ</a>
            </footer>
        </div>
        </form>
    </div>
</section>
@endsection

