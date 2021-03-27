@extends('layouts.master')
@section('title', '新規回答 |')

@section('content')
  <h1>アンケート回答ページ</h1>
  <div class="card mb-3">
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
            <option value="">--選択してください--</option>
            <option value="0">20歳未満</option>
            <option value="1">20歳〜39歳</option>
            <option value="2">40歳〜59歳</option>
            <option value="3">60歳以上</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="sexRadio" class="form-label">性別を教えてください。</label>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" id="sexRadio" value="0">
            <label class="form-check-label" for="sexRadio">男性</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="sex" id="sexRadio2" value="1">
            <label class="form-check-label" for="sexRadio2">女性</label>
          </div>
        </div>
        <div class="mb-3">
          <label for="property" class="form-label">希望物件種別を教えてください。</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="detached-new">
            <label class="form-check-label" for="detached-new">新築一戸建て</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="detached-old">
            <label class="form-check-label" for="detached-old">中古一戸建て</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="apartment">
            <label class="form-check-label" for="apartment">マンション</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="land">
            <label class="form-check-label" for="land">土地</label>
          </div>
          <!-- JavaScriptで素数の掛け算をして、input:hiddenに代入 -->
          <input type="hidden" name="property" id="propertyHidden">
        </div>
        <div class="mb-3">
          <label for="memoTextarea" class="form-label">その他ご要望をご記入ください。</label>
          <textarea name="memo" class="form-control" id="memoTextarea" rows="5"></textarea>
        </div>
        <button type="submit" class="btn btn-success" id="submitBtn">送信</button>
      </form>
    </div>
  </div>
  <a href="/" class="btn btn-secondary">一覧へ戻る</a>
@endsection
