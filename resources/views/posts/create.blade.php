@extends('layouts.master')
@section('title', '新規回答 |')

@section('content')
    <h1>createページ</h1>
    <a href="/" class="btn btn-primary">戻る</a>
    <form action="/posts" method="post">
        @csrf
    </form>
@endsection
