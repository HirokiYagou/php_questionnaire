@extends('layouts.master')
@section('title', '新規回答 |')

@section('content')
    <h1>createページ</h1>
    <a href="/" class="btn btn-primary">戻る</a>
    <form action="/posts" method="post">
        @csrf
        <div class="mb-3">
          <label for="nameInput" class="form-label">氏名を教えてください。</label>
          <input type="text" name="name" class="form-control" id="nameInput">
        </div>
        <div class="mb-3">
          <label for="ageSelect" class="form-label">年齢を教えてください。</label>
          <select name="ageSelect" class="form-select" aria-label="Default select example">
            <option selected>選択してください</option>
            <option value="1">20歳未満</option>
            <option value="2">20歳〜39歳</option>
            <option value="3">40歳〜59歳</option>
            <option value="4">60歳以上</option>
          </select>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
