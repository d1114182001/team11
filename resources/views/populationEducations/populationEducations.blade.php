<html>
    <head>
        <title>我國教育人口</title>
        <link rel="stylesheet" href="{{ asset('/app.css') }}">     
    </head>
    
    <body>
        @include('particials.navbar')
        
        <div class="content">
            <div class="image">
                <img src="/pictures/62f0da478154a8e89b69f0a4_SDG目標04.png" alt="Cover Image"/>
            </div>
            <div class="word">教育解放了智力，釋放了想像力，是自尊的基礎。它是繁榮的關鍵，打開了一個充滿機遇的世界，使我們每個人都有可能為進步、健康的社會做出貢獻。學習對每個人都有益，並且應該向所有人開放。</div>
            @include('card')
            <h1>就業者之教育程度與年齡</h1>
            <table border ="1">
                <tr>
                    <td>台灣縣市區域</td>
                    <td>總人口（千人)</td>
                    <td>國中及以下總數</td>
                    <td>大專及以上總數</td>
                    <td>15-24歲總數</td>
                    <td>25-44歲總數</td>
                    <td>45-64歲總數</td>
                    <td>65歲及以上總數</td>
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
                        
                    </tr>
                @endforeach
            </table>
        </div>
    </body>
</html>