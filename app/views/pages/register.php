<?php require APPROOT . '/views/inc/header.php'; ?>

<?php if (!empty($data['feedbackArray'][0])) { echo $data['feedbackArray'][0]; }?>

<h1>Register</h1>
<form action="<?php echo URLROOT; ?>/pages/register" method="post">

    <div>
        <label for="username">Username</label>
        <input type="text" name="username" maxlength="45" required>
    </div>

    <div>
        <label for="password">Password</label>
        <input type="password" name="password" maxlength="45" required>
    </div>

    <div>
        <input type="submit" value="Register">
    </div>

</form>

<a href="<?php echo URLROOT . '/pages/login'; ?>" style="text-decoration: underline;">Already have an account?</a>

<?php require APPROOT . '/views/inc/footer.php'; ?>