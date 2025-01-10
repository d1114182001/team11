<html>
    <head>
        <title>我國教育人口</title>
        <link rel="stylesheet" href="<?php echo e(asset('/app.css')); ?>">     
    </head>
    
        <?php echo $__env->make('particials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <body>
        
        <main>
            <h1>就業者之教育程度與年齡</h1>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
            <a href="<?php echo e(route('region.create')); ?>"class="newa">新增地區資料</a>
            <?php endif; ?>
            
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
                        <td>顯示</td>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                        <td>編輯</td>
                        <td>刪除</td>
                        <?php elseif (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manager')): ?>
                        <td>編輯</td>
                        <?php endif; ?>
                    </tr>
                    
                        <tr>
                            <td><?php echo e($populations->region); ?></td>
                            <td><?php echo e($populations->total); ?></td>
                            <td><?php echo e($populations->edu_jr_high_below_total); ?></td>
                            <td><?php echo e($populations->edu_college_above_total); ?></td>
                            <td><?php echo e($populations->age_15_24_total); ?></td>
                            <td><?php echo e($populations->age_25_44_total); ?></td>
                            <td><?php echo e($populations->age_45_64_total); ?></td>
                            <td><?php echo e($populations->age_65_above); ?></td>
                            <td><a href="<?php echo e(route('region.show',['id' => $populations->id])); ?>"class="newa">show</a></td>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
                                <td><a href="<?php echo e(route('region.edit',['id' => $populations->id])); ?>"class="newa">edit</a></td>
                            <td>
                                <form action="<?php echo e(url('/delete',['id' => $populations->id])); ?>" method="POST">
                                    <input class="btn btn-danger btn-sm" type="submit" value="刪除"/>
                                    <?php echo method_field('delete'); ?>
                                    <?php echo csrf_field(); ?> 
                                </form>
                            </td>
                            <?php elseif (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manager')): ?>
                            
                            <td><a href="<?php echo e(route('region.edit',['id' => $populations->id])); ?>"class="newa">edit</a></td>
                            <?php endif; ?>
                        </tr>
                    
                </table>
                
                
        </main>
        
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\wamp64\www\team11\resources\views/showdata.blade.php ENDPATH**/ ?>