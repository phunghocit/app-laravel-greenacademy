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
        <form role="form" method="POST" action="{{ route('nhasanxuat.save') }}">
            @csrf
        <div id="acct-password-row" class="span7">
            <fieldset>
                <div class="control-group ">
                    <label class="control-label">Mã Nhà sản xuất</label>
                    <div class="controls">
                        <input id="current-pass-control" name="ma" class="span4" type="text" value="{!! old('txtMa') !!}" autocomplete="false">
                    </div>
                </div>
                <div class="control-group ">
                    <label class="control-label">Tên Nhà sản xuất</label>
                    <div class="controls">
                        <input id="new-pass-control" name="ten" class="span4" type="text" value="{!! old('txtTen') !!}" autocomplete="false">
                    </div>
                </div>
                <div class="form-group">
                    <label for="khuvuc">Khu vực</label>
                    <select name="kv_id" class="form-select form-control" id="product_category_id">
                        <option value="">---Vui lòng chọn---</option>
                        @foreach ($khuvuc as $item)
                            <option value="{{ $item->id }}">{{ $item->kv_ten }}</option>
                        @endforeach
                    </select>
                </div>
            </fieldset>
            <footer id="submit-actions" class="form-actions">
                <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu&nbsp&nbsp</button>
                <a href="{!! URL::route('nhasanxuat.index') !!}" class="btn"><i class="icon-remove"></i>&nbsp&nbspHủy&nbsp&nbsp</a>
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