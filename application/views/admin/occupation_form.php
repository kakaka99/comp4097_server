<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><?php echo $form_title ?></h2>
    </div>
    <div class="panel-body">

        <?php echo isset($need_upload) ? form_open_multipart($form_target_url) : form_open($form_target_url); ?>

        <div class="form-group" style="margin-left: 10px;margin-top: 10px">
            <label for="field_name"> Occupation Name</label>
            <?php echo form_input('name', isset($occupation) ? $occupation->name : '', array('id' => 'field_name', 'class' => 'form-control')); ?>
        </div>


        <div class="panel-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
</div>


