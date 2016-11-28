<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Application(HK) List </h2>
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
            <th>Order ID</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($application_hk as $item) {
            echo '<tr>'; ?>
            <td># <?php echo $item->id ?></td>
            <td><?php echo htmlspecialchars($item->family_name) ?></td>
            <td><?php echo htmlspecialchars($item->last_name) ?></td>
            <td><?php echo htmlspecialchars($item->eta_type )?></td>
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
            <td><?php echo '#'.$item->order_id ?></td>

            <td>
                <a href="<?php echo site_url('admin/eta_detail/hk/' . $item->id) ?>"><i
                        class="glyphicon glyphicon-eye-open"></i></a>
                <a href="<?php echo site_url('admin/eta_delete/hk/' . $item->id) ?>"><i
                        class="glyphicon glyphicon-trash"></i></a>
            </td>
            <?php echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>


<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Application(DI) List </h2>
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
            <th>Order ID</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($application_di as $item) {
            echo '<tr>'; ?>
            <td># <?php echo $item->id ?></td>
            <td><?php echo htmlspecialchars($item->family_name) ?></td>
            <td><?php echo htmlspecialchars($item->last_name) ?></td>
            <td><?php echo htmlspecialchars($item->eta_type )?></td>
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
            <td><?php echo '#'.$item->order_id ?></td>
            <td>
                <a href="<?php echo site_url('admin/eta_detail/di/' . $item->id) ?>"><i
                        class="glyphicon glyphicon-eye-open"></i></a>
                <a href="<?php echo site_url('admin/eta_delete/di/' . $item->id) ?>"><i
                        class="glyphicon glyphicon-trash"></i></a>
            </td>
            <?php echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>


<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Application(MSAR) List </h2>
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
            <th>Order ID</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($application_msar as $item) {
            echo '<tr>'; ?>
            <td># <?php echo $item->id ?></td>
            <td><?php echo htmlspecialchars($item->family_name) ?></td>
            <td><?php echo htmlspecialchars($item->last_name) ?></td>
            <td><?php echo htmlspecialchars($item->eta_type )?></td>
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
            <td><?php echo '#'.$item->order_id ?></td>

            <td>
                <a href="<?php echo site_url('admin/eta_detail/msar/' . $item->id) ?>"><i
                        class="glyphicon glyphicon-eye-open"></i></a>
                <a href="<?php echo site_url('admin/eta_delete/msar/' . $item->id) ?>"><i
                        class="glyphicon glyphicon-trash"></i></a>
            </td>
            <?php echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>