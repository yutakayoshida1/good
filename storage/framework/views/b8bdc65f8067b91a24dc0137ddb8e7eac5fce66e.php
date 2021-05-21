<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

<script>
		function addPlatform() {
			let loginname = "mt4-" + $(".AccountNumber").val();
			$(".loginname").val(loginname);
		};
</script>	

<form method="post" action="<?php echo e(route('fa2-confirm')); ?>" onsubmit="return addPlatform();" >
	<?php echo csrf_field(); ?>


	口座番号
			<input type="text" name="accountnum" class="AccountNumber">
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
	
	
	パスワード
			<input type="password" name="password">
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


			

			<div class="col-12 fieldContainer">
										<fieldset class="input">
											<span class="text-primary float-left">*</span><label class=" float-left" for="password">&nbsp;ワンタイムパスワード:</label>
											<input type="text" name="onepass" placeholder="ワンタイムパスワード" class="form-control required" >
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

									<input type="hidden" name="google2fa_secret" value="<?php echo e($google2fa_secret); ?>">

									


		<button type="submit">ログイン</button>
		
		<input type="hidden" name="name" class="loginname">
					
</form><?php /**PATH E:\ready\japan project\laravel design\goodenoughtreasure.com\resources\views/login/2fa.blade.php ENDPATH**/ ?>