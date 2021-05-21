

<h1 class="center_text">
暗号通貨出金
</h1>

<table class="table noneborder">					  
    <tbody>

        <tr>
            <td class="text_right_box2">
                出金元口座番号
            </td>
            <td class="text_left_box2">
                8091709710
            </td>
        </tr>

    </tbody>
</table>

<h2 class="row center_text">
送金暗号通貨選択
</h2>

<div class="row pad_vertical center_text">

    <?php $__currentLoopData = $depositCryptCurrencyInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thisCurrencyInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <input type="radio" name="crypt_currency" value="<?php echo e($thisCurrencyInfo->name); ?>"> <img src="<?php echo e($thisCurrencyInfo->img); ?>" />
    
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<div class="row pad_vertical center_text">

    <div class="col-md-4 pad_vertical">
        <div class="labeltext35">
        出金申請金額
        </div>
    </div>
    <div class="col-md-4 pad_vertical">
        <input type="text" class="input_bank_withdraw" />
    </div>
    <div class="col-md-4 pad_vertical">
        <div class="green_back_box small_text_box" />
        算出
        </div>
    </div>

</div>




<h3 class="row center_text">
    1.5567 BTC
</h3>

<div class="row pad_vertical">
    送金先暗号通貨ウォレットアドレス<br>
    <input type="text" class="input_bank_withdraw" />
</div>


<div class="row">
    <div class="col-md-4 pad_vertical">
        <div class="green_back_box small_text_box" />
        MT4パスワード入力
        </div>
    </div>
    <div class="col-md-4 pad_vertical">
        <input type="text" class="input_bank_withdraw" /> 
    </div>
    <div class="col-md-4 pad_vertical">
        <div class="red_back_box small_text_box" />
        出金申請
        </div>
    </div>
</div>

<?php /**PATH /home/r9920488/public_html/goodenoughtreasure.com/resources/views/deposits_parts/withdrawal_crypt.blade.php ENDPATH**/ ?>