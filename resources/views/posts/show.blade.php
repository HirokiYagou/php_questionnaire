@extends('layouts.master')
@section('title', "詳細ページ - $post->id | ")

@section('content')
    <h1 >show/{{ $post->id }}ページ</h1>
    <div class="card">
      <div class="card-body">
        <p>{{ $post->name }}</p>
      </div>
    </div>
    <a href="/" class="btn btn-primary">戻る</a>
@endsection
