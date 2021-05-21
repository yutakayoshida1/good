

<div class="row mt-5">
							<h2 class="text-center col-12">口座履歴</h2>					
						</div>
						<div class="row mt-5">
							<div class="col-12">
								<div class="table-responsive shadow rounded">
									<table class="table table-hover table-sm historyTable">
										<thead class="thead-gray">
											<tr align="center">
																									<th scope="col">注文番号</th>
													<th scope="col">発注時刻</th>
													<th scope="col">注文種類</th>
													<th scope="col">サイズ</th>
													<th scope="col">銘柄</th>
													<th scope="col">発注価格</th>
													<th scope="col">S/L</th>
													<th scope="col">T/P</th>
													<th scope="col">決済時刻</th>
													<th scope="col">決済価格</th>
													<th scope="col">手数料</th>
													<th scope="col">スワップ</th>
													<th scope="col">Profit</th>
																							</tr>
										</thead>
										<tbody>
											<?php $__currentLoopData = $historyInfo->closedOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $closedOrder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<th scope="row" data-id="ticket"><?php echo e($closedOrder['order']); ?></th>
												<td data-id="opendate"><?php echo e($closedOrder['open_time']); ?></td>
												<td data-id="type"><?php echo e($closedOrder['type']); ?></td>
												<td data-id="size"><?php echo e($closedOrder['volume']); ?></td>
												<td data-id="symbol"><?php echo e($closedOrder['symbol']); ?></td>
												<td data-id="openprice"><?php echo e($closedOrder['open_price']); ?></td>
												<td data-id="sl"><?php echo e($closedOrder['SL']); ?></td>
												<td data-id="tp"><?php echo e($closedOrder['TP']); ?></td>
												<td data-id="closedate"><?php echo e($closedOrder['close_time']); ?></td>
												<td data-id="closeprice"><?php echo e($closedOrder['close_price']); ?></td>
												<td data-id="commission"><?php echo e($closedOrder['commission']); ?></td>
												<td data-id="swap"><?php echo e($closedOrder['swap']); ?></td>
												<td data-id="profit"><?php echo e($closedOrder['profit']); ?></td>
											</tr>
											<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col col-12 p-4 mt-4">
								<nav aria-label="Page navigation">
									<ul class="pagination ajax justify-content-center">
												<?php for($i = 1; $i <= $historyInfo-> maxPageNum; $i++): ?>
												<li class="page-item <?php if($i==$historyInfo-> pageNum): ?> active <?php endif; ?>">
													<a class="page-link" data-page="<?php echo e($i); ?>" href="?page=<?php echo e($i); ?>" aria-label="Current Page">
														<?php echo e($i); ?>

													</a>
												</li>
												<?php endfor; ?>

												<!--
																							<li class="page-item normal">
													<a class="page-link" data-page="2" href="#?page=2" aria-label="Next Page">
														»
													</a>
												</li>
																							<li class="page-item normal">
													<a class="page-link" data-page="11" href="#?page=11" aria-label="Last Page">
														&gt;
													</a>
												</li>
												-->
									</ul>
								</nav>
							</div>
						</div>
												<div class="row">
							<div class="col text-center py-4">
								<!--
								<a class="btn btn-main btn-primary text-white m-auto" href="#?page=export" download="">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download mr-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg>
									ダウンロード
								</a>
								-->
								
								<form action="<?php echo e(url('sample/download2')); ?>" method="post"  >
									<?php echo csrf_field(); ?>
									<input type="hidden" name="login" value="<?php echo e($historyInfo->login); ?>">
									<input type="submit" value="ダウンロード" >
								</form>

							</div>
						</div>
																			<div class="row">
								<div class="sumaryTable col-6 mx-auto p-2 my-2 border rounded">
									<table class="table table-hover">
										<tbody>
											<tr>
												<th class="border-top-0">ご入金:</th>
												<td class="border-top-0" data-title="Deposit"> <?php echo e($historyInfo-> calcUsingClosedOrders->sumOfNyukin); ?> </td>
											</tr>
											<tr>
												<th>出金額:</th>
												<td data-title="Withdrawal"> <?php echo e($historyInfo-> calcUsingClosedOrders->sumOfSyukkin); ?> </td>
											</tr>
											<tr>
												<th>ADJ:</th>
												<td data-title="Credit"> <?php echo e($historyInfo-> calcUsingClosedOrders->sumOfAdj); ?> </td>
											</tr>
											<tr>
												<th>手数料:</th>
												<td data-title="Commission"> <?php echo e($historyInfo-> calcUsingClosedOrders->sumOfCommission); ?> </td>
											</tr>
											<tr>
												<th>スワップ</th>
												<td data-title="Swap"> <?php echo e($historyInfo-> calcUsingClosedOrders->sumOfSwap); ?> </td>
											</tr>
											<tr>
												<th>確定損益:</th>
												<td data-title="Profit/Loss"> <?php echo e($historyInfo-> calcUsingClosedOrders->sumOfProfits); ?> </td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
											</div><?php /**PATH /Applications/MAMP/htdocs/GoodEnough3/resources/views/personal/history_main.blade.php ENDPATH**/ ?>