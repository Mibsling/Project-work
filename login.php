<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Created By Yogesh Patel-->
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Login</title>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <link rel="icon" href="images/favicon.ico" type="image/x-icon">
        <!-- Stylesheets-->
        <link rel="stylesheet" type="text/css" href="css/custom/css.css">
        <link rel="stylesheet" type="text/css"  href="css/bootstrap/bootstrap.css">
        <link rel="stylesheet" type="text/css"  href="css/fonts/fonts.css">
        <link rel="stylesheet" type="text/css"  href="css/custom/style.css">
        <link rel="stylesheet" type="text/css" href="css/fonts/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="css/custom/main.css">
        <!-- Javascript-->
        <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!--[if lt IE 10]>
        <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="https://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
        <script src="js/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Page Loader-->
        <?php include './view/loader.php' ?>
        <div class="page animated" style="animation-duration: 500ms;">
            <!-- Page Header-->
            <?php include './view/header/header.php' ?>
            <!-- Form Login -->
            <section class="section section-xl bg-default text-md-left">
                <div class="container">
                    <div class="row row-50 justify-content-md-center">
                        <div class="col-md-10 col-lg-6">
                            <form id="frmLogin" class="rd-form rd-mailform" method="post" action="controller/loginController.php">
                                <div class="card-form card-form-login">
                                    <!--Login form-->
                                    <div class="form-wrap">
                                        <!-- <label class="form-label rd-input-label" for="form-login-name-1">Email Address</label> -->
                                        <input class="form-input form-control-has-validation form-control-last-child" id="loginUsername" type="text" placeholder="Email Address" name="loginUsername" data-constraints="@Required @Email"><span class="form-validation"></span>
                                    </div>
                                    <div class="form-wrap">
                                        <!-- <label class="form-label rd-input-label" for="loginpassword1">Password</label> -->
                                        <input class="form-input form-control-has-validation form-control-last-child" id="loginPassword" type="password" placeholder="Password" name="loginPassword" data-constraints="@Required"><span class="form-validation"></span>
                                    </div>
                                    <button class="button button-block button-primary button-pipaluk" id="btnLogin" type="submit">Sign in</button>
                                    <?php
                                    if (isset($_SESSION['loginError']) && !empty($_SESSION['loginError'])) {
                                        echo $_SESSION["loginError"];
                                    }
                                    ?>
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Page Footer-->
            <?php include './view/footer/footer.php' ?>
            <!-- Javascript -->
            <script type="text/javascript" async="" src="js/custom/common.js"></script>
            <script type="text/javascript" src="js/slider/core.min.js"></script>
            <!-- Login Javascript File-->
            <script type="text/javascript" src="js/custom/login.js"></script>
            <!-- Javascript Code -->
            <script type="text/javascript">
                $(document).ready(function () {
                    //return false;
                    console.log($('#frmLogin'));
                });
            </script>
    </body>
</html>