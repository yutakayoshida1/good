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
					<tr>
						<td scope="row" data-id="ticket">test</td>
						<td data-id="opendate">test</td>
						<td data-id="type">test</td>
						<td data-id="size">test</td>
						<td data-id="symbol">test</td>
						<td data-id="openprice">test</td>
						<td data-id="sl">test</td>
						<td data-id="tp">test</td>
						<td data-id="closedate">test</td>
						<td data-id="closeprice">test</td>
						<td data-id="commission">test</td>
						<td data-id="swap">test</td>
						<td data-id="profit">test</td>
					</tr>
					<tr>
						<td scope="row" data-id="ticket">test</td>
						<td data-id="opendate">test</td>
						<td data-id="type">test</td>
						<td data-id="size">test</td>
						<td data-id="symbol">test</td>
						<td data-id="openprice">test</td>
						<td data-id="sl">test</td>
						<td data-id="tp">test</td>
						<td data-id="closedate">test</td>
						<td data-id="closeprice">test</td>
						<td data-id="commission">test</td>
						<td data-id="swap">test</td>
						<td data-id="profit">test</td>
					</tr>
					<tr>
						<td scope="row" data-id="ticket">test</td>
						<td data-id="opendate">test</td>
						<td data-id="type">test</td>
						<td data-id="size">test</td>
						<td data-id="symbol">test</td>
						<td data-id="openprice">test</td>
						<td data-id="sl">test</td>
						<td data-id="tp">test</td>
						<td data-id="closedate">test</td>
						<td data-id="closeprice">test</td>
						<td data-id="commission">test</td>
						<td data-id="swap">test</td>
						<td data-id="profit">test</td>
					</tr>
					<tr>
						<td scope="row" data-id="ticket">test</td>
						<td data-id="opendate">test</td>
						<td data-id="type">test</td>
						<td data-id="size">test</td>
						<td data-id="symbol">test</td>
						<td data-id="openprice">test</td>
						<td data-id="sl">test</td>
						<td data-id="tp">test</td>
						<td data-id="closedate">test</td>
						<td data-id="closeprice">test</td>
						<td data-id="commission">test</td>
						<td data-id="swap">test</td>
						<td data-id="profit">test</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="row">
	<div style="width: fit-content; margin:auto">
		<div>
			<span>
				<< </span>
					<span style="color: green;">1</span>
					<span> >> </span>
		</div>
	</div>
</div>
<div class="row" style="margin-top:20px;">
	<div class="col text-center py-4">

		<form action="<?php echo e(url('sample/download2')); ?>" method="post">
			<?php echo csrf_field(); ?>
			<input type="hidden" name="login" value="test">
			<input class="submit-btn" type="submit" value="ダウンロード" style="margin: 0;">
		</form>

	</div>
</div>
<div class="row" style="margin-top: 50px;">
	<div class="sumaryTable col-6 mx-auto p-2 my-2 border rounded">
		<table class="table" style="margin-bottom: 0;">
			<tbody>
				<tr>
					<th class="border-top-0">ご入金:</th>
					<td class="border-top-0" data-title="Deposit">7.61 </td>
				</tr>
				<tr>
					<th>出金額:</th>
					<td data-title="Withdrawal">-1 </td>
				</tr>
				<tr>
					<th>ADJ:</th>
					<td data-title="Credit">0 </td>
				</tr>
				<tr>
					<th>手数料:</th>
					<td data-title="Commission">0 </td>
				</tr>
				<tr>
					<th>スワップ</th>
					<td data-title="Swap">0 </td>
				</tr>
				<tr>
					<th>確定損益:</th>
					<td data-title="Profit/Loss">0 </td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</div><?php /**PATH E:\Gitub project\good\resources\views/personal/history_main.blade.php ENDPATH**/ ?>