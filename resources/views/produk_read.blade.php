@extends('layout.admin')

@section('title', 'Data Produk')

@section('content')
  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div style="float: left;">
          <h2>Data Produk</h2>
        </div>
        <div style="float: right;">
          <a href="{{ url('produk/tambah')}}" class="btn btn-primary"><i class='icon icon-white icon-plus'></i> Tambah Produk Baru</a>
        </div>
        <div style="clear: both"></div>
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table id="tabel_produk" class="table table-striped table-bordered table-hover">
            <thead>
              <tr>
                <th width="10">No</th>
                <th width="300">Nama Produk</th>
                <th width="300">Stok</th>
                <th width="300">Harga Jual</th>
                <th width="300">Harga Beli</th>
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
    $('#tabel_produk').DataTable( {
        processing: true,
        serverSide: true,
        ajax: "api/produk",
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
              data: "nm_produk", orderable: true, searchable: true
            },
            {
              data: "stok", orderable: true, searchable: false
            },
            {
              data: "harga_jual", orderable: true, searchable: false
            },
            {
              data: "harga_beli", orderable: true, searchable: false
            },
            {
              data: null,
              render: function( data, type, row, meta ){
                  return  "<div class='btn-group'>" +
                          "<a href='{{ url('produk/edit') }}/" + data.id_user +"' class='btn btn-xs btn-info tipsy-kiri-atas' title='Edit Data'><i class='fa fa-pencil'></i> Edit</a>" +
                          "</div>" +
                          "<div class='btn-group'>" +
                          "<a href=' class='btn btn-xs btn-danger tipsy-kiri-atas' name='tombol_hapus' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data ini? \")' title='Hapus Data'><i class='fa fa-trash'></i> Hapus</a></div>";
                },
                searchable: false
            }
        ]
    }
    );
  </script>
@endsection
