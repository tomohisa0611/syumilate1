@extends('layouts.default')

@section('title', 'プロフィール')

@section('css')
<link rel="stylesheet" href="{{ asset('css/authentication.css') }}">
@endsection

@section('content')
{{-- @include('components.header') {{-- 共通ヘッダー（ログイン・ロゴなど） --}} --}}

    <form action="/mypage" method="post" class="authenticate center">
        @csrf

        <h1 class="page__title">プロフィール</h1>