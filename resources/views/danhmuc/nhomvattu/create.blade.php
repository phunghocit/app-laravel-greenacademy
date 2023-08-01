@extends('layouts.master')
@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý nhà sản xuất<br/>
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
        <form role="form" method="POST" action="{{ route('nhomvattu.save') }}">
            @csrf
        <div id="acct-password-row" class="span7">
            <fieldset>
                <div class="control-group ">
                    <label class="control-label">Mã Nhóm vật tư</label>
                    <div class="controls">
                        <input id="current-pass-control" name="ma" class="span4" type="text"  autocomplete="false">
                        @error('ma')
                        <small style="color: red">{{ $message }}</small>
                         @enderror
                    </div>
                </div>
                <div class="control-group ">
                    <label class="control-label">Tên Nhóm vật tư</label>
                    <div class="controls">
                        <input id="new-pass-control" name="ten" class="span4" type="text"  autocomplete="false">
                        @error('ten')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                    </div>
                </div>
            </fieldset>
            <footer id="submit-actions" class="form-actions">
                <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu&nbsp&nbsp</button>
                    <button type="submit" class="btn btn-default" class="btn" name="action" value="CANCEL"><i class="icon-remove"></i>&nbsp&nbspHủy&nbsp&nbsp</button>
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