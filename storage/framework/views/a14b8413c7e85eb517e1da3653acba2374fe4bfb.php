<div class="row">
<div class="col-md-12 overmenus">

		<div class="col-md-2 overmenu menu <?php if($withdraw_type=='banks'): ?> active <?php endif; ?>">
			<a href="<?php echo e(route('deposit')); ?>?type=withdrawal&withdraw_type=banks">
			銀行出金
			</a>
		</div>

		<div class="col-md-2 overmenu menu <?php if($withdraw_type=='crypt'): ?> active <?php endif; ?>">
			<a href="<?php echo e(route('deposit')); ?>?type=withdrawal&withdraw_type=crypt">
			暗号通貨出金
			</a>
		</div>

</div>
</div><?php /**PATH /Applications/MAMP/htdocs/GoodEnough3/resources/views/personal/over_menu3.blade.php ENDPATH**/ ?>