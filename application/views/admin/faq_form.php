<?php //echo form_open(isset($content)?'admin/news_edit/'.$content->id : 'admin/news_add/'); ?>

<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title"><?php echo $form_title?></h2>
    </div>
    <div class="panel-body">

        <?php echo isset($need_upload) ? form_open_multipart($form_target_url) : form_open($form_target_url);?>

        <div class="form-group" style="margin-left: 10px;margin-top: 10px">
            <label for="field_news_title"> Title</label>
            <?php echo form_input('title', isset($faq) ? $faq->title : '', array('id' => 'field_news_title', 'class' => 'form-control'));?>
        </div>


        <div class="form-group" style="margin-left: 10px;margin-top: 10px">
            <label for="field_news_order"> Order</label>
            <?php echo form_input('order', isset($faq) ? $faq->faq_order : '', array('id' => 'field_news_order', 'class' => 'form-control'));?>
        </div>


        <div class="form-group"  style="margin-top: 10px;margin-left: 10px">

            <label style="margin-bottom: 3px" for="content_editor">Content</label>
            <?php

            //foreach($content as $row) echo $row->news_content;
            echo form_textarea('content', isset($faq->content)?$faq->content:'', array('id' => 'content', 'class' => 'form-control')); ?>
        </div>


        <div class="panel-footer">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
    </form>
</div>


