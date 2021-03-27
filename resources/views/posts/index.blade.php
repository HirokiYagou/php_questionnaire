@extends('layouts.master')

@section('content')
    <h1>回答の一覧ページ</h1>
    <a href="/posts/create" class="btn btn-primary mb-3">新規回答</a>
    <ul class="list-group">
        @forelse ($posts as $post)
            <li class="list-group-item">
                <a href="{{ url('/posts/'.$post->id) }}">{{ $post->name }}</a>  ({{ $post->created_at->format('Y年m月d日') }})
            </li>
        @empty
            <p class="list-group-item">アンケートが存在しません</p>
        @endforelse
    </ul>
@endsection
