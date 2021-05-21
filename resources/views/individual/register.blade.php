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
		.form-md {
			width: 200px;
			margin-left: 15px;
		}

		.form-sm {
			width: 100px;
			margin-left: 15px;
		}

		.form-label {
			margin-left: 15px;
			width: 150px;
			text-align: right;
		}

		.btn-success {
			background: green;
		}

		@media screen and (max-width: 525px) {
			.pad_vertical {
				padding: 10px 0;
			}
			.form-md{
				margin-left: unset;
				width: 100%;
			}
		}
	</style>
</head>

<body>

	<div class="main-wrap">

		@include('layouts.header')

		<div class="container">
			<div class="row pad_vertical">
				<div class="col-md-4 col-sm-12">
					<div class="white_float_box">
						新規口座開設
					</div>
				</div>
			</div>
			<div class="row pad_vertical">
				<div class="col-md-4 col-sm-12">
					<div class="col-md-6 overmenu menu active">
						<a href="{{route('individual')}}">
							個人口座
						</a>
					</div>
					<div class="col-md-6 overmenu menu">
						<a href="{{route('corporate')}}">
							法人口座
						</a>
					</div>
				</div>
			</div>

			<form method="POST" action="{{route('individual-confirm')}}" enctype="multipart/form-data" class="register_form">
				@csrf
				<div class="row pad_vertical">
					<div class="col-md-2">
						<div class="text_right_box3 pad_vertical">
							（口座設定）
						</div>
					</div>
					<div class="col-md-10">
						<div class="row pad_vertical">
							<div class="col-md-2">
								<div class="text_right_box3">
									口座通貨
								</div>
							</div>
							<div class="col-md-10">
								<input class="form-control form-md" type="text" name="basic_information[currency]" />
							</div>
						</div>

						<div class="row pad_vertical">
							<div class="col-md-2">
								<div class="text_right_box3">
									レバレッジ
								</div>
							</div>
							<div class="col-md-10">
								<select class="form-control form-md" name="basic_information[leverage]">
									<option value="">選択して下さい</option>
								</select>
							</div>
						</div>
					</div>
				</div>

				<div class="row pad_vertical">
					<div class="col-md-2">
						<div class="text_right_box3 pad_vertical">
							（個人設定設定）
						</div>
					</div>
					<div class="col-md-10">
						@include('registerlayout.personal_basic')
					</div>
				</div>

				<div class="row pad_vertical">
					<div class="col-md-2">
						<div class="text_right_box3 pad_vertical">
							（その他の情報）
						</div>
					</div>
					<div class="col-md-10">
						<div class="row pad_vertical">
							<div class="col-md-2">
								<div class="text_right_box3">
									紹介ブローカー名<br>
									(ローマ字)
								</div>
							</div>
							<div class="col-md-10">
								<input class="form-control form-md" type="text" name="basic_information[currency]" />
							</div>
						</div>
					</div>
				</div>

				<div class="row pad_vertical">
					<div class="col-md-2">
						<div class="text_right_box3">
						</div>
					</div>
					<div class="col-md-10">
						@include('registerlayout.us_citizen')
					</div>
				</div>

				<div class="row pad_vertical">
					<div class="col-md-2">
						<div class="text_right_box3">
						</div>
					</div>
					<div class="col-md-10">
						@include('registerlayout.finance_info')
					</div>

				</div>

				<input type="hidden" name="extra_information[ib_name]" value="">

			</form>
		</div>

		@include('layouts.footer')
	</div>

</body>

</html>