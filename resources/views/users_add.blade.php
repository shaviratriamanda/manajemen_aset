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
            <label>Name</label>
            <input class="form-control" name="name" required />
            </div>

			<div class="form-group">
            <label>Email</label>
            <input class="form-control" name="email" required />
            </div>
			
			<div class="form-group">
            <label>Password</label>
            <input class="form-control" name="password" required />
            </div>
			
			<div class="form-group">
            <label>Api Token</label>
            <input class="form-control" name="api_token" required />
            </div>
			
			<div class="form-group">
            <label>Created At</label>
            <input class="form-control" name="created_at" required />
            </div>
			
			<div class="form-group">
            <label>Update At</label>
            <input class="form-control" name="update_at" required />
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
