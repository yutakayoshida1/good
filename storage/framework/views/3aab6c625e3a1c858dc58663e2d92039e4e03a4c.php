<div class="container black_back">
    <div class="row">

		<div class="col-md-2 textcenter">
			<img src="<?php echo e(asset('img/basic/logo.png')); ?>" class="logo">
		</div>
		
		<div class="col-md-10 textcenter header_menu">
			<div class="col-md-6 textcenter">
				<?php $__currentLoopData = $global->header_table_body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-<?php echo e($row[2]); ?> menu active">
					<a href="<?php echo e($row[1]); ?>">
						<?php echo e($row[0]); ?>

					</a>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>

			<div class="col-md-6 textcenter">
				<?php $__currentLoopData = $global->header_table_body2; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="col-md-<?php echo e($row[2]); ?> menu active">
					<a href="<?php echo e($row[1]); ?>">
						<?php echo e($row[0]); ?>

					</a>
				</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
		</div>

		
		

	</div>
</div><?php /**PATH /Applications/MAMP/htdocs/GoodEnough3/resources/views/layouts/header.blade.php ENDPATH**/ ?>