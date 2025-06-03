@extends('layouts.default')

@section('title', '会員登録')

@section('css')
<link rel="stylesheet" href="{{ asset('css/authentication.css') }}">
@endsection

@section('content')
    @include('layouts.default') {{-- 共通ヘッダー（ログイン・ロゴなど） --}}

    <form action="/register" method="post" class="authenticate center">
        @csrf

        <h1 class="page__title">会員登録</h1>

        {{-- ユーザ名 --}}
        <label for="name" class="entry__name">ユーザ名</label>
        <input name="name" id="name" type="text" class="input" value="{{ old('name') }}">
        <div class="form__error">
            @error('name') {{ $message }} @enderror
        </div>

        {{-- メールアドレス --}}
        <label for="mail" class="entry__name">メールアドレス</label>
        <input name="email" id="mail" type="email" class="input" value="{{ old('email') }}">
        <div class="form__error">
            @error('email') {{ $message }} @enderror
        </div>

        {{-- パスワード --}}
        <label for="password" class="entry__name">パスワード</label>
        <input name="password" id="password" type="password" class="input">
        <div class="form__error">
            @error('password') {{ $message }} @enderror
        </div>

        {{-- パスワード確認 --}}
        <label for="password_confirmation" class="entry__name">確認用パスワード</label>
        <input name="password_confirmation" id="password_confirmation" type="password" class="input">
        <div class="form__error"></div>

        <button type="submit" class="button">登録する</button>

        <div class="link__login">
            <a href="/login">ログインはこちら</a>
        </div>
    </form>
@endsection