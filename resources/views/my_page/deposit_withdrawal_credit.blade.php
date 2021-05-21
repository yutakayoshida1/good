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
    <link rel="stylesheet" href="{{asset('css/basic.css')}}">
    <link rel="stylesheet" href="{{asset('css/header_and_footer.css')}}">

     <!-- 会員ページ全体 -->
    <link rel="stylesheet" href="{{asset('css/left_profile.css')}}">
    <link rel="stylesheet" href="{{asset('css/over_menu.css')}}">

     <!-- 本ページ -->
    <link rel="stylesheet" href="{{asset('css/summary.css')}}">
    <link rel="stylesheet" href="{{asset('css/summary_main.css')}}">

	<title>
		GOOD ENOUGH FX
	</title>
  </head>
  <body>
    <div class="main-wrap">
		@include('layouts.header')


    <div class="mypage-wrapper">
      <div class="row">
          <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12"  style="padding-right: 5px">
            <div class="gradient-div gradient-div-main">
              メンバーページ
            </div>
          </div>

          <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12  my-page-main-content">
            <div  class="col-md-6 col-lg-6 col-sm-6 col-xs-12 d-flex-around">
              <a href="{{url('/my-page')}}" class="mypage-menu">口座サマリー</a>
              <a href="{{url('/my-history')}}" class="mypage-menu ">履  歴</a>
              <a href="{{url('/my-deposit')}}" class="mypage-menu mypage-menu-active">入出金</a>
            </div>

            <div  class="col-md-6 col-lg-6 col-sm-6 col-xs-12 d-flex-around">
              <a href="{{url('/my-transfer')}}" class="mypage-menu">資金移動</a>
              <a href="{{url('/my-additional')}}" class="mypage-menu">追加口座</a>
              <a href="{{url('/my-setting')}}" class="mypage-menu">設  定</a>
            </div>
          </div>
      </div>

      <div style="height: 1px; background: gray; margin: 20px 0px"></div>
      
      <div class="row">
        @include('my_page.my-page-side-bar')
        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12  my-page-main-content">

          <div style="deposit-menu-wrapper ">
            <div  class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around margin-top-zero xxxxx">
              <a href="{{url('/my-deposit')}}" class="mypage-menu deposit-menu">銀行入金</a>
              <a href="{{url('/my-deposit/credit')}}" class="mypage-menu deposit-menu">クレジット入金</a>
            </div>

            <div  class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around margin-top-zero">
              <a href="{{url('/my-deposit/cryptocurrency')}}" class="mypage-menu deposit-menu">暗号通貨入金</a>
              <a href="{{url('/my-deposit/withdrawal')}}" class="mypage-menu  mypage-menu-active deposit-menu">出　金</a>
            </div>

            <div  class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around margin-top-zero">
              <a href="{{url('/my-transfer')}}" class="mypage-menu deposit-menu" style="visibility
              :hidden">暗号通貨入金</a>
              <a href="{{url('/my-additional')}}"   style="visibility
              :hidden" class="mypage-menu deposit-menu">出　金</a>
            </div>
          </div>

          <div class="divider1"></div>
          
          <div style="deposit-menu-wrapper">
              <div  class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around xxxxxx margin-top-zero">
                <a href="{{url('/my-deposit/withdrawal')}}" class="mypage-menu deposit-menu">銀行入金</a>
                <a href="{{url('/my-deposit/withdrawal/credit')}}" class="mypage-menu deposit-menu mypage-menu-active">クレジット入金</a>
              </div>

              <div  class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around margin-top-zero">
                <a href="{{url('/my-deposit/cryptocurrency')}}"  style="visibility
                :hidden" class="mypage-menu deposit-menu">暗号通貨入金</a>
                <a href="{{url('/my-deposit/withdrawal')}}"  style="visibility
                :hidden" class="mypage-menu  mypage-menu-active deposit-menu">出　金</a>
              </div>

              <div  class="col-md-4 col-lg-4 col-sm-4 col-xs-12 d-flex-around margin-top-zero">
                <a href="{{url('/my-transfer')}}" class="mypage-menu deposit-menu" style="visibility
                :hidden">暗号通貨入金</a>
                <a href="{{url('/my-additional')}}"   style="visibility
                :hidden" class="mypage-menu deposit-menu">出　金</a>
              </div>
          </div>

          <div class="divider2"></div>

          <div class="mypage-detail-wrapper">

            <p class="title">
            暗号通貨出金
            </p>

            <div class="my-page-form-group">
              <div class="d-flex-right">
                <span>出金元口座番号</span> <span style="width: 50%">8091709710</span>
              </div>
            </div>

            <p class="title">
            送金暗号通貨選択
            </p>

            <form method="POST" action="{{route('withdrawal-application2')}}" enctype="multipart/form-data" class="register_form" onSubmit="return IdAuth();">
            @csrf

            <input type="hidden" name="howdo" value="crypt">

            <div class="row" style="margin-top: 30px">
              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6" style="display: flex; justify-content: space-around; align-items: center">
                <input type="radio" name="howdo">
                <img src="../../images/bitcoin.png"/>
                <input type="radio" name="howdo">
                <img src="../../images/ethereum.png"/>
              </div>

              <div class="col-md-6 col-lg-6 col-xs-12 col-sm-6" style="display: flex; justify-content: space-around; align-items: center">
                <input type="radio" name="howdo">
                <img src="../../images/bitcoincash.png"/>
                <input type="radio" name="howdo">
                <img src="../../images/tether.png"/>
              </div>
            </div>

            <div class="d-flex-around">
              <span class="subtitle">出金申請金額</span> <input type="text" class="my-page-input" style="width:50%"><a href="#" class="my-page-button my-page-button-green fixed-width">算出</a>
            </div>

            <p class="title" style="margin-top:50px">
            1.5567 BTC
            </p>

            <div  style="margin: 20px 0px ; height: 1px; background: gray"></div>
            <span class="subtitle" style="margin:5%">送金先暗号通貨ウォレットアドレス</span>
            <input type="text" style="margin-top:2%" class="my-page-input" name="receiver_cryptaddress" >
          </div>

          <div class="row">
              <div class="col-md-4 pad_vertical">
                  <div class="green_back_box small_text_box" />
                  MT4パスワード入力
                  </div>
              </div>
              <div class="col-md-4 pad_vertical">
                  <input data-id="test1" type="text" class="input_bank_withdraw mt4-password" />
              </div>
              <div class="col-md-4 pad_vertical">
                  <input type="submit" value="出金申請" class="red_back_box small_text_box" style="border: none;">
              </div>
          </div>
          <div class="row">
              <div class="col-md-12 text-center pad_vertical">
                  <span class="error-message" style="color: red"></span>
              </div>
          </div>

          </form>

        </div>
      </div>
    </div>
		@include('layouts.footer')
    </div>

    <script type="text/javascript">
      function IdAuth() {
          let input_id = $(".mt4-password").val();

          let isSamePassword = $.ajax({
              type: 'GET',
              url: '{{route('judge')}}?password='+input_id,
              async: false
          }).responseText;

          if(isSamePassword == "false"){
              $(".error-message").html("入力されたIDが違います。");
              return false;
          }

          return true;
      }
    </script>

  </body>
</html>
