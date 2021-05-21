

<div class="row profileInfo mt-4">
	<div class="col-md-12 table-responsive-xl">
		<h3 class="profileName text-primary text-center" style="color:black!important;"><?php echo e($details["primary_holder"]["first_name"]); ?> <?php echo e($details["primary_holder"]["last_name"]); ?></h3>
		<table class="table table-striped">
			<tbody>
									<tr>
						<td class="d-lg-table-cell d-md-none d-table-cell">
							<div class="center-with-flex text-primary p-2 profileData">
								<img src=<?php echo e(asset("img/personal-icon/mail.png")); ?> style="width:20px;height:20px;" />
							</div>
							<div class="center-with-flex text-primary p-2 profileTitles"> メール </div>
						</td>
						<td class="d-table-cell">
							<div class="text-center p-2 profiletext">
								<?php echo e($details["primary_holder"]["email"]); ?>

							</div>
						</td>
					</tr>
													<tr>
						<td class="d-lg-table-cell d-md-none d-table-cell">
							<div class="center-with-flex text-primary p-2 profileData">
								<img src=<?php echo e(asset("img/personal-icon/person.png")); ?> style="width:20px;height:20px;" />
							</div>
							<div class="center-with-flex text-primary p-2 profileTitles"> トレード口座 </div>
						</td>
						<td class="d-table-cell">
							<div class="text-center p-2 profiletext">
							<?php echo e($details["account_number"]); ?>

							</div>
						</td>
					</tr>
													<tr>
						<td class="d-lg-table-cell d-md-none d-table-cell">
							<div class="center-with-flex text-primary p-2 profileData">
							<img src=<?php echo e(asset("img/personal-icon/money.png")); ?> style="width:20px;height:20px;" />
							</div>
							<div class="center-with-flex text-primary p-2 profileTitles"> 通貨 </div>
						</td>
						<td class="d-table-cell">
							<div class="text-center p-2 profiletext">
							<?php echo e($details["basic_information"]["currency"]); ?>

							</div>
						</td>
					</tr>
													<tr>
						<td class="d-lg-table-cell d-md-none d-table-cell">
							<div class="center-with-flex text-primary p-2 profileData">
							<img src=<?php echo e(asset("img/personal-icon/arrow.png")); ?> style="width:20px;height:20px;" />
							</div>
							<div class="center-with-flex text-primary p-2 profileTitles"> レバレッジ </div>
						</td>
						<td class="d-table-cell">
							<div class="text-center p-2 profiletext">
							<?php echo e($details["leverage"]); ?>

							</div>
						</td>
					</tr>
													<tr>
						<td class="d-lg-table-cell d-md-none d-table-cell">
							<div class="center-with-flex text-primary p-2 profileData">
							<img src=<?php echo e(asset("img/personal-icon/map.png")); ?> style="width:20px;height:20px;" />
							</div>
							<div class="center-with-flex text-primary p-2 profileTitles"> 国 </div>
						</td>
						<td class="d-table-cell">
							<div class="text-center p-2 profiletext">
							<?php echo e($details["primary_holder"]["country"]); ?>

							</div>
						</td>
					</tr>
													<tr>
						<td class="d-lg-table-cell d-md-none d-table-cell">
							<div class="center-with-flex text-primary p-2 profileData">
							<img src=<?php echo e(asset("img/personal-icon/calender.png")); ?> style="width:20px;height:20px;" />
							</div>
							<div class="center-with-flex text-primary p-2 profileTitles"> 接続日付 </div>
						</td>
						<td class="d-table-cell">
							<div class="text-center p-2 profiletext">
								<?php echo e($details["created_at"]); ?>

							</div>
						</td>
					</tr>
							</tbody>
		</table>
	</div>
</div><?php /**PATH /Applications/MAMP/htdocs/TasnicCapital/resources/views/personal/left_profile.blade.php ENDPATH**/ ?>