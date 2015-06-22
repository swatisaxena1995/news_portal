<?php
if(mysql_num_rows($result))
{
$code=rand(100,999);
$message="You activation link is: http://localhost/admin/view/forgot.php?email=$email&code=$code
mail($email, "Subject Goes Here", $message);
echo "Email sent";
}
else
{
echo "No user exist with this email id";
}
?>