@extends('layout.admin')

@section('title', 'Edit User')

@section('content')
  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">	
        <h2>Tambah Data User</h2>
      </div>
      <div class="panel-body">
        
          <form method="post">
            @csrf
            <div class="form-group">
            <label>Nama</label>
            <input class="form-control" name="name" required />
            </div>

			<div class="form-group">
            <label>Email</label>
            <input class="form-control" name="email" type="email" required />
            </div>
			
			<div class="form-group">
            <label>Password</label>
            <input class="form-control" name="password" type="password" required />
            </div>

      <div class="form-group">
            <label>Jenis Kelamin</label>
            <select class="form-control" name="jenis_kelamin" required>
              <option value="Laki-Laki">Laki-Laki</option>
              <option value="Perempuan">Perempuan</option>
            </select>
            </div>
      <div class="form-group">
            <label>Nohp</label>
            <input class="form-control" name="nohp" type="text" required />
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
