<html>
    <head>
        <title><?php echo $__env->yieldContent('title', '我國教育人口'); ?></title>
        <link rel="stylesheet" href="<?php echo e(asset('/app.css')); ?>">     
    </head>
        <?php if(isset($pop) && $pop->isNotEmpty()): ?>
            <?php echo $__env->make('particials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php else: ?>  
            <?php echo $__env->yieldContent('navbar'); ?>
        <?php endif; ?>
            
    <header>
        <?php if(isset($pop) && $pop->isNotEmpty()): ?>
            <div class="image"><img src="/pictures/62f0da478154a8e89b69f0a4_SDG目標04.png" alt="Cover Image"/></div>
        <?php else: ?>
            <?php echo $__env->yieldContent('header'); ?>
        <?php endif; ?>
    </header>
    <body>
<!--        <?php if(Route::has('login')): ?>
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <?php if(auth()->guard()->check()): ?>
                <a href="<?php echo e(url('/home')); ?>" class="text-sm text-gray-700 underline">Home</a>
            <?php else: ?>
                <a href="<?php echo e(route('login')); ?>" class="text-sm text-gray-700 underline">Login</a>

                <?php if(Route::has('register')): ?>
                    <a href="<?php echo e(route('register')); ?>" class="ml-4 text-sm text-gray-700 underline">Register</a>
                <?php endif; ?>
            <?php endif; ?>
        </div>
        <?php endif; ?> -->
        <main>
            <?php echo $__env->yieldContent('content'); ?>
            <!-- 給主模板的主要內容 -->
            <?php if(isset($pop) && $pop->isNotEmpty()): ?>
                <?php echo $__env->make('theform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
            
        </main>
        
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH C:\wamp64\www\team11\resources\views/populationEducations.blade.php ENDPATH**/ ?>