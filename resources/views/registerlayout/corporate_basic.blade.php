<div class="row">
    <div class="col-md-2">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            お名前
        </div>
    </div>
    <div class="col-md-10 mb-10">
        <input class="form-control form-md" type="text" name="company[name]" />
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            法人形態
        </div>
    </div>
    <div class="col-md-10 mb-10">
        <input class="form-control form-md" type="text" name="company[type_business]" />
    </div>
</div>

<div class="row mb-10">
    <div class="col-md-2">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            設立日
        </div>
    </div>
    <div class="col-md-10">
        <div class="col-sm-2 col-xs-4 form-sm">
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
        </div>
        <div class="col-sm-2 col-xs-4 form-sm">
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
        </div>
        <div class="col-sm-2 col-xs-4 form-sm">
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
</div>


<div class="row">
    <div class="col-md-2">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            登録国
        </div>
    </div>
    <div class="col-md-10 mb-10">
        <select class="form-control form-md" name="company[incorporation][country]">
            <option value="">選択して下さい</option>
        </select>
    </div>
</div>



<div class="row">
    <div class="col-md-2">
        <div class="text_right_box3">
            <span style="color: red;">*</span>
            住所
        </div>
    </div>
    <div class="col-md-10">
        <div class="col-md-4 mb-10 form-md-l">
            <input class="form-control" type="text" name="company[address1]" placeholder="都道府県" />
        </div>
        <div class="col-md-4 mb-10 form-md-l">
            <input class="form-control" type="text" name="company[address2]" placeholder="市区町村 (ローマ字)" />
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-10">
        <div class="col-md-4 mb-10 form-md-l">
            <input class="form-control" type="text" name="company[address3]" placeholder="番地" />
        </div>
        <div class="col-md-4 mb-10 form-md-l">
            <input class="form-control" type="text" name="company[address4]" placeholder="郵便番号" />
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
        <input class="form-control form-md" type="text" name="company[phone]" />
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
        <input class="form-control form-md" type="text" name="company[email]" />
    </div>
</div>