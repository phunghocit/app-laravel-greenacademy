@extends('layouts.master')
@section('header-content')
<h1>Quản lý chuyển kho</h1>
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
                <p><b>Thông tin phiếu chuyển kho</b></p>
            </div>
            <div class="box-content">
                <form action="{{ route('chuyenkho.save') }}" method="POST" accept-charset="utf-8">
                    @csrf
                    <div class="container">
                        <div class="row">
                            <div id="acct-password-row" class="span13">
                                <div id="acct-password-row" class="span8">
                                    <fieldset>
                                        <div class="control-group">
                                            <label>Nhân viên:</label>
                                            <?php 
                                                $nv = DB::table('nhanvien')->where('user_id',Auth::user()->id)->first();

                                            ?>
                                            <input type="text" value="{{ $nv->nv_ten}}" class="span7">
                                            <input type="hidden" name="txtNV" value="{{ $nv->id }}">
                                        </div>
                                        <div class="control-group">
                                            <label>Lý do:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                            <textarea name="txtLyDo" id="input" class="span7" rows="3" required="required"></textarea>
                                        </div>
                                    </fieldset>
                                </div>
                                <div id="acct-password-row" class="span4">
                                    <fieldset>
                                        <div class="control-group ">
                                            <label>Mã phiếu:</label>
                                            <input type="text" name="txtID" value="CK{!! date('dmYhms') !!}" class="span3">
                                        </div>
                                        <div class="control-group">
                                            <label>Ngày:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                            <input type="text" name="txtDate" value="{!! date('d-m-Y') !!}" class="span3">
                                        </div>
                                        <div>
                                            <button type="submit" class="btn btn-primary"><i class="icon-save"></i>&nbsp&nbsp&nbspLưu</button>
                                        </div>
                                    </fieldset>
                                </div>
                                <form action="" method="POST" accept-charset="utf-8">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div id="acct-password-row" class="span12">
                                    <div>
                                        <u><p><b>Danh sách vật tư</b></p></u>
                                    </div>
                                    <div class="control-group">
                                        <label>Mã:</label>
                                        <select name="vattu_id" id="vattu_id" class="selVT span2">
                                            <option>--Chọn--</option>
                                            @foreach($vattu as $item)
                                            <option value="{{ $item->id}}">{{ $item->vt_ma}}</option>
                                            @endforeach
                                        </select>
                                        <label>Tên:</label>
                                        <select name="ten" id="country" class="span4">
                                            <option value=""></option>
                                        </select>
                                        <label>Từ Kho:</label>
                                            <select class="ware span2" name="kho" id="country2">
                                                <option value="" ></option>
                                            </select>
                                        <label>Đến Kho:</label>
                                            <select class="selKho span2" name="selKho" id="selKho">
                                                <option>--Chọn--</option>
                                                @foreach($kho as $item)
                                                <option value="{{ $item->id}}">{{ $item->kho_ten}}</option>
                                                @endforeach
                                            </select>
                                    </div>
                                    <div class="control-group">
                                        <label>ĐVT:</label>
                                            <select class="span2" name="dvt" id="country1">
                                                <option value="" ></option>
                                            </select>
                                        <label>Số lượng:</label>
                                        <input type="number" name="sluong" id="sluong" class="sluong span2">&nbsp&nbsp
                                        <a href="#" class="add btn btn-default " type="submit"><i class="icon-plus"></i>&nbsp&nbspThêm</a>
                                    </div>
                                </div>
                                </form>
                                <div id="acct-password-row" class="span12">
                                    <div>
                                        <table class="tb table table-bordered table-hover" id="myTable" name="myTable">
                                            <thead style="background:#EFEFEF;">
                                                <tr>
                                                    <th class="span2">Mã VT</th>
                                                    <th class="span2">Tên VT</th>
                                                    <th class="span2">Từ Kho</th>
                                                    <th class="span2">Đến Kho</th>
                                                    <th class="span2">ĐVT</th>
                                                    <th class="span2">Số lượng</th>
                                                    <th class="span2">Đơn giá</th>
                                                    <th class="span2">Thành tiền</th>
                                                    <th class="span1"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($cart as $item)
                                                <tr>
                                                    <td>{{ $item['id'] }}</td>
                                                    <td>{{ $item['name'] }}</td>
                                                    <td>{{ $item->options->kho1 }}</td>
                                                    <td>{{ $item->options->kho2 }}</td>
                                                    <td>{{ $item->options->size }}</td>
                                                    <td>{{ $item['qty'] }}</td>
                                                    <td>{{ number_format($item['price'],0,",",".") }} vnđ</td>
                                                    <td>{{ number_format($item['qty']*$item['price'],0,",",".") }}vnđ</td>
                                                    <td class="td-actions">
                                                        <a  class="del btn btn-small btn-danger" name="id" id="{{$item['rowid']}}"><i class="btn-icon-only icon-remove"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                var url = $(form).attr('action');

                $.ajax({
                    type: 'POST', //method of form
                    url: url, // action of form
                    success: function(res) {
                        Swal.fire({
                            icon: 'success',
                            text: res.message,
                        });
                    },
                    error();: function(res) {
                        Swal.fire({
                            icon: 'error',
                            text: res.message,
                        });
                    },
                    // statusCode: {
                    //     401: function() {
                    //         window.location.href = "{{ route('login') }}";
                    //     }
                    // }
                });
            });
        });
    </script>
@endsection
