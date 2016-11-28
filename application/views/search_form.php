<div class="category_select">

    <div class="category_content">

        <form action="<?php echo base_url('home/edit_form')?>" method="post">
        <div class="input_row">
            <label> 類別 Category : </label>
            <select name="category" class="form-control" id="attr_select">
                <option value="3">覲光景點 Attractions</option>
                <option value="2">購物及餐飲 Shopping & dining</option>
                <option value="1">酒店 Hotel</option>
                <option value="4">其他場所 Others</option>
            </select>
        </div>

            <div class="input_row">
                <label> 地點 Item : </label>
                <select name="attr_id" class="form-control">
                    <?php foreach ($attr as $item) { ?>
                        <option class="attr_op attr_option_<?php echo $item->category_id?>" value="<?php echo $item->id?>"><?php echo$item->name_tc .' '.$item->name_en?></option>
                    <?php } ?>
                </select>
            </div>

        <div class="input_row">
            <button style="width: 68px;margin-left: 120px" type="submit" class="btn btn-default">Submit</button>
        </div>
        </form>

    </div>


</div>        <br class="clear">
