<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            お名前
        </div>
    </div>
    <div class="col-md-10">
        <input class="form-control form-md" type="text" name="company[name]" />
    </div>
</div>

<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            法人形態
        </div>
    </div>
    <div class="col-md-10">
        <input class="form-control form-md" type="text" name="company[type_business]" />
    </div>
</div>

<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            設立日
        </div>
    </div>
    <div class="col-md-10" style="display: flex;">
        <select class="form-control form-sm" name="company[incorporation][day]">
            <option value="">日</option>
            <?php
            for ($i = 1; $i <= 31; $i++) {
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
        </select>
        <select class="form-control form-sm" name="company[incorporation][month]">
            <option value="">月</option>
            <?php
            for ($i = 1; $i <= 12; $i++) {
            ?>
                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
            <?php
            }
            ?>
        </select>
        <select class="form-control form-sm" name="company[incorporation][year]">
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
            登録国
        </div>
    </div>
    <div class="col-md-10">
        <select class="form-control form-md" name="company[incorporation][country]">
            <option value="">選択して下さい</option>
        </select>
    </div>
</div>



<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            住所
        </div>
    </div>
    <div class="col-md-10" style="display:flex;">
        <span class="form-label">都道府県</span>
        <input class="form-control form-md" type="text" name="company[address1]" />
        <span class="form-label">市区町村 (ローマ字)</span>
        <input class="form-control form-md" type="text" name="company[address2]" />
    </div>
</div>

<div class="row pad_vertical">
    <div class="col-md-2">
    </div>
    <div class="col-md-10" style="display:flex;">
        <span class="form-label"> 番地</span>
        <input class="form-control form-md" type="text" name="company[address3]" />
        <span class="form-label">郵便番号</span>
        <input class="form-control form-md" type="text" name="company[address4]" />
    </div>
</div>

<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            電話番号
        </div>
    </div>
    <div class="col-md-10">
        <input class="form-control form-md" type="text" name="company[phone]" />
    </div>
</div>

<div class="row pad_vertical">
    <div class="col-md-2">
        <div class="text_right_box3">
            メールアドレス
        </div>
    </div>
    <div class="col-md-10">
        <input class="form-control form-md" type="text" name="company[email]" />
    </div>
</div>