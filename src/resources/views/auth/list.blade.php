@extends('layouts.default')

@section('title', '商品一覧')

@section('css')
<link rel="stylesheet" href="{{ asset('css/authentication.css') }}">
@endsection

@section('content')
{{-- @include('components.header') {{-- 共通ヘッダー（ログイン・ロゴなど） --}} --}}

    <form action="/" method="post" class="authenticate center">
        @csrf

        <h1 class="page__title">商品一覧</h1>