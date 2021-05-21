<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!-- BootstrapのCSS読み込み -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <!-- jQuery読み込み -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- BootstrapのJS読み込み -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

    <!-- 全体 -->
    <link rel="stylesheet" href="<?php echo e(asset('css/basic.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/header_and_footer.css')); ?>">

     <!-- 会員ページ全体 -->
    <link rel="stylesheet" href="<?php echo e(asset('css/left_profile.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/over_menu.css')); ?>">

     <!-- 本ページ -->
    <link rel="stylesheet" href="<?php echo e(asset('css/summary.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/summary_main.css')); ?>">

	<title>
		GOOD ENOUGH FX
    </title>
</head>

<body>
<div class="main-wrap">
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">
	
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8" style="background: linear-gradient(0.25turn, #0F141C,#343F47);padding-bottom:50px;margin-top:50px;margin-bottom:50px;">

			<div class="row center_text" style="color:white;height:100px;line-height:100px;font-size:20px;">
				会社概要
			</div>

			<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8 pad0" style="background: white;">
			<table class="table">					  
				<tbody>
				<?php $__currentLoopData = $summary_main_table_body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<tr>
						<th class="col-md-3" style="background-color:#F8F8F8;">
							<div class="center_text">
							<?php echo e($row[0]); ?>

							</div>
						</th>
						<td class="col-md-9">
							<div class="text_left_box2">
							<?php if($row[1] == "multi_contents"): ?>
								<?php $__currentLoopData = $row[2]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
								<?php echo e($content); ?><br>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							<?php else: ?>
							<?php echo e($row[1]); ?>

							<?php endif; ?>
							</div>
						</td>
					</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</tbody>
			</table>
			</div>
			<div class="col-md-2"></div>
			</div>

		</div>
		<div class="col-md-2"></div>
	</div>
	
</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

</body>
</html>

<?php /**PATH /home/r9920488/public_html/goodenoughtreasure.com/resources/views/terms/aboutcompany.blade.php ENDPATH**/ ?>