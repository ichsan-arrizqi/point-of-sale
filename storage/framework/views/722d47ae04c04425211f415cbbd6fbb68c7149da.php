<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>POS</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendors/mdi/css/materialdesignicons.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendors/css/vendor.bundle.base.css')); ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')); ?>">
  <link rel="stylesheet" href="<?php echo e(asset('admin/assets/vendors/jvectormap/jquery-jvectormap.css')); ?>">
  <!-- End plugin css for this page -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?php echo e(asset('admin/assets/css/demo/style.css')); ?>">
</head>
<body>
<script src="<?php echo e(asset('admin/assets/js/preloader.js')); ?>"></script>
  <div class="body-wrapper">
    
    <?php echo $__env->make('layouts.dashboard.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- partials -->
    <div class="main-wrapper mdc-drawer-app-content">
      
      <?php echo $__env->make('layouts.dashboard.partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
            
               <?php if(session()->has('success')): ?>
                    <h1><?php echo e(session()->get('success')); ?></h1>
                <?php endif; ?>
            
      <?php echo $__env->yieldContent('content'); ?>
    </div>
  </div>
  <!-- plugins:js -->
  <script src="<?php echo e(asset('admin/assets/vendors/js/vendor.bundle.base.js')); ?>"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="<?php echo e(asset('admin/assets/vendors/chartjs/Chart.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/assets/vendors/jvectormap/jquery-jvectormap.min.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')); ?>"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="<?php echo e(asset('admin/assets/js/material.js')); ?>"></script>
  <script src="<?php echo e(asset('admin/assets/js/misc.js')); ?>"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="<?php echo e(asset('admin/assets/js/dashboard.js')); ?>"></script>
  <!-- End custom js for this page-->
</body>
</html>
<?php /**PATH /opt/lampp/htdocs/POS/resources/views/layouts/dashboard/app.blade.php ENDPATH**/ ?>