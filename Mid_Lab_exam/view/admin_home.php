<?php
include_once("../controller/check_admin.php");
include_once("../controller/userInfo.php");
?>

<center>
	<h1>Welcome <?php echo $user['name'] ?>!</h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.html">Change Password</a>
	<br/>
	<a href="view_users.php">View Users</a>
	<br/>
	<a href="login.php">Logout</a>
</center>