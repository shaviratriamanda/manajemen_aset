@extends('layout.admin')

@section('title', 'Edit Kategori Aset')

@section('content')
  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">	
        <h2>Edit Data Kategori Aset</h2>
      </div>
      <div class="panel-body">
        
          <form method="post" action="{{ url('kategori-aset/edit/'.$detail->id) }}">
            @csrf
            
            <div class="form-group">
            <label>Kode Kategori Aset</label>
            <input class="form-control" name="kode_kategori" value="{{ $detail->kode_kategori }}" required />
            </div>

            <div class="form-group">
            <label>Nama Kategori Aset</label>
            <input class="form-control" name="nama_kategori" value="{{ $detail->nama_kategori }}" required />
            </div>
           

            <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" onclick="window.history.back();" class="btn btn-success">Kembali</button>
            </div>
          </form>
      </div>
    </div>
  </section>
  
@endsection