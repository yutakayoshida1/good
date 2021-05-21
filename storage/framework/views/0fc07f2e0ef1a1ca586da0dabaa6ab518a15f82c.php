<style>

.btn-brawn
{
	background-color:#a14b35;
	color:white;
}

.tel-link a
{
	color:white;
}

</style>

<div class="container-fluid rounded-0 sticky-top card shadow d-lg-block d-none">

		<div class="row">
			<div class="col-12 mx-auto">
				<div class="row" id="newMarquee">
					<div class="col-xl-2 col center-with-flex border-right">
						<p class="h5 text-center my-2">主要通貨</p>
					</div>
					<div class="col text-center border-right AUDUSD">
						<div class="row">
							<div class="col-8 pr-0 trendData">
								<p class="h6 my-1 up text-green">
									AUDUSD <img src="<?php echo e($layoutPath); ?>/../assets/img/icons/spreads-buy.svg">
								</p>
							</div>
							<div class="col-4 p-0">
								<p class="h5 my-1 text-dark text-left spreadNumber">1.9</p>
							</div>
							<div class="col-12">
								<p class="h6 m-0 bidAsk"><small>0.72113/0.72118</small></p>
							</div>
						</div>
					</div>
					<div class="col text-center border-right EURUSD">
						<div class="row">
							<div class="col-8 pr-0 trendData">
								<p class="h6 my-1 down text-danger2">
									EURUSD <img src="<?php echo e($layoutPath); ?>/../assets/img/icons/spreads-sell.svg">
								</p>
							</div>
							<div class="col-4 p-0">
								<p class="h5 my-1 text-dark text-left spreadNumber">1.7</p>
							</div>
							<div class="col-12">
								<p class="h6 m-0 bidAsk"><small>1.18439/1.18441</small></p>
							</div>
						</div>
					</div>
					<div class="col text-center border-right GBPUSD">
						<div class="row">
							<div class="col-8 pr-0 trendData">
								<p class="h6 my-1 down text-danger2">
									GBPUSD <img src="<?php echo e($layoutPath); ?>/../assets/img/icons/spreads-sell.svg">
								</p>
							</div>
							<div class="col-4 p-0">
								<p class="h5 my-1 text-dark text-left spreadNumber">2.0</p>
							</div>
							<div class="col-12">
								<p class="h6 m-0 bidAsk"><small>1.31267/1.31271</small></p>
							</div>
						</div>
					</div>
					<div class="col text-center border-right USDCAD">
						<div class="row">
							<div class="col-8 pr-0 trendData">
								<p class="h6 my-1 down text-danger2">
									EURJPY <img src="<?php echo e($layoutPath); ?>/../assets/img/icons/spreads-sell.svg">
								</p>
							</div>
							<div class="col-4 p-0">
								<p class="h5 my-1 text-dark text-left spreadNumber">1.8</p>
							</div>
							<div class="col-12">
								<p class="h6 m-0 bidAsk"><small>1.33481/1.33487</small></p>
							</div>
						</div>
					</div>
					<div class="col text-center border-right USDJPY">
						<div class="row">
							<div class="col-8 pr-0 trendData">
								<p class="h6 my-1 up text-green">
									USDJPY <img src="<?php echo e($layoutPath); ?>/../assets/img/icons/spreads-buy.svg">
								</p>
							</div>
							<div class="col-4 p-0">
								<p class="h5 my-1 text-dark text-left spreadNumber">1.5</p>
							</div>
							<div class="col-12">
								<p class="h6 m-0 bidAsk"><small>105.56/105.561</small></p>
							</div>
						</div>
					</div>
					<div class="col-2 p-0 center-with-flex">
						<a class="btn btn-outline-secondary smoothEffect" href="<?php echo e(route('top')); ?>#spreads">スプレッドを見る</a>
					</div>
				</div>
			</div>
		</div>
	</div>

<footer class="footer">
		<div class="container-fluid">
			<div class="row pt-4" style="background-color:#C96A51;">
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-sm-6 col-xs-12 center-with-flex">
							<a href="<?php echo e(route('account')); ?>"
								class="btn btn-lg">新規口座開設</a>
						</div>
						<div class="col-lg-4 col-sm-6 col-xs-12 center-with-flex">
							<a href="<?php echo e(route('demo')); ?>"
								class="btn btn-lg">デモ口座開設</a>
						</div>
						<div class="col-lg-4 col-sm-12 col-xs-12 center-with-flex">
							<div class="col-md-4 col-sm-4 col-xs-12 flex-container-center">
								<ul class="list-inline center-with-flex">
									
								</ul>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center">
							<div class="row">
								<div class="col-md-4 col-6 mx-auto mb-4">
									<img src="<?php echo e(asset('img/icon/footer_icon.png')); ?>" alt="CIMA Regulation"
										title="CIMA Regulation" class="img-fluid">
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-sm-6 col-xs-12 text-center" style="color:white;">
						TASNIC Co; LTD located in Grand Hong Kong, Unit 05, 15/F, Austin Tower, 22-26 Austine Avenue, Tsim Sha Tsui, Hong Kong <br>
						<span class="tel-link">TEL : +852 3480 0232</span> <br>
						<span class="tel-link">FAX : +852 3112 6226</span>
						</div>
						<div class="col-lg-4 col-sm-6 col-xs-12 center-with-flex mx-auto">
							<div class="row">
								<div class="d-flex justify-content-around align-items-center">
									<a href="<?php echo e(route('top')); ?>" class="text-center text-white">tasnic-capital.com</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row" style="background-color: #a14b35;">
				<div class="container">
					<div class="row">
						<div class="col">
							<p class="text-center" style="color:white;">
								<small>
								There is a risk of loss in trading foreign currencies and it is not suitable for everyone. We are compensated for our services through the bid-ask spread. Copyright© 2020. All rights reserved.
									<br class="hidden-xs"><br>
									本ウェブサイトは米国及び金融商品取引が国内法や規制により制限された国の居住者を対象としておらず、弊社はその法的管轄下の地域の方にサービスへの勧誘と考えられる業務を行う事はございません
									<br>
									The services and products offered by Tasnic Capital Ltd. are not being offered within the United States (US) and not being offered to US Persons, as defined under US law. As such, should you reside in or be a citizen of such a country, any email message received is not intended to serve as a solicitation or inducement on behalf of any of the aforementioned entities. 
								</small>
							</p>
							<p class="text-center my-4">
								<small>
									<a href="<?php echo e(route('top')); ?>/../pdf/terms.pdf" class="text-light"><u>利用規約</u></a>
									<span class="text-primary px-1">|</span>
									<a href="<?php echo e(route('top')); ?>/../pdf/privacy.pdf" class="text-light"><u>プライバシーポリシー</u></a>
									<span class="text-primary px-1">|</span>
									<a href="<?php echo e(route('top')); ?>/../pdf/risk.pdf" class="text-light"><u>リスク同意書</u></a>
									<span class="text-primary px-1">| </span>
									<a href="<?php echo e(route('faq')); ?>" class="text-light"><u>よくある質問</u></a>
									<span class="text-primary px-1">| </span>
									<a href="<?php echo e(route('aboutcompany')); ?>" class="text-light"><u>会社概要</u></a>
								</small>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><?php /**PATH /Applications/MAMP/htdocs/TasnicCapital/resources/views/layouts/footer.blade.php ENDPATH**/ ?>