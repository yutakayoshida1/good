
	<style>
	.hoverred:hover{
		background-color: white;
	}

	.hoverred:hover a{
		color: #a14b35!important;
	}

	@media  screen and (min-width: 1200px)
	{
		.fixed_header
		{
			position:fixed;
			top:75px;
		}

		.sp_only
		{
			display:none;
		}

		.pc_only
		{
			display:block;
		}
	}

	@media  screen and (max-width: 1199px)
	{
		.fixed_header
		{
			position:fixed;
			top:0px;
		}

		.sp_only
		{
			display:block;
		}

		.pc_only
		{
			display:none;
		}
	}

	.header_mongon{
		position:relative;
		top:4px;
	}

	.header_icon{
		position:relative;
		top:2px;
	}
	
	</style>

	<link rel="stylesheet" href="<?php echo e($layoutPath); ?>/../assets/css/translate.css">    
	<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
	<script type="text/javascript" src="<?php echo e($layoutPath); ?>/../assets/js/translate.js"></script>  

	<div id="google_translate_element2"></div>

	<div aria-live="polite" aria-atomic="true" class="notifications-overlay">
		<div style="position: fixed; top: 50%; right: 2rem; z-index:9999999; transform: translateY(-50%);"
			class="alertsContainer">
		</div>
	</div>

	<nav class="navbar navbar-expand-xl navbar-dark p-0 topMenu fixed_header" style="z-index:1000;width:100%;background-color:white;">
		<a class="navbar-brand py-2 px-3 d-block d-xl-none" href="<?php echo e(route('top')); ?>"><img
				src="<?php echo e(asset('img/logo/TN_LOGO.png')); ?>" alt="Tasnic-Capital  small"
				class="img-fluid logo-scroll-down" style="width:200px;"></a>
		<button class="navbar-toggler m-2 collapsed" type="button" data-toggle="collapse" data-target="#topNavbar"
			aria-controls="topNavbar" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon" style="background-color:a14b35;"></span>
		</button>

		<div class="collapse navbar-collapse" id="topNavbar" style="background-color:#a14b35;">
			<ul class="navbar-nav d-none d-xl-flex navServices">
				
			</ul>
			<ul class="navbar-nav mx-auto">
			</ul>
			<ul class="navbar-nav ">
				<li class="text-center dropdown hoverred">
					<?php $mouse_over_image_path = asset('img/icon/kaiinloginicon_brawn.png') ?>
					<?php $mouse_out_image_path = asset('/img/icon/kaiinloginicon.png') ?>
					<a class="nav-link text-light px-3 py-2" href="<?php echo e(route('mt4login')); ?>"  onmouseover="document.getElementById('icon1').src='<?php echo e($mouse_over_image_path); ?>'" onmouseout="document.getElementById('icon1').src='<?php echo e($mouse_out_image_path); ?>'" >
						<img id="icon1" src="<?php echo e($mouse_out_image_path); ?>" style="width:15px;height:auto;" class="header_icon" />
						<span class="header_mongon">会員ログイン</span>
					</a>
				</li>
				<li class="text-center dropdown hoverred">
					<?php $mouse_over_image_path2 = asset('img/icon/demokouzaicon_brawn.png') ?>
					<?php $mouse_out_image_path2 = asset('/img/icon/demokouzaicon.png') ?>
					<a class="nav-link text-light px-3 py-2" href="<?php echo e(route('demo')); ?>"  onmouseover="document.getElementById('icon2').src='<?php echo e($mouse_over_image_path2); ?>'" onmouseout="document.getElementById('icon2').src='<?php echo e($mouse_out_image_path2); ?>'" >
						<img id="icon2" src="<?php echo e(asset('/img/icon/demokouzaicon.png')); ?>" style="width:15px;height:auto;" class="header_icon" />
						<span class="header_mongon">デモ口座開設</span>
					</a>
				</li>
				<li class="text-center dropdown hoverred">
					<a class="nav-link text-light px-3 py-2"
						href="<?php echo e(route('account')); ?>"><span class="header_mongon" class="header_icon">新規口座開設</span></a>
				</li>

				<li class="text-center dropdown hoverred sp_only">
					<a class="nav-link text-light px-3 py-2" id="inquery_btn" data-toggle="modal" data-target="#contactModal" style="box-shadow:none;">
					<span class="header_mongon" class="header_icon">お問い合わせ</span>
					</a>
				</li>

				<li class="text-center dropdown hoverred">
					<a class="nav-link dropdown-toggle dropdown-toggle-split text-light p-2" data-toggle="dropdown"
						href="index.html#" role="button" aria-haspopup="true" aria-expanded="false"
						data-reference="parent">
						<img class="img-fluid header_icon" src="<?php echo e($layoutPath); ?>/../assets/img/flags/lang-dropdown-ja.png" style="width: 21px;"> <span class="header_mongon" class="header_icon">Language</span>
					</a>
					<div class="dropdown-menu p-0 dropdown-lang">
						<h6 class="dropdown-header border-bottom　dropdown-item border-0">Select your Language</h6>
						
						<a onclick="doGTranslate('ja|ja');return false;" title="Japanese" class="dropdown-item border-0 " href="#"><img class="img-fluid" src="<?php echo e($layoutPath); ?>/../assets/img/flags/lang-dropdown-ja.png"> 日本語</a>

						<a onclick="doGTranslate('ja|en');return false;" title="English" class="dropdown-item border-0 " href="#"><img class="img-fluid" src="<?php echo e($layoutPath); ?>/../assets/img/flags/lang-dropdown-en.png"> 英語</a>
						
						<a onclick="doGTranslate('ja|es');return false;" title="Spanish" class="dropdown-item border-0 " href="#"><img class="img-fluid" src="<?php echo e($layoutPath); ?>/../assets/img/flags/lang-dropdown-es.png"> スペイン語</a>

						<a onclick="doGTranslate('ja|zh-CN');return false;" title="Chinese (Simplified)" class="dropdown-item border-0 " href="#"><img class="img-fluid" src="<?php echo e($layoutPath); ?>/../assets/img/flags/lang-dropdown-zh.png"> 中国語</a>

						<a onclick="doGTranslate('ja|ar');return false;" title="Arabic" class="dropdown-item border-0 " href="#"><img class="img-fluid" src="<?php echo e($layoutPath); ?>/../assets/img/flags/lang-dropdown-ar.png"> アラビア語</a>
						
						<a onclick="doGTranslate('ja|ru');return false;" title="Russian" class="dropdown-item border-0 " href="#"><img class="img-fluid" src="<?php echo e($layoutPath); ?>/../assets/img/flags/lang-dropdown-ru.png"> ロシア語</a>

						<a onclick="doGTranslate('ja|fr');return false;" title="French" class="dropdown-item border-0 " href="#"><img class="img-fluid" src="<?php echo e($layoutPath); ?>/../assets/img/flags/lang-dropdown-fr.png"> フランス語</a>
						
						<a onclick="doGTranslate('ja|it');return false;" title="Italian" class="dropdown-item border-0 " href="#"><img class="img-fluid" src="<?php echo e($layoutPath); ?>/../assets/img/flags/lang-dropdown-it.png"> イタリア語</a>
						
						<a onclick="doGTranslate('ja|ko');return false;" title="Korean" class="dropdown-item border-0 " href="#"><img class="img-fluid" src="<?php echo e($layoutPath); ?>/../assets/img/flags/lang-dropdown-ko.png"> 韓国語</a>
						
						<a onclick="doGTranslate('ja|pt');return false;" title="Portuguese" class="dropdown-item border-0 " href="#"><img class="img-fluid" src="<?php echo e($layoutPath); ?>/../assets/img/flags/lang-dropdown-pt.png"> ポルトガル語</a>
					</div>
				</li>
			</ul>
		</div>
	</nav>
<?php /**PATH /Applications/MAMP/htdocs/TasnicCapital/resources/views/layouts/header.blade.php ENDPATH**/ ?>