@extends('template.edtableview')  

@section('title', '工作者的教育程度') 

@section('viewtital','各地區工作者的教育程度') 

@section('content')

    @can('admin')
        <a href="{{ route('ed.create') }}" class="cta-btn2">新增數據</a> 
    @endcan 



    <a href="{{ url('education2') }}" class="cta-btn2">查看其他數據</a>

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
            @can('admin')
            <th>操作2</th>
            <th>操作3</th>
            @elsecan('manager')
            <th>操作2</th>
            @endcan
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
                <td><a href="{{route('ed.show',['id' => $Ed1 ->id])}}">顯示</a></td>
                @can('admin')
                <td><a href="{{ route('ed.edit', ['id' => $Ed1->id]) }}" class="btn btn-warning">修改</a></td>
                <td>
                    <form action="{{ url('/education/delete', ['id' => $Ed1->id])}}"method="post">
                        <input class="btn btn-default" type="submit" value="刪除" />
                        @method('delete')
                        @csrf
                    </form>
                </td>
                @elsecan('manager')
                <td><a href="{{ route('ed.edit', ['id' => $Ed1->id]) }}" class="btn btn-warning">修改</a></td>
                @endcan
            </tr>
        @endforeach
    </table>
@endsection
