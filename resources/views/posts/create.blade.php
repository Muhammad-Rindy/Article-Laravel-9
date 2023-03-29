@extends('layouts.app')

@section('title', 'Create')

@section('content')



    <div class="container">
    <h1>Buat postingan baru</h1>
    <br>
    <br>
    <form method="POST" action="{{ url('posts') }}">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" >
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" rows="3" name="content" ></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

@endsection
