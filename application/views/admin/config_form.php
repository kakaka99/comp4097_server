<?php
$select = array(
    '0' => 'Enable',
    '1' => 'Disable'
);

$select_box = array(
    '0' => 'Enable',
    '1' => 'Disable'
);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><?php echo isset($form_title) ? $form_title : 'Form';?></h2>
    </div>
    <?php echo isset($need_upload) ? form_open_multipart($form_target_url) : form_open($form_target_url);
    ?>

    <div class="panel-body">

        <div class="form-group">
            <label for="field_company_email"> Email</label>
            <?php echo form_input('email_address', isset($data) ? $data->email_address : '', array('id' => 'field_company_email', 'class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <label for="field_name"> Web name</label>
            <?php echo form_input('web_name', isset($data) ? $data->web_name : '', array('id' => 'field_name', 'class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <label for="field_keyword"> Keyword</label>
            <?php echo form_input('keyword', isset($data) ? $data->keyword : '', array('id' => 'field_keyword', 'class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <label for="field_description"> Description</label>
            <?php echo form_input('description', isset($data) ? $data->description : '', array('id' => 'field_description', 'class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <label for="field_statement"> Statement</label>
            <?php echo form_textarea('statement', isset($data) ? $data->statement : '', array('id' => 'field_statement', 'class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <label for="field_paypal"> PayPal Account </label>
            <?php echo form_input('paypal_id', isset($data) ? $data->paypal : '', array('id' => 'field_paypal', 'class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <label for="field_paypal_password"> PayPal Password </label>
            <?php echo form_input('paypal_password', isset($data) ? $data->paypal_password : '', array('id' => 'field_paypal_password', 'class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <label for="field_paypal_signature"> PayPal Signature </label>
            <?php echo form_input('paypal_signature', isset($data) ? $data->paypal_signature : '', array('id' => 'field_paypal_signature', 'class' => 'form-control'));?>
        </div>

        <div class="form-group">
            <label for="field_paypal_sandbox"> Development Mode(Sandbox)  </label>
            <?php echo form_dropdown('paypal_sandbox', $select_box ,isset($data) ? $data->paypal_sandbox : '', array('id' => 'field_paypal_sandbox', 'class' => 'form-control'));?>
        </div>

        


    </div>
    <div class="panel-footer">
        <button type="submit" name="submit" class="btn btn-success" value="1">Submit</button>
    </div>
    </form>



</div>

