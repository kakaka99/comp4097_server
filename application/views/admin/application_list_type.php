<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Application List </h2>
    </div>

    <div class="panel-body">
        <form action="<?php echo site_url('admin/application_search') ?>" method="post" class="form-inline">
            <input class="form-control" style="width: auto;margin-right: 10px" name="search_id" type="text"
                   id="id_search" placeholder="Search Application ID">
            <input class="form-control" style="width: auto;margin-right: 10px" name="search_id_card" type="text"
                   id="name_search" placeholder="Search ID CARD">
            <input class="form-control" style="width: auto;margin-right: 10px" name="search_email" type="text"
                   id="name_search" placeholder="Search Email">
            <input class="form-control" style="width: auto;margin-right: 10px" name="search_mobile" type="text"
                   id="name_search" placeholder="Search Mobile Phone">
            <input type="hidden" name="category" value="<?php echo $current_category ?>">
            <select name="search_type" class="form-control" style="margin-right: 10px">
                <option value=""> Type</option>
                <option value="general"> General</option>
                <option value="fast"> Fast</option>
            </select>
            <select name="search_status" class="form-control" style="margin-right: 10px">
                <option value=""> Status</option>
                <option value="pending"> Pending</option>
                <option value="processing"> Processing</option>
                <option value="done"> Done</option>


            </select>


            <button type="submit" name="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i>
                Submit
            </button>
        </form>
    </div>


    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Family Name</th>
            <th>last Name</th>
            <th>ETA type</th>
            <th>Nationality</th>
            <th>Mobile</th>
            <th>Home</th>
            <th>Email</th>
            <th>ID CARD</th>
            <th>Applied Time</th>
            <th>Status</th>
            <th>Type</th>
            <th>Order ID</th>
            <th>Result PDF</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($list != false) {
        foreach ($list as $item) {
        echo '<tr>'; ?>
        <td># <?php echo $item->id ?></td>
        <td><?php echo htmlspecialchars($item->family_name) ?></td>
        <td><?php echo htmlspecialchars($item->last_name) ?></td>
        <td><?php echo htmlspecialchars($item->eta_type) ?></td>
        <td><?php echo htmlspecialchars($item->nationality) ?></td>
        <td><?php echo htmlspecialchars($item->mobile_phone) ?></td>
        <td><?php echo htmlspecialchars($item->home_phone) ?></td>
        <td><?php echo htmlspecialchars($item->email) ?></td>
        <td><?php echo htmlspecialchars($item->id_number) ?></td>
        <td><?php echo htmlspecialchars($item->insert_time) ?></td>
        <?php if ($item->status == 'pending') {
            echo "<td style='color: red'>{$item->status}</td>";
        } else if ($item->status == 'processing') {
            echo "<td style='color: green'>{$item->status}</td>";
        } else {
            echo "<td>{$item->status}</td>";
        }
        ?>
        <td><?php echo $item->passport_type ?></td>
        <td><?php echo '#' . $item->order_id ?></td>

            <?php if ($item->pdf_result != '') { ?>
                <td>
                    <a href="<?php echo $item->pdf_result != '' ? base_url($item->pdf_result) : '' ?>"
                       class="btn btn-info"
                       target="_blank">
                        View </a>
                </td>
            <?php }else{ ?>
                <td style="color: red;">
                    N/A
                </td>
            <?php } ?>


        <td>
            <?php if ($current_category == '1') { ?>
                <a href="<?php echo site_url('admin/eta_detail/hk/' . $item->id) ?>"><i
                        class="glyphicon glyphicon-eye-open"></i></a>
                <a href="<?php echo site_url('admin/eta_delete/hk/' . $item->id) ?>"><i
                        class="glyphicon glyphicon-trash"></i></a>
            <?php } else if ($current_category == '2') { ?>
                <a href="<?php echo site_url('admin/eta_detail/di/' . $item->id) ?>"><i
                        class="glyphicon glyphicon-eye-open"></i></a>
                <a href="<?php echo site_url('admin/eta_delete/di/' . $item->id) ?>"><i
                        class="glyphicon glyphicon-trash"></i></a>

            <?php } else if ($current_category == '3') { ?>
                <a href="<?php echo site_url('admin/eta_detail/msar/' . $item->id) ?>"><i
                        class="glyphicon glyphicon-eye-open"></i></a>
                <a href="<?php echo site_url('admin/eta_delete/msar/' . $item->id) ?>"><i
                        class="glyphicon glyphicon-trash"></i></a>
            <?php } ?>
        </td>





            <?php echo '</tr>';
            }
            }
            ?>
        </tbody>
    </table>
</div>





