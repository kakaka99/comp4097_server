<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">News List </h2>
    </div>
    <div class="panel-body">
        <a href="<?php echo site_url('admin/news_add/');?>" class="btn btn-success">Add News</a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr><th>ID</th><th>Title</th><th>Content</th><th>Order</th><th>Action</th></tr>
        </thead>
        <tbody>
        <?php
        foreach($list as $row) {
            echo '<tr>';
            echo "<td>{$row->id}</td>";
            echo "<td>{$row->title}</td>";
            echo "<td>{$row->content}</td>";
            echo "<td>{$row->news_order}</td>";
            echo '<td>';
            echo '<a href="' . site_url('admin/news_edit/'.$row->id) . '"><i class="glyphicon glyphicon-pencil"></i></a> ';
            echo '<a href="' . site_url('admin/news_delete/'.$row->id) . '"><i class="glyphicon glyphicon-trash"></i></a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>