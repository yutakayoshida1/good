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

  <script type="text/javascript">
    function IdAuth(sikibetusi) {
      console.log("IdAuth");
      let input_id = $(".loginpassword" + sikibetusi).val();
      console.log(input_id);

      let isSamePassword = $.ajax({
        type: 'GET',
        url: '{{route("judge")}}?password=' + input_id,
        async: false
      }).responseText;

      console.log(isSamePassword);

      if (isSamePassword == "false") {
        $(".error-message").html("入力されたIDが違います。");
        return false;
      }

      return true;
    }
  </script>

  <title>
    GOOD ENOUGH FX
  </title>
  <style>
    .my-page-button-red{
      border: none;
    }

    .comment {
      font-weight: bold;
      line-height: 30px;
      margin-top: 50px;
      display: none;
    }

    @media screen and (max-width: 525px) {
      .red-div {
        margin-left: 0;
      }

      .comment {
        display: block;
      }
    }
  </style>
</head>

<body>
  <div class="main-wrap">
    @include('layouts.header')


    <div class="mypage-wrapper">
      <div class="row">
        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12" style="padding-right: 5px">
          <div class="gradient-div gradient-div-main">
            メンバーページ
          </div>
        </div>

        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12 my-page-main-content">
          <div class="aff-partner">
            <div>
              <a href="{{route('aff_partner')}}" class="btn">アフィリエイトパートナー登録</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 d-flex-around">
            <a href="{{url('/my-page')}}" class="mypage-menu">口座サマリー</a>
            <a href="{{url('/my-history')}}" class="mypage-menu">履 歴</a>
            <a href="{{url('/my-deposit')}}" class="mypage-menu">入出金</a>
          </div>

          <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 d-flex-around">
            <a href="{{url('/my-transfer')}}" class="mypage-menu">資金移動</a>
            <a href="{{url('/my-additional')}}" class="mypage-menu">追加口座</a>
            <a href="{{url('/my-setting')}}" class="mypage-menu mypage-menu-active">設 定</a>
          </div>
        </div>
      </div>
      <div style="height: 1px; background: gray; margin: 20px 0px;"></div>
      <div class="row">
        @include('my_page.my-page-side-bar')
        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12 my-page-main-content">
          <div class="mypage-detail-wrapper">
            <p class="title">
              2段階認証設定
            </p>

            <p class="content">
              GOOD ENOUGH FXにログインするたびに、ユーザー名とパスワードに加えて、スマートフォンの<br>
              Google認証システムアプリによって生成されたコードも必要になります。<br>
              ログインするには動的コードを入力する必要があります。<br>
              これにより、アカウントのパスワードが漏洩した場合のアカウントへの侵入を効果的に防ぐことができます。
            </p>

            <form method="post" onSubmit="return IdAuth(1);" action="{{route('switchTwoFactorAuthenticate')}}">
              @csrf

              <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-6" style="text-align: center; line-height:40px;">
                  M4パスワード入力
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-6">
                  <input type="text" class="my-page-input loginpassword1">
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                  <input type="submit" value="アクティブ申請" class="my-page-button my-page-button-red">
                </div>
              </div>

              <input type="hidden" value="1" name="isActivate">

            </form>

            <form method="post" onSubmit="return IdAuth(2);" action="{{route('switchTwoFactorAuthenticate')}}">
              @csrf

              <div class="row" style="margin-top: 20px">
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-6" style="text-align: center; line-height:40px;">
                  M4パスワード入力
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-6">
                  <input type="text" class="my-page-input loginpassword2">
                </div>
                <div class="col-md-4 col-lg-4 col-sm-4 col-xs-12">
                  <input type="submit" value="非アクティブ申請" class="my-page-button my-page-button-red">
                </div>
              </div>

              <input type="hidden" value="0" name="isActivate">

            </form>

            <div class="row">
              <div class="col-md-12 text-center pad_vertical">
                <span class="error-message" style="color: red"></span>
              </div>
            </div>

            <center style="margin-top:60px;">
              <iframe src='{{$google2fa_url}}/showQR.php?user={{$username}}&secret={{$google2fa_secret}}' width='240' height='240' style="border: none;"></iframe>
            </center>

          </div>
        </div>
      </div>
    </div>
    @include('layouts.footer')
  </div>
</body>

</html>