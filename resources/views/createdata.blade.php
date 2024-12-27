<html>
    <head>
        <title>@yield('title', '我國教育人口')</title>
        <link rel="stylesheet" href="{{ asset('/app.css') }}">     
        <link rel="stylesheet" href="{{ asset('/createdata.css') }}">     
    </head>
    
        @include('particials.navbar', ['navbarImage' => '/pictures/E_SDG_Icons-04.jpg', 'navbarText' => 'Quality Education(優質教育)'])
    <body>
        
        <main>
            <h1>編輯其中一筆就業者之教育程度與年齡</h1>
            {!! Form::open(['url' => '/region/store']) !!}
            <div class="form-group">
                {!! Form::label('region','地區名稱: ') !!}
                {!! Form::text('region',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('total','總計人數: ') !!}
                {!! Form::text('total',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('edu_jr_high_below_total','教育程度_國中及以下_合計: ') !!}
                {!! Form::text('edu_jr_high_below_total',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('edu_primary_below','教育程度_國中及以下_國小及以下: ') !!}
                {!! Form::text('edu_primary_below',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('edu_jr_high','教育程度_國中及以下_國中: ') !!}
                {!! Form::text('edu_jr_high',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('edu_senior_high_voc','教育程度_高級中等_高中_高職: ') !!}
                {!! Form::text('edu_senior_high_voc',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('edu_college_above_total','教育程度_大專及以上_合計: ') !!}
                {!! Form::text('edu_college_above_total',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('edu_junior_college','教育程度_大專及以上_專科: ') !!}
                {!! Form::text('edu_junior_college',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('edu_university','教育程度_大專及以上_大學: ') !!}
                {!! Form::text('edu_university',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('edu_grad_school','教育程度_大專及以上_研究所: ') !!}
                {!! Form::text('edu_grad_school',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_15_24_total','年齡_15-24歲_合計: ') !!}
                {!! Form::text('age_15_24_total',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_15_19','年齡_15-19歲: ') !!}
                {!! Form::text('age_15_19',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_20_24','年齡_20-24歲: ') !!}
                {!! Form::text('age_20_24',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_25_44_total','年齡_25-44歲_合計: ') !!}
                {!! Form::text('age_25_44_total',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_25_29','年齡_25-29歲: ') !!}
                {!! Form::text('age_25_29',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_30_34','年齡_30-34歲: ') !!}
                {!! Form::text('age_30_34',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_35_39','年齡_35-39歲: ') !!}
                {!! Form::text('age_35_39',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_40_44','年齡_40-44歲: ') !!}
                {!! Form::text('age_40_44',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_45_64_total','年齡_45-64歲_合計: ') !!}
                {!! Form::text('age_45_64_total',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_45_49','年齡_45-49歲: ') !!}
                {!! Form::text('age_45_49',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_50_54','年齡_50-54歲: ') !!}
                {!! Form::text('age_50_54',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_55_59','年齡_55-59歲: ') !!}
                {!! Form::text('age_55_59',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_60_64','年齡_60-64歲: ') !!}
                {!! Form::text('age_60_64',null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age_65_above','年齡_65歲及以上: ') !!}
                {!! Form::text('age_65_above',null, ['class' => 'form-control']) !!}
            </div>
            
            <div class="form-group">
                {!! Form::submit('修改地區教育人口詳細資料', ['class'=>'btn btn-primary form-control']) !!}
            </div>
            {!! Form::close() !!}
        </main>
        
        @include('footer')
    </body>
</html>
