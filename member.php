<?php
session_start();
if (isset($_SESSION['user'])){
?>
<!doctype html>
<html>
<head>
<title>MEMBER</title>
</head>
<body>
<body bgcolor="pink">
<?php echo "welcome, ".$_SESSION['user']."!";?>
<br/>
<h1>WELCOME TO MEMBERS PAGE!</h1>
<p><a href="logout.php">Logout</a></p>
</body>
<?php
}
else
{
echo"please Login First! <a href="login.php">Login</a>;
}  
?>