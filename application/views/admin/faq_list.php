<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Brand List </h2>
    </div>
    <div class="panel-body">
        <a href="<?php echo site_url('admin/faq_add/');?>" class="btn btn-success">Add FAQ</a>
    </div>
    <table class="table table-hover">
        <thead>
        <tr><th>ID</th><th>Name</th><th>Content</th><th>Order</th><th>Action</th><th></th></tr>
        </thead>
        <tbody>
        <?php
        foreach($list as $row) {
            echo '<tr>';
            echo "<td>{$row->id}</td>";
            echo "<td>{$row->title}</td>";
            echo "<td>{$row->content}</td>";
            echo "<td>{$row->faq_order}</td>";
            echo '<td>';
            echo '<a href="' . site_url('admin/faq_edit/'.$row->id) . '"><i class="glyphicon glyphicon-pencil"></i></a> ';
            echo '<a href="' . site_url('admin/faq_delete/'.$row->id) . '"><i class="glyphicon glyphicon-trash"></i></a>';
            echo '</td>';
            echo '</tr>';
        }
        ?>
        </tbody>
    </table>
</div>