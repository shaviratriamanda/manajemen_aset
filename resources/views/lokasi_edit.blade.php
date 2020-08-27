@extends('layout.admin')

@section('title', 'Edit Lokasi')

@section('content')
  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">	
        <h2>Edit Lokasi</h2>
      </div>
      <div class="panel-body">
        
          <form method="post" action="{{ url('lokasi/edit/'.$detail->id) }}">
            @csrf
            
            

            <div class="form-group">
            <label>Nama Lokasi</label>
            <input class="form-control" name="nama_lokasi" value="{{ $detail->nama_lokasi }}" required />
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