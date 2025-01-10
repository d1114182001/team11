<html>
    <head>
        
        <title>我國教育人口</title>
        <link rel="stylesheet" href="<?php echo e(asset('/app.css')); ?>">
        <script src="test.js"></script>     
    </head>
        
    <?php echo $__env->make('particials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
            
    <header>
        
        <div class="imgcontainer">
            <div class="image"><img src="/pictures/6127031.jpg"></div>
            <div class="mask">
              <div class="mask-text">在台灣，學科考試至今仍是衡量孩子學習的重要標準，<br>
                永續教育也依循過往填鴨式及背誦SDGs的教學方式， <br>
                聯合國的研究指出，這樣的教學模式不僅效率低下，<br>
                反而讓孩子對認識議題的動機更低，讓不關心的程度更加嚴重。<br></div>
            </div>
            
        </div>
        
    </header>
    <body>
        
        <main>
         
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('theform', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
           
        </main>
        
        <?php echo $__env->make('footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html>
<?php /**PATH C:\wamp64\www\team11\resources\views/populationEducations.blade.php ENDPATH**/ ?>