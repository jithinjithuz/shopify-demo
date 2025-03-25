<?php include('includes/header.php'); ?>
<div class="container">
    <h1>Forgot Password</h1>
    <form action="forgot_password.php" method="post">
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <button type="submit" class="btn btn-primary">Send Reset Link</button>
    </form>
</div>
<?php include('includes/footer.php'); ?>
