<?php if($row[0] == "ログイン"): ?>

<div class="col-md-<?php echo e($row[2]); ?> menu active pad_vertical2 textcenter">
	<a href="<?php echo e($row[1]); ?>" class="login-button" href="<?php echo e($row[1]); ?>">
		<span class="login-button-text">
			<?php echo e($row[0]); ?>

		</span>
	</a>	
</div>

<?php elseif($row[0] == "ログアウト"): ?>


<div class="col-md-<?php echo e($row[2]); ?> menu active pad_vertical2 textcenter">
	<a href="<?php echo e($row[1]); ?>" class="logout-button" href="<?php echo e($row[1]); ?>">
		<span class="logout-button-text">
			<?php echo e($row[0]); ?>

		</span>
	</a>	
</div>

<?php else: ?>

<div class="col-md-<?php echo e($row[2]); ?> menu active pad_vertical2">
	<a href="<?php echo e($row[1]); ?>">
		<?php echo e($row[0]); ?>

	</a>
</div>

<?php endif; ?><?php /**PATH /home/r9920488/public_html/goodenoughtreasure.com/resources/views/layouts/header_eachmenu.blade.php ENDPATH**/ ?>