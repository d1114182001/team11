@extends('template.edtableapp2')  

@section('title', '工作者的教育程度')  <!-- 定义页面标题 -->

@section('viewtital','詳細資料') 

@section('content')

<a href="{{ url('education2') }}">返回上一頁</a>

<table>
    <tr class="tital-info">
        <th>項目</th>
        <th>數據</th>
    </tr>
    <tr class="basic-info2">
        <td>地區別</td>
        <td>{{ $Ed3->district_or_region }}</td>
    </tr>
    <tr class="basic-info2">
        <td>總計 (千人)</td>
        <td>{{ $Ed3->total_thousand }}</td>
    </tr>
    <tr class="basic-info">
        <td>國中及以下合計 (千人)</td>
        <td>{{ $Ed3->junior_high_below_total }}</td>
    </tr>
    <tr class="basic-info">
        <td>國小及以下 (千人)</td>
        <td>{{ $Ed3->junior_high_below_primary_total }}</td>
    </tr>
    <tr class="basic-info">
        <td>國中 (千人)</td>
        <td>{{ $Ed3->junior_high_total }}</td>
    </tr>
    <tr class="basic-info">
        <td>高級中等 (千人)</td>
        <td>{{ $Ed3->senior_high_total }}</td>
    </tr>
    <tr class="basic-info">
        <td>大專及以上合計 (千人)</td>
        <td>{{ $Ed3->junior_college_above_total }}</td>
    </tr>
    <tr class="basic-info">
        <td>專科 (千人)</td>
        <td>{{ $Ed3->junior_college_total }}</td>
    </tr>
    <tr class="basic-info">
        <td>大學 (千人)</td>
        <td>{{ $Ed3->university_total }}</td>
    </tr>
    <tr class="basic-info">
        <td>研究所 (千人)</td>
        <td>{{ $Ed3->graduate_school_total }}</td>
    </tr>

    <!-- 年齡段數據 -->
    <tr class="age-data">
        <td>年齡 15-24歲合計 (千人)</td>
        <td>{{ $Ed3->age_15_24_total }}</td>
    </tr>
    <tr class="age-group">
        <td>15-19歲 (千人)</td>
        <td>{{ $Ed3->age_15_19 }}</td>
    </tr>
    <tr class="age-group">
        <td>20-24歲 (千人)</td>
        <td>{{ $Ed3->age_20_24 }}</td>
    </tr>

    <tr class="age-data">
        <td>年齡 25-44歲合計 (千人)</td>
        <td>{{ $Ed3->age_25_44_total }}</td>
    </tr>
    <tr class="age-group">
        <td>25-29歲 (千人)</td>
        <td>{{ $Ed3->age_25_29 }}</td>
    </tr>
    <tr class="age-group">
        <td>30-34歲 (千人)</td>
        <td>{{ $Ed3->age_30_34 }}</td>
    </tr>
    <tr class="age-group">
        <td>35-39歲 (千人)</td>
        <td>{{ $Ed3->age_35_39 }}</td>
    </tr>
    <tr class="age-group">
        <td>40-44歲 (千人)</td>
        <td>{{ $Ed3->age_40_44 }}</td>
    </tr>

    <tr class="age-data">
        <td>年齡 45-64歲合計 (千人)</td>
        <td>{{ $Ed3->age_45_64_total }}</td>
    </tr>
    <tr class="age-group">
        <td>45-49歲 (千人)</td>
        <td>{{ $Ed3->age_45_49 }}</td>
    </tr>
    <tr class="age-group">
        <td>50-54歲 (千人)</td>
        <td>{{ $Ed3->age_50_54 }}</td>
    </tr>
    <tr class="age-group">
        <td>55-59歲 (千人)</td>
        <td>{{ $Ed3->age_55_59 }}</td>
    </tr>
    <tr class="age-group">
        <td>60-64歲 (千人)</td>
        <td>{{ $Ed3->age_60_64 }}</td>
    </tr>

    <tr class="age-data">
        <td>年齡 65歲及以上 (千人)</td>
        <td>{{ $Ed3->age_65_above_total }}</td>
    </tr>
</table>
@endsection
