<html>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>
<?php
include('header.php');
?>
<div class='center'>
<?php
if (!isset($_COOKIE['role'])) {
	?>
<form action='process/log.php' method='Post'>
<label>Email</label><input type='email' name='email' id='email'></input><br>
<label>Password</label><input type='password' name='password' id='password'></input><br>
<input type='submit' name='submit' id='submit'></input>
</form>
</div>
<?php
}
?>

<?php
include('footer.php');
?>
</body>
</html>