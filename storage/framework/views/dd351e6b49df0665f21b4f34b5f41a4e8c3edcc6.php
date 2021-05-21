<!DOCTYPE html>
<html lang="ja" class="home  ">

<head>
	<meta charset="utf-8">
	<title>
		TASNIC CAPITAL|オンラインFXトレード
	</title>
	
	<link name="canonical" href="index.html">


	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo e($currentPath); ?>/../assets/img/tn-favicon.ico.png">



	<link rel="stylesheet" href="<?php echo e($currentPath); ?>/../assets/css/app.min-v=0.01.25.css">
	<link rel="stylesheet" href="<?php echo e($currentPath); ?>/../assets/css/custom-d-v=0.01.25.css">
	<link rel="stylesheet" href="<?php echo e($currentPath); ?>/../assets/css/custom-j-v=0.01.25.css">



	<meta name="description" content="タスニックキャピタル【TASNIC CAPITAL】は仮想通貨入出金,MT4対応,FXトレードで業界最狭のスプレッドを誇るネット証券会社です。世界のトレーダーにMT4口座等をご提供しています。">

	<style>

@media  screen and (min-width: 1281px)
{
	.parent1
	{
		position: relative;
		width: 100%;
		font-size:35px;
	}
}

@media  screen and (max-width: 1280px)
{
	.parent1
	{
		position: relative;
		width: 100%;
		max-width: 1280px;
		font-size:3vw;
	}
}	

.parent1:before
{
	content: "";
	display: block;
	padding-top: 68%;
}

.child
{
	position: absolute;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
	font-size:100%;
}

.news1link
{
	position:absolute;
	top:39%;
	left:5%;
	color:black;
	font-size:100%;
}

.news2link
{
	position:absolute;
	top:65%;
	left:5%;
	color:black;
	font-size:100%;
}

	</style>

	
</head>

