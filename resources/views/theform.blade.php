
@include('card')

@can('admin')
<a href="{{route('region.create')}}">新增地區資料</a>
@endcan
@auth
<h1>就業者之教育程度與年齡</h1>
<table border="1">
    <tr>
        <td>台灣縣市區域</td>
        <td>總人口（千人)</td>
        <td>國中及以下總數</td>
        <td>大專及以上總數</td>
        <td>15-24歲總數</td>
        <td>25-44歲總數</td>
        <td>45-64歲總數</td>
        <td>65歲及以上總數</td>
        <td>操作1</td>
        @can('admin')
        <td>操作2</td>
        <td>操作3</td>
        @elsecan('manager')
        <td>操作2</td>
        @endcan
    </tr>
    @foreach ($pop as $populations)
        <tr>
            <td>{{ $populations->region }}</td>
            <td>{{ $populations->total }}</td>
            <td>{{ $populations->edu_jr_high_below_total }}</td>
            <td>{{ $populations->edu_college_above_total }}</td>
            <td>{{ $populations->age_15_24_total }}</td>
            <td>{{ $populations->age_25_44_total }}</td>
            <td>{{ $populations->age_45_64_total }}</td>
            <td>{{ $populations->age_65_above }}</td>
            <td><a href="{{ route('region.show',['id' => $populations->id]) }}">show</a></td>
            @can('admin')
            <td><a href="{{ route('region.edit',['id' => $populations->id]) }}">edit</a></td>
            <td>
                <form action="{{ url('/delete',['id' => $populations->id])}}" method="POST">
                    <input class="btn btn-default" type="submit" value="刪除"/>
                    @method('delete')
                    @csrf 
                </form>
            </td>
            @elsecan('manager')
            <td><a href="{{ route('region.edit',['id' => $populations->id]) }}">edit</a></td>
            
           
            @endcan
        </tr>
    @endforeach
</table>
@endauth
@guest
    <h1>登入可看更多資訊...</h1>
@endguest



