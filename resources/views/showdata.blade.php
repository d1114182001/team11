<html>
    <head>
        <title>@yield('title', '我國教育人口')</title>
        <link rel="stylesheet" href="{{ asset('/app.css') }}">     
    </head>
    
        @include('particials.navbar', ['navbarImage' => '/pictures/E_SDG_Icons-04.jpg', 'navbarText' => 'Quality Education(優質教育)'])
    <body>
        
        <main>
            <h1>就業者之教育程度與年齡</h1>
            @can('admin')
            <a href="{{route('region.create')}}">新增地區資料</a>
            @endcan
            
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
                    
                </table>
                
                
        </main>
        
        @include('footer')
    </body>
</html>
