<?php 
    ini_set('SMTP', 'mysmtphost'); 
    ini_set('smtp_port', 25); 
    require_once('view/common/header.php');
    require_once('Mail.php'); 
    if(isset($_POST["email"])){
        $from = 'swati.saxena479@gmail.com';
        $to = $_POST["email"];
        $subject = 'Hi!';
        $body = "Hi,\n\nHow are you?";
        $headers = array(
            'From' => $from,
            'To' => $to,
            'Subject' => $subject
        );

        $smtp = Mail::factory('smtp', array(
            'host' => 'ssl://smtp.gmail.com',
            'port' => '465',
            'auth' => true,
            'username' => 'swati.saxena479@gmail.com',
            'password' => '@#$@#$@#'
        ));

        $mail = $smtp->send($to, $headers, $body);

        if (PEAR::isError($mail)) {
            echo('<p>' . $mail->getMessage() . '</p>');
        } else {
            echo('<p>Message successfully sent!</p>');
        }
    }
?>
<div class="container">
    <div class="row">
        <div class="col-lg-4">&nbsp;</div>
        <div class="col-lg-8">
            <h1 class="page-header">Forgot Password</h1>
        </div>
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-3">
            &nbsp;
        </div>
        <div class="col-lg-6">
            <form action="" method="post">
                Enter you email ID: <input type="text" name="email">
                <input type="submit" name="submit" value="Send">
            </form>
        </div>
        <div class="col-lg-3">
            &nbsp;
        </div>
    </div>
</div>
<?php require_once('view/common/footer.php'); ?>