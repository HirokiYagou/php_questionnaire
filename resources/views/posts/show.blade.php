@extends('layouts.master')
@section('title', "詳細ページ - $post->id | ")

@section('content')
    <h1 >回答の詳細ページ</h1>
      <ul class="list-group">
        <li class="list-group-item">
          <h6>名前を教えてください。</h6>
          <p class="h3">→{{ $post->name }}</p>
        </li>
        <li class="list-group-item">
          <h6>年齢を教えてください。</h6>
          @if ($post->age == 0)
            <p class="h3">→20歳未満</p>
          @elseif ($post->age == 1)
            <p class="h3">→20歳〜39歳</p>
          @elseif ($post->age == 2)
            <p class="h3">→40歳〜59歳</p>
          @elseif ($post->age == 3)
            <p class="h3">→60歳以上</p>
          @endif
        </li>
        <li class="list-group-item">
          <h6>性別を教えてください。</h6>
          @if ($post->sex == 0)
            <p class="h3">→男性</p>
          @elseif ($post->sex == 1)
            <p class="h3">→女性</p>
          @endif
        </li>
        <li class="list-group-item">
          <h6>希望物件種別を教えてください。</h6>
          @if ($post->property % 2 == 0)
            <p class="h3">→新築一戸建て</p>
          @endif
          @if ($post->property % 3 == 0)
            <p class="h3">→中古一戸建て</p>
          @endif
          @if ($post->property % 5 == 0)
            <p class="h3">→マンション</p>
          @endif
          @if ($post->property % 7 == 0)
            <p class="h3">→土地</p>
          @endif
        </li>
        <li class="list-group-item">
          <h6>その他ご要望をご入力ください。</h6>
          <p class="h3">→{!! nl2br(e($post->memo)) !!}</p>
        </li>
      </ul>
    <a href="/" class="btn btn-secondary">一覧へ戻る</a>
@endsection
