<h2>Documentary Details</h2>
<a class="btn btn-large btn-primary" href="<?php echo site_url('documentary'); ?>">Go Back</a>
<table class="table table-striped table-bordered">
    <tbody>
        <tr>
            <th>Name</th>
            <td><?php echo $documentary['name']; ?></td>
        </tr>
        <tr>
            <th>Director</th>
            <td><?php echo $documentary['director']; ?></td>
        </tr>
        <tr>
            <th>Year of Release</th>
            <td><?php echo $documentary['year']; ?></td>
        </tr>
    </tbody>
</table>