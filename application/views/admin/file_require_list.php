<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Application(HK) List </h2>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Family Name</th>
            <th>Show</th>

        </tr>
        </thead>
        <tbody>
        <form action="<?php echo site_url('admin/require_edit/')?>" method="post" >
            <?php
        foreach ($hk as $item) {
            echo '<tr>'; ?>
            <td># <?php echo $item->id ?></td>
            <td><input class="form-control" type="text" value="<?php echo $item->name ?>" name="<?php echo "name_".$item->id?>"></td>
            <td><input class="form-control" type="checkbox" value="1" name="<?php echo "show_".$item->id?>" <?php echo $item->available == '1' ? "checked=checked" : '' ?> ></td>
            <?php echo '</tr>';
        }
        ?>
            <tr>
            <td>Action</td>
                <td> <button type="submit" name="submit" value="hk" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                        Submit
                    </button></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    </form>
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
            <th>Show</th>
        </tr>
        </thead>
        <tbody>
        <form action="<?php echo site_url('admin/require_edit/')?>" method="post" >
            <?php
            foreach ($di as $item) {
                echo '<tr>'; ?>
                <td># <?php echo $item->id ?></td>
                <td><input class="form-control" type="text" value="<?php echo $item->name ?>" name="<?php echo "name_".$item->id?>"></td>
                <td><input class="form-control" type="checkbox" value="1" name="<?php echo "show_".$item->id?>" <?php echo $item->available == '1' ? "checked=checked" : '' ?> ></td>
                <?php echo '</tr>';
            }
            ?>
            <tr>
                <td>Action</td>
                <td> <button type="submit" name="submit" value="di" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                        Submit
                    </button></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    </form>
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
            <th>Show</th>

        </tr>
        </thead>
        <tbody>
        <form action="<?php echo site_url('admin/require_edit/')?>" method="post" >
            <?php
            foreach ($msar as $item) {
                echo '<tr>'; ?>
                <td># <?php echo $item->id ?></td>
                <td><input class="form-control" type="text" value="<?php echo $item->name ?>" name="<?php echo "name_".$item->id?>"></td>
                <td><input class="form-control" type="checkbox" value="1" name="<?php echo "show_".$item->id?>" <?php echo $item->available == '1' ? "checked=checked" : '' ?> ></td>
                <?php echo '</tr>';
            }
            ?>
            <tr>
                <td>Action</td>
                <td> <button type="submit" name="submit"  value="msar" class="btn btn-success"><i class="glyphicon glyphicon-ok"></i>
                        Submit
                    </button></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    </form>
</div>