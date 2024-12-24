{!! Form::open(['url' => 'education/store']) !!}
    <div class="basic-data">
        <div class="form-group">
            {!! Form::label('district_or_region', '地區/區域') !!}
            {!! Form::text('district_or_region', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('junior_high_below_total', '初中以下總數') !!}
            {!! Form::number('junior_high_below_total', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('junior_high_below_primary_total', '初中以下（含小學）總數') !!}
            {!! Form::number('junior_high_below_primary_total', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('junior_high_total', '初中總數') !!}
            {!! Form::number('junior_high_total', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('senior_high_total', '高中總數') !!}
            {!! Form::number('senior_high_total', null, ['class' => 'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('junior_college_above_total', '大專及以上總數') !!}
            {!! Form::number('junior_college_above_total', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('junior_college_total', '大專總數') !!}
            {!! Form::number('junior_college_total', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('university_total', '大學總數') !!}
            {!! Form::number('university_total', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('graduate_school_total', '研究生總數') !!}
            {!! Form::number('graduate_school_total', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="age-data15_24">
        <div class="form-group">
            {!! Form::label('age_15_19', '15-19歲總數') !!}
            {!! Form::number('age_15_19', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('age_20_24', '20-24歲總數') !!}
            {!! Form::number('age_20_24', null, ['class' => 'form-control']) !!}
        </div>
    
    </div>

    <div class="age-data25_44">

        <div class="form-group">
            {!! Form::label('age_25_29', '25-29歲總數') !!}
            {!! Form::number('age_25_29', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('age_30_34', '30-34歲總數') !!}
            {!! Form::number('age_30_34', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('age_35_39', '35-39歲總數') !!}
            {!! Form::number('age_35_39', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('age_40_44', '40-44歲總數') !!}
            {!! Form::number('age_40_44', null, ['class' => 'form-control']) !!}
        </div>

    </div>

    <div class="age-data45_64">
        <div class="form-group">
            {!! Form::label('age_45_49', '45-49歲總數') !!}
            {!! Form::number('age_45_49', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('age_50_54', '50-54歲總數') !!}
            {!! Form::number('age_50_54', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('age_55_59', '55-59歲總數') !!}
            {!! Form::number('age_55_59', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('age_60_64', '60-64歲總數') !!}
            {!! Form::number('age_60_64', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="age-data64">
        <div class="form-group">
            {!! Form::label('age_65_above_total', '65歲及以上總數') !!}
            {!! Form::number('age_65_above_total', null, ['class' => 'form-control']) !!}
        </div>
    </div>

    <div class="form-group">
        {!! Form::submit($SBTT,['class' => 'btn btn-primary form-control']) !!}
    </div>
