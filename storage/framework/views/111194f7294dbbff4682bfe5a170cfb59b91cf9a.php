<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            お名前
        </div>
    </div>
    <div class="col-md-10" style="display: flex;">
        <span class="form-label"> 姓(ローマ字)</span>
        <input class="form-control form-md" type="text" name="primary_holder[last_name]" />
        <span class="form-label">名(ローマ字)</span>
        <input class="form-control form-md" type="text" name="primary_holder[first_name]" />
    </div>
</div>

<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            身分証番号 <br>
            (パスポート・免許等)
        </div>
    </div>
    <div class="col-md-10">
        <input class="form-control form-md" type="text" name="primary_holder[from]" />
    </div>
</div>

<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            身分証の有効期限
        </div>
    </div>
    <div class="col-md-10" style="display: flex;">
        <select class="form-control form-sm" name="primary_holder[period_day]">
            <option value="">日</option>
            <?php
            for ($i = 1; $i <= 31; $i++) {
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
        </select>
        <select class="form-control form-sm" name="primary_holder[period_month]">
            <option value="">月</option>
            <?php
            for ($i = 1; $i <= 12; $i++) {
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
        </select>
        <select class="form-control form-sm" name="primary_holder[period_year]">
            <option value="">年</option>
            <?php
            for ($i = 2021; $i >= 1950; $i--) {
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
</div>

<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            生年月日
        </div>
    </div>
    <div class="col-md-10" style="display: flex;">
        <select class="form-control form-sm" name="primary_holder[birth_day]">
            <option value="">日</option>
            <?php
            for ($i = 1; $i <= 31; $i++) {
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
        </select>
        <select class="form-control form-sm" name="primary_holder[birth_month]">
            <option value="">月</option>
            <?php
            for ($i = 1; $i <= 12; $i++) {
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
        </select>
        <select class="form-control form-sm" name="primary_holder[birth_year]">
            <option value="">年</option>
            <?php
            for ($i = 2021; $i >= 1950; $i--) {
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
        </select>
    </div>
</div>



<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            国籍
        </div>
    </div>
    <div class="col-md-10">
        <select class="form-control form-md" name="basic_information[leverage]">
            <option value="">選択して下さい</option>
        </select>
    </div>
</div>

<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            お住まい
        </div>
    </div>
    <div class="col-md-10" style="display:flex;">
        <span class="form-label">都道府県</span>
        <input class="form-control form-md" type="text" name="primary_holder[last_name]" />
        <span class="form-label">市区町村 (ローマ字)</span>
        <input class="form-control form-md" type="text" name="primary_holder[first_name]" />
    </div>
</div>

<div class="row pad_vertical">
    <div class="col-md-2">
    </div>
    <div class="col-md-10" style="display:flex;">
        <span class="form-label"> 番地</span>
        <input class="form-control form-md" type="text" name="primary_holder[last_name]" />
        <span class="form-label">郵便番号</span>
        <input class="form-control form-md" type="text" name="primary_holder[first_name]" />
    </div>
</div>
<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            電話番号
        </div>
    </div>
    <div class="col-md-10">
        <input class="form-control form-md" type="text" name="primary_holder[phone]" />
    </div>
</div>

<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            メールアドレス
        </div>
    </div>
    <div class="col-md-10">
        <input class="form-control form-md" type="text" name="primary_holder[email]" />
    </div>
</div><?php /**PATH E:\ready\japan project\laravel design\goodenoughtreasure.com\resources\views/registerlayout/personal_basic.blade.php ENDPATH**/ ?>