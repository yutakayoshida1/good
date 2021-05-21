<div class="row">
	<div>
		<table class="table">					  
			<tbody>
			<?php $__currentLoopData = $summary_main_table_body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<th>
						<div class="text_right_box2">
						<?php echo e($row[0]); ?>

						</div>
					</th>
					<td><?php echo e($row[1]); ?></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
</div><?php /**PATH /Applications/MAMP/htdocs/GoodEnough3/resources/views/personal/summary_main.blade.php ENDPATH**/ ?>