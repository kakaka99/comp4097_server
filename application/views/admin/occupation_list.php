<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Occupation List </h2>
    </div>
    <div class="panel-body">
        <a href="<?php echo site_url('admin/occupation_add/'); ?>" class="btn btn-success">Add Occupation</a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
            <th>ACTION</th>
        </tr>
        </thead>
        <tbody>
        <?php
        foreach ($list as $row) {
            echo '<tr>';
            echo "<td>#".$row->id."</td>";
            echo "<td>{$row->name}</td>";
            echo '<td>';
            echo '<a href="' . site_url('admin/occupation_edit/' . $row->id) . '"><i class="glyphicon glyphicon-pencil"></i></a> ';
            echo '<a href="' . site_url('admin/occupation_delete/' . $row->id) . '"><i class="glyphicon glyphicon-trash"></i></a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>