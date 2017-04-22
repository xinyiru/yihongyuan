$(document).ready(function(){
	var nsys=$('.nsys1');
	var nsSlide=$('.slide',nsys);
	var titem=$('.item',nsSlide);
	var nsText=$('.text',nsSlide);
	var lunbo=$('.lunbo',nsys);

	function tab(titem,lunbo,nsText){
		titem.each(function(index){
			$(this).click(function(){
				nsText.removeClass('hot');
				/*lunbo.css({'display':'none'});
				lunbo.eq($(this).index()).css({'display':'block'});*/
				lunbo.css({'opacity':'0','z-index':'1'});
				lunbo.eq($(this).index()).css({'opacity':'1','z-index':'99'});
				$(this).find('.text').addClass('hot');
				// $(this)
			});
		})
	}
	tab(titem,lunbo,nsText);

	var jzys=$('.jzys');
	var jzSlide=$('.slide',jzys);
	var jzTitem=$('.item',jzSlide);
	var jzlunbo=$('.lunbo',jzys);
	var jzText=$('.text',jzSlide);
	tab(jzTitem,jzlunbo,jzText);
	
})