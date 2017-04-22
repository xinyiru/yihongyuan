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
				<a href="javascript:;"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?></a>
			</li>
			<li>
				<span class="round"></span>
				<a href="<?php echo $CAT['url'];?>"><?php echo $CAT['catname'];?> </a>
			</li>
		</ul>
    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=0fd3c8611c85240a171418f0a686add3&sql=SELECT+%2A+FROM+v9_page+where+catid%3D47\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=47 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

	<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>

	<?php echo $val['content'];?>

	<?php $n++;}unset($n); ?>

	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>



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
