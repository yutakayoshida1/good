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
        <div class="col-md-3 col-lg-3 col-sm-3 col-xs-12">
          <div class="gradient-div gradient-div-main">
            メンバーページ
          </div>
        </div>

        <div class="col-md-9 col-lg-9 col-sm-9 col-xs-12  my-page-main-content">
          <div class="aff-partner">
            <div>
              <a href="{{route('aff_partner')}}" class="btn">アフィリエイトパートナー登録</a>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12 d-flex-around">
            <a href="{{url('/my-page')}}" class="mypage-menu mypage-menu-active">口座サマリー</a>
            <a href="{{url('/my-history')}}" class="mypage-menu">履 歴</a>
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
          <div class="col-md-6 col-lg-6 col-sm-6 col-xs-12">
            <div class="d-flex-center">
              <div class="green-part">
                <p>口座番号</p>
                <p>口座残高</p>
                <p>有効証拠金</p>
                <p>必要証拠金</p>
                <p>余剰証拠金</p>
                <p>証拠金維持率</p>
                <p>ステイタス</p>
              </div>
              <div class="gray-part">

                @foreach($summary_main_table_body as $row)
                <p>{{$row[1]}}</p>
                @endforeach

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include('layouts.footer')
  </div>
</body>

</html>