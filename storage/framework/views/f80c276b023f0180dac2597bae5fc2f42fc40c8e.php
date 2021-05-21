<div class="row mt-5">
	<h2 class="text-center col-12">入出金</h2>
</div>

<div class="row depositFunds mb-3">

	<div class="col-12">

		<ul class="nav nav-tabs" id="depositOptions" role="tablist">
			<li class="nav-item">
				<a class="nav-link <?php if($type=='credit_card'): ?> active <?php endif; ?>" id="credit_card" href="<?php echo e(route('deposit')); ?>?type=credit_card" role="tab" aria-controls="CREDIT_CARD" aria-selected="true">仮想通貨決済</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if($type=='alternative'): ?> active <?php endif; ?>" id="alternative" href="<?php echo e(route('deposit')); ?>?type=alternative" role="tab" aria-controls="ALTERNATIVE" aria-selected="false">クレジットカード決済</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if($type=='banks'): ?> active <?php endif; ?>" id="banks" href="<?php echo e(route('deposit')); ?>?type=banks" role="tab" aria-controls="BANKS" aria-selected="false">銀行送金</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if($type=='withdrawal'): ?> active <?php endif; ?>" id="withdrawal" href="<?php echo e(route('deposit')); ?>?type=withdrawal" role="tab" aria-controls="WITHDRAWALS" aria-selected="false">出金</a>
			</li
		</ul>

		<div class="tab-content" id="depositOptionsContent">
			<div class="tab-pane fade py-4 <?php if($type=='credit_card'): ?> show active <?php endif; ?>" id="depositTabCREDIT_CARD" role="tabpanel" aria-labelledby="credit_card">
			<?php if($type=='credit_card'): ?>
			<?php echo $__env->make('deposits_parts.cryptocurrency', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php endif; ?>
			</div>
			<div class="tab-pane fade py-4 <?php if($type=='alternative'): ?> show active <?php endif; ?>" id="depositTabALTERNATIVE" role="tabpanel" aria-labelledby="alternative">
			<?php if($type=='alternative'): ?>
			<?php echo $__env->make('deposits_parts.bank', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php endif; ?>
			</div>
			<div class="tab-pane fade py-4 <?php if($type=='banks'): ?> show active <?php endif; ?>" id="depositTabBANKS" role="tabpanel" aria-labelledby="banks">
			<?php if($type=='banks'): ?>
			<?php echo $__env->make('deposits_parts.credit', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php endif; ?>
			</div>
			<div class="tab-pane fade py-4 <?php if($type=='withdrawal'): ?> show active <?php endif; ?>" id="depositTabBANKS" role="tabpanel" aria-labelledby="banks">
			<?php if($type=='withdrawal'): ?>
			<?php echo $__env->make('deposits_parts.withdrawal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			<?php endif; ?>
			</div>
		</div>

	</div>

	<div class="col-12 iframeContainer pt-3 d-none">
		<button id="backToTab" data-tab-target="depositTab" data-tab-category="" class="btn btn-outline-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg> 前のページに戻る</button>
		<div class="w-100 p-5 text-center methodLoader">
			<span class="spinner-border spinner-border-lg text-primary" role="status" aria-hidden="true"></span>
		</div>
		<div id="depositIframeContainer" class="embed-responsive">
			<iframe id="depositIframe" class="embed-responsive-item" src="<?php echo e($currentPath); ?>/MT4 管理画面 _ Tasnic-Capital _files/saved_resource.html"></iframe>
		</div>
	</div>
	
</div>

<div class="row">
	<div class="col-12 py-12"><hr></div>
	<div class="col-12 col-lg-12">
		<ul class="list-dot text-muted">
			<?php if($type=='banks' && $kind!=null): ?>
			<!--申請フォームと銀行詳細-->
			<li>振込人に口座番号の記載をお願いします。</li>
			<li>金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい</li>
			<li>場合により口座への入金反映が通常より遅れる場合がございます</li>
			<li>当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。返還が可能な場合においても、それに係る手数料等をお支払いただくことがあります。</li>
			<li>ご入金には手数料（2.5%）が発生致します。</li>
			<li>外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。</li>
			<li>ご入金後、１週間を過ぎても残高に反映されない場合は、お問合せ画面よりご連絡ください。</li>

			<?php elseif($type=='withdrawal'): ?>
			<!--出金(一覧も詳細も区別なし)-->
			<li>会計部署は週末がお休みとなりますのでご留意ください</li>
			<li>会計監査機関の依頼に準じ毎月4回目以降の出金やマネーロンダリングが疑われる送金依頼は保留となります</li>
			<li>場合により口座への入金反映が通常より遅れる場合がございます</li>
			<li>当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。返還が可能な場合においても、それに係る手数料等をお支払いただくことがあります。</li>
			<li>現金のご出金には手数料（2.5%）が発生致します。</li>
			<li class="btc_payment">暗号通貨のご出金には手数料（5%）が発生致します。 </li>
			<li>外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。</li>

			<?php elseif($type=='alternative'): ?>
			<!--クレジット(一覧も詳細も区別なし)-->
			<li>金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい</li>
			<li>場合により口座への入金反映が通常より遅れる場合がございます</li>
			<li>当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。返還が可能な場合においても、それに係る手数料等をお支払いただくことがあります。</li>
			<li>コンビニエンスストアから行われた入金については入金した金額相当の資産の移転を 7 日間制限いたします。</li>

			<?php else: ?>
			<!--銀行一覧、仮想通貨-->
			<li>金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい</li>
			<li>場合により口座への入金反映が通常より遅れる場合がございます</li>
			<li>当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。返還が可能な場合においても、それに係る手数料等をお支払いただくことがあります。</li>
			<!--仮想通貨-->
			<?php if($type=='credit_card'): ?>
			<li>ご入金には手数料（5%）が発生致します。</li>
			<?php endif; ?>
			<li>コンビニエンスストアから行われた入金については入金した金額相当の資産の移転を 7 日間制限いたします。</li>
			<!--銀行一覧-->
			<?php if($type=='banks'): ?>
			<li>ご入金には手数料（2.5%）が発生致します。</li>
			<li>外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。</li>
			<?php endif; ?>

			<?php endif; ?>
		</ul>
	</div>
</div><?php /**PATH /Applications/MAMP/htdocs/TasnicCapital/resources/views/personal/DepositsAndWithdrawals_main.blade.php ENDPATH**/ ?>