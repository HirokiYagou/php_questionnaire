@extends('layouts.master')
@section('title', '新規回答 |')

@section('content')
    <h1>createページ</h1>
    <div class="card">
      <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/posts" method="post">
            @csrf
            <div class="mb-3">
              <label for="nameInput" class="form-label">氏名を教えてください。</label>
              <input type="text" name="name" class="form-control" id="nameInput">
            </div>
            <div class="mb-3">
              <label for="ageSelect" class="form-label">年齢を教えてください。</label>
              <select name="age" id="ageSelect" class="form-select" aria-label="Default select example">
                <option selected>選択してください</option>
                <option value="1">20歳未満</option>
                <option value="2">20歳〜39歳</option>
                <option value="3">40歳〜59歳</option>
                <option value="4">60歳以上</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="sexRadio" class="form-label">性別を教えてください。</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" id="sexRadio">
                <label class="form-check-label" for="sexRadio">男性</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="sex" id="sexRadio2" checked>
                <label class="form-check-label" for="sexRadio2">女性</label>
              </div>
            </div>
            <div class="mb-3">
              <label for="request" class="form-label">希望物件種別を教えてください。</label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">新築一戸建て</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault2">
                <label class="form-check-label" for="flexCheckDefault2">中古一戸建て</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
                <label class="form-check-label" for="flexCheckDefault3">マンション</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
                <label class="form-check-label" for="flexCheckDefault4">土地</label>
              </div>
            </div>
            <div class="mb-3">
              <label for="memoTextarea" class="form-label">その他ご要望をご記入ください。</label>
              <textarea name="memo" class="form-control" id="memoTextarea" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
    <a href="/" class="btn btn-primary">トップへ戻る</a>
@endsection
