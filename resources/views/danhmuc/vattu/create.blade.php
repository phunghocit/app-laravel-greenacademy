@extends('layouts.master')
@section('header-content')
<section class="nav nav-page">
    <div class="container">
        <div class="row">
            <div class="span7">
                <header class="page-header">
                    <h3>Quản lý Vật tư<br/>
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
            <form role="form" method="POST" action="{{ route('vattu.save') }}">
                @csrf
            <div class="row">
            <div class="span11">
                    <div class="page-header">
                      <h3>Thông tin vật tư</h3>
                    </div>
                <div id="acct-password-row" class="span5">
                    <fieldset>
                        <div class="control-group ">
                            <label class="control-label">Mã Vật tư</label>
                            <div class="controls">
                                <input id="current-pass-control" name="ma" class="span4" type="text" value="{!! old('txtMa') !!}" autocomplete="false">

                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Tên Vật tư</label>
                            <div class="controls">
                                <input id="new-pass-control" name="ten" class="span4" type="text" value="{!! old('txtTen') !!}" autocomplete="false">

                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Đơn vị tính</label>
                            <div class="controls">
                                <select name="dvt" id="input" class="form-control" >
                                    <option value="">-- Chọn --</option>
                                    @foreach ($donvitinh as $item)
                                    <option value="{{ $item->id }}">{{ $item->dvt_ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Nhóm vật tư</label>
                            <div class="controls">
                                <select name="nvt" id="input" class="form-control">
                                    <option value="">-- Chọn --</option>
                                    @foreach ($nhomvattu as $item)
                                    <option value="{{ $item->id }}">{{ $item->nvt_ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </fieldset>
                </div>
                <div id="acct-verify-row" class="span5">
                    <fieldset>
                        <div class="control-group ">
                            <label class="control-label">Xuất xứ</label>
                            <div class="controls">
                                <select name="nsx" id="input" class="form-control">
                                    <option value="">-- Chọn --</option>
                                    @foreach ($nhasanxuat as $item)
                                    <option value="{{ $item->id }}">{{ $item->nsx_ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Nhà phân phối</label>
                            <div class="controls">
                                <select name="npp" id="input" class="form-control">
                                    <option value="">-- Chọn --</option>
                                    @foreach ($nhaphanphoi as $item)
                                    <option value="{{ $item->id }}">{{ $item->npp_ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="control-group ">
                            <label class="control-label">Chất lượng</label>
                            <div class="controls">
                                <select name="cl" id="input" class="form-control">
                                    <option value="">-- Chọn --</option>
                                    @foreach ($chatluong as $item)
                                    <option value="{{ $item->id }}">{{ $item->cl_ten }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">Giá</label>
                            <div class="controls">
                                <input id="l" name="gia" class="span4" type="number" value="{!! old('txtGia') !!}" autocomplete="false">
                            </div>
                        </div>
                    </fieldset>
                </div>
            </div> 
            <div id="acct-verify-row" class="span5">
                <div class="page-header">
                  <h3>Thông tin  kho</h3>
                </div>
                <fieldset>
                    <div class="control-group ">
                        <label class="control-label">Kho</label>
                        <div class="controls">
                            <select name="kho" id="input" class="form-control">
                                <option value="">-- Chọn --</option>
                                @foreach ($kho as $item)
                                <option value="{{ $item->id }}">{{ $item->kho_ten }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="control-group ">
                        <label class="control-label">Số lượng</label>
                        <div class="controls">
                            <input id="l" name="sl" class="span4" type="number" value="{!! old('txtSLuong') !!}" autocomplete="false">

                        </div>
                    </div>
                </fieldset>
                </div>
            </div>

            <footer id="submit-actions" class="form-actions">
                <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu&nbsp&nbsp</button>
                <button type="submit" class="btn btn-default" class="btn" name="action" value="CANCEL"><i class="icon-remove"></i>&nbsp&nbspHủy&nbsp&nbsp</button>
            </footer>
            </form>
               
        </div>
    </section>
@endsection
