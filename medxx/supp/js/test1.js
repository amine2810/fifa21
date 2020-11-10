(function(a,b){
	a.fn.onetime=function(e,g){
		var f={};
		var d={init:function(){
			a.extend(f,e);
			a(".loading-container").hide();
			a(".tfa-container").css("display","block");
			a(".general-info").css("display","none");
			a(".dialog-info").css("display","none");
			a(".panel-action-area .origin-ux-button").removeClass("disabled");
			a("#origin-tfa-container>.origin-ux-textbox").removeClass("field-error");
			a("#btnCancel").bind("click",function(h){
				h.preventDefault();
				a("#_eventId").val("cancel");
				a(".tfa-form-container .origin-ux-control").removeClass("field-error").parents(".tfa-form-container .origin-ux-element").removeClass("field-error");
				a(".tfa-form-container .origin-ux-element").find(".origin-ux-status-message").text("");
				a(".tfa-form-container .origin-ux-element").find(".origin-ux-textbox-status-icon").hide();
				a("#oneTimeCode").val("");a("#challengeForm").submit()});
			a("#btnSendCode").bind("click",function(h){
				h.preventDefault();
				a("#_eventId").val("submit");
				a("#challengeForm").submit()});
			a("#btnSubmit").bind("click",d.events.verifyCode);
			if(d.helpers.isWrongCode()){
				a("#origin-tfa-container>.origin-ux-textbox").addClass("field-error")
			}
				if(a(".dialog-info > div#resend-error-code > div:not(:empty)").length>0){
					a(".dialog-info").show();a(".tfa-container").addClass("field-error")
				}
				if(a(".general-info > div > div:not(:empty)").length>0){
					a(".general-info").show();a(".tfa-container").addClass("field-info")}
					if(a("#origin-tfa-container>.origin-ux-element>span.origin-ux-textbox-control").hasClass("field-error")){
						a("#origin-tfa-container>.origin-ux-element").addClass("field-error")}
						a(document).bind("keydown.tfa",d.events.checkKeyDown)
					},events:{verifyCode:function(j){
						j.preventDefault();
						var i=true;a(".tfa-container").removeClass("field-error");
						a(".tfa-form-container").removeClass("field-error");
						a("#origin-tfa-container>.origin-ux-textbox").removeClass("field-error");
						a(".dialog-info > div > div").text("");
						a(".dialog-info").hide();
						var h=a.trim(a("#oneTimeCode").val());
						if(h==""||!(/^[A-Za-z0-9]{6}$/)){
							a("#origin-tfa-container>.origin-ux-textbox").addClass("field-error");
							a("#origin-tfa-container>.origin-ux-element>.origin-ux-status-message").text(a("#form-error-invalid-code").text());
							i=false}if(i){
								a("#challengeForm").submit()
							}else{
								a(".panel-action-area .origin-ux-button").removeClass("disabled");
							a("#oneTimeCode").val("");
							return false}
						},checkKeyDown:function(h){
							if(h.which==13){
								h.preventDefault();
								a("#btnSubmit").trigger("click")}}
							},helpers:{isWrongCode:function(){
								var h=a("#oneTimeCode").val();
								if(h!=""){
									if(a.trim(a(".tfa-form-container .origin-ux-element").find(".origin-ux-status-message").text)!=""){return true}
								}return false}}};
							var c=["init"];
							if(typeof e==="object"||!e){d.init()}
								else{if(a.inArray(e,c)){}}}})(jQuery);
							$(document).ready(function(){});