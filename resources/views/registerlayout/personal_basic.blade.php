<div class="row mb-10">
    <div class="col-md-2 mb-10">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            お名前
        </div>
    </div>
    <div class="col-md-10">
        <div class="col-md-3 form-label">
            姓(ローマ字)
        </div>
        <div class="col-md-3 mb-10">
            <input class="form-control form-md" type="text" name="primary_holder[last_name]" />
        </div>
        <div class="col-md-3 form-label">
            名(ローマ字)
        </div>
        <div class="col-md-3 mb-10">
            <input class="form-control form-md" type="text" name="primary_holder[first_name]" />
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            身分証番号 <br>
            (パスポート 免許等)
        </div>
    </div>
    <div class="col-md-10 mb-10">
        <input class="form-control form-md" type="text" name="primary_holder[from]" />
    </div>
</div>

<div class="row mb-10">
    <div class="col-md-2">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            身分証の有効期限
        </div>
    </div>
    <div class="col-md-10">
        <div class="col-sm-2 col-xs-4 form-sm">
            <select class="form-control" name="primary_holder[period_day]">
                <option value="">日</option>
                <?php
                for ($i = 1; $i <= 31; $i++) {
                ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2 col-xs-4 form-sm">
            <select class="form-control" name="primary_holder[period_month]">
                <option value="">月</option>
                <?php
                for ($i = 1; $i <= 12; $i++) {
                ?>
                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div class="col-sm-2 col-xs-4 form-sm">
            <select class="form-control" name="primary_holder[period_year]">
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
</div>

<div class="row mb-10">
    <div class="col-md-2">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            生年月日
        </div>
    </div>
    <div class="col-md-10 mb-10">
        <div class="col-sm-2 col-xs-4 form-sm">
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
        </div>
        <div class="col-sm-2 col-xs-4 form-sm">
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
        </div>
        <div class="col-sm-2 col-xs-4 form-sm">
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
</div>



<div class="row">
    <div class="col-md-2">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            国籍
        </div>
    </div>
    <div class="col-md-10 mb-10">
        <select class="form-control form-md" name="basic_information[leverage]">
            <option value="">選択して下さい</option>
        </select>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            お住まい
        </div>
    </div>
    <div class="col-md-10">
        <div class="col-md-3 form-label">
            都道府県
        </div>
        <div class="col-md-3 mb-10">
            <input class="form-control form-md" type="text" name="primary_holder[last_name]" />
        </div>
        <div class="col-md-3 form-label">
            市区町村 (ローマ字)
        </div>
        <div class="col-md-3 mb-10">
            <input class="form-control form-md" type="text" name="primary_holder[first_name]" />
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-10">
        <div class="col-md-3 form-label">
            番地
        </div>
        <div class="col-md-3 mb-10">
            <input class="form-control form-md" type="text" name="primary_holder[last_name]" />
        </div>
        <div class="col-md-3 form-label">
            郵便番号
        </div>
        <div class="col-md-3 mb-10">
            <input class="form-control form-md" type="text" name="primary_holder[first_name]" />
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-2">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            電話番号
        </div>
    </div>
    <div class="col-md-10 mb-10">
        <input class="form-control form-md" type="text" name="primary_holder[phone]" />
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            メールアドレス
        </div>
    </div>
    <div class="col-md-10 mb-10">
        <input class="form-control form-md" type="text" name="primary_holder[email]" />
    </div>
</div>