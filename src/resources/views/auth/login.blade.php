@extends('layouts.default')

@section('title', 'ログイン')

@section('css')
<link rel="stylesheet" href="{{ asset('css/authentication.css') }}">
@endsection

@section('content')
{{-- @include('components.header') {{-- 共通ヘッダー（ログイン・ロゴなど） --}} --}}

<form action="/login" method="post" class="authenticate center">
    @csrf

    <h1 class="page__title">ログイン</h1>

    {{-- メールアドレス --}}
    <label for="email" class="entry__name">メールアドレス</label>
    <input name="email" id="email" type="email" class="input" value="{{ old('email') }}">
    <div class="form__error">
        @error('email') {{ $message }} @enderror
    </div>

    {{-- パスワード --}}
    <label for="password" class="entry__name">パスワード</label>
    <input name="password" id="password" type="password" class="input">
    <div class="form__error">
        @error('password') {{ $message }} @enderror
    </div>

    <button type="submit" class="button">ログインする</button>

    <div class="link__register">
        <a href="/register">会員登録はこちら</a>
    </div>
</form>
@endsection