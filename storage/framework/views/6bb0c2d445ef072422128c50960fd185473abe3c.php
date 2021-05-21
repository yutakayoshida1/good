<div style="text-align:center;">
    <h1>暗号通貨入金</h1><br>
    <h2>下記口座にお振り込みをお願いいたします</h2><br>
    反映までの時間: 着金確認即時　　手数料: ５％<br>
</div>

<div>
    <div class="green_back_box wide_padding_box">
        専用入金固定アドレス
    </div>
    <div>
        <?php $__currentLoopData = $depositCryptCurrencyInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $thisCurrencyInfo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="pad_vertical">
            <img src="<?php echo e($thisCurrencyInfo->img); ?>" /><br>
            <div class="col-sm-11 col-xs-10 pad0">
                <input type="text" value="<?php echo e($thisCurrencyInfo->address); ?>" class="small_text_box" readonly />
            </div>

            <div class="col-sm-1 col-xs-2 pad0">
                <div class="green_back_box small_text_box" />
                    Copy
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<div style="text-align:left;">
◇金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい<br>
◇場合により口座への入金反映が通常より遅れる場合がございます<br>
◇当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。返還が可能な場合においても、<br>
　それに係る手数料等をお支払いただくことがあります。<br>
◇ご入金には手数料（2.5%）が発生致します。<br>
◇外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。<br>
</div><?php /**PATH /home/r9920488/public_html/goodenoughtreasure.com/resources/views/deposits_parts/cryptocurrency.blade.php ENDPATH**/ ?>