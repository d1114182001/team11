@extends('template.edtableapp')  <!-- 继承 'all_app.blade.php' 布局 -->

@section('title', '工作者的年齡')  <!-- 定义页面标题 -->

@section('viewtital','各地區工作者的工作者的年齡') 

@section('content')

    <a href="{{ url('education') }}">返回上一頁</a>

    <table>
        <tr>
            <th>地區別</th>
            <th>總計 (千人)</th>
            <th>15-19歲 (千人)</th>
            <th>20-24歲 (千人)</th>
            <th>25-29歲 (千人)</th>
            <th>30-34歲 (千人)</th>
            <th>35-39歲 (千人)</th>
            <th>40-44歲 (千人)</th>
            <th>45-49歲 (千人)</th>
            <th>50-54歲 (千人)</th>
            <th>55-59歲 (千人)</th>
            <th>60-64歲 (千人)</th>
            <th>65歲及以上 (千人)</th>
        </tr>
        @foreach ($Ed2 as $Ed3)
            <tr>
                <td>{{ $Ed3->district_or_region }}</td>
                <td>{{ $Ed3->total_thousand }}</td>
                <td>{{ $Ed3->age_15_19 }}</td>
                <td>{{ $Ed3->age_20_24 }}</td>
                <td>{{ $Ed3->age_25_29 }}</td>
                <td>{{ $Ed3->age_30_34 }}</td>
                <td>{{ $Ed3->age_35_39 }}</td>
                <td>{{ $Ed3->age_40_44 }}</td>
                <td>{{ $Ed3->age_45_49 }}</td>
                <td>{{ $Ed3->age_50_54 }}</td>
                <td>{{ $Ed3->age_55_59 }}</td>
                <td>{{ $Ed3->age_60_64 }}</td>
                <td>{{ $Ed3->age_65_above_total }}</td>
            </tr>
        @endforeach
    </table>
@endsection
