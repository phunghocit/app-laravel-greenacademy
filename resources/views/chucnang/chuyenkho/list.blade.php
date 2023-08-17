@extends('layouts.master')
@section('header-content')
<h1>Quản lý chuyển kho</h1>
@endsection
@section('main-content')
<a class="btn btn-primary"href="{{ route('chuyenkho.create') }}">Create</a>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách nhập kho</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
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
                    @foreach($data as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td>{{ $item['name'] }}</td>
                        <td>{{ $item['khocu_id'] }}</td>
                        <td>{{ $item['khomoi_id'] }}</td>
                        <td>{{ $item->options->size }}</td>
                        <td>{{ $item['qty'] }}</td>
                        <td>{{ number_format($item['price'],2) }} vnđ</td>
                        <td>{{ number_format($item['qty']*$item['price'],2) }}vnđ</td>
                        <td class="td-actions">
                            <a  class="del btn btn-small btn-danger" name="id" id="{{$item['rowid']}}"><i class="btn-icon-only icon-remove"></i></a>
                        </td>
                    </tr>
                    @endforeach
                  
                  
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
@endsection
@section('js-custom')
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endsection
