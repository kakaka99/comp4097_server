<?php echo form_open(isset($target)?$target : ''); ?>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title"><?php echo $form_title?></h2>
        </div>



        <div class="panel-body">
            <label style="margin-bottom: 3px" for="content_editor">Content</label>
            <?php

            //foreach($content as $row) echo $row->news_content;
           echo form_textarea('content', $list->content, array('id' => 'content_editor_en', 'class' => 'ckeditor')); ?>
        </div>



        <div class="panel-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>

<script src="<?php echo base_url();?>public/admin/js/ckeditor/ckeditor.js"></script>
<script>
$(document).ready(function () {
    $('.ckeditor').each(function() {
        CKEDITOR.replace($(this).attr('id'), {
            toolbarGroups: [
                { name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
                { name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
                { name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
                { name: 'forms', groups: [ 'forms' ] },
                '/',
                { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
                { name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
                { name: 'links', groups: [ 'links' ] },
                { name: 'insert', groups: [ 'insert' ] },
                '/',
                { name: 'styles', groups: [ 'styles' ] },
                { name: 'colors', groups: [ 'colors' ] },
                { name: 'tools', groups: [ 'tools' ] },
                { name: 'others', groups: [ 'others' ] },
                { name: 'about', groups: [ 'about' ] }
            ],
            removeButtons: 'Form,Checkbox,Radio,TextField,Textarea,Select,Button,HiddenField,ImageButton,BidiLtr,BidiRtl,Language,Flash,Save,NewPage,Print,Preview,About',
            filebrowserImageUploadUrl: '<?php echo base_url('index.php/admin/ckediter_upload')?>',
            filebrowserWindowWidth: 800,
            filebrowserWindowHeight: 500,
            height: 400,
            width: 1000,
            baseHref: '<?php echo base_url();?>'
        });
    });
});
</script>