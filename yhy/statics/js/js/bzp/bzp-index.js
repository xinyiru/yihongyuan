$(function(){
	var navlis=$('.header .mainnav .navcon>li');
	navlis.hover(function(){
		$(this).find('.hiddenlist').slideDown('fast');
		$(this).addClass('active');
	},function(){
		$(this).find('.hiddenlist').stop();
		$(this).find('.hiddenlist').slideUp('fast');
		$(this).removeClass('active');
	})
})