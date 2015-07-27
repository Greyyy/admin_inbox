$(document).ready(function(){
 	var route=$("#js_div_menu").offset().left;
 	$("#js_link_menu").click(function(){
    	if ($("#js_div_menu").offset().left<0) $("#js_div_menu").animate({left:0},500);
    	else $("#js_div_menu").animate({left:route},500);
 	});

 	$('#js_btn_dropdown').click(function() {
 		if ($('#js_dropdown_block').css('display','none')) {
 			$('#js_dropdown_block').css('display', 'block')
 		}
 	});
});