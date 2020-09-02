@extends('layout.admin')

@section('title', 'Data User')

@section('content')
  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div style="float: left;">
          <h2>Data User</h2>
        </div>
        <div style="float: right;">
          <a href="{{ url('users/tambah')}}" class="btn btn-primary"><i class='icon icon-white icon-plus'></i> Tambah User Baru</a>
        </div>
        <div style="clear: both"></div>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table id="tabel_karyawan" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th width="10">No</th>
                <th width="300">Nama</th>
                <th width="300">Email</th>
                <th width="300">Jenis Kelamin</th>
                <th width="300">Nohp</th>
                <th width="80" class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody></tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
@endsection

@section('script')
  <script>
  // Halaman kelola karyawan
    $('#tabel_karyawan').DataTable( {
        processing: true,
        serverSide: true,
        ajax: "api/datatable/users",
        serverMethod: "post",
        order: [[1, 'asc']],
        columns: [
            {
              data: null,
              render: function( data, type, row, meta ){
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
                searchable: false
            },
            {
              data: "name", orderable: true, searchable: true
            },
            {
              data: "email", orderable: true, searchable: true
            },
            {
              data: "jenis_kelamin", orderable: false, searchable: true
            },
            {
              data: "nohp", orderable: false, searchable: true
            },
            {
              data: null,
              render: function( data, type, row, meta ){
                  return  "<div class='btn-group'>" +
                          "<a href='{{ url('users/edit') }}/" + data.id +"' class='btn btn-xs btn-info tipsy-kiri-atas' title='Edit Data'><i class='fa fa-pencil'></i> Edit</a>" +
                          "</div>" +
                          "<div class='btn-group'>" +
                          "<a href='{{ url('users/hapus') }}/" + data.id +"' class='btn btn-xs btn-danger tipsy-kiri-atas' name='tombol_hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini? Semua data transaksi yang terkait dengan user ini akan DIHAPUS. \")' title='Hapus Data'><i class='fa fa-trash-o'></i> Hapus</a></div>";
                },
                searchable: false
            }
        ]
    }
    );
    // komentar
  </script>
@endsection
