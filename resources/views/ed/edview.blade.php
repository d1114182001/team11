@extends('template.edtableapp')  <!-- 继承 'all_app.blade.php' 布局 -->

@section('title', '工作者的教育程度')  <!-- 定义页面标题 -->

@section('viewtital','各地區工作者的教育程度') 

@section('content')

    <a href="{{ route('ed.edcreate') }}">新增數據</a>

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
            <th>操作1</th>
            <th>操作2</th>
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
                <td><a href="{{route('ed.edshow',['id' => $Ed1 ->id])}}">顯示</a></td>
                <td>
                    <form action="{{ url('/education/delete', ['id' => $Ed1->id])}}"method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
