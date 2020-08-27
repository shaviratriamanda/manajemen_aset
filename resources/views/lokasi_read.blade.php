@extends('layout.admin')

@section('title', 'Data Lokasi')

@section('content')
  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div style="float: left;">
          <h2>Data Lokasi</h2>
        </div>
        <div style="float: right;">
          <a href="{{ url('lokasi/tambah')}}" class="btn btn-primary"><i class='icon icon-white icon-plus'></i> Tambah Lokasi</a>
        </div>
        <div style="clear: both"></div>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table id="tabel_kategori_aset" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th width="10">No</th>
                <th width="300">Nama Lokasi</th>
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
    $('#tabel_kategori_aset').DataTable( {
        processing: true,
        serverSide: true,
        ajax: "api/datatable/lokasi",
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
              data: "nama_lokasi", orderable: true, searchable: true
            },
            {
              data: null,
              render: function( data, type, row, meta ){
                  return  "<div class='btn-group'>" +
                          "<a href='{{ url('lokasi/edit') }}/" + data.id +"' class='btn btn-xs btn-info tipsy-kiri-atas' title='Edit Data'><i class='fa fa-pencil'></i> Edit</a>" +
                          "</div>" +
                          "<div class='btn-group'>" +
                          "<a href='{{ url('lokasi/hapus') }}/" + data.id +"' class='btn btn-xs btn-danger tipsy-kiri-atas' name='tombol_hapus' onclick='return confirm(\"Apakah Anda ingin menghapus data ini?. \")' title='Hapus Data'><i class='fa fa-trash-o'></i> Hapus</a></div>";
                },
                searchable: false
            }
        ]
    }
    );
  </script>
@endsection
