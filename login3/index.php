<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="$1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOGIN</title>
<!--        <link rel="stylesheet" href="css/style.css">-->
        <link rel="author" href="BP">
    </head>
    <body>
        <script type="text/javascript" src="assets/fb.js"></script>
        <div>
        <h1><?php if(isset($_SESSION['name'])){echo $_SESSION['name'];?></h1><button onclick="logout();">Logout</button> <?php }?>
            
        </div>
        <?php if(isset($_SESSION['name'])){ }
        else{
        ?><div class="fb-login-button" data-scope="public_profile,email" onlogin="checkLoginState();"></div>
        
        <?php } ?>
        <script>
         function logout() {
        FB.logout(function (response) {
            //Do what ever you want here when logged out like reloading the page
            window.location.reload();
        });
    }
        </script>
    </body>
</html>