<h1>Edit Book</h1>

<?php echo form_open(site_url('book/update/'.$old_details['id']))?>
    <div class="form-group">
        <label for="name">Book Name:</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $old_details['name'] ?>" placeholder="Input Book Name">
    </div>
    <div class="form-group">
        <label for="author">Author:</label>
        <input type="text" class="form-control" name="author" id="author" value="<?php echo $old_details['author'] ?>" placeholder="Input Author's Name">
    </div>
    <div class="form-group">
        <label for="stock">Stock:</label>
        <input type="text" class="form-control" name="stock" id="stock" value="<?php echo $old_details['stock'] ?>" placeholder="Quantity in stock">
    </div>
    <a class="btn btn-warning" href="<?php echo site_url('book'); ?>">Cancel</a>
    <button type="submit" class="btn btn-success">Update</button>
</form>