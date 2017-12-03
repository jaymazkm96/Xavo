<?php session_start(); ?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LOGIN</title>
<!--        <link rel="stylesheet" href="css/style.css">-->
        <link rel="author" href="Bikash Pandey">
    </head>
    <body>
        <script type="text/javascript" src="assets/fb.js"></script>
        <div>
        <h1><?php if(isset($_SESSION['name'])){echo $_SESSION['name'];?></h1><?php }?>
            
        </div>
        <?php if(isset($_SESSION['name'])){ }
        else{
        ?><div class="fb-login-button" data-scope="public_profile,email" onlogin="checkLoginState();"></div>
        
        <?php } ?>
        <script>
//         function logout() {
//       try {
//        if (FB.getAccessToken() != null) {
//            FB.logout(function(response) {
//                // user is now logged out from facebook do your post request or just redirect
//                window.location.replace("/login3/index.php");
//            });
//        } else {
//            // user is not logged in with facebook, maybe with something else
//            window.location.replace("/login3/index.php");
//        }
//    } catch (err) {
//        // any errors just logout
//        window.location.replace("/login3/index.php");
//    }
//    }
        </script>
    </body>
</html>