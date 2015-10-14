<html>
<head>
<title>REGISTER FROM PAGE</title>
<body>
<body bgcolor="#FFCCCC">
<?php
if  (isset($_POST['submit'])){
$user=msql_real_escape_string($_POST['user'])
$pass=msql_real_escape_string($_POST['pass'])
$encrpt_password=md5 ($pass);
$encrypt_password=md5($pass);
$con=mysql_connect('localhost','root','') or die(mysql_error());
mysql_select_dd('user') or die("cannot select DB");
$query=mysql_query("SELECT * FROM logout WHERE user='$user' AND pass='$encrypt_password'");
$numows=mysql_num_rows($query);
if($numrows!=0)
{
session start();
$_SESSION['user']=$user;
header("location: member.php");
}
else{
	echo"Invalid username or password!";
}
}
?>
<p><a herf="register.php">Register</a> | <a herf="logout.php">Login</a></p>
</body>
</html>
