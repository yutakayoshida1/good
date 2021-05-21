<div class="row">
	<div>
		<table class="table noneborder">					  
			<tbody>
				<?php $__currentLoopData = $personal->left_profile_table_body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<tr>
					<th class="col-xs-4">
						<div class="text_right_box">
						<?php echo e($row[0]); ?>

						</div>
					</th>
					<td class="col-xs-8">
						<div class="black_float_box">
						<?php echo e($row[1]); ?>

						</div>
					</td>
				</tr>
					
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
</div><?php /**PATH /home/r9920488/public_html/goodenoughtreasure.com/resources/views/personal/left_profile.blade.php ENDPATH**/ ?>