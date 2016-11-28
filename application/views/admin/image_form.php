<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><?php echo isset($form_title) ? $form_title : 'Form';?></h2>
    </div>
    
    <?php echo isset($need_upload) ? form_open_multipart($form_target_url) : form_open($form_target_url);
    ?>
    <div class="panel-body">
        
        <div class="form-group">
            <label for="field_banner">Image</label>
            <?php echo form_upload("image", '' , array('id' => 'field_banner', 'class' => 'form-control'));?>
        </div>





    </div>
    <div class="panel-footer">
        <button type="submit" name="is_submit" value="1" class="btn btn-success">Submit</button>
    </div>
    </form>
</div>