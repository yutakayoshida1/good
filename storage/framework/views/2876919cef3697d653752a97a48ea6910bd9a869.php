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
    .mypage-detail-wrapper {
      padding: 50px;
    }

    .border-gray {
      margin-top: 20px;
      padding: 20px;
      border-radius: 5px;
      border: 1px solid gray;
    }

    .form-label {
      text-align: right;
      line-height: 40px;
    }

    .form-md {
      max-width: 200px;
      width: 100%;
      height: 40px;
      border: 1px solid gray;
    }

    .form-lg {
      max-width: 400px;
      width: 100%;
      height: 40px;
      border: 1px solid gray;
    }

    .mb-3 {
      margin-bottom: 15px;
    }
  </style>
</head>

<body>
  <div class="main-wrap">
    <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <div class="mypage-wrapper">
      <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12" style="padding-right: 5px">
          <div class="gradient-div gradient-div-main">
            メンバーページ
          </div>
        </div>

        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12  my-page-main-content">
          <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 d-flex-around">
            <a href="<?php echo e(url('/my-page')); ?>" class="mypage-menu">口座サマリー</a>
            <a href="<?php echo e(url('/my-history')); ?>" class="mypage-menu ">履 歴</a>
            <a href="<?php echo e(url('/my-deposit')); ?>" class="mypage-menu mypage-menu-active">入出金</a>
          </div>

          <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 d-flex-around">
            <a href="<?php echo e(url('/my-transfer')); ?>" class="mypage-menu">資金移動</a>
            <a href="<?php echo e(url('/my-additional')); ?>" class="mypage-menu">追加口座</a>
            <a href="<?php echo e(url('/my-setting')); ?>" class="mypage-menu">設 定</a>
          </div>
        </div>
      </div>

      <div style="height: 1px; background: gray; margin: 20px 0px"></div>

      <div class="row">
        <?php echo $__env->make('my_page.my-page-side-bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12  my-page-main-content">

          <div style="deposit-menu-wrapper ">
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around margin-top-zero xxxxx">
              <a href="<?php echo e(url('/my-deposit')); ?>" class="mypage-menu deposit-menu">銀行入金</a>
              <a href="<?php echo e(url('/my-deposit/credit')); ?>" class="mypage-menu deposit-menu">クレジット入金</a>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around margin-top-zero">
              <a href="<?php echo e(url('/my-deposit/cryptocurrency')); ?>" class="mypage-menu deposit-menu">暗号通貨入金</a>
              <a href="<?php echo e(url('/my-deposit/withdrawal')); ?>" class="mypage-menu  mypage-menu-active deposit-menu">出　金</a>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around margin-top-zero">
              <a href="<?php echo e(url('/my-transfer')); ?>" class="mypage-menu deposit-menu" style="visibility
              :hidden">暗号通貨入金</a>
              <a href="<?php echo e(url('/my-additional')); ?>" style="visibility
              :hidden" class="mypage-menu deposit-menu">出　金</a>
            </div>
          </div>

          <div class="divider1"></div>

          <div style="deposit-menu-wrapper">
            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around xxxxxx margin-top-zero">
              <a href="<?php echo e(url('/my-deposit/withdrawal')); ?>" class="mypage-menu deposit-menu  mypage-menu-active">銀行入金</a>
              <a href="<?php echo e(url('/my-deposit/withdrawal/credit')); ?>" class="mypage-menu deposit-menu">クレジット入金</a>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around margin-top-zero">
              <a href="<?php echo e(url('/my-deposit/cryptocurrency')); ?>" style="visibility
                :hidden" class="mypage-menu deposit-menu">暗号通貨入金</a>
              <a href="<?php echo e(url('/my-deposit/withdrawal')); ?>" style="visibility
                :hidden" class="mypage-menu  mypage-menu-active deposit-menu">出　金</a>
            </div>

            <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around margin-top-zero">
              <a href="<?php echo e(url('/my-transfer')); ?>" class="mypage-menu deposit-menu" style="visibility
                :hidden">暗号通貨入金</a>
              <a href="<?php echo e(url('/my-additional')); ?>" style="visibility
                :hidden" class="mypage-menu deposit-menu">出　金</a>
            </div>
          </div>

          <div class="divider2"></div>

          <div class="mypage-detail-wrapper">

            <form method="POST" action="<?php echo e(route('withdrawal-application2')); ?>" enctype="multipart/form-data" class="register_form" onSubmit="return IdAuth();" data-addbankaction="<?php echo e(route('add-bank')); ?>" data-withdrawaction="<?php echo e(route('withdrawal-application2')); ?>">
              <?php echo csrf_field(); ?>
              <input type="hidden" name="howdo" value="bank">
              <p class="title">
                銀行出金
              </p>
              <div class="my-page-form-group" style="margin: auto;">
                <div class="d-flex-right">
                  <span>出金元口座番号</span> <span class="my-page-number"><?php echo e($account_number); ?></span>
                </div>

                <div class="d-flex-right">
                  <span>出金申請金額</span> <input type="text" class="my-page-input1 withdrawinput" name="input_bank_withdraw" required>
                </div>
              </div>
              <p class="title">
                送金先銀行情報
              </p>
              <?php $__currentLoopData = $banks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bank): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="d-flex-center">
                <input class="withdrawinput" type="radio" name="bankid" value="<?php echo e($bank->id); ?>" required> <span><?php echo e($bank->bank_name); ?>　<?php echo e($bank->bank_branch); ?>　<?php echo e($bank->bank_kind); ?>　<?php echo e($bank->bank_account_number); ?> <?php echo e($bank->bank_account_name); ?></span>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              <a href="#" class="my-page-button my-page-button-green fixed-width" style="margin-top: 50px">登録銀行追加</a>
              <div class="border-gray">

                <div class="row mb-3">
                  <div class="col-md-3 form-label">
                    <span class="form-label">*銀行口座名義人氏名</span>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-md" name="bank_account_name" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-3 form-label">
                    <span class="form-label">*銀行口座名義人住所</span>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-lg" name="bank_account_address" required>
                  </div>
                </div>


                <div class="row mb-3">
                  <div class="col-md-3 form-label">
                    <span class="form-label">*受取人口座番号</span>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-md" name="bank_account_number" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-3 form-label">
                    <span class="form-label">*銀行名</span>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-md" name="bank_name" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <div class="col-md-3 form-label">
                    <span class="form-label">*支店名</span>
                  </div>
                  <div class="col-md-9">
                    <input type="text" class="form-md" name="bank_branch" required>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-3 form-label">
                    <span class="form-label">*普通/当座</span>
                  </div>
                  <div class="col-md-5">
                    <input type="text" class="form-md" name="bank_kind" required>
                  </div>

                  <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
                    <br>
                    <div class="my-page-button my-page-button-green fixed-width" onclick="addAccount();">口座追加</div>
                  </div>
                </div>
              </div>

              <div class="row" style="margin-top: 50px">
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                    <span class="form-label">M4パスワード入力</span>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
                  <input type="text" class="form-md my-page-input mt4-password">
                </div>
              </div>

              <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                  <div class="my-page-button my-page-button-red" onclick="withdraw()">出金申請</div>
                </div>
              </div>

              <input type="submit" class="submitbtn" style="display:none;" onclick="validationJudge()">

              <div class="row">
                <div class="col-md-12 text-center pad_vertical">
                  <span class="error-message" style="color: red"></span>
                </div>
              </div>

          </div>

          </form>

        </div>
      </div>
    </div>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </div>

  <script type="text/javascript">
    function IdAuth() {
      let input_id = $(".mt4-password").val();

      let isSamePassword = $.ajax({
        type: 'GET',
        url: '<?php echo e(route("judge")); ?>?password=' + input_id,
        async: false
      }).responseText;

      if (isSamePassword == "false") {
        $(".error-message").html("入力されたIDが違います。");
        return false;
      }

      return true;
    }

    function validationJudge() {

      $('form').attr('action');
      $('form').data("addbankaction");
      $('form').data("withdrawaction");

      //銀行追加
      if ($('form').attr('action') == $('form').data("addbankaction")) {
        $('.withdrawinput').removeAttr('required');
      }

      //出金申請
      if ($('form').attr('action') == $('form').data("withdrawaction")) {
        $('.addbankinput').removeAttr('required');
      }

    }

    function addAccount() {
      let addbankaction = $('form').data("addbankaction");
      $('form').attr('action', addbankaction);
      $('.submitbtn').click();
    }

    function withdraw() {
      let addbankaction = $('form').data("withdrawaction");
      $('form').attr('action', addbankaction);
      $('.submitbtn').click();
    }
  </script>


</body>

</html><?php /**PATH E:\ready\japan project\laravel design\goodenoughtreasure.com\resources\views/my_page/deposit_withdrawal.blade.php ENDPATH**/ ?>