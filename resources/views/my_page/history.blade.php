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
  <style>
    .historyTable {
      border-bottom: 2px solid #dddddd;
    }

    table tr th {
      color: #238000;
      text-align: center;
    }

    tbody tr td {
      text-align: center;
    }

    .submit-btn {
      background-color: green;
      height: 40px;
      border: none;
      border-radius: 3px;
      padding: 0 30px;
      color: white;
    }

    .sumaryTable {
      width: 60%;
      margin: auto;
      border: 2px solid #dddddd;
      padding: 20px 50px !important;
    }

    .sumaryTable table {
      border-bottom: 1px solid #dddddd;
    }


    @media screen and (max-width: 525px) {
      .sumaryTable {
        width: 100%;
        border: 2px solid #dddddd;
        padding: 20px 10px !important;
      }
      .submit-btn{
        width: 100%;
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

        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12   my-page-main-content">
          <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 d-flex-around">
            <a href="{{url('/my-page')}}" class="mypage-menu">口座サマリー</a>
            <a href="{{url('/my-history')}}" class="mypage-menu mypage-menu-active">履 歴</a>
            <a href="{{url('/my-deposit')}}" class="mypage-menu">入出金</a>
          </div>

          <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 d-flex-around">
            <a href="{{url('/my-transfer')}}" class="mypage-menu">資金移動</a>
            <a href="{{url('/my-additional')}}" class="mypage-menu">追加口座</a>
            <a href="{{url('/my-setting')}}" class="mypage-menu">設 定</a>
          </div>
        </div>
      </div>
      <div style="height: 1px; background: gray; margin: 20px 0px"></div>
      <div class="row">
        @include('my_page.my-page-side-bar')
        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12  my-page-main-content">
          @include('personal.history_main')
        </div>
      </div>
    </div>
    @include('layouts.footer')
  </div>
</body>

</html>