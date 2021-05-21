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
  </head>
  <body>
    <div class="main-wrap">
		<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="mypage-wrapper">
      <div class="row">
          <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12"  style="padding-right: 5px">
            <div class="gradient-div gradient-div-main">
              メンバーページ
            </div>
          </div>

          <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12  my-page-main-content">
            <div  class="col-md-6 col-lg-6 col-sm-6 col-xs-12 d-flex-around">
              <a href="<?php echo e(url('/my-page')); ?>" class="mypage-menu">口座サマリー</a>
              <a href="<?php echo e(url('/my-history')); ?>" class="mypage-menu ">履  歴</a>
              <a href="<?php echo e(url('/my-deposit')); ?>" class="mypage-menu mypage-menu-active">入出金</a>
            </div>

            <div  class="col-md-6 col-lg-6 col-sm-6 col-xs-12 d-flex-around">
              <a href="<?php echo e(url('/my-transfer')); ?>" class="mypage-menu">資金移動</a>
              <a href="<?php echo e(url('/my-additional')); ?>" class="mypage-menu">追加口座</a>
              <a href="<?php echo e(url('/my-setting')); ?>" class="mypage-menu">設  定</a>
            </div>
          </div>
      </div>

      
      <div style="height: 1px; background: gray; margin: 20px 0px"></div>
      

      <div class="row">
        <?php echo $__env->make('my_page.my-page-side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12  my-page-main-content">

          <div style="deposit-menu-wrapper ">
            <div  class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around xxxxx margin-top-zero">
              <a href="<?php echo e(url('/my-deposit')); ?>" class="mypage-menu deposit-menu">銀行入金</a>
              <a href="<?php echo e(url('/my-deposit/credit')); ?>" class="mypage-menu deposit-menu  mypage-menu-active">クレジット入金</a>
            </div>

            <div  class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around margin-top-zero">
              <a href="<?php echo e(url('/my-deposit/cryptocurrency')); ?>" class="mypage-menu deposit-menu">暗号通貨入金</a>
              <a href="<?php echo e(url('/my-deposit/withdrawal')); ?>" class="mypage-menu deposit-menu">出　金</a>
            </div>

            <div  class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around margin-top-zero">
              <a href="<?php echo e(url('/my-transfer')); ?>" class="mypage-menu deposit-menu" style="visibility
              :hidden">暗号通貨入金</a>
              <a href="<?php echo e(url('/my-additional')); ?>"   style="visibility
              :hidden" class="mypage-menu deposit-menu">出　金</a>
            </div>
          </div>

          <div class="divider1"></div>

          <div class="mypage-detail-wrapper">
            <p class="title" style="margin-top: 90px;">
            クレジット入金
            </p>

            <p style="font-size: 40px; margin: 100px 0; text-align: center">
              現在準備中です
            </p>

            

            <p style="font-weight: bold; line-height: 30px; margin-top:50px">
            ◇金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい<br>
            ◇場合により口座への入金反映が通常より遅れる場合がございます<br>
            ◇当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。返還が可能な場合においても、<br>
            　それに係る手数料等をお支払いただくことがあります。<br>
            ◇ご入金には手数料（2.5%）が発生致します。<br>
            ◇外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。
            </p>

          </div>

        </div>
      </div>
    </div>
		<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
  </body>
</html>
<?php /**PATH E:\ready\japan project\laravel design\goodenoughtreasure.com\resources\views/my_page/deposit_credit.blade.php ENDPATH**/ ?>