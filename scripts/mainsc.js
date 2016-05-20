$cliked = "";
$(document).ready(function(){
    $("#follow").click(function(){
    	$cliked = "follow-box";
    	$("#popup-bg").fadeIn(200);
    	$("#follow-box").slideDown(100);
    });
    $(".callback-caller p").click(function(){
    	$cliked = "callback-box";
    	$("#popup-bg").fadeIn(200);
    	$("#callback-box").slideDown(100);
    });
    $(".faq-caller p").click(function(){
    	$cliked = "faq-box";
    	$("#popup-bg").fadeIn(200);
    	$("#faq-box").slideDown(100);
    });
    $(".item-status .icon-contact").click(function(){
        $cliked = "need-more-box";
        $("#need-more-box .popup-preview img").attr("src", $(this).attr("data-img"));
        $("#need-more-box .popup-preview a").attr("href", $(this).attr("data-href"));
        $("#popup-bg").fadeIn(200);
        $("#need-more-box").slideDown(100);
    });
    $(".sign-caller").click(function(){
        $cliked = "sign-in-box";
        $("#popup-bg").fadeIn(200);
        $("#sign-in-box").slideDown(100);
    });
    $(".popup-box .icon-close").click(function(){
    	$("#popup-bg").fadeOut(350);
    	$("#" + $cliked + "").fadeOut(350);
    });
});
