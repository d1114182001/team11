<!-- navbar.blade.php -->
<nav class="navbar">
    <div class="container">
        <!--<img src="/pictures/E_SDG_Icons-04.jpg" width="80" alt="dd"/>-->
        <img src="<?php echo e($navbarImage ?? '/pictures/E_SDG_Icons-04.jpg'); ?>" width="80"/>
        <!--<span class="sitename">Quality Education(優質教育)</span>-->
        <span class="sitename"><?php echo e($navbarText ?? 'Quality Education(優質教育)'); ?></span>
        <ul>
            <li>
              <a href="http://127.0.0.1:8000">Home</a>
            </li>
            <li>
              <a href="<?php echo e(route('login')); ?>">Login</a>
            </li>
            <li>
              <a href="<?php echo e(route('register')); ?>">Register</a>
            </li>
            <li>
              <a href="<?php echo e(route('about')); ?>">About Other SDG</a>
            </li>
          </ul>    
    </div>
</nav>
<?php /**PATH C:\wamp64\www\team11\resources\views/particials/navbar.blade.php ENDPATH**/ ?>