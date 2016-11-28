<div class="category_select">

    <div class="category_content">

        <form action="<?php echo $target_url?>" method="post">
            
            <input type="hidden" name="attr_id" value="<?php if(isset($attr)) echo $attr->id ?>" >
            
        <div class="input_row">
            <label> 類別 Category : </label>
            <select name="category" class="form-control">
                <option value="3" <?php if(isset($attr)) echo ($attr->category_id==3)?'selected':'' ?>>覲光景點 Attractions</option>
                <option value="2" <?php if(isset($attr)) echo ($attr->category_id==2)?'selected':'' ?>>購物及餐飲 Shopping & dining</option>
                <option value="1" <?php if(isset($attr)) echo ($attr->category_id==1)?'selected':'' ?>>酒店 Hotel</option>
                <option value="4" <?php if(isset($attr)) echo ($attr->category_id==4)?'selected':'' ?>>其他場所 Others</option>
            </select>
        </div>

        <div class="input_row">
            <label> 名稱 : </label>
            <input type="text" name="name_tc" class="form-control" placeholder="請輸入名稱" value=" <?php if(isset($attr)) echo $attr->name_tc ?>">
        </div>

        <div class="input_row">
            <label> Name : </label>
            <input type="text" name="name_en" class="form-control" placeholder="Please input Name" value=" <?php if(isset($attr)) echo $attr->name_en ?>">
        </div>

        <div class="input_row">
            <label> 地址 : </label>
            <input type="text" name="address_tc" class="form-control" placeholder="請輸入地址"  value=" <?php if(isset($attr)) echo $attr->address_tc ?>">
        </div>

        <div class="input_row">
            <label> Address : </label>
            <input type="text" name="address_en" class="form-control" placeholder="Please input Address"  value=" <?php if(isset($attr)) echo $attr->address_en ?>">
        </div>

        <div class="input_row">
            <label> 電話 : </label>
            <input type="text" name="phone_number" class="form-control" placeholder="Please input Phone"  value=" <?php if(isset($attr)) echo $attr->phone_number ?>">
        </div>

        <div class="input_row">
            <label> 傳真 : </label>
            <input type="text" name="fax_number" class="form-control" placeholder="Please input Fax"  value=" <?php if(isset($attr)) echo $attr->fax_number ?>">
        </div>

        <div class="input_row">
            <label> 網址 : </label>
            <input type="text" name="url" class="form-control" placeholder="Please input Web"  value=" <?php if(isset($attr)) echo $attr->url_tc ?>">
        </div>

        <div class="input_row">
            <button style="width: 68px;margin-left: 120px" type="submit" class="btn btn-default">Submit</button>
        </div>
        </form>

    </div>


</div>        <br class="clear">
