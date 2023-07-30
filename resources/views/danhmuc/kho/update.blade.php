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
        <form role="form" method="POST" action="{{ route('kho.update',['id' => $kho->id]) }}">
            @csrf
            <div class="row">
                <div id="acct-password-row" class="span7">
                    <fieldset>
                        <div class="control-group ">
                            <label class="control-label">Mã Kho</label>
                            <div class="controls">
                                <input id="current-pass-control" name="ma" class="span4" disabled='true' type="text" value="{{ $kho->kho_ma }}">
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
                                <input id="new-pass-control" name="ten" class="span4" type="text" value="{{ $kho->kho_ten }}">
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
                                <textarea id="" name="diachi" class="span4" type="text" >{{ $kho->kho_diachi }}</textarea>
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
                                <input id="new-pass-control" name="sdt" class="span4" type="text" value="{{ $kho->kho_sdt }}">
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
                                <input id="new-pass-control" name="lienhe" class="span4" type="text" value="{{ $kho->kho_lienhe }}">
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
                                <input id="new-pass-control" name="quanly" class="span4" type="text" value="{{ $kho->kho_quanly }}">
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
                                <textarea id="ghichu" name="ghichu" class="span4" type="text" >{{ $kho->kho_ghichu }}</textarea>
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
    ClassicEditor
        .create( document.querySelector( '#ghichu' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endsection