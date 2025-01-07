

<?php $__env->startSection('navbar'); ?>
    <?php echo $__env->make('particials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
       
<?php $__env->startSection('header'); ?>
<div class="image"><img src="/pictures/62f0da478154a8e89b69f0a4_SDG目標04.png" alt="Cover Image"/></div>
<?php $__env->stopSection(); ?>
   
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('theform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>
        

<?php echo $__env->make('layouts.model', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\team11\resources\views/populationEducations.blade.php ENDPATH**/ ?>