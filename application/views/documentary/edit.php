<h1>Edit Documentary</h1>

<?php echo form_open(site_url('documentary/update/'.$old_details['id']))?>
    <div class="form-group">
        <label for="name">Documentary Name:</label>
        <input type="text" class="form-control" name="name" id="name" value="<?php echo $old_details['name'] ?>" placeholder="Input Documentary Name">
    </div>
    <div class="form-group">
        <label for="author">Director:</label>
        <input type="text" class="form-control" name="director" id="author" value="<?php echo $old_details['director'] ?>" placeholder="Input Director's Name">
    </div>
    <div class="form-group">
        <label for="stock">Stock:</label>
        <input type="text" class="form-control" name="year" id="stock" value="<?php echo $old_details['year'] ?>" placeholder="Year of release">
    </div>
    <a class="btn btn-warning" href="<?php echo site_url('documentary'); ?>">Cancel</a>
    <button type="submit" class="btn btn-success">Update</button>
</form>