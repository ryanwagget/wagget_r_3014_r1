<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to our admin panel login</title>
</head>
<body>
	<h1>Hello</h1>
	<?php echo $_SESSION['user_name']; ?>
</body>
</html>