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
    <h1>SDG 是什麼?</h1>
    <p>SDG 是「可持續發展目標」(Sustainable Development Goals) 的縮寫。
    它是聯合國於2015年通過的全球性目標，共有17個，旨在解決全球範圍內的重大社會、經濟和環境問題，以推動全球的可持續發展。SDG的目標涵蓋了貧困、飢餓、健康、教育、性別平等、清潔水和衛生、經濟增長、減少不平等、可持續城市和社區、氣候變化等各個方面。</p>
    <h1>17個目標</h1>
    
@endsection

