<?php include('includes/header.php'); ?>
<div class="container">
    <h1>Admin Dashboard</h1>
    <h2>Manage Categories</h2>
    <form action="admin.php" method="post">
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category" required>
        </div>
        <div class="mb-3">
            <label for="subcategory" class="form-label">Subcategory</label>
            <input type="text" class="form-control" id="subcategory" name="subcategory" required>
        </div>
        <button type="submit" class="btn btn-primary">Add Category</button>
    </form>
</div>
<?php include('includes/footer.php'); ?>
