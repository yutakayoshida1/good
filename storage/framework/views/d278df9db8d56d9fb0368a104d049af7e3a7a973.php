<div class="col col-md-9 col-12">
<div class="d-xl-block d-none"><div class="container">	
	<nav class="navbar navbar-expand-lg navbar-light nav-cabinet">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cabinetNavbar" aria-controls="cabinetNavbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="cabinetNavbar">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item">
					<a class="nav-link disabled text-uppercase" href="https://www.Tasnic-Capital.com/ja/cabinet/mt4/summary#">mt4</a>
				</li>
				<li class="nav-item <?php if($thisRouteName=='summary'): ?> navbar-nav-active <?php endif; ?>">
					<a class="nav-link" href="<?php echo e(route('summary')); ?>">口座サマリー</a>
				</li>
				
				<?php if($details['history_disabled']): ?>
				<li class="nav-item <?php if($thisRouteName=='history'): ?> navbar-nav-active <?php endif; ?>">
					<a class="nav-link" href="#" style="color:#f0f0f0;">口座履歴</a>
				</li>
				<?php else: ?>
				<li class="nav-item <?php if($thisRouteName=='history'): ?> navbar-nav-active <?php endif; ?>">
					<a class="nav-link" href="<?php echo e(route('history')); ?>">口座履歴</a>
				</li>
				<?php endif; ?>	
				
				<li class="nav-item <?php if($thisRouteName=='deposit'): ?> navbar-nav-active <?php endif; ?>">
					<a class="nav-link" href="<?php echo e(route('deposit')); ?>">入出金</a>
				</li>
								<li class="nav-item ">
				<a class="nav-link" href="<?php echo e(route('transfer')); ?>">資金移動</a>
								</li>
				<li class="nav-item ">
					<a class="nav-link" href="<?php echo e(route('addaccount')); ?>">追加口座</a>
				</li>
									<li class="nav-item <?php if($thisRouteName=='setting'): ?> navbar-nav-active <?php endif; ?>">
						<a class="nav-link" href="<?php echo e(route('setting')); ?>">設定</a>
					</li>
											</ul>
			<ul class="navbar-out">
				<li class="nav-item">
					<a class="nav-link" title="ログアウト" href="<?php echo e(route('mt4logout')); ?>"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg></a>
				</li>
			</ul>
		</div>
	</nav>
</div>
</div><?php /**PATH /Applications/MAMP/htdocs/TasnicCapital/resources/views/personal/over_menu.blade.php ENDPATH**/ ?>