@extends('layout.admin')

@section('title', 'Edit Aset')

@section('content')
  <section class="content">
    <div class="card">
      <div class="card-header">	
        <h4>Edit Data Aset</h4>
      </div>
      <div class="card-body">
        
          <form method="post" action="{{ url('aset/edit/'.$detail->id) }}">
            @csrf
            <input type="hidden" name="kode_aset" value="{{ $detail->kode_aset }}" required />
           
		   <div class="form-group">
            <label>Nama Aset</label>
            <input class="form-control" name="nama_aset" value="{{ $detail->nama_aset }}" required />
            </div>
			
            <div class="form-group">
            <label>Lokasi</label>
            <select name="id_lokasi" class="form-control" required>
              <option selected disabled>-- Pilih Lokasi --</option>
              <?php
                foreach($lokasi_aset as $lokasi)
                {
              ?>
                  <option value="<?php echo $lokasi->id; ?>"><?php echo $lokasi->nama_lokasi; ?></option>
              <?php
                }
              ?>
            </select>
            </div>
            <script>
				document.getElementsByName("id_lokasi")[0].value = "{{ $detail->id_lokasi }}";
			</script>
			
			<div class="form-group">
            <label>Deskripsi</label>
            <input class="form-control" name="deskripsi" value="{{ $detail->deskripsi }}" required />
            </div>

			<div class="form-group">
            <label>Kategori</label>
			<select name="id_kategori" class="form-control" required>
				<option selected disabled>-- Pilih Kategori --</option>
				<?php
					foreach($kategori_aset as $kategori)
					{
				?>
						<option value="<?php echo $kategori->id; ?>"><?php echo $kategori->nama_kategori; ?></option>
				<?php
					}
				?>
			</select>
			<script>
				document.getElementsByName("id_kategori")[0].value = "{{ $detail->id_kategori }}";
			</script>
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
