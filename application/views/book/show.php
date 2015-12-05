<h2>Book Details</h2>
<a class="btn btn-large btn-primary" href="<?php echo site_url('book'); ?>">Go Back</a>
<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <th>Name</th>
            <td><?php echo $book['name']; ?></td>
        </tr>
        <tr>
            <th>Author</th>
            <td><?php echo $book['author']; ?></td>
        </tr>
        <tr>
            <th>In Stock</th>
            <td><?php echo $book['stock']; ?></td>
        </tr>
    </tbody>
</table>