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
        

        <p>此表格顯示各地區工作者的年齡區間分佈，數據單位為千人。</p>
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
        
