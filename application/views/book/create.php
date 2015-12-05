<h1>Add New Book</h1>

<?php echo form_open(site_url('book/store'))?>
    <div class="form-group">
        <label for="name">Book Name:</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Input Book Name">
    </div>
    <div class="form-group">
        <label for="author">Author:</label>
        <input type="text" class="form-control" name="author" id="author" placeholder="Input Author's Name">
    </div>
    <div class="form-group">
        <label for="stock">Stock:</label>
        <input type="text" class="form-control" name="stock" id="stock" placeholder="Quantity in stock">
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form>