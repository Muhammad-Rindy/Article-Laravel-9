@extends('layouts.app')

@section('title', 'Show')

@section('content')
    <div class="container">
        <article class="blog-post">
            <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ $post->created_at }}</a></p>
            <p>{{ $post->content }}</p>
                <small style="color: grey" class="">All comentar {{ count($comments) }}</small>
                <br>
                <br>
            @foreach ($comments as $cmt)
                <div class="card mb-3">
                    <div class="card-body">
                        <p style="font-size:8pt">{{ $cmt->comment }}</p>
                    </div>
                </div>
            @endforeach
          </article>
          <a href="{{ url("posts") }}" class="btn btn-success btn-sm" >BACK</a>
    </div>
@endsection
