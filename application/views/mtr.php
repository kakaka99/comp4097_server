<div class="category_select">

    <div class="category_content">


        <div class="faq-box">
            <div class="faq-box-title title_1"><a href="javascript:void(0)">機場快線</a></div>
            <div class="faq-box-text" style="display: none;">
                <?php $i = 0;
                foreach ($mtr as $item) {
                    if($item->line=='AEL') {
                    ?>
                    <a href="<?php echo base_url('home/mtr_detail/'.$item->id)?>">
                        <div class="mtr_row <?php echo $i == 0 ? 'first_row' : '' ?>">
                            <span class="mtr_name"><?php echo ''.$item->name_tc.' '.$item->name_en?></span><br>
                        </div>
                    </a>
                    <?php $i++; }
                } ?>
            </div>
        </div>

        <div class="faq-box">
            <div class="faq-box-title title_2"><a href="javascript:void(0)">迪士尼線</a></div>
            <div class="faq-box-text" style="display: none;">
                <?php $i = 0;
                foreach ($mtr as $item) {
                    if($item->line=='DRL') {
                        ?>
                        <a href="<?php echo base_url('home/mtr_detail/'.$item->id)?>">
                            <div class="mtr_row <?php echo $i == 0 ? 'first_row' : '' ?>">
                                <span class="mtr_name"><?php echo ''.$item->name_tc.' '.$item->name_en?></span><br>
                            </div>
                        </a>
                        <?php $i++; }
                } ?>
            </div>
        </div>

        <div class="faq-box">
            <div class="faq-box-title title_3"><a href="javascript:void(0)">東鐵線</a></div>
            <div class="faq-box-text" style="display: none;">
                <?php $i = 0;
                foreach ($mtr as $item) {
                    if($item->line=='EAL') {
                        ?>
                        <a href="<?php echo base_url('home/mtr_detail/'.$item->id)?>">
                            <div class="mtr_row <?php echo $i == 0 ? 'first_row' : '' ?>">
                                <span class="mtr_name"><?php echo ''.$item->name_tc.' '.$item->name_en?></span><br>
                            </div>
                        </a>
                        <?php $i++; }
                } ?>
            </div>
        </div>


        <div class="faq-box">
            <div class="faq-box-title title_4"><a href="javascript:void(0)">港島線</a></div>
            <div class="faq-box-text" style="display: none;">
                <?php $i = 0;
                foreach ($mtr as $item) {
                    if($item->line=='ISL') {
                        ?>
                        <a href="<?php echo base_url('home/mtr_detail/'.$item->id)?>">
                            <div class="mtr_row <?php echo $i == 0 ? 'first_row' : '' ?>">
                                <span class="mtr_name"><?php echo ''.$item->name_tc.' '.$item->name_en?></span><br>
                            </div>
                        </a>
                        <?php $i++; }
                } ?>
            </div>
        </div>

        <div class="faq-box">
            <div class="faq-box-title title_8"><a href="javascript:void(0)">觀塘線</a></div>
            <div class="faq-box-text" style="display: none;">
                <?php $i = 0;
                foreach ($mtr as $item) {
                    if($item->line=='KTL') {
                        ?>
                        <a href="<?php echo base_url('home/mtr_detail/'.$item->id)?>">
                            <div class="mtr_row <?php echo $i == 0 ? 'first_row' : '' ?>">
                                <span class="mtr_name"><?php echo ''.$item->name_tc.' '.$item->name_en?></span><br>
                            </div>
                        </a>
                        <?php $i++; }
                } ?>
            </div>
        </div>

        <div class="faq-box">
            <div class="faq-box-title title_6"><a href="javascript:void(0)">馬鞍山線</a></div>
            <div class="faq-box-text" style="display: none;">
                <?php $i = 0;
                foreach ($mtr as $item) {
                    if($item->line=='MOL') {
                        ?>
                        <a href="<?php echo base_url('home/mtr_detail/'.$item->id)?>">
                            <div class="mtr_row <?php echo $i == 0 ? 'first_row' : '' ?>">
                                <span class="mtr_name"><?php echo ''.$item->name_tc.' '.$item->name_en?></span><br>
                            </div>
                        </a>
                        <?php $i++; }
                } ?>
            </div>
        </div>


        <div class="faq-box">
            <div class="faq-box-title title_7"><a href="javascript:void(0)">東涌線</a></div>
            <div class="faq-box-text" style="display: none;">
                <?php $i = 0;
                foreach ($mtr as $item) {
                    if($item->line=='TCL') {
                        ?>
                        <a href="<?php echo base_url('home/mtr_detail/'.$item->id)?>">
                            <div class="mtr_row <?php echo $i == 0 ? 'first_row' : '' ?>">
                                <span class="mtr_name"><?php echo ''.$item->name_tc.' '.$item->name_en?></span><br>
                            </div>
                        </a>
                        <?php $i++; }
                } ?>
            </div>
        </div>

        <div class="faq-box">
            <div class="faq-box-title title_5"><a href="javascript:void(0)">將軍澳線</a></div>
            <div class="faq-box-text" style="display: none;">
                <?php $i = 0;
                foreach ($mtr as $item) {
                    if($item->line=='TKL') {
                        ?>
                        <a href="<?php echo base_url('home/mtr_detail/'.$item->id)?>">
                            <div class="mtr_row <?php echo $i == 0 ? 'first_row' : '' ?>">
                                <span class="mtr_name"><?php echo ''.$item->name_tc.' '.$item->name_en?></span><br>
                            </div>
                        </a>
                        <?php $i++; }
                } ?>
            </div>
        </div>


        <div class="faq-box">
            <div class="faq-box-title title_9"><a href="javascript:void(0)">荃灣線</a></div>
            <div class="faq-box-text" style="display: none;">
                <?php $i = 0;
                foreach ($mtr as $item) {
                    if($item->line=='TWL') {
                        ?>
                        <a href="<?php echo base_url('home/mtr_detail/'.$item->id)?>">
                            <div class="mtr_row <?php echo $i == 0 ? 'first_row' : '' ?>">
                                <span class="mtr_name"><?php echo ''.$item->name_tc.' '.$item->name_en?></span><br>
                            </div>
                        </a>
                        <?php $i++; }
                } ?>
            </div>
        </div>


    <div class="faq-box">
        <div class="faq-box-title title_10"><a href="javascript:void(0)">西鐵線</a></div>
        <div class="faq-box-text" style="display: none;">
            <?php $i = 0;
            foreach ($mtr as $item) {
                if($item->line=='WRL') {
                    ?>
                    <a href="<?php echo base_url('home/mtr_detail/'.$item->id)?>">
                        <div class="mtr_row <?php echo $i == 0 ? 'first_row' : '' ?>">
                            <span class="mtr_name"><?php echo ''.$item->name_tc.' '.$item->name_en?></span><br>
                        </div>
                    </a>
                    <?php $i++; }
            } ?>
        </div>
    </div>    </div>

</div>
</div>
<br class="clear">
