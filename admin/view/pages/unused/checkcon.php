<?php 
error_reporting(0);
$email=$_POST['email'];
if($_POST['submit']=='Send')
{
mysql_connect('localhost','root','') or die(mysql_error);
mysql_select_db('newsportal');
$query="select * from users where email='$email'";
$result=mysql_query($query) or die(error);
if(mysql_num_rows($result))
{
echo "User exist";
}
else
{
echo "No user exist with this email id";
}
}
?>
<form action="forgot.php" method="post">
Enter you email ID: <input type="text" name="email">
<input type="submit" name="submit" value="Send">
</form>