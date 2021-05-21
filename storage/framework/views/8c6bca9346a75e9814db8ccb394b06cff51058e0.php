<style>

.btc_payment
{
	display:none;
}

.bank_payment
{
	display:none;
}
</style>

<script>

$(function () {
	
	console.log("通ってる？-begin");
	$('#select_currency').change(function() {
		console.log("クリックイベント");
		console.log($(this).val());
		if($(this).val()=="btc")
		{
			$(".btc_payment").show();
			$(".bank_payment").hide();
			$('.bank_required').removeAttr('required');
			$('.btc_required').addAttr('required');
		}
		if($(this).val()=="eth")
		{
			$(".btc_payment").show();
			$(".bank_payment").hide();
			$('.bank_required').removeAttr('required');
			$('.btc_required').addAttr('required');
		}
		if($(this).val()=="tether")
		{
			$(".btc_payment").show();
			$(".bank_payment").hide();
			$('.bank_required').removeAttr('required');
			$('.btc_required').addAttr('required');
		}
		if($(this).val()=="rip")
		{
			$(".btc_payment").show();
			$(".bank_payment").hide();
			$('.bank_required').removeAttr('required');
			$('.btc_required').addAttr('required');
		}
		if($(this).val()=="bank")
		{
			$(".btc_payment").hide();
			$(".bank_payment").show();
			$('.btc_required').removeAttr('required');
			$('.bank_required').addAttr('required');
		}

	});
	console.log("通ってる？-end");
});

</script>


<form method="POST" action="<?php echo e(route('withdrawal-application')); ?>">
<?php echo csrf_field(); ?>
<div class="row">

	<input type="hidden" name="name" value='<?php echo e($details["primary_holder"]["first_name"]); ?> <?php echo e($details["primary_holder"]["last_name"]); ?>'>
	
    <div class="col-12 col-sm-6 col-md-4 mt-4">
        トレード口座<br>
		<?php echo e($details["account_number"]); ?>

		<input type="hidden" name="account_number" value="<?php echo e($details["account_number"]); ?>">
    </div>

	<div class="col-12 col-sm-6 col-md-4 mt-4">
		メール<br>
		<?php echo e($details["primary_holder"]["email"]); ?>

		<input type="hidden" name="email" value="<?php echo e($details["primary_holder"]["email"]); ?>">
    </div>

	<div class="col-12 col-sm-6 col-md-4 mt-4">
		Phone<br>
		<?php echo e($details["primary_holder"]["phone"]); ?>

		<input type="hidden" name="phone" value="<?php echo e($details["primary_holder"]["phone"]); ?>">
    </div>

	<div class="col-12 col-sm-6 col-md-4 mt-4">
        ご出金方法<br>
		<select id="select_currency" name="howdo" required>
			<option value="" selected disabled>選択してください</option>
			<option value="btc">BITCOIN</option>
			<option value="tether">TETHER</option>
			<option value="eth">ETH</option>
			<option value="rip">XRP</option>
			<option value="bank">銀行送金</option>
		</select>
    </div>
    
	<div class="col-12 col-sm-6 col-md-4 mt-4">
        出金額<br>
		<input type="number" name="howmuch" style="width:100%;" required />
    </div>

	<div class="col-12 col-sm-6 col-md-4 mt-4">
        口座の通貨<br>
		<select name="currency_kind" required>
			<option value="" selected disabled>選択してください</option>
			<option value="usd"">USD</option>
		</select>
    </div>


	
	<p style="width:100%;text-align:center;position:relative;top:50px;color:black;" class="btc_payment">
	送金先情報
	</p>

	<div class="col-12 col-sm-6 col-md-4 mt-4" class="btc_payment">
        <span class="btc_payment">*受取アドレス</span><br>
		<input type="text" name="receiver_cryptaddress" style="width:100%;" class="btc_payment btc_required" required />
	</div>



	<p style="width:100%;text-align:center;position:relative;top:50px;color:black;height:50px;" class="bank_payment">
	送金先情報
	</p>
		
		<div class="col-12 col-sm-6 col-md-4 mt-4 bank_payment">
			<span class="bank_payment">*銀行口座名義人氏名</span><br>
			<input type="text" name="receiver_name" style="width:100%;" class="bank_payment bank_required" required />
		</div>

		<div class="col-12 col-sm-6 col-md-4 mt-4 bank_payment">
			<span class="bank_payment">銀行口座名義人住所</span><br>
			<input type="text" name="receiver_address" style="width:100%;" class="bank_payment" />
		</div>

		<div class="col-12 col-sm-6 col-md-4 mt-4 bank_payment">
			<span class="bank_payment">*受取人口座番号</span><br>
			<input type="text" name="receiver_accountnum" style="width:100%;" class="bank_payment bank_required" required />
		</div>

		<div class="col-12 col-sm-6 col-md-4 mt-4 bank_payment">
			<span class="bank_payment">*銀行名</span><br>
			<input type="text" name="receiver_bankname" style="width:100%;" class="bank_payment bank_required" required />
		</div>

		<div class="col-12 col-sm-6 col-md-4 mt-4 bank_payment">
			<span class="bank_payment">支店名</span><br>
			<input type="text" name="receiver_bankbranch" style="width:100%;" class="bank_payment" />
		</div>

		<div class="col-12 col-sm-6 col-md-4 mt-4 bank_payment">
			<span class="bank_payment">普通/当座</span><br>
			<input type="text" name="receiver_bankkind" style="width:100%;" class="bank_payment" />
		</div>

		<div class="col-12 col-sm-6 col-md-4 mt-4 bank_payment">
			<span class="bank_payment">銀行住所</span><br>
			<input type="text" name="receiver_bankaddress" style="width:100%;" class="bank_payment" />
		</div>

		<div class="col-12 col-sm-6 col-md-4 mt-4 bank_payment">
			<span class="bank_payment">SWIFTコードもしくはABA番号</span><br>
			<input type="text" name="receiver_swift" style="width:100%;" class="bank_payment" placeholder="半角英数" />
		</div>

		<div class="col-12 col-sm-6 col-md-4 mt-4 bank_payment">
			<span class="bank_payment">備考(必要な場合)</span><br>
			<input type="text" name="receiver_bikou" style="width:100%;" class="bank_payment" />
		</div>

	
	
	<div class="col-12">
		<center>
			<button type="submit" id="inquery_btn" class="btn btn-lg btn-outline-primary">
				送信する
			</button>
		</center>
	</div>

	
	
</div>

</div><?php /**PATH /Applications/MAMP/htdocs/TasnicCapital/resources/views/deposits_parts/withdrawal.blade.php ENDPATH**/ ?>