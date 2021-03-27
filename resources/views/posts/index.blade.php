@extends('layouts.master')

@section('content')
    <h1>indexページ</h1>
    <a href="/posts/create" class="btn btn-primary">新規回答</a>
    <ul class="list-group">
        @forelse ($posts as $post)
            <li class="list-group-item">
              <a href="{{ url('/posts/'.$post->id) }}">{{ $post->name }}</a>  ({{ $post->created_at }})
            </li>
        @empty
            <p class="list-group-item">アンケートが存在しません</p>
        @endforelse
    </ul>
@endsection
