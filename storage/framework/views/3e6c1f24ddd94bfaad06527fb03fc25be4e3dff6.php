<html>
    <head>
        <title><?php echo $__env->yieldContent('title', '我國教育人口'); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('/app.css')); ?>">     
        <link rel="stylesheet" href="<?php echo e(asset('/createdata.css')); ?>">     
    </head>
    
        <?php echo $__env->make('particials.navbar', ['navbarImage' => '/pictures/E_SDG_Icons-04.jpg', 'navbarText' => 'Quality Education(優質教育)'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body>
        
        <main>
            <h1>修改其中一筆就業者之教育程度與年齡</h1>
            <?php echo $__env->make('messagelist', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo Form::model($populations, ['method'=>'PATCH', 'action'=>['\App\Http\Controllers\PopulationEducationsController@update', $populations->id]]); ?>


            <div class="form-group">
                <?php echo Form::label('region','地區名稱: '); ?>

                <?php echo Form::text('region',$populations->region, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('total','總計人數: '); ?>

                <?php echo Form::text('total',$populations->total, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('edu_jr_high_below_total','教育程度_國中及以下_合計: '); ?>

                <?php echo Form::text('edu_jr_high_below_total',$populations->edu_jr_high_below_total, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('edu_primary_below','教育程度_國中及以下_國小及以下: '); ?>

                <?php echo Form::text('edu_primary_below',$populations->edu_primary_below, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('edu_jr_high','教育程度_國中及以下_國中: '); ?>

                <?php echo Form::text('edu_jr_high',$populations->edu_jr_high, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('edu_senior_high_voc','教育程度_高級中等_高中_高職: '); ?>

                <?php echo Form::text('edu_senior_high_voc',$populations->edu_senior_high_voc, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('edu_college_above_total','教育程度_大專及以上_合計: '); ?>

                <?php echo Form::text('edu_college_above_total',$populations->edu_college_above_total, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('edu_junior_college','教育程度_大專及以上_專科: '); ?>

                <?php echo Form::text('edu_junior_college',$populations->edu_junior_college, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('edu_university','教育程度_大專及以上_大學: '); ?>

                <?php echo Form::text('edu_university',$populations->edu_university, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('edu_grad_school','教育程度_大專及以上_研究所: '); ?>

                <?php echo Form::text('edu_grad_school',$populations->edu_grad_school, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_15_24_total','年齡_15-24歲_合計: '); ?>

                <?php echo Form::text('age_15_24_total',$populations->age_15_24_total, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_15_19','年齡_15-19歲: '); ?>

                <?php echo Form::text('age_15_19',$populations->age_15_19, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_20_24','年齡_20-24歲: '); ?>

                <?php echo Form::text('age_20_24',$populations->age_20_24, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_25_44_total','年齡_25-44歲_合計: '); ?>

                <?php echo Form::text('age_25_44_total',$populations->age_25_44_total, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_25_29','年齡_25-29歲: '); ?>

                <?php echo Form::text('age_25_29',$populations->age_25_29, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_30_34','年齡_30-34歲: '); ?>

                <?php echo Form::text('age_30_34',$populations->age_30_34, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_35_39','年齡_35-39歲: '); ?>

                <?php echo Form::text('age_35_39',$populations->age_35_39, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_40_44','年齡_40-44歲: '); ?>

                <?php echo Form::text('age_40_44',$populations->age_40_44, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_45_64_total','年齡_45-64歲_合計: '); ?>

                <?php echo Form::text('age_45_64_total',$populations->age_45_64_total, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_45_49','年齡_45-49歲: '); ?>

                <?php echo Form::text('age_45_49',$populations->age_45_49, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_50_54','年齡_50-54歲: '); ?>

                <?php echo Form::text('age_50_54',$populations->age_50_54, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_55_59','年齡_55-59歲: '); ?>

                <?php echo Form::text('age_55_59',$populations->age_55_59, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_60_64','年齡_60-64歲: '); ?>

                <?php echo Form::text('age_60_64',$populations->age_60_64, ['class' => 'form-control']); ?>

            </div>
            <div class="form-group">
                <?php echo Form::label('age_65_above','年齡_65歲及以上: '); ?>

                <?php echo Form::text('age_65_above',$populations->age_65_above, ['class' => 'form-control']); ?>

            </div>
                      
            <div class="form-group">
                <?php echo Form::submit('修改地區教育人口詳細資料', ['class'=>'btn btn-primary form-control']); ?>

            </div>
            <?php echo Form::close(); ?>

        </main>
        
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\wamp64\www\team11\resources\views/editdata.blade.php ENDPATH**/ ?>