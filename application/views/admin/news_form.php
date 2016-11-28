<?php //echo form_open(isset($content)?'admin/news_edit/'.$content->id : 'admin/news_add/'); ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">News Edit</h2>
    </div>
    <div class="panel-body">

        <?php echo isset($need_upload) ? form_open_multipart($form_target_url) : form_open($form_target_url); ?>

        <div class="form-group" style="margin-left: 10px;margin-top: 10px">
            <label for="field_news_title"> Title</label>
            <?php echo form_input('title', isset($news) ? $news->title : '', array('id' => 'field_news_title', 'class' => 'form-control')); ?>
        </div>

        <div class="form-group" style="margin-left: 10px;margin-top: 10px">
            <label for="field_news_order"> Order</label>
            <?php echo form_input('news_order', isset($news) ? $news->news_order : '', array('id' => 'field_news_order', 'class' => 'form-control')); ?>
        </div>

        <div class="form-group">
            <label for="field_image"> Image</label>
            <?php echo form_upload('image', '', array('id' => 'field_image', 'class' => 'form-control',)); ?>
            <?php
            if (isset($news)) {
                ?>
                <a href="<?php echo base_url($news->image); ?>" class="btn btn-default" target="_blank">View
                    Photo</a>
                <?php
            }
            ?>
        </div>


        <div class="form-group" style="margin-top: 10px;margin-left: 10px">

            <label style="margin-bottom: 3px" for="content_editor">Content</label>
            <?php

            //foreach($content as $row) echo $row->news_content;
            echo form_textarea('content', isset($news->content) ? $news->content : '', array('id' => 'content', 'class' => 'ckeditor')); ?>
        </div>


        <div class="panel-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
</div>


<script src="<?php echo base_url(); ?>public/admin/js/ckeditor/ckeditor.js"></script>
<script>
    $(document).ready(function () {
        $('.ckeditor').each(function () {
            CKEDITOR.replace($(this).attr('id'), {
                toolbarGroups: [
                    {name: 'document', groups: ['mode', 'document', 'doctools']},
                    {name: 'clipboard', groups: ['clipboard', 'undo']},
                    {name: 'editing', groups: ['find', 'selection', 'spellchecker', 'editing']},
                    {name: 'forms', groups: ['forms']},
                    '/',
                    {name: 'basicstyles', groups: ['basicstyles', 'cleanup']},
                    {name: 'paragraph', groups: ['list', 'indent', 'blocks', 'align', 'bidi', 'paragraph']},
                    {name: 'links', groups: ['links']},
                    {name: 'insert', groups: ['insert']},
                    '/',
                    {name: 'styles', groups: ['styles']},
                    {name: 'colors', groups: ['colors']},
                    {name: 'tools', groups: ['tools']},
                    {name: 'others', groups: ['others']},
                    {name: 'about', groups: ['about']}
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