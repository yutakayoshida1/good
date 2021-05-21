<div class="row">
<div class="col-md-12 overmenus">

		<div class="col-md-2 overmenu menu <?php if($type=='alternative'): ?> active <?php endif; ?>">
			<a href="<?php echo e(route('deposit')); ?>?type=alternative">
			暗号通貨入金
			</a>
		</div>

		<div class="col-md-2 overmenu menu <?php if($type=='credit_card'): ?> active <?php endif; ?>">
			<a href="<?php echo e(route('deposit')); ?>?type=credit_card">
			クレジットカード決済
			</a>
		</div>

		<div class="col-md-2 overmenu menu <?php if($type=='banks'): ?> active <?php endif; ?>">
			<a href="<?php echo e(route('deposit')); ?>?type=banks">
			銀行送金
			</a>
		</div>

		<div class="col-md-2 overmenu menu <?php if($type=='withdrawal'): ?> active <?php endif; ?>">
			<a href="<?php echo e(route('deposit')); ?>?type=withdrawal">
			出金
			</a>
		</div>

</div>
</div><?php /**PATH /Applications/MAMP/htdocs/GoodEnough3/resources/views/personal/over_menu2.blade.php ENDPATH**/ ?>