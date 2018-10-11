<?php 
require_once 'class/db.php';
require_once 'class/user.php';
$db = new DB();
$reminder = false;

if(!empty($_POST['mail'])){
    $username = $_POST['mail'];
    $password = $_POST['password'];
    $user = new User();
    if(!$user->login($username, $password)) $reminder = true;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="minimal-ui, width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico"/>

        <link rel="stylesheet" href="css/style.css" type="text/css" />
        <link rel="stylesheet" href="menu/css/menu.css" type="text/css" />
        <link rel="stylesheet" href="css/login.css" type="text/css" />

        <script type="text/javascript" src="menu/js/menu.js"></script>
    </head>
    <body onload="otherLoad();" onresize="setTheMenu();">
        <?php require_once 'menu/menu.php'; ?>
        <div id="login_form" action="login.php">
            <form method="post">
                <div id="login_header">
                    <h4>Login</h4>
                </div>
                <div class="login_input">
                    <input type="text" name="mail" placeholder="Your mail" autocomplete="off">
                </div>
                <div class="login_input">
                    <input type="password" name="password" placeholder="Your password" autocomplete="off">
                </div>
                <div class="login_input login_input_submit">
                    <input type="submit" name="">
                </div>
                <?php 
                if($reminder){
                    echo '<div class="login_input login_input_warning"> <p>Wrong email or password !</p> </div>';
                }
                ?>
            </form>
        </div>
    </body>
</html>