<?php
	session_start();
	session_destroy();
	header("Location: http://localhost/news_portal/admin/login.php");
?>