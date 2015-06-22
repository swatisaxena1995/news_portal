<?php
//Login check code
if(isset($_POST["username"]) && isset($_POST["password"])){
    $userName = $_POST["username"];
    $passWord = md5($_POST["password"]);
    $dbQuery = "SELECT * FROM users WHERE username = '".$userName."' AND password = '".$passWord."'";
    $resultQuery = mysql_query($dbQuery);
    $resultCount = mysql_num_rows($resultQuery);
    if($resultCount > 0){
        while ($resultArray = mysql_fetch_array($resultQuery)) {
            $_SESSION["userid"] = $resultArray['id'];
            $_SESSION["username"] = $resultArray['username'];
            header("Location: http://localhost/news_portal/admin/index.php");
        }
    } else {
        header("Location: http://localhost/news_portal/admin/login.php?error=true");
    }
}

//change Password
if(isset($_POST["current_pass"]) 
    && isset($_POST["new_pass"])
    && isset($_POST["confirm_pass"])){
    $current_pass = md5($_POST["current_pass"]);
    $new_pass = md5($_POST["new_pass"]);
    $confirm_pass = md5($_POST["confirm_pass"]);

    if($new_pass == $confirm_pass) {
        $dbQuery = "SELECT * FROM users WHERE username = '".$_SESSION["username"]."' AND password = '".$current_pass."'";
        $resultQuery = mysql_query($dbQuery);
        $resultCount = mysql_num_rows($resultQuery);
        if($resultCount > 0){
            $dbQuery = "UPDATE users SET password='".$new_pass."' WHERE username='".$_SESSION["username"]."'";
            $resultQuery = mysql_query($dbQuery);
            if(!$resultQuery) {
                $error="some error occured";
            } else {
                $success = "Password Updated Successfully";
            }
        } else {
            $error="Current Password is not correct";
        }
    } else {
        $error="new password and current password are different";    
    }
}

?>