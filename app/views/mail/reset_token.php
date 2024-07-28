<h1>Hello <?php echo $name; ?></h1>
<a href="<?php echo $_SERVER['HTTP_HOST'] . "/reset-password?u=" . $username . "&t=" . $reset_token; ?>">Reset password</a>