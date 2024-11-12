<html>
    <head>
        <title>工作者的教育程度</title>
    </head>
    <body>
        <h1>資料</h1>
        <table border="1">
            @foreach ($Ed as $Ed1 )
                <tr>
                    <td>{{$Ed1->district_or_region}}</br></td>
                    <td>{{ $Ed1->total_thousand }}</td>
                    <td>{{ $Ed1->junior_high_below_total }}</td>
                    <td>{{ $Ed1->junior_high_below_primary_total }}</td>
                    <td>{{ $Ed1->junior_high_total }}</td>
                    <td>{{ $Ed1->senior_high_total }}</td>
                    <td>{{ $Ed1->junior_college_above_total }}</td>
                    <td>{{ $Ed1->junior_college_total }}</td>
                    <td>{{ $Ed1->university_total }}</td>
                    <td>{{ $Ed1->graduate_school_total }}</td>
                    <td>{{ $Ed1->age_15_24_total }}</td>
                </tr>

            @endforeach
    <body>
</html>