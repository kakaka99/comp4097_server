<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Order Form</h2>
    </div>

    <table class="table table-hover">
        <thead>
        </thead>
        <tbody>

        <!--  row -->
        <tr>
            <td>Orders Name</td>
            <td><?php echo htmlspecialchars($order->order_person) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Mobile Phone</td>
            <td><?php echo htmlspecialchars($order->mobile_phone) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Home Phone</td>
            <td><?php echo htmlspecialchars($order->home_phone) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Address</td>
            <td><?php echo htmlspecialchars($order->address) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->


        <!--  row -->
        <tr>
            <td>Email</td>
            <td><?php echo htmlspecialchars($order->email) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Passport type</td>
            <td><?php echo $order->form_type ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->


        <!--  row -->
        <tr>
            <td>Quantity</td>
            <td><?php echo htmlspecialchars($order->quantity) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Applied type(fast/general)</td>
            <td><?php echo htmlspecialchars($order->passport_type) ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->

        <!--  row -->
        <tr>
            <td>Total Amount</td>
            <td><?php echo '$ ' . $order->amount ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->



        <!--  row -->
        <tr>
            <td>Order Time</td>
            <td><?php echo $order->order_time ?></td>
            <td>
            </td>
        </tr>
        <!--  row -->


        <!--  row -->
        <tr>
            <td>Status</td>

            <form action="admin/order_edit/<?php echo $order->id ?>" method="post">

                <td><select class="form-control" name="status" id="order_status">

                        <option value="pending" <?php echo $order->status == 'pending' ? 'selected' : '' ?>>Pending
                        </option>
                        <option value="processing"<?php echo $order->status == 'processing' ? 'selected' : '' ?>>
                            Processing
                        </option>
                        <option value="done"<?php echo $order->status == 'done' ? 'selected' : '' ?>>Done(send result email)</option>
                        <option value="fail" <?php echo $order->status == 'fail' ? 'selected' : '' ?>>Fail
                        </option>
                    </select></td>
                <td>
                    <button type="submit" name="submit" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                        Submit
                    </button>
                </td>
        </tr>
        <!--  row -->
        </form>


        </tbody>
    </table>


    <div class="panel-heading">
        <h2 class="panel-title">Passport ETA Application</h2>
    </div>


    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Family Name</th>
            <th>last Name</th>
            <th>ETA type</th>
            <th>Nationality</th>
            <th>Country Code</th>
            <th>Mobile</th>
            <th>Home</th>
            <th>Email</th>
            <th>Id Number</th>
            <th>Criminal</th>
            <th>status</th>
            <th>Result PDF upload</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>


        <?php
        if ($order_item_array != false) {
            foreach ($order_item_array as $item) { ?>
                <!--  row -->
                </tr>
                <td># <?php echo $item->id ?></td>
                <td><?php echo htmlspecialchars($item->family_name) ?></td>
                <td><?php echo htmlspecialchars($item->last_name) ?></td>
                <td><?php echo htmlspecialchars($item->eta_type) ?></td>
                <td><?php echo htmlspecialchars($item->nationality) ?></td>
                <td><?php echo htmlspecialchars($item->country_code) ?></td>
                <td><?php echo htmlspecialchars($item->mobile_phone) ?></td>
                <td><?php echo htmlspecialchars($item->home_phone) ?></td>
                <td><?php echo htmlspecialchars($item->email) ?></td>
                <td><?php echo htmlspecialchars($item->id_number) ?></td>
                <td><?php echo htmlspecialchars($item->criminal) ?></td>
                <?php if ($item->status == 'pending') { ?>
                    <td style="color: red"><?php echo htmlspecialchars($item->status) ?></td>
                <?php } else if ($item->status == 'processing') { ?>
                    <td style="color: green"><?php echo htmlspecialchars($item->status) ?></td>
                <?php } else if ($item->status == 'done') { ?>
                    <td style="color: green"><?php echo htmlspecialchars($item->status) ?></td>
                <?php } else if ($item->status == 'fail') { ?>
                    <td style="color: #EE7D00"><?php echo htmlspecialchars($item->status) ?></td>
                <? }else{  ?>
                    <td style="color: RED"><?php echo 'N/A' ?></td>
                <?php } ?>

                <?php if ($item->pdf_result == '') { ?>
                    <td style="color: red"><?php echo 'No upload' ?></td>
                <?php } else  { ?>
                        <td>
                            <a href="<?php echo $item->pdf_result ?>"
                               class="btn btn-info"
                               target="_blank">
                                View </a>
                        </td>
                <?php } ?>

                <td><a href="<?php echo site_url('admin/eta_detail/' . $order->form_type . '/' . $item->id) ?>"><i
                            class="glyphicon glyphicon-eye-open"></i></a></td>

                </tr>
                <!--  row -->

            <?php }
        } ?>


        </tbody>
    </table>
</div>