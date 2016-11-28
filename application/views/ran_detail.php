<div class="category_select">

    <div class="detail_content">

        <h1 style="font-weight: bold"><?php echo $attraction->name_tc . ' <br> ' . $attraction->name_en ?></h1>
        <div class="">
            地址 : <?php echo $attraction->address_tc . ' <br> ' . $attraction->address_en ?><br>
            類別 : <?php echo $attraction->category ?><br>
            電話 : <?php echo $attraction->phone_number ?><br>
            傳真 : <?php echo $attraction->fax_number ?><br>
            網址 : <a href="<?php echo 'http://' . $attraction->url_tc ?>"><?php echo $attraction->url_tc ?></a>
        </div>

        <a href="<?php echo base_url('home/ran_attr') ?>">
            <button style="margin-bottom: 20px">不喜歡? 再看看!<br>See More!</button>
        </a>

        <br class="clear">
        <iframe width="335" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src=http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=<?php echo $attraction->address_tc ?>&z=16&output=embed&t=h></iframe>

        <!--<div id="map" data-tap-disabled="true"></div> -->


        <table class="table table-striped" style="margin-top: 15px;font-size: 14px;">
            <?php $i = 0;
            if ($lift_list != false) {
                foreach ($lift_list as $lift_item) { ?>
                    <tr>
                        <td>升降機#<?php echo $i ?></td>
                        <td><img style="width: 30px"
                                 src="<?php echo base_url('public/images/' . $lift_item['image']) ?>"></td>
                        <td><?php echo $lift_item['status'] ?></td>
                    </tr>
                    <?php $i++;
                }
            } ?>
            <?php foreach ($facility_list as $key => $item) { ?>
                <tr>
                    <td><?php echo $key ?></td>
                    <td><img style="width: 30px" src="<?php echo base_url('public/images/' . $item['image']) ?>"></td>
                    <td><?php echo $item['status'] ?></td>
                </tr>
            <?php } ?>
        </table>
        <br class="clear">
        <table class="table table-striped" style="margin-top: 15px;font-size: 14px;">
            <?php $i = 0;
            if (sizeof($comment)>0) {?>
                <tr>
                    <td>分數 Mark</td>
                    <td>評語 Content</td>
                </tr>

                <?php
                foreach ($comment as $item) { ?>
                    <tr>
                        <td style="min-width: 100px"><?php for ($counter = $item->mark ; $counter>0;$counter--)
                            {
                                ?>
                                <img style="width: 10px" src="<?php echo base_url('public/images/star.png')?>">
                                <?php
                            }
                            ?></td>
                        <td><?php echo $item->content ?></td>
                    </tr>
                    <?php $i++;
                }
            } ?>
        </table>

        <form action="<?php echo base_url('home/comment')?>" method="post">
            <select name="mark" class="form-control">
                <option value="5"> 5分/5分</option>
                <option value="4"> 4分/5分</option>
                <option value="3"> 3分/5分</option>
                <option value="2"> 2分/5分</option>
                <option value="1"> 1分/5分</option>
                <option value="0"> 0分/5分</option>
            </select>
            <textarea class="ckeditor" name="comment"></textarea>

        </form>
    </div>

</div>        <br class="clear">

