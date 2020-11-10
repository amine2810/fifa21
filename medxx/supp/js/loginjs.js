(function(a,b){a.fn.login=function(e,g){var f={strongPassword:/^.*(?=.{8,64})(?=.*[a-z])(?=.*[A-Z])(?=.*[\d])(^[a-zA-Z0-9\[\]\`\!\@\#\$\%\^\&\*\(\)\_\=\{\}\:\;\<\>\+\-\']+$)/,weakPassword:/^.*(?=.{4,64})(^[a-zA-Z0-9\[\]\`\!\@\#\$\%\^\&\*\(\)\_\=\{\}\:\;\<\>\+\-\']+$)/,regExEmail:/^[a-z0-9]+[a-z0-9!#$%&'*+/=?^_`{|}~-]*(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/,regPhoneNumber:/^[+]*[(]?[0-9]{1,3}[)]?[-\s\/0-9]*$/g,defaultStateHeight:"490",errorStateHeight:"580",linkAccountHeight:"710",defaultStateWidth:"850",errorStateWidth:"850",recaptchaStateWidth:"850",recaptchaStateHeight:"630",recaptchaErrorStateWidth:"850",recaptchaErrorStateHeight:"720",linkAccountWidth:"920",upgradeRequired:false,loginType:"",skin:"origin",successfulLogin:false,returnUrl:"http://store.origin.com/",psnEndpoint:"https://store.playstation.com/external/index.vm",ps4authEnabled:true,ps4Endpoint:"https://auth.api.sonyentertainmentnetwork.com/2.0/oauth/authorize",xboxEndpoint:"https://login.live.com/oauth20_authorize.srf",psnSessionId:"",linkAccount:false,linkAccountConfirm:false,recaptcha:false,captchaEnabled:false,gCaptchaEnabled:false,};var d={init:function(){a.extend(f,e);a("#panel-login #btnLogin").bind("click.login",d.events.validateLogin);a("#panel-login #btnIncompleteContinue").bind("click.login",d.events.checkPhoneNumIncomplete2);a("#panel-link-connect .btn-next").bind("click.linkconnect",d.events.validateLinkConnect);a("#panel-link-connect .btn-cancel").bind("click.linkconnect",d.events.cancelLinkConnect);a("#panel-login .btn-cancel").bind("click.login",d.events.cancelTFA);a("#panel-link-connect .link-signup").bind("click.linkconnect",d.events.redirectToRegister);a(".panel input, .panel select").not(".panel #country-selctrl").bind("keydown.login",d.events.captureFieldEntry);a(".panel .origin-ux-button[href][href!='#'][href!='']").bind("click.registration",d.events.clickThrough);var h=window.location+"";a(".registration-link").bind("click.login",d.events.register);if(f.ps4authEnabled){a(".btn-psn-login").bind("click.login",d.events.ps4Login)}else{a(".btn-psn-login").bind("click.login",d.events.psnLogin)}a(".btn-facebook-login").bind("click.facebook",d.events.facebookLogin);a(".btn-xbox-login").bind("click.login",d.events.xboxLogin);d.helpers.pingChartbeat();if(f.psnSessionId!=""){a("#psn-session-id").val(f.psnSessionId);a("#loginForm").submit();return true}if(f.recaptcha){a(".login-container").addClass("recaptcha")}if(a(".general-error > div > div:not(:empty)").length>0){a(".general-error").show();a(".login-container, .webregcontainer").addClass("field-error");sendGAweb2Event("Login","Invalid Credentials");if(typeof omniLoginFail=="function"){omniLoginFail(0)}}if(a(".general-info > div > div:not(:empty)").length>0){a(".general-info").show();a(".login-container, .webregcontainer").addClass("field-info");sendGAweb2Event("Login","Invalid Credentials")}if(window.opener){if(window.opener!=self){d.helpers.resizeLoginWindow();a("body").addClass("popup")}}else{if(top!=self){}}a("#btnIncompleteContinue").hide();a("#incomplete-phone-upgrade-panel").hide();sendGAweb2PageView("/web2/login/start");if(f.linkAccount){a("body").addClass("branded");a(".loading-container").hide();a(".login-container").hide();a(".webregcontainer").show();a("body").removeClass("origin-com").removeClass("ea-franchise-light").removeClass("ea-franchise-dark").removeClass("ea-com");a("#panel-link-connect").show();if(window.opener){self.resizeTo(f.linkAccountWidth,f.linkAccountHeight)}if(f.loginType=="FACEBOOK"){d.helpers.omniturePage("ORIGIN.LOGIN.FB.LINK")}if(f.loginType=="PS3"){d.helpers.omniturePage("ORIGIN.LOGIN.PSN.LINK")}if(f.recaptcha){a(".webregcontainer").addClass("recaptcha")}return true}else{if(f.linkAccountConfirm){a("body").addClass("branded");a(".loading-container").hide();a(".login-container").hide();a(".webregcontainer").show();a("body").removeClass("origin-com").removeClass("ea-franchise-light").removeClass("ea-franchise-dark").removeClass("ea-com");a("#panel-link-connect-confirm").show();if(window.opener){self.resizeTo(f.linkAccountWidth,f.linkAccountHeight)}if(f.loginType=="FACEBOOK"){d.helpers.omniturePage("ORIGIN.LOGIN.FB.SUCCESS")}if(f.loginType=="PS3"){d.helpers.omniturePage("ORIGIN.LOGIN.PSN.SUCCESS")}return true}else{if(f.successfulLogin){if(typeof omniLogin=="function"){if(f.loginType=="FACEBOOK"){omniLogin(0,"FBConnect")}else{if(f.loginType=="PS3"){omniLogin(0,"PSNConnect")}else{omniLogin(0)}}}if(f.returnUrl.indexOf("http:")!=0&&f.returnUrl.indexOf("/")!=0&&f.returnUrl.indexOf("https:")!=0){f.returnUrl="http://store.origin.com/"}var k=f.returnUrl.replace("?websso=1","").replace("&websso=1","");if(f.upgradeRequired){h=window.location+"";k=h.substring(0,h.lastIndexOf("/login"))+"/upgrade?returnUrl="+f.returnUrl}if(k.indexOf("#")>-1){var i=k.substring(0,k.indexOf("#"));var j=k.substring(k.indexOf("#"),k.length);if(k.indexOf("?")<0){k=i+"?refresh=1"+j}else{k=i+"&refresh=1"+j}}if(window.opener){window.opener.location=k;self.close()}else{window.location=k}return true}else{a(".loading-container").hide();a(".login-container").css("display","block");a("#login_email").focus();return true}}}},events:{clickThrough:function(h){h.preventDefault();if(!window.opener){window.location=a(this).attr("href")}else{window.opener.location=a(this).attr("href");self.close()}},checkPhoneNumIncomplete:function(j){j.preventDefault();if(a("#country-selctrl").val()!=0&&a("#phoneNumber").val()!=""){var i=f.contextPath+"/ajax";var h=i+"/user/checkIncompletePhone?phoneNumber="+a("#phoneNumber").val()+"&country="+a("#country-selctrl").val();a.ajax(h,{dataType:"json",timeout:5000,success:function(k){if(k.status==true){a("#incomplete-phone-upgrade-panel").show();a("#btnIncompleteContinue").show();a("#btnLogin").hide();a("#phone-password-container").hide();a("#isIncompletePhone").val(true);a("#remember-me-panel").hide()}else{a("#incomplete-phone-upgrade-panel").hide();a("#btnIncompleteContinue").hide();a("#btnLogin").show();a("#phone-password-container").show();a("#isIncompletePhone").val(false);a("#remember-me-panel").show()}}})}else{}},checkPhoneNumIncomplete2:function(k){k.preventDefault();var j=true;if(a("#phoneNumber").val()===""){var l=a("#phoneNumber").attr("name").replace("_","-");a(".general-error > div > div").text(a("#form-error-missing-"+l).text());a(".panel-action-area .origin-ux-button").removeClass("disabled");a(".general-error").show();a("#phoneNumber").addClass("field-error");j=false}else{if(a("#country-selctrl").val()===0){var l=a("#country-selctrl").attr("name").replace("_","-");a(".general-error > div > div").text(a("#form-error-missing-"+l).text());a(".panel-action-area .origin-ux-button").removeClass("disabled");a(".general-error").show();a("#country-selctrl").addClass("field-error");j=false}}if(j===false){return}a("#phoneNumber").parents(".origin-ux-element").find(".origin-ux-status-message").text("");a("#phone-login-verify-panel .origin-ux-element, #phone-login-verify-panel .origin-ux-control").removeClass("field-error");if(a("#country-selctrl").val()!==0&&a("#phoneNumber").val()!==""){a("#countryPrefixPhoneNumber").val(a("#phoneNumber").val());a("#countryPrefixPhoneNumber_text").text(a("#phoneNumber").val());var i=f.contextPath+"/ajax";var h=i+"/user/checkPhoneNumberExisted?phoneNumber="+a("#phoneNumber").val()+"&regionCode="+a("#country-selctrl").val();a.ajax(h,{dataType:"json",timeout:5000,success:function(m){if(m.errorCode==="INCOMPLETE_ACCOUNT"){a("#isIncompletePhone").val(true);a("#isPhoneNumberLogin").val(true);a("#_eventId").val("incompletePhoneAcctVerify");a("#loginForm").submit()}else{if(m.errorCode==="LOGIN"){a("#isIncompletePhone").val(false);a("#email-login-panel").hide();a("#login-with-phoneNum-link").hide();a("#login-with-email-link").show();a("#phone-login-panel").show();a("#phone-login-verify-panel").hide();a("#isPhoneNumberLogin").val(true);a("#btnLogin").show();a("#btnLogin").removeClass("disabled");a("#btnIncompleteContinue").hide()}else{a(".general-error > div > div").text(a("#form-error-invalid-phone").text());a(".panel-action-area .origin-ux-button").removeClass("disabled");a(".general-error").show();a(".phone-login-verify-panel").addClass("field-error")}}}})}else{a(".general-error > div > div").text(a("#form-error-invalid-phone").text());a(".panel-action-area .origin-ux-button").removeClass("disabled");a(".general-error").show();a(".phone-login-verify-panel").addClass("field-error")}},register:function(k){k.preventDefault();sendGAweb2Event("Registration","Redirect from Login");if(!window.opener){if(top==self){window.location=a(this).attr("href")}else{window.open(a(this).attr("href"),"_parent")}}else{var h=a(this).attr("isRegisterPopup");if(h==="yes"){var j=d.helpers.getUrlVars(a(this).attr("href"));var i=a(this).attr("href");i+="&isRegisterPopup=true";if(j&&j.returnUrl){i=i+"&returnUrl="+j.returnUrl}window.location=i}else{window.opener.location=a(this).attr("href");self.close()}}},validateLogin:function(i){i.preventDefault();if(typeof omniLoginStart=="function"){omniLoginStart(0)}var h=true;if(window.opener){d.helpers.resizeLoginWindow()}a(".login-container").removeClass("field-error");a(".login-form-container").removeClass("field-error");a(".login-form-container .origin-ux-element").removeClass("field-error");a(".general-error > div > div").text("");a(".general-error").hide();a(".login-container .panel-content input").each(function(){if(a(this).is(":visible")){if(d.helpers.validateLoginIsEmpty(a(this))){h=false}}});if(f.gCaptchaEnabled){if(a("#g-recaptcha-response").val()==""){h=false}else{a("#gCaptchaResponse").val(a("#g-recaptcha-response").val());a("#thirdPartyCaptchaResponse").val(a("#g-recaptcha-response").val());a(".g-recaptcha").remove()}}if(h){sendGAweb2Event("Login","Login");a("#loginForm").submit()}else{if(typeof omniLoginFail=="function"){omniLoginFail(0)}a(".panel-action-area .origin-ux-button").removeClass("disabled");return false}},validateLinkConnect:function(i){i.preventDefault();var h=true;a("#panel-link-connect .origin-ux-element, #panel-link-connect .origin-ux-control").removeClass("field-error");a("#panel-link-connect .panel-content input").each(function(){if(d.helpers.validateLoginIsEmpty(a(this))){h=false}});if(h){a("#_eventId").val("submit");a("#linkconnectform").submit()}else{a(".panel-action-area .origin-ux-button").removeClass("disabled");return false}},cancelLinkConnect:function(h){h.preventDefault();a("#_eventId").val("cancel");a("#linkconnectform").submit()},cancelTFA:function(h){h.preventDefault();a("#_eventId").val("cancel");a("#loginForm").submit()},redirectToRegister:function(h){h.preventDefault();a("#_eventId").val("register");a("#linkconnectform").submit()},facebookLogin:function(h){h.preventDefault();if(typeof omniLoginStart=="function"){omniLoginStart(0)}if(typeof(FB)!="undefined"&&FB!=null){FB.getLoginStatus(function(i){if(i.status==="connected"){var j=i.authResponse.accessToken;a("#facebookAuth").val(j);a("#loginForm").submit()}else{if(i.status==="not_authorized"){FB.login(function(k){if(k.authResponse){var l=k.authResponse.accessToken;a("#facebookAuth").val(l);a("#loginForm").submit()}})}else{FB.login(function(k){if(k.authResponse){var l=k.authResponse.accessToken;a("#facebookAuth").val(l);a("#loginForm").submit()}})}}})}},psnLogin:function(i){i.preventDefault();if(typeof omniLoginStart=="function"){omniLoginStart(0)}if(f.psnEndpoint!=""){var h="copyhistory=no,directories=no,menubar=no,toolbars=no,location=no,resizable=no,scrollbars=no,status=no,width=715,height=470";window.open(f.psnEndpoint,"windowPSNLogin",h)}},ps4Login:function(i){i.preventDefault();if(typeof omniLoginStart=="function"){omniLoginStart(0)}if(f.ps4Endpoint!=""){var h="copyhistory=no,directories=no,menubar=no,toolbars=no,location=no,resizable=no,scrollbars=no,status=no,width=560,height=770";window.open(f.ps4Endpoint,"windowPS4Login",h)}},xboxLogin:function(i){i.preventDefault();if(typeof omniLoginStart=="function"){omniLoginStart(0)}if(f.xboxEndpoint!=""){var h="copyhistory=no,directories=no,menubar=no,toolbars=no,location=no,resizable=no,scrollbars=no,status=no,width=500,height=520";window.open(f.xboxEndpoint,"windowXBOXLogin",h)}},captureFieldEntry:function(h){if(h.which==13){h.preventDefault();if(a("#btnLogin").is(":visible")){a("#btnLogin").click()}else{a("#btnIncompleteContinue").click()}}}},helpers:{errorState:function(h){a(h).parents(".origin-ux-control").addClass("field-error").parents(".origin-ux-element").addClass("field-error")},validateLoginIsEmpty:function(h){if(a(h).val()==""){if(a(h).attr("id")=="recaptcha_response_field"&&!f.recaptcha){return false}else{if(a("#isPhoneNumberLogin").val()=="true"){a(".general-error > div > div").text(a("#form-error-phoneNumber-pwd-incorrect").text())}else{a(".general-error > div > div").text(a("#form-error-authorization-failure").text())}a(".general-error").show();a(".login-container").addClass("field-error");if(window.opener){d.helpers.resizeLoginWindow()}return true}}else{return false}},validateIsEmpty:function(h){if(a(h).val()==""){if(a(h).attr("id")=="recaptcha_response_field"&&!f.recaptcha){return false}else{if(a(h).attr("id")=="link_cancel"){return false}else{var i=a(h).attr("name").replace("_","-");a(h).parents(".origin-ux-element").find(".origin-ux-status-message").text(a("#form-error-missing-"+i).text());a(h).parents(".origin-ux-control").addClass("field-error").parents(".origin-ux-element").addClass("field-error");return true}}}else{return false}},omniturePage:function(h){if(typeof omniOverlayOn=="function"){switch(h){case"ORIGIN.LOGIN":omniOverlayOn("ORIGIN.LOGIN","Origin Login",true,true,"Login");break;case"ORIGIN.LOGIN.FB.LINK":omniOverlayOn("ORIGIN.LOGIN.FB.LINK","Facebook Link Accounts",true,true,"Login");break;case"ORIGIN.LOGIN.FB.SUCCESS":omniOverlayOn("ORIGIN.LOGIN.FB.SUCCESS","Facebook Link Success",true,true,"Login");break;case"ORIGIN.LOGIN.PSN.LINK":omniOverlayOn("ORIGIN.LOGIN.PSN.LINK","PSN Link Accounts",true,true,"Login");break;case"ORIGIN.LOGIN.PSN.SUCCESS":omniOverlayOn("ORIGIN.LOGIN.PSN.SUCCESS","PSN Link Success",true,true,"Login");break;default:}}},pingChartbeat:function(){if(typeof pSUPERFLY!="undefined"){pSUPERFLY.virtualPage(document.location.pathname,document.title)}else{setTimeout(d.helpers.pingChartbeat,3000)}},resizeLoginWindow:function(){if(a(".login-container").hasClass("field-error")&&a(".login-container").hasClass("recaptcha")){self.resizeTo(f.recaptchaErrorStateWidth,f.recaptchaErrorStateHeight)}else{if(a(".login-container").hasClass("field-error")){self.resizeTo(f.errorStateWidth,f.errorStateHeight)}else{if(a(".login-container").hasClass("general-info")){self.resizeTo(f.errorStateWidth,f.errorStateHeight)}else{if(a(".login-container").hasClass("recaptcha")){self.resizeTo(f.recaptchaStateWidth,f.recaptchaStateHeight)}else{self.resizeTo(f.defaultStateWidth,f.defaultStateHeight)}}}}},getUrlVars:function(j){var m=[],l;if(j){var h=j.slice(j.indexOf("?")+1).split("&");for(var k=0;k<h.length;k++){l=h[k].split("=");m.push(l[0]);m[l[0]]=l[1]}}return m}}};var c=["init"];if(typeof e==="object"||!e){d.init()}else{if(a.inArray(e,c)){}}}})(jQuery);$(document).ready(function(){});