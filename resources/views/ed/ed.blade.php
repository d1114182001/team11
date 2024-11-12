<!DOCTYPE html>
<html>
    <head>
        <title>工作者的教育程度</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #d0f5f5;
                color: #333;
                margin: 0;
                padding: 20px;
            }
            /* 橫幅圖片容器 */
            .banner {
                width: 100%;
                height: 200px; /* 可根據需求調整高度 */
                background-color: #333;
                display: flex;
                justify-content: center;
                align-items: center;
                overflow: hidden;
                margin-bottom: 20px;
            }
            .banner img {
                width: 100%;
                height: 160%;
                margin-top: 40px;
            }
            h1 {
                color: #a793ff;
                text-align: center;
                margin-bottom: 20px;
            }
            p {
                text-align: center;
                margin-bottom: 20px;
            }
            table {
                width: 100%;
                border-collapse: collapse;
                background-color: #fff;
                margin: 0 auto;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            }
            th, td {
                padding: 12px 15px;
                border: 1px solid #ddd;
                text-align: center;
            }
            th {
                background-color: #ff7a7a;
                color: #000000;
                font-weight: bold;
            }
            tr:nth-child(even) {
                background-color: #e4f5fa;
            }
            tr:hover {
                background-color: #f0efd0;
            }
        </style>
    </head>
    <body>
        
        <div class="banner">
            <!-- 請將以下的 src 更改為您的圖片 URL -->
            <img src="/PICTURE/4.png" alt="橫幅圖片">
        </div>
        

        <p>此表格顯示各地區工作者的教育程度分佈，數據單位為千人。</p>
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
    </body>
</html>
