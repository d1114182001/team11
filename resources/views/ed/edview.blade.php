@extends('template.edtableapp')  <!-- 继承 'all_app.blade.php' 布局 -->

@section('title', '工作者的教育程度')  <!-- 定义页面标题 -->

@section('content')
    <h1>各地區工作者的教育程度</h1>
    <a href="{{ url('education2') }}">查看其他數據</a>

    <table>
        <tr>
            <th>地區別</th>
            <th>總計 (千人)</th>
            <th>國中及以下合計 (千人)</th>
            <th>國小及以下 (千人)</th>
            <th>國中 (千人)</th>
            <th>高級中等 (千人)</th>
            <th>大專及以上合計 (千人)</th>
            <th>專科 (千人)</th>
            <th>大學 (千人)</th>
            <th>研究所 (千人)</th>
        </tr>

        @foreach ($Ed as $Ed1)
            <tr>
                <td>{{ $Ed1->district_or_region }}</td>
                <td>{{ $Ed1->total_thousand }}</td>
                <td>{{ $Ed1->junior_high_below_total }}</td>
                <td>{{ $Ed1->junior_high_below_primary_total }}</td>
                <td>{{ $Ed1->junior_high_total }}</td>
                <td>{{ $Ed1->senior_high_total }}</td>
                <td>{{ $Ed1->junior_college_above_total }}</td>
                <td>{{ $Ed1->junior_college_total }}</td>
                <td>{{ $Ed1->university_total }}</td>
                <td>{{ $Ed1->graduate_school_total }}</td>
            </tr>
        @endforeach
    </table>
@endsection
