<?php include('includes/header.php'); ?>
<div class="container">
    <h1>Update Profile</h1>
    <form action="update_profile.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="mb-3">
            <label for="photo" class="form-label">Profile Photo</label>
            <input type="file" class="form-control" id="photo" name="photo">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php include('includes/footer.php'); ?>
