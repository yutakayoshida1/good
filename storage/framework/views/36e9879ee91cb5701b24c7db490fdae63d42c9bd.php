                        <div class="row mt-5">
							<h2 class="text-center col-12">口座サマリー</h2>					
						</div>
                        
                        <div class="row">
							<div class="sumaryTable col-6 mx-auto p-4 mt-5 border rounded">
								<table class="table table-hover">					  
									<tbody>
										<tr>
											<th class="border-top-0">口座番号</th>
											<td class="border-top-0"><?php echo e($thisUserWithEquity["login"]); ?></td>
										</tr>
										<tr>
											<th>口座残高</th>
											<td><?php echo e($thisUserWithEquity["balance"]); ?></td>
										</tr>
										<tr>
											<th>有効証拠金</th>
											<td colspan="2"><?php echo e($thisUserWithEquity["equity"]); ?></td>
										</tr>
										<tr>
											<th>必要証拠金</th>
											<td colspan="2"><?php echo e($thisUserWithEquity["margin"]); ?></td>
										</tr>
										<tr>
											<th>余剰証拠金</th>
											<td colspan="2"><?php echo e($thisUserWithEquity["yojou"]); ?></td>
										</tr>
										<tr>
											<th>証拠金維持率</th>
											<td colspan="2"><?php echo e($thisUserWithEquity["iziritu"]); ?></td>
										</tr>
										<tr>
											<th>ステータス</th>
											<td colspan="2"><?php echo e($details["status"]); ?></td>
										</tr>
									</tbody>
								</table>
							</div>
                        </div><?php /**PATH /Applications/MAMP/htdocs/TasnicCapital/resources/views/personal/summary_main.blade.php ENDPATH**/ ?>