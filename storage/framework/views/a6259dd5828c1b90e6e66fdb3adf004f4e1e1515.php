<!DOCTYPE html>
<!-- saved from url=(0053)https://www.Tasnic-Capital.com/ja/cabinet/mt4/summary -->
<html lang="ja" class="cabinet sr"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>
        MT4 管理画面 | Tasnic-Capital 
    </title>
							
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.Tasnic-Capital.com/assets/img/favicon.ico">	

	<link rel="stylesheet" href="<?php echo e(asset("css/app.min.css")); ?>">
	<link rel="stylesheet" href="<?php echo e($currentPath); ?>/MT4 管理画面 _ Tasnic-Capital _files/custom-d.css">
	<link rel="stylesheet" href="<?php echo e($currentPath); ?>/MT4 管理画面 _ Tasnic-Capital _files/custom-j.css">

    <!--スマホでのハンバーガーメニューを機能させるために必要-->
    <script type="text/javascript" src="<?php echo e($tempRefPath); ?>/../../assets/js/jquery.min-ver=3.3.1.js"></script>
    <script type="text/javascript" src="<?php echo e($tempRefPath); ?>/../../assets/js/popper.min-ver=1.14.4.js"></script>
    <script type="text/javascript" src="<?php echo e($tempRefPath); ?>/../../assets/js/bootstrap.min-ver=4.1.3.js"></script>

    <script async="" src="<?php echo e($currentPath); ?>/MT4 管理画面 _ Tasnic-Capital _files/js"></script><script src="<?php echo e($currentPath); ?>/MT4 管理画面 _ Tasnic-Capital _files/f(1).txt"></script></head>
    
    <body style="height: 100%;">

    <style>
    .navbar-center-text-alert {
        width: 100%;
        text-align: center;
    }
    </style>

    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts.inquery_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts.inquery_responce', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->make('layouts.header2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			
	<div class="container">
		<div class="row">
			<div class="col-12 text-center my-5">
				<h1>会員ページ</h1>
			</div>
		</div>
	</div>
	<div class="container content-cabinet py-4">
		<div class="row">
			<div class="col col-12">
				<div class="d-xl-none d-block"><div class="container">	
    
                <?php echo $__env->make('personal.over_menu_sp', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

				</div>
			</div>
			<div class="row">
			    <div class="col col-md-3 col-12">

                    <?php echo $__env->make('personal.left_profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                </div>
                    
                <?php echo $__env->make('personal.over_menu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        
                <?php echo $__env->make('personal.setting_main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        

                        
                        
            </div>
        </div>
    </div>

</div>
</div>
	
	

    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
    
    </body></html><?php /**PATH /Applications/MAMP/htdocs/TasnicCapital/resources/views/personal/setting.blade.php ENDPATH**/ ?>