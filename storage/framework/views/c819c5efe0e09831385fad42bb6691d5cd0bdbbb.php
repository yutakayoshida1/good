
<div class="col-md-12 member_page_title">
	<div class="col-md-4">
		<div class="black_float_box">
			メンバーページ
		</div>
	</div>
</div>

<div class="col-md-12 overmenus">
	<div class="col-md-4">
		
	</div>
	<div class="col-md-8">
		
		<div class="col-md-2 overmenu menu <?php if(url()->current() == route('summary')): ?> active <?php endif; ?>">
			<a href="<?php echo e(route('summary')); ?>">
				口座サマリー
			</a>
		</div>

		<div class="col-md-2 overmenu menu <?php if(url()->current() == route('history')): ?> active <?php endif; ?>">
			<a href="<?php echo e(route('history')); ?>">
				履歴
			</a>
		</div>

		<div class="col-md-2 overmenu menu <?php if(url()->current() == route('deposit')): ?> active <?php endif; ?>">
			<a href="<?php echo e(route('deposit')); ?>">
				入出金
			</a>
		</div>

		<div class="col-md-2 overmenu menu <?php if(url()->current() == route('transfer')): ?> active <?php endif; ?>">
			<a href="<?php echo e(route('transfer')); ?>">
			資金移動
			</a>
		</div>

		<div class="col-md-2 overmenu menu <?php if(url()->current() == route('addaccount')): ?> active <?php endif; ?>">
			<a href="<?php echo e(route('addaccount')); ?>">
			追加口座
			</a>
		</div>

		<div class="col-md-2 overmenu menu <?php if(url()->current() == route('setting')): ?> active <?php endif; ?>">
			<a href="<?php echo e(route('setting')); ?>">
			設定
			</a>
		</div>

	</div>
</div><?php /**PATH E:\Gitub project\good\resources\views/personal/over_menu.blade.php ENDPATH**/ ?>