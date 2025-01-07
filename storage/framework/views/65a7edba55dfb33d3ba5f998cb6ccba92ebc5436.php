
<?php echo $__env->make('card', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
<a href="<?php echo e(route('region.create')); ?>">新增地區資料</a>
<?php endif; ?>
<?php if(auth()->guard()->check()): ?>
<h1>就業者之教育程度與年齡</h1>
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
        <td>操作1</td>
        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
        <td>操作2</td>
        <td>操作3</td>
        <?php elseif (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manager')): ?>
        <td>操作2</td>
        <?php endif; ?>
    </tr>
    <?php $__currentLoopData = $pop; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $populations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($populations->region); ?></td>
            <td><?php echo e($populations->total); ?></td>
            <td><?php echo e($populations->edu_jr_high_below_total); ?></td>
            <td><?php echo e($populations->edu_college_above_total); ?></td>
            <td><?php echo e($populations->age_15_24_total); ?></td>
            <td><?php echo e($populations->age_25_44_total); ?></td>
            <td><?php echo e($populations->age_45_64_total); ?></td>
            <td><?php echo e($populations->age_65_above); ?></td>
            <td><a href="<?php echo e(route('region.show',['id' => $populations->id])); ?>">show</a></td>
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('admin')): ?>
            <td><a href="<?php echo e(route('region.edit',['id' => $populations->id])); ?>">edit</a></td>
            <td>
                <form action="<?php echo e(url('/delete',['id' => $populations->id])); ?>" method="POST">
                    <input class="btn btn-default" type="submit" value="刪除"/>
                    <?php echo method_field('delete'); ?>
                    <?php echo csrf_field(); ?> 
                </form>
            </td>
            <?php elseif (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('manager')): ?>
            <td><a href="<?php echo e(route('region.edit',['id' => $populations->id])); ?>">edit</a></td>
            
           
            <?php endif; ?>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php endif; ?>
<?php if(auth()->guard()->guest()): ?>
    <h1>登入可看更多資訊...</h1>
<?php endif; ?>



<?php /**PATH C:\wamp64\www\team11\resources\views/theform.blade.php ENDPATH**/ ?>