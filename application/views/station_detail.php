<div class="category_select">

    <div class="detail_content">

        <h1 style="font-weight: bold"><?php echo $mtr->name_tc . ' <br> ' . $mtr->name_en ?></h1>


        <iframe width="335" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                src=http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=<?php echo $mtr->name_tc . '港鐵站' ?>&z=16&output=embed&t=h></iframe>

        <table class="table table-striped" style="margin-top: 15px;font-size: 14px">
            <?php $i = 0;
            if ($mtr_facility_list != false) {
                foreach ($mtr_facility_list as $facility_list) { ?>
                    <?php
                    foreach ($facility_item_list as $facility_item) {
                        if ($facility_item->id == $facility_list->item_key && $facility_list->availability == 'Y') {

                            ?>
                            <tr>
                                <td><?php echo $facility_item->category_tc ?></td>
                                <td><?php echo $facility_item->item_tc ?></td>
                                <td><?php echo $facility_list->exit_tc ?></td>
                            </tr>
                            <?php
                        }
                    }
                    ?>

                    <?php $i++;
                }
            } ?>
        </table>
        <br class="clear">
    </div>

</div>

