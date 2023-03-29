@extends('layouts.app')

@section('title', 'Index')

@section('content')

    <div class="container">
        @foreach ($posts as $pst)
        <div class="card mb-3 ini">
            <div class="card-body">
              <h5 class="card-title">{{ $pst->title }}</h5>
              <p class="card-text">{{ $pst->content }}</p>
              <p class="card-text"><small class="text-muted">Created At {{ $pst->created_at }} </small></p>
                <a href="{{ url("posts/$pst->id") }}" class="btn btn-primary">Selengkapnya</a>
                <a href="{{ url("posts/$pst->id/edit") }}" class="btn btn-warning">Edit</a>
            </div>
        </div>
        @endforeach
        <a class="btn btn-primary ini" href="{{ url('posts/create') }}">+ Buat Postingan</a>
    </div>
    <body class="d-flex flex-column h-100">
                @endsection
