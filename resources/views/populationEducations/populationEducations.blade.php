<html>
    <head>
        <title>我國教育人口</title>
    </head>
    <body>
        <h1>我國教育人口</h1>
        <table border ="1">
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
                    
                </tr>
            @endforeach
        </table>
        
        
    </body>
</html>