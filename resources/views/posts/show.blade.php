@extends('layouts.master')
@section('title', "詳細ページ - $post->id | ")

@section('content')
    <h1 >show/{{ $post->id }}ページ</h1>
      <ul class="list-group">
        <li class="list-group-item">
          <h6>名前を教えてください。</h6>
          <p class="h3">→{{ $post->name }}</p>
        </li>
        <li class="list-group-item">
          <h6>年齢を教えてください。</h6>
          <p class="h3">→{{ $post->age }}</p>
        </li>
        <li class="list-group-item">
          <h6>性別を教えてください。</h6>
          <p class="h3">→{{ $post->sex }}</p>
        </li>
        <li class="list-group-item">
          <h6>希望物件種別を教えてください。</h6>
          <p class="h3">→{{ $post->property }}</p>
        </li>
        <li class="list-group-item">
          <h6>その他ご要望をご入力ください。</h6>
          <p class="h3">→{{ $post->memo }}</p>
        </li>
      </ul>
    <a href="/" class="btn btn-primary">戻る</a>
@endsection
