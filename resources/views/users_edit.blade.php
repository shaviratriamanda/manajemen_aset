@extends('layout.admin')

@section('title', 'Edit User')

@section('content')
  <section class="content">
    <div class="panel panel-default">
      <div class="panel-heading">	
        <h2>Edit Data User</h2>
      </div>
      <div class="panel-body">
        
          <form method="post" action="{{ url('users/edit/'.$detail->id_user) }}">
            @csrf
            <input type="hidden" value="{{ $detail->id }}" name="id" />
            
            <div class="form-group">
            <label>Name</label>
            <input class="form-control" name="name" value="{{ $detail->name }}" required />
            </div>

            <div class="form-group">
            <label>Email</label>
            <input class="form-control" name="email" value="{{ $detail->email }}" required />
            </div>

			<div class="form-group">
            <label>Password</label>
            <input class="form-control" name="password" value="{{ $detail->password }}" required />
            </div>

			<div class="form-group">
            <label>Api Token</label>
            <input class="form-control" name="api_token" value="{{ $detail->api_token }}" required />
            </div>

			<div class="form-group">
            <label>Created At</label>
            <input class="form-control" name="created_at" value="{{ $detail->created_at }}" required />
            </div>

			<div class="form-group">
            <label>Update At</label>
            <input class="form-control" name="update_at" value="{{ $detail->update_at }}" required />
            </div>

            <div class="form-group">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="button" onclick="window.history.back();" class="btn btn-success">Kembali</button>
            </div>
          </form>
      </div>
    </div>
  </section>
  <script>
    document.getElementsByName("status")[0].value = "{{ $detail->status }}";
    document.getElementsByName("level")[0].value = "{{ $detail->level }}";
  </script>
@endsection
