@extends('layout.admin')

@section('title', 'Edit Kondisi Aset')

@section('content')
  <section class="content">
    <div class="card">
      <div class="card-header">	
        <h4>Edit Data Kondisi Aset</h4>
        <h4>{{ $data_aset->kode_aset }} - {{ $data_aset->nama_aset }}</h4>
      </div>
      <div class="card-body">
        
          <form method="post" action="{{ url('kondisi-aset/edit/'.$detail->id) }}">
            @csrf
            
            
            <div class="form-group">
            <label>Kondisi</label>
            <select class="form-control" name="kondisi" required>
              <option selected disabled>-- Pilih Kondisi Aset --</option>
              <option value="Good">Good</option>
              <option value="Bad">Bad</option>
              <option value="Lost">Lost</option>
              <option value="Damaged">Damaged</option>
            </select>
            <script>
              document.getElementsByName("kondisi")[0].value = "{{ $detail->kondisi }}";
            </script>
            </div>

            <div class="form-group">
            <label>Tanggal Kondisi</label>
              <input class="form-control" name="tanggal_kondisi" type="date" value="{{ $tgl }}" required />
            </div>
            <div class="form-group">
            <label>Jam Kondisi</label>
              <input class="form-control" name="jam_kondisi" type="time" value="{{ $jam }}" required />
            </div>
			
			<div class="form-group">
            <label>Deskripsi</label>
            <input class="form-control" name="deskripsi" value="{{ $detail->deskripsi }}" required />
            </div>
			
			<div class="form-group">
			<label>Gambar</label>
            <input class="form-control" name="gambar" value="{{ $detail->gambar }}" required />
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
