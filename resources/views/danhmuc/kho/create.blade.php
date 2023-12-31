@extends('layouts.master')
@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý Kho<br/>
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
        <form role="form" method="POST" action="{{ route('kho.save') }}">
            @csrf
            <!-- <input type="hidden" name="_token" value="{!! csrf_token() !!}" /> -->
            <div class="row">
                <div id="acct-password-row" class="span7">
                    <fieldset>
                        <div class="control-group ">
                            <label class="control-label">Mã Kho</label>
                            <div class="controls">
                                <input id="ma" name="ma" class="span4" type="text" value="{!! old('txtMa') !!}">
                                <div>
                                @error('ma')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Tên Kho</label>
                            <div class="controls">
                                <input id="ten" name="ten" class="span4" type="text" value="{!! old('txtTen') !!}">
                                <div>
                                @error('ten')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Địa chỉ</label>
                            <div class="controls">
                                <textarea id="diachi" name="diachi" class="span4" type="text" value="{!! old('txtDiachi') !!}"></textarea>
                                <div>
                                @error('diachi')
                                    <small style="color: red">{{ $message }}</small>
                                @enderror
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Số điện thoại</label>
                            <div class="controls">
                                <input id="sdt" name="sdt" class="span4" type="text" value="{!! old('txtSDT') !!}">
                                <div>
                                    @error('sdt')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    </div>
                <div id="acct-password-row" class="span7">
                    <fieldset>
                        <div class="control-group ">
                            <label class="control-label">Liên hệ</label>
                            <div class="controls">
                                <input id="lienhe" name="lienhe" class="span4" type="text" value="{!! old('txtLienhe') !!}">
                                <div>
                                    @error('lienhe')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Quản lý</label>
                            <div class="controls">
                                <input id="quanly" name="quanly" class="span4" type="text" value="{!! old('txtQuanly') !!}">
                                <div>
                                    @error('quanly')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Ghi chú</label>
                            <div class="controls">
                                <textarea id="ghichu" name="ghichu" class="span4" type="text" value="{!! old('txtGhichu') !!}"></textarea>
                                <div>
                                    @error('ghichu')
                                        <small style="color: red">{{ $message }}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </fieldset>
                </div>
                </div>
                <footer id="submit-actions" class="form-actions">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu&nbsp&nbsp</button>
                    <a href="{!! URL::route('kho.index') !!}" class="btn"><i class="icon-remove"></i>&nbsp&nbspHủy&nbsp&nbsp</a>
                </footer>
            </div>
            </form>
        </div>
    </section>
@stop

@section('js-custom')
<script>

</script>
@endsection