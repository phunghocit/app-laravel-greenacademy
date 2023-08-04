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
                <p><b>Nhập kho thông thường</b></p>
            </div>
            <div class="box-content">
                <div class="form-inline">
                    <div class="container">
                        <div class="row">
                            <div id="acct-password-row" class="span13">
                            <form action="" method="POST" accept-charset="utf-8">
                                @csrf
                                <div id="acct-password-row" class="span8">
                                    <fieldset>
                                        <div class="control-group ">
                                            <label>Tên NPP:</label>
                                            <select  class="span7" name="npp_id" id="state_id">
                                                <option>--Chọn--</option>
                                                @foreach($nhaphanphoi as $item)
                                                    <option value="{{ $item->id }}" >{{ $item->npp_ten }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="control-group">
                                            <label>Lý do:</label>
                                            <input type="text" name="txtLyDo" value="{{ old('txtLyDo') }}" class="span7">
                                        </div>
                                        <div class="control-group">
                                            <label>Nhân viên:</label>
                                            <input type="text" value="{{ $nv->nv_ten}}" class="span7">
                                            <input type="hidden" name="nv" value="{{ $nv->id }}">
                                        </div>
                                    </fieldset>
                                </div>
                                <div id="acct-password-row" class="span4">
                                    <fieldset>
                                        <div class="control-group ">
                                            <label>Mã phiếu:</label>
                                            <input type="text" name="id" value="PNK{!! date('dmYhms') !!}" class="span3">
                                        </div>
                                        <div class="control-group">
                                            <label>Ngày lập:&nbsp</label>
                                            <input type="text" name="date" value="{!! date('d-m-Y') !!}" class="span3">
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary"><i class="icon-save"></i>Lưu</button>
                                        </div>
                                    </fieldset>
                                </div>
                                <div id="acct-password-row" class="span12">
                                    <fieldset>
                                        <div>
                                            <u><p><b>Danh sách vật tư</b></p></u>
                                        </div>
                                    </fieldset>                    
                                </div>
                                </form>
                                <form action="{{ route('cart.add') }}" method="POST" accept-charset="utf-8">
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
                                                        <option value="Mét" ></option>
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
                                                <button  type="submit"><i class="icon-plus"></i>Thêm</button>
                                                
                                            </div>
                                        </fieldset>

                                    </div>
                                    
                                </form>
                                <div id="acct-password-row" class="span12">
                                    <div>
                                    <form action="" method="POST" accept-charset="utf-8">
                                        @csrf
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
                                                <?php
                                                $totalPrice = 0;
                                                if(session()->has('cart')){
                                                    foreach (session()->get('cart') as $item) { ?>
                                                    <tr>
                                                        <td>{{ $item['id'] }}</td>
                                                        <td>{{ $item['ten'] }}</td>
                                                        <td>{{ $item['kho'] }}</td>
                                                        <td>{{ $item['dvt'] }}</td>
                                                        <td>{{ $item['qty'] }}</td>
                                                        {{-- <td>{{ $item['gia'] }}</td>
                                                        <td>{{ $item['thanhtien'] }}</td> --}}
                                                        <td>{{ number_format($item['gia'],0,",",".") }} vnđ</td>
                                                        <td>{{ number_format($item['thanhtien'],0,",",".") }}vnđ</td>
                                                        <td class="td-actions">
                                                            <a  class="del btn btn-small btn-danger" name="id"><i class="btn-icon-only icon-remove"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php
                                                    }
                                                }?>
                                                {{-- @foreach($cart as $item) --}}
                                                {{-- <tr>
                                                    <td>{{ $item['id'] }}</td>
                                                    <td>{{ $item['ten'] }}</td>
                                                    <td>{{ $item['kho'] }}</td>
                                                    <td>{{ $item['dvt'] }}</td>
                                                    <td>{{ $item['qty'] }}</td>
                                                    <td>{{ $item['gia'] }}</td>
                                                    <td>{{ $item['thanhtien'] }}</td>
                                                    <td>{{ number_format($item['gia'],0,",",".") }} vnđ</td>
                                                    <td>{{ number_format($item['qty']*$item['gia'],0,",",".") }}vnđ</td>
                                                    <td class="td-actions">
                                                        <a  class="del btn btn-small btn-danger" name="id" id="{{$item['rowid']}}"><i class="btn-icon-only icon-remove"></i></a>
                                                    </td>
                                                </tr> --}}
                                                {{-- @endforeach --}}
                             
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
        $(document).ready(function(){
            $('.product-add-to-cart').on('click', function(event){
                event.preventDefault();
                var url = $(this).data('url');

                $.ajax({
                    method: 'GET', //method of form
                    url: url, // action of form
                    success: function(res) {
                        var total_price = res.total_price;
                        var total_product = res.total_product;
                        Swal.fire({
                            icon: 'success',
                            text: res.message,
                        });
                        $('#total_product').html(total_product);
                        $('#total_price').html('$'+total_price);
                    },
                    statusCode: {
                        401: function() {
                            window.location.href = "{{ route('login') }}";
                        }
                    }
                });
            });
        });
    </script>
@endsection
