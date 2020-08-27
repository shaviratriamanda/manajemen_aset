@extends('layout.admin')

@section('title', 'Data Aset')

@section('content')
  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div style="float: left;">
          <h2>Data Aset</h2>
        </div>
        <div style="float: right;">
          <a href="{{ url('aset/tambah')}}" class="btn btn-primary"><i class='icon icon-white icon-plus'></i> Tambah Aset</a>
        </div>
        <div style="clear: both"></div>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table id="tabel_aset" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th width="10">No</th>
                <th width="300">Kode Aset</th>
				<th width="300">Nama Aset</th>
				<th width="300">Lokasi</th>
				<th width="300">Deskripsi</th>
				<th width="300">Created At</th>
				<th width="300">Kategori</th>
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
    $('#tabel_aset').DataTable( {
        processing: true,
        serverSide: true,
        ajax: "api/datatable/aset",
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
              data: "kode_aset", orderable: true, searchable: true
            },
			{
              data: "nama_aset", orderable: true, searchable: true
            },
			{
              data: "lokasi.nama_lokasi", orderable: true, searchable: true
            },
			{
              data: "deskripsi", orderable: true, searchable: true
            },
			{
              data: "created_at", orderable: true, searchable: true
            },
			{
              data: "kategori.nama_kategori", orderable: true, searchable: true
            },
            {
              data: null,
              render: function( data, type, row, meta ){
				          return  "<div class='btn-group'>" +
                          "<a href='aset/" + data.id + "/kondisi-aset' class='btn btn-xs btn-success tipsy-kiri-atas' title='Edit Data'><i class='fa fa-server'></i> Kondisi Aset</a>" +
                          "</div>" +
                          " <br> <br>" + 
                          "<div class='btn-group'>" +
                          "<a href='{{ url('aset/edit') }}/" + data.id +"' class='btn btn-xs btn-info tipsy-kiri-atas' title='Edit Data'><i class='fa fa-pencil'></i> Edit</a>" +
                          "</div> <br> <br>" +
                          "<div class='btn-group'>" +
                          "<a href='{{ url('aset/hapus') }}/" + data.id +"' class='btn btn-xs btn-danger tipsy-kiri-atas' name='tombol_hapus' onclick='return confirm(\"Apakah Anda ingin menghapus data ini?. \")' title='Hapus Data'><i class='fa fa-trash-o'></i> Hapus</a></div>";
                },
                searchable: false
            }
        ]
    }
    );
  </script>
@endsection
