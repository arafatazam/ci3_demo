<h1>Documentaries</h1>
<a class="btn btn-info btn-large" href="<?php echo site_url(); ?>">Home</a>
<a class="btn btn-success btn-large" href="<?php echo site_url('documentary/create'); ?>">Add New Documentary</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Year</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($documentaries as $documentary): ?>
        <tr>
            <td><?php echo $documentary['id'];?></td>
            <td><?php echo $documentary['name'];?></td>
            <td><?php echo $documentary['year'];?></td>
            <td>
                <a class="btn btn-info" href="<?php echo site_url('documentary/show/'.$documentary['id'])?>">View</a>
                <a class="btn btn-warning" href="<?php echo site_url('documentary/edit/'.$documentary['id'])?>">Edit</a>
                <a class="btn btn-danger" href="<?php echo site_url('documentary/destroy/'.$documentary['id'])?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>