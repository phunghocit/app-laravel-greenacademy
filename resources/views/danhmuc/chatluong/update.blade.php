@extends('layouts.master')
@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý chất lượng<br/>
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
        <form role="form" method="POST" action="{{ route('chatluong.update',['id' => $data->id]) }}">
            @csrf
            <div id="acct-password-row" class="span7">
                <fieldset>
                    <div class="control-group ">
                        <label class="control-label">Mã chất lượng</label>
                        <div class="controls">
                            <input id="current-pass-control" name="ma" class="span4" type="text" disabled="true" value="{!! $data->cl_ma !!}">
                            {{-- @error('ma')
                            <small style="color: red">{{ $message }}</small>
                            @enderror --}}
                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Tên chất lượng</label>
                        <div class="controls">
                            <input id="new-pass-control" name="ten" class="span4" type="text" value="{{ $data->cl_ten }}">
                            @error('ten')
                            <small style="color: red">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </fieldset>
                <footer id="submit-actions" class="form-actions">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>Lưu</button>
                    <a href="{!! URL::route('chatluong.index') !!}" class="btn"><i class="icon-remove"></i>Huỷ</a>
                </footer>
            </div>
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