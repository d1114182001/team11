@extends('template.edtableain')  

@section('title', '工作者的教育程度')  <!-- 定义页面标题 -->

@section('viewtital','新增') 

@section('content')

    <a href="{{ url('education') }}">返回上一頁</a>

    @include('message.list')
    {!! Form::open(['url' => 'education/store', 'method' => 'POST']) !!}
    @include("template.edform",['SBTT'=>'創建資料'])
    {!! Form::close() !!}

@endsection