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

  
  @media  screen and (max-width: 768px)
  {
    .no-input-margin-div {
      margin: auto !important;
      padding: 6% !important;
      margin-top: 50px !important
    }
  }
  </style>
</head>

<body>

<div class="main-wrap">
<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container">

<form method="POST" action="<?php echo e(route('demo-confirm')); ?>" enctype="multipart/form-data">
<?php echo csrf_field(); ?>


<div class="container-fluid main-area" style="height: 90%">
    <div class="row">
      <div class="text-center col-md-3 col-md-offset-1 col-sm-10 col-xs-10" style="font-size: 1.1vw; margin-top: 6%; margin-left: 7%; padding: 1% 1%; box-shadow: 8px 8px 5px gray;">
        <span class="text-center">デモ口座開設</span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center main-text" style="font-size: 1.7vw; margin-top: 5%;">
        <span>GOOD ENOUGH FX 専用MT4</span><br>
        <span>世界最小スプレッドとユーザビリティー重視の取引環境を提供!!</span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 text-center main-text" style="font-size: 1.6vw; font-weight: bold; margin-top: 1%">
        <span>US$50,000のデモ取引口座</span>
      </div>
    </div>
    <div class="row">
      <div class="no-input-margin-div col-md-5 col-md-offset-1 col-sm-10 col-xs-12" style="margin: 4% 1% 5% 7%; padding-top: 1%; background-color: silver; box-shadow: 8px 8px 5px gray;">
        <div class="row">
            <p style="text-align: center; font-weight: bold">デモ口座お客様情報</p><br>
        </div>
        <div class="row">
          <div class="col-md-5 col-md-offset-1">
            <input name="demo_name" placeholder="名（ローマ字）" style="width:100%; height: 45px"></input>
          </div>
          <div class="col-md-5">
            <input name="demo_first_name" placeholder="姓（ローマ字）" style="width:100%; height: 45px"></input><br><br><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <input name="mail_address" placeholder="メールアドレス" style="width:100%; height: 45px"></input><br><br><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-10 col-md-offset-1">
            <!-- <input type="button" value="ダウンロードアドレスをメールで受け取る" style="width: 100%; margin-bottom: 5%; padding: 10px; border: none; background: green; color: white; font-weight: bold "> -->
            <button style="border-radius: 5px; width: 100%; margin-bottom: 5%; padding: 10px; border: none; background: green; color: white; font-weight: bold ">ダウンロードアドレスをメールで受け取る</button>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-5 col-xs-6">
        <image src="./images/pc_img2.png" style="margin-top: 40%; margin-left: 8%; height: 90%; width: 90%">
      </div>
      <div class="col-md-3 col-sm-5 col-xs-6">
        <image src="./images/pc_img1.png" style="margin-top: -5%; margin-left: -60%; height: 150%; width: 150%">
      </div>
    </div>
</div>


<?php echo $__env->make('demo.testcode', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</form>

</div>

<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

</body>
</html>
<?php /**PATH E:\ready\japan project\laravel design\goodenoughtreasure.com\resources\views/demo/register.blade.php ENDPATH**/ ?>