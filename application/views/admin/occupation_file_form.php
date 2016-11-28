<?php


foreach ($occupation as $item) {
    $o[$item->id] = $item->name;

    if (isset($occupation_file)) {
        if ($occupation_file->occupation_id == $item->id) {
            $value = $item->id;
        }
    }
}
?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><?php echo $form_title ?></h2>
    </div>
    <div class="panel-body">

        <?php echo isset($need_upload) ? form_open_multipart($form_target_url) : form_open($form_target_url); ?>

        <div class="form-group" style="margin-left: 10px;margin-top: 10px">
            <label for="field_name"> File Name</label>
            <?php echo form_input('name', isset($occupation_file) ? $occupation_file->name : '', array('id' => 'field_name', 'class' => 'form-control', 'style' => 'width:auto')); ?>
        </div>


        <div class="form-group" style="margin-left: 10px;margin-top: 10px">
            <label for="field_code"> For Occupation</label>
            <?php echo isset($value)?form_dropdown('occupation_id', $o, $value, array('class' => 'form-control', 'style' => 'width:auto')):form_dropdown('occupation_id', $o, '', array('class' => 'form-control', 'style' => 'width:auto')); ?>
        </div>


        <div class="panel-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
</div>


