<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script>
		function addPlatform() {
			let loginname = "mt4-" + $(".AccountNumber").val();
			$(".loginname").val(loginname);
		};
	</script>	
  </head>
  <body>
  <form method="post" action="<?php echo e(route('mt4login-confirm')); ?>" onsubmit="return addPlatform();" >
	<?php echo csrf_field(); ?>
    <div class="container main-area" style="margin-top: 10%; height: 600px; z-index: 2">
      <div class="row text-center h-100" style="color: white">
        <div class="col-md-7 mx-auto h-100" style="background: linear-gradient(to right, #10141B, #363F46); box-shadow: 8px 8px 5px gray;">
          <div class="mx-auto" style="margin-top: 5%">
            <image src="<?php echo e(asset('./images/logo1.png')); ?>" style="height: 12%; width: 12%">
          </div>
          <div class="col-md-12 mx-auto input-area" style="margin-top: 5%">
            <div class="col-md-4 text-right float-left">
              <sapn>MT4口座番号</span>
            </div>
            <div class="col-md-6 float-left">
              <input name="accountnum" class="AccountNumber" style="width: 100%"></input><br><br>
            </div>
            <div class="col-md-4 text-right float-left">
              <sapn>パスワード</span>
            </div>
            <div class="col-md-6 float-left">
              <input type="password" name="password" style="width: 100%"></input><br><br>
            </div>
          </div>
          <div class="mx-auto login-button" style="margin-top: 30%">
            <button type="submit" class="btn btn-success rounded-pill" style="width: 35%; height:50px">ログインする</button>
          </div>
          <div class="col-md-6 mx-auto border-bottom forget-password" style="margin-top: 10%; padding-bottom: 2%">
            <a style="color:white" href="">※ログインパスワードを忘れた</a>
          </div>
        </div>
      </div>
    </div>
    <div style="position: absolute; top:25%; left:65%; z-index: -1">
      <image src="<?php echo e(asset('./images/logo2.png')); ?>" style="height: 80%; width: 80%;">
	</div>
	<input type="hidden" name="name" class="loginname">
  </form>
  </body>
</html><?php /**PATH /Applications/MAMP/htdocs/GoodEnough3/resources/views/login/mt4.blade.php ENDPATH**/ ?>