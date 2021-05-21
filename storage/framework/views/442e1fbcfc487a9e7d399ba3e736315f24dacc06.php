<!DOCTYPE html>
<html lang="ja" class="cabinet  ">
<head>
	<meta charset="utf-8">
	<title>
					MT4 管理画面 | Tasnic-Capital 
			</title>
	
							
	
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo e($currentPath); ?>/../../assets/img/tn-favicon.ico.png">

				
				

			<link rel="stylesheet" href="<?php echo e($currentPath); ?>/../../assets/css/app.min-v=0.01.25.css">
	<link rel="stylesheet" href="<?php echo e($currentPath); ?>/../../assets/css/custom-d-v=0.01.25.css">
	<link rel="stylesheet" href="<?php echo e($currentPath); ?>/../../assets/css/custom-j-v=0.01.25.css">



		
				
						
		</head>
		<body>

<style>
input.form-control
{
    position:absolute;
    top:18px!important;
}

label.control-label
{
    position:absolute;
    top:0px!important;
}
</style>

			
	<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('layouts.inquery_form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('layouts.inquery_responce', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

	<?php echo $__env->make('layouts.header2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
		function addPlatform() {
			let loginname = "mt4-" + $(".AccountNumber").val();
			$(".loginname").val(loginname);
		};
</script>					
			
	<div class="container">
		<div class="row">
			<div class="col-12 text-center my-md-6 my-4">
				<h1>会員ページ</h1>
			</div>
		</div>
	</div>
	<div class="container content-cabinet pb-6">
		<div class="row">
						<div class="col-md-6 mx-auto card shadow p-0 back loginForm">
				<div class="card-body px-5 pt-5 pb-3">
											<h2 class="text-primary"><b>メタトレーダー4 </b></h2>
						<div class="loginCabinet">
							<form method="post" name="login_cabinet" id="login_cabinet" class="form-inline materializeForm py-4" action="<?php echo e(route('mt4login-confirm')); ?>" onsubmit="return addPlatform();" >
							<?php echo csrf_field(); ?>
																										<div class="col-12 fieldContainer">
										<fieldset class="input">
											<span class="text-primary float-left">*</span><label class=" float-left" for="login">&nbsp;口座番号:</label>
											<input type="text" name="accountnum" placeholder="口座番号" class="form-control required AccountNumber" value="">
											<?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
												<span class="invalid-feedback" role="alert">
													<strong><?php echo e($message); ?></strong>
												</span>
												<script>
													alert('口座番号またはパスワードが間違っています');
												</script>
											<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
										</fieldset>	            
									</div>	            
									<div class="col-12 fieldContainer">
										<fieldset class="input">
											<span class="text-primary float-left">*</span><label class=" float-left" for="password">&nbsp;パスワード:</label>
											<input type="password" name="password" placeholder="パスワード" class="form-control required">
											<?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
												<span class="invalid-feedback" role="alert">
													<strong><?php echo e($message); ?></strong>
												</span>
												<script>
													alert('口座番号またはパスワードが間違っています');
												</script>
											<?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
										</fieldset>
									</div>
																<div class="col-12 center-with-flex">
									<button class="btn btn-primary btn-block buttonSubmit w-50" type="submit">ログイン</button>
									<button type="button" class="btn btn-primary buttonLoading d-none" disabled>
										<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
										ロード中
									</button>
									<input type="hidden" name="name" class="loginname">
								</div>						
							</form>
							
															<div class="forgotPw text-muted text-center py-3">
																										</div>
													</div> 
									</div><!--
									<div class="card-footer d-flex justify-content-center ">
										
						<a href="mt4.html" class="btn btn-sm btn-outline-secondary mx-2 d-none">メタトレーダー4 </a>		
						<a href="mt5.html" class="btn btn-sm btn-outline-secondary mx-2 ">メタトレーダー5</a>		
						<a href="ctrader.html" class="btn btn-sm btn-outline-secondary mx-2 ">Cトレーダー</a>
					</div>-->
							</div>
		</div>
	</div>

	<!-- Modal -->
	<div class="modal fade" id="forgotPassword" tabindex="-1" role="dialog" aria-labelledby="forgotPasswordLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
			<div class="modal-content border-0">
				<div class="modal-header">
					<h5 class="modal-title" id="forgotPasswordLabel">パスワードを忘れた方はこちら</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="閉じる">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<p>In case you cannot remember your account Password, please feel free to contact us by live chat or by email at:  <a href="mailto:support@tasnic-capital.com" class="text-primary">support@tasnic-capital.com</a></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">閉じる</button>
				</div>
			</div>
		</div>
	</div>

				
	
	<?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	
	<a href="javascript:void(0);" id="scroll-top" title="Scroll to Top" style="display: none; opacity: 0.5;">Top<span></span></a>

	
	<script type="text/javascript" src="<?php echo e($currentPath); ?>/../../assets/js/signature_pad.umd.js"></script>
	<script type="text/javascript" src="<?php echo e($currentPath); ?>/../../assets/js/app.min-v=0.01.25.js"></script>

	<!-- TrustBox script --> <script type="text/javascript" src="https://widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script> <!-- End TrustBox script -->

			
	
	<script type="text/javascript">   
	jQuery(function () {
        if (appEnv.cookies.permission == "dismiss") {
            /*$('#modalCookie1').modal({ 
                keyboard: true
            });*/
            jQuery('#modalCookie1').modal('hide');       
        } else {
            jQuery('#modalCookie1').modal({
                backdrop: 'static',
                keyboard: false
            });
            jQuery('#modalCookie1').modal('show'); jQuery('#modalCookie1').modal('handleUpdate');
            setCookie('permission', 'waiting', 300);

            jQuery( "#cookiesdismiss" ).on("click", function() 
            {
                setCookie('permission','dismiss', (180 * 24 * 60 * 60));
                setTimeout(function () {
                    (appEnv.params.slug == "/cookies-declined") ? document.location.href = appEnv.uri.home : document.location.href = appEnv.params.slug                    
                }, 1000);
            });
            jQuery( "#cookiedecline" ).on("click", function() 
            {
                deleteAllCookies();
                setCookie('permission','declined', 200);
                setTimeout(function () {
                   (appEnv.params.slug == "/cookies-declined") ? document.location.href = appEnv.uri.home : document.location.href = appEnv.params.slug
                }, 2000);
            });
        }
	}); 	
	</script>


	
			
										
							</body>
			</html><?php /**PATH /Applications/MAMP/htdocs/TasnicCapital/resources/views/login/mt4.blade.php ENDPATH**/ ?>