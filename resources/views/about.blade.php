@extends('populationEducations')

@section('title', 'SDG 介紹首頁')

@section('header')

<div class="sdg-header-content">
    <img src="/pictures/sdg_2.png" alt="SDG Logo" class="sdg-logo">
    <div class="sdg-text">
        <h1>可持續發展目標 (SDG)</h1>
        <p>我們共同的未來，為了社會、環境與經濟的可持續發展。</p>
    </div>
</div>


@endsection
@section('navbar')
    @include('particials.navbar', ['navbarImage' => '/pictures/sdg_nav.png', 'navbarText' => '可持續發展目標 (SDG)'])
@endsection
@section('content')
    <h1>歡迎來到 SDG 介紹首頁</h1>
    <p>這裡可以放一些簡單的靜態內容。</p><p>這裡可以放一些簡單的靜態內容。</p><p>這裡可以放一些簡單的靜態內容。</p><p>這裡可以放一些簡單的靜態內容。</p><p>這裡可以放一些簡單的靜態內容。</p><p>這裡可以放一些簡單的靜態內容。</p><p>這裡可以放一些簡單的靜態內容。</p><p>這裡可以放一些簡單的靜態內容。</p><p>這裡可以放一些簡單的靜態內容。</p><p>這裡可以放一些簡單的靜態內容。</p><p>這裡可以放一些簡單的靜態內容。</p><p>這裡可以放一些簡單的靜態內容。</p>
@endsection
