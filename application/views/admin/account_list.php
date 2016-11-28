<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Admin List</h2>
    </div>
    <div class="panel-body">
        <a href="<?php echo site_url('admin/account_add');?>" class="btn btn-success">Add Admin</a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr><th>ID</th><th>Name</th><th>Actions</th></tr>
        </thead>
        <tbody>
        <?php
        foreach($user as $row) {
            echo '<tr>';
            echo "<td>{$row->id}</td>";
            echo "<td>{$row->username}</td>";
            echo '<td>';
            echo '<a href="' . site_url('admin/account_edit/'.$row->id) . '"><i class="glyphicon glyphicon-pencil"></i></a> ';
            if($row->id!=1)echo '<a href="' . site_url('admin/account_delete/'.$row->id) . '"><i class="glyphicon glyphicon-trash"></i></a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>