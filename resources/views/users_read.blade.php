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
                <th width="300">Name</th>
                <th width="300">Email</th>
                <th width="950">Api Token</th>
                <th width="950">Created At</th>
                <th width="950">Updated At</th>
                <th width="80" class="text-center">Aksi</th>
              </tr>
            </thead>
            
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
              data: "api_token", orderable: true, searchable: true
            },
			{
              data: "created_at", orderable: true, searchable: true
            },
			{
              data: "update_at", orderable: true, searchable: true
            },
            { // Kolom status user
              data: "status",
              render: function( data, type, row, meta ){
                if(data.status == 0)
                {
                  return "Tidak Aktif";
                }
                else
                {
                  return "Aktif";
                }
              },orderable: true, searchable: false
            },
            {
              data: null,
              render: function( data, type, row, meta ){
                  return  "<div class='btn-group'>" +
                          "<a href='{{ url('users/edit') }}/" + data.id_user +"' class='btn btn-xs btn-info tipsy-kiri-atas' title='Edit Data'><i class='fa fa-pencil'></i> Edit</a>" +
                          "</div>" +
                          "<div class='btn-group'>" +
                          "<a href='{{ url('users/hapus') }}/" + data.id_user +"' class='btn btn-xs btn-danger tipsy-kiri-atas' name='tombol_hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini? Semua data transaksi yang terkait dengan user ini akan DIHAPUS. \")' title='Hapus Data'><i class='fa fa-trash-o'></i> Hapus</a></div>";
                },
                searchable: false
            }
        ]
    }
    );
  </script>
@endsection
