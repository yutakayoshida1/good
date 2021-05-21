<div class="container-fluid black_back pc-nav">
    <div class="row">

		<div class="col-md-2 textcenter2 pad_vertical">
			<a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('img/basic/logo.png')); ?>" class="logo"></a>
		</div>
		
		<div class="col-md-10 textcenter header_menu">
			<div class="col-md-6 textcenter">
				<?php $__currentLoopData = $global->header_table_body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo $__env->make('layouts.header_eachmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>

			<div class="col-md-6 textcenter">
				<?php $__currentLoopData = $global->header_table_body2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<?php echo $__env->make('layouts.header_eachmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>
	</div>
</div>

<div class="sp-nav">
	<div class="wrapper">
		<a href="<?php echo e(url('/')); ?>"><img src="<?php echo e(asset('img/basic/logo.png')); ?>" class="logo"></a>
		<img src="<?php echo e(asset('img/clipart365828.png')); ?>" id="open-menu" class="menu">
		<img src="<?php echo e(asset('img/Close-256.png')); ?>" class="time" id="close-menu" >
	</div>
</div>

<div class="sp-menu" id="spmenu">
	<div class="btn-wrapper">
		<a href="<?php echo e($global->header_table_body2[2][1]); ?>" class="login-btn">
			<?php echo e($global->header_table_body2[2][0]); ?>

		</a>
		<a href="<?php echo e($global->header_table_body2[3][1]); ?>" class="logout-btn">
			<?php echo e($global->header_table_body2[3][0]); ?>

		</a>
	</div>

	<div class="link-container">

		<?php $__currentLoopData = $global->header_table_body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<?php echo $__env->make('layouts.header_eachmenu', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

		<a href="<?php echo e($global->header_table_body[0][1]); ?>" class="logout-btn">
			<?php echo e($global->header_table_body2[0][0]); ?>

		</a>

		<a href="<?php echo e(url('/inquiry')); ?>" class="logout-btn">
			<?php echo e($global->header_table_body2[1][0]); ?>

		</a>
	</div>
</div>

<script>
	$("#open-menu").on('click' , function() {
		$(this).css('display' , 'none')
		$("#close-menu").css('display' , 'block');
		$("#spmenu").fadeIn();
	});

	$("#close-menu").on('click' , function() {
		$(this).css('display' , 'none')
		$("#open-menu").css('display' , 'block');
		$("#spmenu").fadeOut();
	});
</script><?php /**PATH /home/r9920488/public_html/goodenoughtreasure.com/resources/views/layouts/header.blade.php ENDPATH**/ ?>