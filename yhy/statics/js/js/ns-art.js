$(function(){
	var nisu=$(".nisu .liebiao ul .canpin");
	nisu.hover(function(){
		$(this).addClass("hover");
	},function(){
		$(this).removeClass("hover");
	});
	$("#d_tab29").DB_rotateRollingBanner({
		key:"c37080",            
		moveSpeed:500,           
		autoRollingTime:100000      
	});
	var nisulan=$(".nisu .xuanxiang ul li");
	var nisuzlan=$(".nisu .xuanxiang ul");
	var nisuzw=nisuzlan.width();
	var fenbie=nisuzw/nisulan.length;
	nisulan.css("width",fenbie);
});