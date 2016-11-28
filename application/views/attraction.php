<div class="category_select">

    <div class="category_content">

        <!--
        <select class="form-control start_select">
            <?php foreach ($attraction as $item) {
                ?>
                <option value="<?php echo $item->id ?>"><?php echo $item->name_tc .'<br>'.$item->name_en ?></option>
            <?php } ?>
        </select>
-->

        
        <?php $i = 0;
        foreach ($attraction as $item) {
            ?>
            <a href="<?php echo base_url('home/attraction_detail/'.$item->id)?>">
                <div class="attraction_row <?php echo $i % 2 == 0 ? 'row_bk_1' : '' ?> <?php echo $i == 0 ? 'first_row' : '' ?>">
                    <div class="row_left">
                        <span class="at_name"><?php echo ''.$item->name_tc?></span><br><?php echo $item->name_en?><br>
                        <?php echo '地址:'.$item->address_tc?>
                    </div>

                    <div class="row_right">
                        <?php echo '電話:'.$item->phone_number?><br>
                        <?php echo '傳真:'.$item->fax_number?><br>
                        網站: <?php echo $item->url_tc?>
                    </div>
                    <br class="clear">
                </div>
            </a>
            <?php $i++;
        } ?>


    </div>


</div>
<br class="clear">
