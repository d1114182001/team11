@extends('template.edtableain')  

@section('title', '工作者的教育程度')  <!-- 定义页面标题 -->

@section('viewtital','修改') 

@section('content')

<a href="{{ url('education') }}">返回上一頁</a>

    @include('message.list')
    {!! Form::model($Ed1, ['route' => ['ed.update', $Ed1->id], 'method' => 'PATCH']) !!}
    @include("template.edform",['SBTT'=>'修改資料'])
    {!! Form::close() !!}

@endsection