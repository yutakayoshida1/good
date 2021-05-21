<div class="row mt-5 mb-5">
							<h2 class="text-center col-12">設定</h2>					
						</div>
						<div class="row">

							<div class="col-12 mb-4">
								<div class="card border-0 shadow mb-2 py-2">
									<div class="row no-gutters">
										<div class="col col-sm-2 align-self-center">
											<img src="<?php echo e(asset('img/personal-icon/2_factor_authenticate.png')); ?>" class="img-fluid m-4" alt="2-Factor Auth">
										</div>
										<div class="col col-sm-10">
											<div class="card-header text-right bg-white">
												<h5 class="card-title text-primary m-0">2-Factor Authentication</h5>
											</div>
											<div class="card-body">
												<p class="card-text"><b class="text-muted">How To Use:</b> Each time you log in to Tasnic-Capital's Cabinet, in addition to your username and password, you’ll also need a code generated by the Google Authenticator app on your phone. You must enter a dynamic code to log in. This effectively prevents account intrusion when the account password is leaked. <a href="https://support.google.com/accounts/answer/185839?hl=ja" target="_blank" class="text-primary">Learn More</a></p>
																							</div>
											<div class="card-footer text-right bg-white">
											<button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#activateTwoFactor" data-authaction="activate">Activate</button>
																							</div>
										</div>
									</div>
								</div>
							</div>
							
							
							

						</div>


						
						<?php echo $__env->make('personal.2_factor_authenticate', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Applications/MAMP/htdocs/TasnicCapital/resources/views/personal/setting_main.blade.php ENDPATH**/ ?>