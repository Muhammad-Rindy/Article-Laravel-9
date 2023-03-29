@extends('layouts.app')

@section('title', 'Edit')

@section('content')

    <div class="container">
    <h1>Buat postingan baru</h1>
    <br>
    <br>
    <form method="POST" action="{{ url("posts/{$post->id}") }}">
        @method('PATCH')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
          </div>
          <div class="mb-3">
            <label for="content" class="form-label">Konten</label>
            <textarea class="form-control" id="content" rows="3" name="content" aria-valuemax="{{ $post->content }}" ></textarea>
          </div>
          <button type="submit" class="btn btn-warning">Simpan</button>
    </form>
    <br>
    <form method="post" action="{{ url("posts/{$post->id}") }}" >
    @method ('DELETE')
    @csrf
    <button type="submit" class="btn btn-danger"> Hapus!!</button>
    </form>
</div>
@endsection
