<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Order List </h2>
    </div>

    <div class="panel-body">
        <form action="<?php echo site_url('admin/order_search') ?>" method="post" class="form-inline">
            <input class="form-control" style="width: auto;margin-right: 10px" name="search_id" type="text"
                   id="id_search" placeholder="Search ID">
            <input class="form-control" style="width: auto;margin-right: 10px" name="search_name" type="text"
                   id="name_search" placeholder="Search Name">
            <input class="form-control" style="width: auto;margin-right: 10px" name="search_email" type="text"
                   id="name_search" placeholder="Search Email">
            <input class="form-control" style="width: auto;margin-right: 10px" name="search_mobile" type="text"
                   id="name_search" placeholder="Search Mobile Phone">
            <input class="form-control" style="width: auto;margin-right: 10px" name="search_order_code" type="text"
                   id="name_search" placeholder="Search Order Code">

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
            <th>Orders Name</th>
            <th>Email</th>
            <th>Mobile Phone</th>
            <th>Home Phone</th>
            <th>Total amount</th>
            <th>Passport</th>
            <th>Quantity</th>
            <th>Type</th>
            <th>Order Time</th>
            
            <th>Status</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        if ($order != false) {
            foreach ($order as $row) {
                echo '<tr>';
                echo "<td>#"."$row->id</td>";
                echo "<td>" . htmlspecialchars($row->order_person) . "</td>";
                echo "<td>" . htmlspecialchars($row->email) . "</td>";
                echo "<td>" . htmlspecialchars($row->mobile_phone) . "</td>";
                echo "<td>" . htmlspecialchars($row->home_phone) . "</td>";
                echo "<td>$ " . "$row->amount</td>";
                echo "<td>" . htmlspecialchars($row->form_type) . "</td>";
                echo "<td>" . htmlspecialchars($row->quantity) . "</td>";
                echo "<td>" . htmlspecialchars($row->passport_type) . "</td>";
                echo "<td>" . htmlspecialchars($row->order_time) . "</td>";
          

                if ($row->status == 'pending') {
                    echo "<td style='color: red'>{$row->status}</td>";
                } else if ($row->status == 'processing') {
                    echo "<td style='color: green'>{$row->status}</td>";
                } else {
                    echo "<td>{$row->status}</td>";
                }

                echo '<td>';
                echo '<a href="' . site_url('admin/order_detail/' . $row->id) . '"><i class="glyphicon glyphicon-eye-open"></i></a> ';
                echo '<a href="' . site_url('admin/order_delete/' . $row->id) . '"><i class="glyphicon glyphicon-trash"></i></a>';
                echo '</td>';
                echo '</tr>';
            }
        }
        ?>
        </tbody>
    </table>
</div>