<body>

	<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('layouts.inquery_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('layouts.inquery_responce', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('layouts.header2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	
	



	<div class="container-fluid">
		<div class="row bg-collage-home">
			<div class="half-rect bg"></div>
			<div class="half-rect left"></div>
			<div class="half-rect right"></div>
		</div>
	</div>
	<section class="container-fluid px-xl-6 px-md-4 pb-6 position-relative mt-n30" id="spreads" style="padding-top:40px!important;">
		<div class="row">
			<div class="col-12 text-center mb-3 filter-drop-shadow-lg">
				<h1 class="init-home-text">TASNIC-CAPITAL Markets</h1>
				<h2 class="text-white">最小スプレッド 1.5!<br>
					<span class="h1 text-white">TASNIC-CAPITALが実現した暗号通貨ユーザーも待望の機能搭載のFX TRADE by MT4</span></h2>
				<p class="h4 text-center text-light">主要な暗号通貨での入金・出金が可能に！</p>
			</div>
		</div>
		<div class="row flex-sm-row flex-column-reverse">
			<div class="col-lg-7 col-sm-6 col-12">
				<img class="img-fluid w-100 position-relative homeDevices" src="<?php echo e($currentPath); ?>/../assets/img/devices-home.png"
					alt="Trading charts" title="Trading charts">
			</div>
			<div class="col-lg-5 col-sm-6 col-12 spreads">
				<div class="row">
					<div class="col-12">
						<p class="h5 text-center text-light d-sm-none d-block">MT4での取引資産を管理・保管！
						透明性の高い取引ツールで新たなFX取引を実現</p>
						<div class="mx-auto" id="stoped_server" style="display: none;">
							<div class="p-3 mb-3 card">
								<p class="text-center text-bold mb-0"><strong>Market Closes on FRIDAYS AT 17:00
										EST</strong></p>
								<p class="text-center text-ligth mb-0">and reopens for the trading week on</p>
								<p class="text-center text-bold mb-0">SUNDAYS AT 17:00 EST.</p>
							</div>
						</div>
					</div>
					<div class="col-12 glow">
						<div class="row" id="running_server">
							<ul class="col-12 mx-auto nav nav-tabs bg-spreads-dark justify-content-between p-0">
								<li class="col-6 p-0 nav-item">
									<a class="nav-link text-center w-100 active tab-of-realtime-price" data-toggle="tab" data-tab="currencies"
										href="index.html#currencies">通貨</a>
								</li>
								<li class="col-6 p-0 nav-item">
									<a class="nav-link text-center w-100 tab-of-realtime-price" data-toggle="tab" data-tab="cryptos"
										href="index.html#cryptos">仮想通貨</a>
								</li>
							</ul>
						</div>
						<div class="row spreadsHomeTable">
							<div class="col-12 p-0">
								<div class="row">
									<div class="col-12">
										<div class="tab-content bg-spreads-dark px-sm-3 px-1 pb-1 tab-of-realtime-price-area">
											<div id="currencies" class="tab-pane active">


												<div class="iframewrap">
													<iframe class="iframe_currencies" src="https://www.widgets.investing.com/live-currency-cross-rates?theme=darkTheme&roundedCorners=true&cols=bid,ask,change&pairs=1,3,2,4,7,5,8,6,9,10,49,11" width="100%" height="600px" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
												</div>
											</div>
											<div id="cryptos" class="tab-pane fade">


												<div class="iframewrap">
													<iframe class="iframe_currencies2" src="https://www.widgets.investing.com/crypto-currency-rates?theme=darkTheme&hideTitle=true&cols=bid,ask,change&pairs=945629,997650,1001803,1010773,940810,1010779,1010776,1010777,1010798,1010782,1010801,1031068" width="100%" height="430px" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0"></iframe>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-12 d-sm-none d-block">
						<div class="row">
							<div class="col-12">
								<div class="row">
									<div class="col-12 text-center my-2">
										<a class="btn btn-main btn-lg btn-primary-red m-2" href="<?php echo e(route('account')); ?>">
											<i class="mr-2">
												<img style="height: 30px;width: 30px;" src="<?php echo e(asset('img/btn-icon/register_account.png')); ?>">
											</i>新規口座開設
										</a>
										<a class="btn btn-main btn-lg btn-primary m-2" href="<?php echo e(route('demo')); ?>">
											<i class="mr-2">
												<img style="height: 30px;width: 30px;" src="<?php echo e(asset('img/btn-icon/demo.png')); ?>">
											</i>無料デモ口座
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 d-sm-block d-none">
				<div class="row">
					<div class="col-12">
						<p class="h5 text-center mt-5">MT4での取引資産を管理・保管！透明性の高い取引ツールで新たなFX取引を実現</p>
						<div class="row">
							<div class="col-12 text-center my-2">
								<a class="btn btn-main btn-lg btn-primary-red m-2"
									href="<?php echo e(route('account')); ?>"><i class="mr-2"><img style="height: 30px;width: 30px;" src="<?php echo e(asset('img/btn-icon/register_account.png')); ?>"></i>新規口座開設</a>
								<a class="btn btn-main btn-lg btn-primary m-2"
									href="<?php echo e(route('demo')); ?>"><i class="mr-2"><img style="height: 30px;width: 30px;" src="<?php echo e(asset('img/btn-icon/demo.png')); ?>"></i>無料デモ口座</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="container-fluid bg-light pt-4 pb-md-6 pb-4 trading-platforms" id="platforms">
		<div class="row py-md-6 py-5">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<h2 class="text-center">FXトレードに暗号通貨が持つ汎用性を追加したトレード環境をTASNIC CAPITALはMT4で提供します。</h2>
					</div>
				</div>

				<div class="row">
					<div class="col-xl-6 col-lg-7 col-md-9 col-sm-12 my-5 mx-auto">
						<ul class="row nav nav-pills" id="pills-tab-home" role="tablist">
							<li class="nav-item col-md-3 col-lg-3 col-3" style="margin: 0 auto;">
								<a data-index="0" href="https://download.mql5.com/cdn/web/17346/mt4/tasniccapitalsetup.exe"><img src="<?php echo e($currentPath); ?>/../assets/img/icons/mt4_icon.svg"
										alt="TASNIC-CAPITAL's MetaTrader4 platform" title="TASNIC-CAPITAL's MetaTrader4 platform"
										class="p-sm-2 p-0 img-fluid"></a>
							</li>
						</ul>
					</div>
				</div>

				<div class="row bg-slide">
					<div class="tab-content col-12" id="pills-tabContent">
						<div class="tab-pane fade active show platforms-slide" id="Metatrader" role="tabpanel"
							aria-labelledby="linkMetatrader" data-index="0">
							<p class="card shadow p-4 text-center captionSliderPlatforms">
							業界最狭スプレットと各種暗号通貨での入出金を可能にし、マルチな取引環境を整えました！<a
									href="<?php echo e(route('demo')); ?>"
									class="btn btn-primary mx-auto btn-slide mt-2 mx-0">デモ口座開設</a></p>
							<a href="<?php echo e(route('demo')); ?>"><img
									src="<?php echo e($currentPath); ?>/../assets/img/software/slider-mt4.png" class="img-fluid imgSlide"
									alt="TASNIC-CAPITAL's MetaTrader4 software" title="TASNIC-CAPITAL's MetaTrader4 software"></a>
							<a href="<?php echo e(route('demo')); ?>"><img
									src="<?php echo e($currentPath); ?>/../assets/img/software/iconoMetatrader.png"
									class="img-fluid imgIcon d-sm-block d-none" alt="Metatrader4 Logo | TASNIC-CAPITAL"></a>
						</div>
					</div>
				</div>
				<div class="row" style="margin-top:50px;">
					<div class="col-12 text-center mt-md-0 mt-sm-3 mt-6">
						<h3 class="h4">
						TASNIC-CAPITALは常に最先端を求める暗号通貨ユーザーやFXトレーダーに最適かつ斬新な取引環境をご提供しています。業界最狭のスプレッド、徹底管理されたセキュリティ、スタッフによる丁寧なサポートなど、暗号通貨トレーダーの皆様の要望に応えることでTASNIC-CAPITALは暗号通貨資産を活用したFXオンライントレードに革新をもたらします。
						</h3>
						<a href="<?php echo e(route('individual')); ?>"
							class="btn btn-outline-primary mx-auto btn-slide mt-2 mx-0 btn-lg">TASNIC-CAPITAL 個人口座申請</a>
						<a href="<?php echo e(route('corporate')); ?>"
							class="btn btn-outline-primary mx-auto btn-slide mt-2 mx-0 btn-lg">TASNIC-CAPITAL 法人口座申請</a>
					</div>
				</div>

				<div class="row securitysentence">
					<div class="col-12 text-center mt-md-0 mt-sm-3 mt-6">

						<img src="img/icon/genesisblock.png" class="res-left" />

						<div class="res-right">
							<h3 style="color:#a14b35;font-size:28px;">
							暗号通貨資産管理パートナーによる徹底したセキュリティ
							</h3>
							TASNIC-CAPITALは常に最先端を求める暗号通貨ユーザーやFXトレーダーに最適かつ斬新な取引環境をご提供しています。業界最狭のスプレッド、徹底管理されたセキュリティ、スタッフによる丁寧なサポートなど、暗号通貨トレーダーの皆様の要望に応えることでTASNIC-CAPITALは暗号通貨資産を活用したFXオンライントレードに革新をもたらします。
						</div>

					</div>
				</div>

			</div>
		</div>
	</section>


	<div class="container-fluid">
		<div class="row bg-collage-home2">
			<section class="container-fluid pt-5">
				<div class="row">
					<div class="container py-6 pb-2">
						<div class="row">
							
							<div class="col-md-6 text-center sponsorShipText" style="margin-left:auto;">
								<p class="text-light h2 font-weight-light mb-3 col-md-12"></p>
								<p class="text-light col-md-12">入出金は現金のみでなくBTC・ETH・USDT・XRPを可能にしました。<br>新しいFXの取引形態と資産運用を提供する TASNIC CAPITAL
								</p>
								<a href="<?php echo e(route('btcasset')); ?>" class="btn btn-lg btn-outline-light mt-4">詳細</a>
							</div>
							
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>

	<section class="blog-rhino-report cards">
		<div class="container mt-6 font-bodoni" style="background-image: url('<?php echo e(asset('img/top/NEWS.jpg')); ?>');background-size:100% auto;background-repeat: no-repeat;padding:0px!important;">
			
		<div class="parent1">
			<div class="child">
				<!--<img class="bg_image" alt="ロゴ" src="<?php echo e(asset('/img/affiliate-lp2/h_01.jpg')); ?>">-->
				<a href="#" class="news1link" data-url="<?php echo e(asset('rss')); ?>">  </a>
				<a href="#" class="news2link" data-url="<?php echo e(asset('rss')); ?>">  </a>
			</div>
		</div>

		</div>
	</section>

	<script type="text/javascript">
		adroll_adv_id = "NR7MYO4JS5A5LFGU6WOZYA";
		adroll_pix_id = "FMJGSA6BFRE4LCUBNDHY5F";

		(function () {
			var _onload = function () {
				if (document.readyState && !/loaded|complete/.test(document.readyState)) { setTimeout(_onload, 10); return }
				if (!window.__adroll_loaded) { __adroll_loaded = true; setTimeout(_onload, 50); return }
				var scr = document.createElement("script");
				var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
				scr.setAttribute('async', 'true');
				scr.type = "text/javascript";
				scr.src = host + "/j/roundtrip.js";
				((document.getElementsByTagName('head') || [null])[0] ||
					document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
			};
			if (window.addEventListener) { window.addEventListener('load', _onload, false); }
			else { window.attachEvent('onload', _onload) }
		}());
	</script>






	
	
	<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<a href="javascript:void(0);" id="scroll-top" title="Scroll to Top"
		style="display: none; opacity: 0.5;">Top<span></span></a>

	
	<script type="text/javascript" src="<?php echo e($currentPath); ?>/../assets/js/signature_pad.umd.js"></script>
	
	<script type="text/javascript" src="<?php echo e($currentPath); ?>/../assets/js/app.min-v=0.01.25.js"></script>

	



	<script type="text/javascript">
		jQuery(function () {
			if (appEnv.cookies.permission == "dismiss") {
				/*$('#modalCookie1').modal({ 
					keyboard: true
				});*/
				jQuery('#modalCookie1').modal('hide');
			} else {
				jQuery('#modalCookie1').modal({
					backdrop: 'static',
					keyboard: false
				});
				jQuery('#modalCookie1').modal('show'); jQuery('#modalCookie1').modal('handleUpdate');
				setCookie('permission', 'waiting', 300);

				jQuery("#cookiesdismiss").on("click", function () {
					setCookie('permission', 'dismiss', (180 * 24 * 60 * 60));
					setTimeout(function () {
						(appEnv.params.slug == "/cookies-declined") ? document.location.href = appEnv.uri.home : document.location.href = appEnv.params.slug
					}, 1000);
				});
				jQuery("#cookiedecline").on("click", function () {
					deleteAllCookies();
					setCookie('permission', 'declined', 200);
					setTimeout(function () {
						(appEnv.params.slug == "/cookies-declined") ? document.location.href = appEnv.uri.home : document.location.href = appEnv.params.slug
					}, 2000);
				});
			}
		}); 	
	</script>

	
	<script type="text/javascript" src="<?php echo e($currentPath); ?>/../assets/js/tab-of-realtimeprice.js"></script>
	<script>
		ScrollReveal().reveal('.ilc', { delay: 300 });
		ScrollReveal().reveal('.trading-platforms', { delay: 300 });
		ScrollReveal().reveal('.listTv', { delay: 300 });
		ScrollReveal().reveal('#depositHome', { delay: 250 });
		ScrollReveal().reveal('.secure', { delay: 200 });
		// ScrollReveal().reveal('.sponsorshipsHome' , { delay: 150 });
	</script>

	
</body>

</html><?php /**PATH /Applications/MAMP/htdocs/TasnicCapital/resources/views/top.blade.php ENDPATH**/ ?>