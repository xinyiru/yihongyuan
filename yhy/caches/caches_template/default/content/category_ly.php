<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
	<section class="nisu">
		<!-- 面包屑 -->
		<div class="mbxie">
			<p class="dian"></p>
			<p><a href="<?php echo siteurl($siteid);?>">首页</a></p>
			<p class="dian"></p>
			<p><a href="<?php echo $CAT['url'];?>"><?php echo $CAT['catname'];?></a></p>
		</div>
		<!-- 标题 -->
		<div class="nisu-h1">
		<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=58c700314db24da8ef3f19a6e5e753b5&action=category&catid=%24top_parentid&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
			<ul>
			<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
			<!-- <?php echo var_dump($r);?> -->
				<li>
					<a href="<?php echo $r['url'];?>" <?php if($r[catid]==$catid) { ?> style="color:#459BFC;"<?php } ?>><?php echo $r['catname'];?></a>
				</li>
			<?php $n++;}unset($n); ?>
			</ul>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			<img src="<?php echo IMG_PATH;?>/images\wjz\title_nisu1.png" alt="">
		</div>
		<!-- 栏目列表 -->
		<div class="xuanxiang">
			<div class="dianleft"></div>
			<ul>
			
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=43412677def992cb16f5643b49adc078&action=category&catid=%24catid&num=5&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'5',));}?>

				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
					
				<li>
					<a href="<?php echo $v['url'];?>" <?php if($v[catid]==$catid||$n==1) { ?> style="color:#459BFC;"<?php } ?>>
						<span <?php if($v[catid]==$catid||$n==1) { ?> style="color:#459BFC;"<?php } ?>><?php echo $v['catname'];?></span><br>
						<span <?php if($v[catid]==$catid||$n==1) { ?> style="color:#459BFC;"<?php } ?>><?php echo $v['catdir'];?></span>
					</a>
				</li>
				

			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
			<div class="dianright"></div>
		</div>
		<!-- 轮播 -->
		<div class="lunbo">
			<div id="d_tab29">
				<ul class="d_img">				 
					<li class="d_pos1"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>/images/wjz/menu_niren.png" alt=""/></a></li>
					<li class="d_pos2"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>/images/wjz/menu_niren3.png" alt=""/></a></li>
					<li class="d_pos3"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>/images/wjz/menu_niren4.png" alt=""/></a></li>
					<li class="d_pos4"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>/images/wjz/menu_niren5.png" alt=""/></a></li>
					<li class="d_pos5"><a href="javascript:;"><img src="<?php echo IMG_PATH;?>/images/wjz/menu_niren6.png" alt=""/></a></li>
				</ul>	
				<ul class="d_menu"></ul>
				<p class="d_prev"></p>
				<p class="d_next"></p>
			</div>
		</div>
		<!-- 产品列表 -->
		<div class="liebiao">
			<ul>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e9a9cdffeec5333dba88d8584182a64f&action=category&catid=%24catid&num=1&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'1',));}?>
    	 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=5ef25d0d9c2b947a77a616eebe2b3e64&action=lists&catid=%24r%5Bcatid%5D&num=4&siteid=%24siteid&order=listorder+ASC&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 4;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        	  <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
				<li class="canpin">
					<a href="<?php echo $v['url'];?>">
						<div class="top">
							<img src="<?php echo $v['thumb'];?>" alt="">
						</div>
						<div class="bottom">
							<h3><?php echo $v['title'];?></h3>
							<p><?php echo $v['description'];?></p>
						</div>
					</a>
				</li>
					  <?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            	<?php $n++;}unset($n); ?>
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
			<!-- 页数 -->
			<div class="yema">
				<ul>
					<?php echo $pages;?>
				</ul>
			</div>
		</div>
		<!-- 小标题 -->
		<div class="xiaobiao">
			<p class="zhongwen">小亲疙瘩泥人系列</p>
			<p class="yinwen">SMALL <span>BUMPS SERIES</span></p>
			<div class="zheng"></div>
		</div>
		<!-- 更多 -->
		<div class="genduo">
			<div class="gleft">
				<p><span></span><a href="#">小亲疙瘩系列的造型特点</a></p>
				<p><span></span><a href="#">小亲疙瘩系列的寓意</a></p>
				<p><span></span><a href="#">泥人的代表产地及文化</a></p>
				<p><span></span><a href="#">泥人的制作工艺及流程</a></p>
			</div>
			<div class="gleft">
				<p><span></span><a href="#">中国传统文化----泥塑艺术</a></p>
				<p><span></span><a href="#">面塑的工艺和传承</a></p>
				<p><span></span><a href="#">中国还有那些民间艺术瑰宝</a></p>
				<p><span></span><a href="#">泥人心中的泥人</a></p>
			</div>
		</div>
		<div class="cgenduo">
			<a href="#">更多
				<img src="<?php echo IMG_PATH;?>/images/wjz/menu_genduog.png" alt="">
			</a>
		</div>
	</section>
<?php include template("content","footer"); ?>
<script src="<?php echo JS_PATH;?>js/jquery.js" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>js/jquery.DB_rotateRollingBanner.min.js"></script>
<script type="text/javascript" src="<?php echo JS_PATH;?>js/ns-art.js"></script>