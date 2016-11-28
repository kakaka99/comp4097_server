<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><?php echo isset($form_title) ? $form_title : 'Form'; ?></h2>
    </div>
    <?php echo isset($need_upload) ? form_open_multipart($form_target_url) : form_open($form_target_url);
    ?>

    <div class="panel-body">
        <div class="form-group">
            <label for="field_email_address"> Fast for HK passport</label>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <?php echo form_input('price_hk_fast', isset($price_hk) ? $price_hk->fast_price : '', array('id' => 'field_email_address', 'class' => 'form-control', 'style'=>'width:auto')); ?>
            </div>
        </div>

        <div class="form-group">
            <label for="field_company_email"> General for HK passport</label>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <?php echo form_input('price_hk', isset($price_hk) ? $price_hk->price : '', array('id' => 'field_company_email', 'class' => 'form-control', 'style'=>'width:auto')); ?>
            </div>

        </div>


        <div class="form-group">
            <label for="field_paypal"> Fast for DI passport </label>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <?php echo form_input('price_di_fast', isset($price_di) ? $price_di->fast_price : '', array('id' => 'field_paypal', 'class' => 'form-control', 'style'=>'width:auto')); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="field_paypal_password"> General for DI passport </label>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <?php echo form_input('price_di', isset($price_di) ? $price_di->price : '', array('id' => 'field_paypal_password', 'class' => 'form-control', 'style'=>'width:auto')); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="field_paypal_signature"> Fast for MSAR passport </label>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <?php echo form_input('price_msar_fast', isset($price_msar) ? $price_msar->fast_price : '', array('id' => 'field_paypal_signature', 'class' => 'form-control', 'style'=>'width:auto')); ?>
            </div>
        </div>
        <div class="form-group">
            <label for="field_paypal_signature"> General for MSAR passport </label>
            <div class="input-group">
                <span class="input-group-addon">$</span>
                <?php echo form_input('price_msar', isset($price_msar) ? $price_msar->price : '', array('id' => 'field_paypal_signature', 'class' => 'form-control', 'style'=>'width:auto')); ?>
            </div>
        </div>

    </div>
    <div class="panel-footer">
        <button type="submit" name="submit" class="btn btn-success" value="1">Submit</button>
    </div>
    </form>


</div>

