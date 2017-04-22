<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!-- 三级页面小亲疙瘩系类 -->
		<!-- 面包屑 -->
		<ul class="bread">
			<li> 
				<span class="round"></span>
				<a href="<?php echo siteurl($siteid);?>">首页</a>
			</li>
			<li>
				<span class="round"></span>
				<a href="<?php echo $CATEGORYS[$CATEGORYS[$CAT['parentid']]['parentid']]['url'];?>"><?php echo $CATEGORYS[$CATEGORYS[$CAT['parentid']]['parentid']]['catname'];?></a>
			</li>
			<li>
				<span class="round"></span>
				<a href="<?php echo $CATEGORYS[$CAT['parentid']]['url'];?>"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></a>
			</li>
			<li>
				<span class="round"></span>
				<a href="<?php echo $CAT['url'];?>"><?php echo $CAT['catname'];?> </a>
			</li>
		</ul>
   

	<?php echo $content;?>
	<!-- 亲疙瘩泥人系类 banner-->
<section>
	<!-- 亲疙瘩泥人系类标题-->
	<div class="ycw-banner">
	<div class="title-left">
	<h3>小亲疙瘩泥人系列</h3>
	<div class="line">&nbsp;</div>
	<h2><strong>SMALL</strong> BUMPS SERIES</h2>
	</div>
	<!-- 轮播 -->
	<div class="swiper-container box">
	<div class="swiper-wrapper swiper-no-swiping">
	<div class="swiper-slide banner-box">
	<div class="img-box"><img alt="" src="<?php echo IMG_PATH;?>images/ycw/menu_niren2.png" /> <span>小亲疙瘩少年泥人</span></div>
	<div class="img-box"><img alt="" src="<?php echo IMG_PATH;?>images/wjz/menu_niren3.png" /> <span> 小亲疙瘩小童子</span></div>
	<div class="img-box"><img alt="" src="<?php echo IMG_PATH;?>images/wjz/menu_niren4.png" /> <span> 小亲疙瘩光头小子</span></div>
	</div>
	<div class="swiper-slide banner-box">
	<div class="img-box"><img alt="" src="<?php echo IMG_PATH;?>images/ycw/menu_niren2.png" /> <span>小亲疙瘩少年泥人</span></div>
	<div class="img-box"><img alt="" src="<?php echo IMG_PATH;?>images/wjz/menu_niren3.png" /> <span> 小亲疙瘩小童子</span></div>
	<div class="img-box"><img alt="" src="<?php echo IMG_PATH;?>images/wjz/menu_niren4.png" /> <span> 小亲疙瘩光头小子</span></div>
	</div>
	<div class="swiper-slide banner-box">
	<div class="img-box"><img alt="" src="<?php echo IMG_PATH;?>images/ycw/menu_niren2.png" /> <span>小亲疙瘩少年泥人</span></div>
	<div class="img-box"><img alt="" src="<?php echo IMG_PATH;?>images/wjz/menu_niren3.png" /> <span> 小亲疙瘩小童子</span></div>
	<div class="img-box"><img alt="" src="<?php echo IMG_PATH;?>images/wjz/menu_niren4.png" /> <span> 小亲疙瘩光头小子</span></div>
	</div>
	</div>
	<!-- 如果需要分页器 -->
	<div class="swiper-pagination">&nbsp;</div>
	<!-- 如果需要左右按钮 -->
	<div class="swiper-button-prev prev">&nbsp;</div>
	<div class="swiper-button-next next">&nbsp;</div>
	</div>
	</div>
</section>
<br />


<?php include template("content","footer"); ?>
<script>
	      
  var mySwiper = new Swiper ('.box', {
    // direction: 'vertical',
    loop: true,
    // autoplay:1000,
    loopedSlides:1,
    // pagination: '.swiper-pagination',
    // 如果需要前进后退按钮
    mousewheelControl :false,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev'
    
  })        
 
</script>