/*  Author: Grapheme Group
 *  http://grapheme.ru/
 */

$(function(){
	var mainOptions = {target: null,beforeSubmit: mt.ajaxBeforeSubmit,success: mt.ajaxSuccessSubmit,dataType:'json',type:'post'};
	$("#order").click(function(e){
		e.preventDefault();
		$("#frm-payment").slideDown('slow', function(){
			$("html, body").animate({scrollTop:$("#order").offset().top},500);
		});
	});
	$("#payment").click(function(){
		var options = mainOptions;
		options.success = function(response,status,xhr,jqForm){
			mt.ajaxSuccessSubmit(response,status,xhr,jqForm);
			if(response.status){
				$(".step-2").hide();
				$(".step-3").slideDown('slow', function(){
					$('html, body').animate({scrollTop: $(".step-3").offset().top - 50},500);
				});
			}
		}
		$("#frm-payment").ajaxSubmit(options);
		return false;
	});
	$("#rsubmit").click(function(){
		var options = mainOptions;
		options.success = function(response,status,xhr,jqForm){
			mt.ajaxSuccessSubmit(response,status,xhr,jqForm);
			if(response.status){
				$("span.order-number").html(response.numberOrder);
				$(".step-2").slideDown('slow', function(){
					$(".step-1").slideUp('slow', function(){
						$("html, body").animate({scrollTop:$(".step-2").offset().top - 50},1000);
					});
				});
			}
		}
		$("#frm-register").ajaxSubmit(options);
		return false;
	})
});