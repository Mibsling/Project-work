<!DOCTYPE html>
<html>
    <head>
        <!-- Created by:Abimbola Ogunsola-->
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Register</title>
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
            <!--Registration Form -->
            <section class="breadcrumbs-custom-inset">
                <div class="breadcrumbs-custom context-dark bg-overlay-55">
                    <div class="container">
                        <h2 class="breadcrumbs-custom-title">Registration Form</h2>
                    </div>
                    <div class="box-position" style="background-image: url(images/breadcrumbs-bg.jpg);"></div>
                </div>
            </section>
            <!-- Input-->
            <section class="section section-xl bg-default text-md-left">
                <div class="container">
                    <div class="row row-50 justify-content-md-center">
                        <div class="col-md-10 col-lg-6">
                            <form class="rd-form rd-mailform" method="post" id="frmRegister" novalidate="novalidate">
                                <div class="row row-14 gutters-14">
                                    <!--First name input-->
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-first-name" type="text" name="firstname" placeholder="First Name" data-constraints="@Required" data-error="Firstname is required"><span class="form-validation" ></span>
                                            <!--                                            <label class="form-label rd-input-label" for="contact-first-name">First Name</label>-->
                                        </div>
                                    </div>
                                    <!--Last name input-->
                                    <div class="col-sm-6">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-last-name" type="text" name="lastname" placeholder="Last Name" data-constraints="@Required" data-error="Lastname is required."><span class="form-validation"></span>
                                            <!--                                            <label class="form-label rd-input-label" for="contact-last-name">Last Name</label>-->
                                        </div>
                                    </div>
                                    <!--Address input-->
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-address" type="text" name="address" placeholder="Address" data-constraints="@Required" data-error="Address is required."><span class="form-validation"></span>
                                            <!--                                            <label class="form-label rd-input-label" for="contact-address">Address</label>-->
                                        </div>
                                    </div>
                                    <!--Postal Code input-->
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-code" type="text" title="A0A A0A" placeholder="Postal Code" name="code" data-constraints="@Required" data-error="Postal Code is required."> <span class="form-validation"></span>
                                            <!--                                            <label class="form-label rd-input-label" for="contact-code">Postal Code</label>-->
                                        </div>
                                    </div>
                                    <!--City input-->
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-city" type="text" name="city" placeholder="City" data-constraints="@Required" data-error="City is required."><span class="form-validation"></span>
                                            <!--                                            <label class="form-label rd-input-label" for="contact-city">City</label>-->
                                        </div>
                                    </div>
                                    <!--Province input-->
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <select class="form-input select2-container form-control-has-validation" id="contact-province" name="province">
                                                <option value="" selected="selected">(Select a Province)</option>
                                                <option value="AB">Alberta</option>
                                                <option value="BC">British Columbia</option>
                                                <option value="MB">Manitoba</option>
                                                <option value="NB">New Brunswick</option>
                                                <option value="NL">Newfoundland and Labrador</option>
                                                <option value="NS">Nova Scotia</option>
                                                <option value="NT">Northwest Territories</option>
                                                <option value="NU">Nunavut</option>
                                                <option value="ON">Ontario</option>
                                                <option value="PE">Prince Edward Island</option>
                                                <option value="QC">Quebec</option>
                                                <option value="SK">Saskatchewan</option>
                                                <option value="YT">Yukon</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--Country input-->
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <select class="form-input select2-container form-control-has-validation" id="contact-country" name="country" >
                                                <option value="" selected="selected">(Select a Country)</option>
                                                <option value="CA">Canada</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!--Home Phone-->
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-homephone" type="text" name="homephone" placeholder="Home Phone" data-constraints="@Numeric" data-error="Valid Phone number is required."><span class="form-validation"></span>
                                            <!--                                            <label class="form-label rd-input-label" for="contact-homephone">Home Phone</label>-->
                                        </div>
                                    </div>
                                    <!--Business Phone-->
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-busphone" type="text" name="busphone" placeholder="Business Phone" data-constraints="@Numeric" data-error="Valid Phone number is required."><span class="form-validation"></span>
                                            <!--                                            <label class="form-label rd-input-label" for="contact-busphone">Business Phone</label>-->
                                        </div>
                                    </div>


                                    <!--Email input-->
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation"  type="email" id="Regemail" name="Regemail" placeholder="E-mail(User Name)" data-constraints="@Required @Email" data-error="Valid email address is required."><span class="form-validation"></span>
                                            <!--                                            <label class="form-label rd-input-label" for="contact-email">E-mail(User Name)</label>-->
                                        </div>
                                    </div>

                                    <!--Password Input-->
                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <input class="form-input form-control-has-validation" id="contact-loginpassword" type="password" placeholder="Password" name="password" data-constraints="@Required"><span class="form-validation"></span>
                                            <!--                                            <label class="form-label rd-input-label" for="contact-loginpassword">Password</label>-->
                                        </div>
                                    </div>

                                    <!--Register-->
                                    <button class="button button-primary button-pipaluk" id="btnRegister" name="btnRegister" type="submit">Register</button>

                                    <div class="col-12">
                                        <div class="form-wrap">
                                            <p class="text-muted">
                                                <strong>*</strong> These fields are required</p>
                                        </div>
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </section>


            <?php
            
//            Connect to Database
            include('./controller/database.php');
            $conn = getConnection();
            
//            insert into Database
            if ($_SERVER['REQUEST_METHOD'] == "POST" and isset($_POST['btnRegister'])) {
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $address = $_POST['address'];
                $code = $_POST['code'];
                $city = $_POST['city'];
                $province = $_POST['province'];
                $country = $_POST['country'];
                $homephone = $_POST['homephone'];
                $busphone = $_POST['busphone'];
                $email = $_POST['Regemail'];
                $password = $_POST['password'];

                $sql = "INSERT INTO customers (CustFirstName, CustLastName, CustAddress, CustCity, CustProv, CustPostal,CustCountry,CustHomePhone,CustBusPhone,CustEmail,CustPassword)
                 VALUES (?,?,?,?,?,?,?,?,?,?,?)";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "sssssssssss", $firstname, $lastname, $address, $city, $province, $code, $country, $homephone, $busphone, $email, $password);
                
                $chkResult = mysqli_stmt_execute($stmt);
                if($chkResult > 0)
                {
                    print_r("</br> Insert Successful");
                }
            }
            ?>

            <!-- Page Footer-->
            <?php include './view/footer/footer.php' ?>
            
            <!--javascript-->
            <script type="text/javascript" async="" src="js/custom/common.js"></script>
            <script type="text/javascript" src="js/slider/core.min.js"></script>
            <script type="text/javascript" src="js/custom/index.js"></script>
            
            <!--javascript for when you click Register to check validation-->
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#btnRegister').click(function () {
                        if (CheckValidation('#frmRegister') == false)
                        {
                            return false;
                        } else {
                            if (EmailValidation('#Regemail') == false)
                                return false;
                        }
                    });
                });
            </script>
    </body>
</html>