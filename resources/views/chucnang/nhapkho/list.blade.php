@extends('layouts.master')
@section('header-content')
<h1>Quản lý nhập kho</h1>
@endsection
@section('main-content')
<a class="btn btn-primary"href="{{ route('nhapkho.create') }}">Create</a>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách nhập kho</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th class="span2">Mã</th>
                    <th class="span2">Ngày</th>
                    <th class="span4">NPP</th>
                    <th class="span4">Lý do</th>
                    <th class="span2">Tổng tiền</th>
                    <th class="span3"></th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($data as $item)
                    <tr>
                            <td>{!! $item->nk_ma !!}</td>
                            <td>{!! $item->nk_ngaylap !!}</td>
                            <?php $npp = DB::table('nhaphanphoi')->where('id',$item->npp_id)->first(); ?>
                            <td>{!! $npp->npp_ten !!}</td>
                            <td>{!! $item->nk_lydo !!}</td>
                            <td>{!! number_format("$item->nk_tongtien",0,".",",")  !!} vnd</td>
                            <td class="td-actions">
                              <form method="post" action="">
                                  @csrf
                                  <a href="{{ route('chatluong.show', ['id' => $item->id]) }}" class="btn btn-primary">Edit</a>
                                  <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger">Delete</button>
                              </form>
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
