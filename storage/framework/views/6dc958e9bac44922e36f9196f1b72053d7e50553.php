<div class="row">
	<div>
		<table class="table noneborder">					  
			<tbody>
			<?php $__currentLoopData = $summary_main_table_body; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<th class="col-xs-6 green_color">
						<div class="text_right_box2">
						<?php echo e($row[0]); ?>

						</div>
					</th>
					<td class="col-xs-6"><?php echo e($row[1]); ?></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</tbody>
		</table>
	</div>
</div><?php /**PATH /home/r9920488/public_html/goodenoughtreasure.com/resources/views/personal/summary_main.blade.php ENDPATH**/ ?>