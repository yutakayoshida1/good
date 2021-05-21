<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- BootstrapのCSS読み込み -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<!-- jQuery読み込み -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<!-- BootstrapのJS読み込み -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	<!-- 全体 -->
	<link rel="stylesheet" href="<?php echo e(asset('css/basic.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/header_and_footer.css')); ?>">

	<!-- 会員ページ全体 -->
	<link rel="stylesheet" href="<?php echo e(asset('css/left_profile.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/over_menu.css')); ?>">

	<!-- 本ページ -->
	<link rel="stylesheet" href="<?php echo e(asset('css/summary.css')); ?>">
	<link rel="stylesheet" href="<?php echo e(asset('css/summary_main.css')); ?>">

	<title>
		GOOD ENOUGH FX
	</title>
	<style>
		.accordion {
			border: 1px solid #343F47;
		}

		.btn-block {
			background: #343F47;
			border-radius: unset;
			text-align: left;
			border-bottom: 1px solid gray;
			padding: 15px;
		}

		.btn-block:hover,
		.btn-block:visited,
		.btn-block:active,
		.btn-block:link {
			color: white;
			text-decoration: none;
		}

		.btn-success{
			background: green;
			width: 200px;
		}
		

		@media  screen and (max-width: 525px) {
			.col-md-12{
				padding: 0;
			}
		}
	</style>
</head>

<body>

	<div class="main-wrap">

		<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<div class="container my-6">
			<div class="col-12 my-5">
				<h1 class="text-center" style="margin: 50px;">よくあるご質問</h1>
			</div>
			<div class="col-md-12">
				<div class="accordion" id="accordionExample">
					<div>
						<a href="#faq1" class="btn-block" data-toggle="collapse">1. アカウントへの入出金はどうすればよいですか？</a>
						<div id="faq1" class="collapse">
							<p><br> いくつかの方法を使用してアカウントに入出金を行うことができます。会員ページの入出金ページをご覧ください。<br></p>
						</div>
					</div>
					<div>
						<a href="#faq2" class="btn-block" data-toggle="collapse">2. 口座から別の口座に資金を送金するにはどうすればよいですか？</a>
						<div id="faq2" class="collapse">
							<p><br> はい、私達は香港の承認されたブローカーディーラーです。<br></p>
						</div>
					</div>
					<div>
						<a href="#faq3" class="btn-block" data-toggle="collapse">3. GOOD ENOUGH FXは承認されたサイトですか？</a>
						<div id="faq3" class="collapse">
							<p><br>会員ページの資金移動ページから可能です。<br></p>
						</div>
					</div>
					<div>
						<a href="#faq4" class="btn-block" data-toggle="collapse">4. 私の資金は安全で分散されていますか？</a>
						<div id="faq4" class="collapse">
							<p><br>はい、すべての資金は分散された口座、ウォレットに保管されており、企業の資金とは完全に分離されており、混合されていません<br></p>
						</div>
					</div>
					<div>
						<a href="#faq5" class="btn-block" data-toggle="collapse">5. デモアカウントを提供していますか？</a>
						<div id="faq5" class="collapse">
							<p><br>はい、ここでデモアカウントにサインアップできます：<a href="<?php echo e(route('demo')); ?>">デモ口座開設ページ<br></p>
						</div>
					</div>
					<div>
						<a href="#faq6" class="btn-block" data-toggle="collapse">6. どのプラットフォームを提供していますか？</a>
						<div id="faq6" class="collapse">
							<p><br>MetaTrader 4を提供しています。将来的にMetaTrader5、cTrader、Currenex（FXのみ）を含む、世界をリードするいくつかの異なるプラットフォームを提供しています。SterlingTraderとの交換株式も提供していきます。<br></p>
						</div>
					</div>
					<div>
						<a href="#faq7" class="btn-block" data-toggle="collapse">7. 暗号資産取引を提供していますか？</a>
						<div id="faq7" class="collapse">
							<p><br>はい、さまざまな暗号通貨ペアを提供しています。スプレッドと実行を表示するには、当社のプラットフォームをダウンロードしてください。<br></p>
						</div>
					</div>
					<div>
						<a href="#faq8" class="btn-block" data-toggle="collapse">8. 私のアカウントを表示するためのWebベースのポータルを提供していますか？</a>
						<div id="faq8" class="collapse">
							<p><br>はい、クライアントキャビネットを提供しています。ここをクリックしてご覧ください。<br></p>
						</div>
					</div>
					<div>
						<a href="#faq9" class="btn-block" data-toggle="collapse">9. WebサイトでSWAPSを表示しますか？</a>
						<div id="faq9" class="collapse">
							<p><br>はい、そうです。このリンクをご覧ください：外国為替ロールオーバー率<br></p>
						</div>
					</div>
					<div>
						<a href="#faq10" class="btn-block" data-toggle="collapse">10. GOOD ENOUGH FXの流動性プロバイダーは誰ですか？</a>
						<div id="faq10" class="collapse">
							<p><br>さまざまなLPとの緊密な関係を通じて、市場で最もタイトなスプレッドのいくつかを提供しています。価格フィードを集計して、クライアントの最上位の価格を示す、いつでも最高のBID / OFFERを表示します。<br></p>
						</div>
					</div>
					<div>
						<a href="#faq11" class="btn-block" data-toggle="collapse">11. MAM口座開設申請はどうしたらよいですか？</a>
						<div id="faq11" class="collapse">
							<p><br><a href="mailto:support@good-enough.com">こちら</a>へ、ご連絡ください。(お使いの端末にメールソフトが入っていない場合、左記リンクから開けませんので、support@good-enough.comよりメールをお願いいたします。) <br></p>
						</div>
					</div>
					<div>
						<a href="#faq12" class="btn-block" data-toggle="collapse">12. レバレッジ設定が変更されることはありますか？</a>
						<div id="faq12" class="collapse">
							<p><br>金額上限により設定値が変更されます。注文が200万円以上で200倍、500万円以上で100倍に変更されます。<br></p>
						</div>
					</div>
					<div>
						<a href="#faq13" class="btn-block" data-toggle="collapse">13. 入金が反映されるまで、どれくらい時間がかかりますか？</a>
						<div id="faq13" class="collapse">
							<p><br>ご入金が反映されるまで、最大3営業日程度時間を要します。<br></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12">
				<div style="width: fit-content; margin:50px auto 30px auto;">
				<!-- <a href="#" class="btn-custom">お問い合わせ</a> -->
				<a href="<?php echo e(route('inquiry')); ?>" class="btn btn-success">お問い合わせ</a>
				</div>
			</div>
		</div>

		<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

		<a href="javascript:void(0);" id="scroll-top" title="Scroll to Top" style="display: none; opacity: 0.5;">Top<span></span></a>

	</div>
</body>

</html><?php /**PATH E:\Gitub project\good\resources\views/terms/faq.blade.php ENDPATH**/ ?>