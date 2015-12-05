<h1>Books</h1>
<a class="btn btn-info btn-large" href="<?php echo site_url(); ?>">Home</a>
<a class="btn btn-success btn-large" href="<?php echo site_url('book/create'); ?>">Add New Book</a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($books as $book): ?>
        <tr>
            <td><?php echo $book['id'];?></td>
            <td><?php echo $book['name'];?></td>
            <td>
                <a class="btn btn-info" href="<?php echo site_url('book/show/'.$book['id'])?>">View</a>
                <a class="btn btn-warning" href="<?php echo site_url('book/edit/'.$book['id'])?>">Edit</a>
                <a class="btn btn-danger" href="<?php echo site_url('book/destroy/'.$book['id'])?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>