<h1>Add New Documentary</h1>

<?php echo form_open(site_url('documentary/store'))?>
    <div class="form-group">
        <label for="name">Documentary Name:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Input Documentary Name">
    </div>
    <div class="form-group">
        <label for="author">Director:</label>
        <input type="text" class="form-control" name="director" id="author" placeholder="Input Director's Name">
    </div>
    <div class="form-group">
        <label for="stock">Year:</label>
        <input type="text" class="form-control" name="year" id="stock" placeholder="Year of Release">
    </div>
    <a class="btn btn-warning" href="<?php echo site_url('documentary'); ?>">Cancel</a>
    <button type="submit" class="btn btn-success">Save</button>
</form>