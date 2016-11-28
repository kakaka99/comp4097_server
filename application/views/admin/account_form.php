<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><?php echo isset($form_title) ? $form_title : 'Form';?></h2>
    </div>
    <?php echo isset($need_upload) ? form_open_multipart($form_target_url) : form_open($form_target_url);?>
    <div class="panel-body">
        <div class="form-group">
            <label for="field_admin_username">User Name</label>
            <?php echo form_input('username', isset($user) ? $user->username : '', array('id' => 'field_category_name', 'class' => 'form-control'));?>
        </div>
        <div class="form-group">
            <label for="field_admin_old_password">Old Password</label>
            <?php echo form_input('old_password', '', array('id' => 'field_admin_old_password', 'class' => 'form-control'));?>
        </div>
        <div class="form-group">
            <label for="field_admin_new_password">New Password</label>
            <?php echo form_input('new_password', '', array('id' => 'field_admin_new_password', 'class' => 'form-control'));?>
        </div>
    </div>
    <div class="panel-footer">
        <button type="submit" class="btn btn-success">Submit</button>
    </div>
    </form>
</div>