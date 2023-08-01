

@extends('layouts.master')

@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý phòng ban<br/>
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
        <form role="form" method="POST" action="{{ route('phongban.save') }}">
            @csrf
            <div id="acct-password-row" class="span7">
                <fieldset>
                    <div class="control-group ">
                        <label class="control-label">Mã phòng ban</label>
                        <div class="controls">
                            <input id="current-pass-control" name="ma" class="span4" type="text"  autocomplete="false">
                            @error('ma')
                            <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Tên phòng ban</label>
                        <div class="controls">
                            <input id="new-pass-control" name="ten" class="span4" type="text"  autocomplete="false">
                            @error('ten')
                            <small style="color: red">{{ $message }}</small>
                        @enderror
                        </div>
                    </div>
                </fieldset>
                <footer id="submit-actions" class="form-actions">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>Lưu</button>
                        <a href="{!! URL::route('phongban.index') !!}" class="btn"><i class="icon-remove"></i>Huỷ</a>
                </footer>
            </div>
            </form>
        </div>
    </section>
@endsection

