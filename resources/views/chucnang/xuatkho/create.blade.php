@extends('layouts.master')
@section('header-content')
<h1>Quản lý nhập kho</h1>
@endsection
@section('main-content')

<div class="row">
    {{-- <div class="span3">
        <div class="box">
            <div class="box-header">
                <p><b>Chức năng</b></p>
            </div>
            <div class="box-content">
                <form class="form-inline">
                    <p><b>Nhập kho</b></p>
                        <a href=""><i class="icon-plus"></i>&nbspNhập kho</a><br><br>
                    <p><b>Bảng kê nhập</b></p>
                        <a href=""><i class="icon-plus"></i>&nbspTheo vật tư</a><br>
                        <a href=""><i class="icon-plus"></i>&nbspTheo chứng từ</a><br>
                </form>
            </div>
        </div>
    </div> --}}
    <div style="margin-left:-1px" class="span13">
        <div class="box">
            <div class="box-header">
                <p><b>Thông tin phiếu xuất</b></p>
            </div>
            <div class="box-content">
                <div class="form-inline">
                    <div class="container">
                        <div class="row">
                            <div id="acct-password-row" class="span13">
                                <form action="{{ route('xuatkho.save') }}" method="POST" accept-charset="utf-8">
                                    @csrf
                                <div id="acct-password-row" class="span8">
                                    <fieldset>
                                        <div class="control-group ">
                                            <label>Tên CT:</label>
                                            <select  class="span7" name="ct_id" id="selCT">
                                                <option>--Chọn--</option>
                                                @foreach($congtrinh as $item)
                                                    <option value="{{ $item->id }}" >{{ $item->ct_ten }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="control-group">
                                            <label>Địa chỉ:</label>
                                            <input type="text" name="diachi" class="span7">
                                        </div>
                                        <div class="control-group">
                                            <label>Lý do:</label>
                                            <input type="text" name="lydo" class="span7">
                                        </div>
                                        <div class="control-group">
                                            <label>Nhân viên:</label>
                                            <?php 
                                                $nv = DB::table('nhanvien')->where('user_id',Auth::user()->id)->first();

                                            ?>
                                            <input type="text" value="{{ $nv->nv_ten}}" class="span7">
                                            <input type="hidden" name="nv" value="{{ $nv->id }}">
                                        </div>
                                    </fieldset>
                                </div>
                                <div id="acct-password-row" class="span4">
                                    <fieldset>
                                        <div class="control-group ">
                                            <label>Mã phiếu:</label>
                                            <input type="text" name="id" value="PXK{!! date('dmYhms') !!}" class="span3">
                                        </div>
                                        <div class="control-group">
                                            <label>Ngày xuất:</label>
                                            <input type="text" name="" value="{!! date('d-m-Y') !!}" class="span3">
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary"><i class="icon-save"></i>Lưu</button>
                                </div>
                                </form>
                                <form action="{{ route('cart.add') }}"   method="POST" accept-charset="utf-8">
                                    @csrf
                                    <div id="acct-password-row" class="span13">
                                        <fieldset>
                                            <div class="control-group">
                                                <label>Mã:</label>
                                                    <select  class="span2" name="vattu_id" id="vattu_id">
                                                        <option>--Chọn--</option>
                                                        @foreach($vattu as $item)
                                                        <option value="{{ $item->id }}" >{{ $item->vt_ma }}</option>
                                                         @endforeach
                                                    </select>                                                
                                                <label>Tên:</label>
                                                    <select name="ten" class=" span4">
                                                        <option>--Chọn--</option>
                                                        @foreach($vattu as $item)
                                                        <option value="{{ $item->id }}" >{{ $item->vt_ten }}</option>
                                                         @endforeach
                                                    </select>
                                                <label>ĐVT:</label>
                                                    <select class="span2" name="dvt" >
                                                        <option value="Mét" >Mét</option>
                                                    </select>
                                                <label>Kho:</label>
                                                    <select class="kho span3" name="kho" id="kho">
                                                    <option>--Chọn--</option>
                                                        @foreach($kho as $item)
                                                        <option value="{{ $item->id}}">{{ $item->kho_ten}}</option>
                                                        @endforeach
                                                    </select>
                                            </div>
                                            <div class="control-group">
                                                <label>Số lượng:</label>
                                                <input type="number" name="qty" class="span2">
                                                {{-- <a href="#" class="add1 btn btn-default" type="submit"><i class="icon-plus"></i>Thêm</a> --}}
                                                <button class="product-add-to-cart" type="submit" ><i class="icon-plus"></i>Thêm</button>
                                                
                                            </div>
                                        </fieldset>

                                    </div>
                                    
                                </form>
                                <div id="acct-password-row" class="span12">
                                    <div>
                                        <form action="" method="POST" accept-charset="utf-8">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <table class="tb table table-bordered table-hover" id="myTable" name="myTable">
                                            <thead style="background:#EFEFEF;">
                                                <tr>
                                                    <th>Mã VT</th>
                                                    <th>Tên VT</th>
                                                    <th>Kho</th>
                                                    <th>ĐVT</th>
                                                    <th>Số lượng</th>
                                                    <th>Đơn giá</th>
                                                    <th>Thành tiền</th>
                                                    <th class="span1"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            
                                                {{-- @foreach($content as $item)
                                                
                                                <tr>
                                                    <td>{{ $item['id'] }}</td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td>{{ $item->options->kho }}</td>
                                                    <td>{{ $item->options->size }}</td>
                                                    <td>{{ $item['qty'] }}</td>
                                                    <td>{{ number_format($item['price'],0,",",".") }} vnđ</td>
                                                    <td>{{ number_format($item['qty']*$item['price'],0,",",".") }}vnđ</td>
                                                    <td class="td-actions">
                                                        <a  class="del btn btn-small btn-danger" name="id" id="{{$item['rowid']}}"><i class="btn-icon-only icon-remove"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach --}}
                                                <?php
                                                $totalPrice = 0;
                                                if(session()->has('cart')){
                                                    // dd(session()->get('cart'));
                                                    foreach (session()->get('cart') as $vt_id => $item) { ?>
                                                    <tr>
                                                        <td>{{ $item['id'] }}</td>
                                                        <td>{{ $item['ten'] }}</td>
                                                        <td>{{ $item['kho'] }}</td>
                                                        <td>{{ $item['dvt'] }}</td>
                                                        <td>{{ $item['qty'] }}</td>
                                                        {{-- <td>{{ $item['gia'] }}</td>
                                                        <td>{{ $item['thanhtien'] }}</td> --}}
                                                        <td>{{ number_format($item['gia'],2) }} vnđ</td>
                                                        <td>{{ number_format($item['thanhtien'],2) }}vnđ</td>
                                                        <td class="td-actions">
                                                            <a  onclick="{{ route('cart.deleteitem', ['id' => $vt_id]) }}" class="del btn btn-small btn-danger" name="id"><i class="btn-icon-only icon-remove"></i></a>
                                                            {{-- <span data-url="{{route('cart.deleteitem', ['id' => $vt_id]) }}" data-id="{{ $vt_id }}" class="icon_close"></span> --}}
                                                        
                                                        </td>
                                                    </tr>
                                                <?php
                                                    }
                                                }?>
                                            </tbody>
                                        </table>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js-custom')
    <script type="text/javascript">

    </script>
@endsection
