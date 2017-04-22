<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!-- 品牌介绍-最新动态 -->
     <section>
     	<div class="ycw-list">

     		<!-- 面包屑 -->
     		 	<ul class="bread">
    			<li> 
    				<span class="round"></span>
    				<a href="<?php echo siteurl($siteid);?>">首页</a>
    			</li>
    			<li>
    				<span class="round"></span>
    				<a href="<?php echo $CATEGORYS[$CAT['parentid']]['url'];?>"><?php echo $CATEGORYS[$CAT['parentid']]['catname'];?> </a>
    			</li>
    			<li>
    				<span class="round"></span>
    				<a href="$CAT[url]}"><?php echo $CAT['catname'];?></a>
    			</li>
    			</ul>

           <!-- 新闻列表标题 -->
                  <div class="news-title">
                  	  <div class="left-title"></div>
                  	   <div class="middle-title">
                  	   	<h3>最新动态</h3>
                  	   	<h4>Small bumps series</h4>
                  	   </div>
                  	  <div class="right-title"></div>

                  </div>

                 <!-- 新闻列表内容  -->
                  <div class="list-content">
                        <!-- 内容图片 -->
                       <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1973765bee444e10b7a8b408b3251a49&action=lists&catid=%24catid&order=listorder+ASC&num=5&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 5;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'listorder ASC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
        				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
	                  <div class="content">
	                  	   <div class="content-img">
	                  	   <a href="<?php echo $r['url'];?>">
	                  	   	<img src="<?php echo $r['thumb'];?>" alt="">
	                  	   	</a>
	                  	   </div>
	                  	   <!-- 新闻列表标题 -->
	                  	   <div class="content-text">
		                  	   <div class="top-text">
		                  	   		<div class="top-left"><?php echo $r['keywords'];?></div>
		                  	   		<div class="top-right">
		                  	   			<span></span>
		                  	   			<h3><?php echo $r['title'];?></h3>
		                  	   		</div>
		                  	   	</div>
		                  	   	<div class="bottom-text">
		                  	   		<p><?php echo $r['description'];?></p>
		                  	   		<p><?php echo $r['yingwen'];?></p>
		                  	   		<a href="<?php echo $r['url'];?>"></a>
		                  	   	</div>
	                  	   </div>
	                  </div>
	                  <?php $n++;}unset($n); ?>
	                  	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                  </div>
				<div class="nisu">
					<div class="liebiao">
					    <div class="yema">
							<ul>
								<!-- <li class="shouye ye"><a href="#">首页</a></li>
								<li class="shouye ye"><a href="#">上一页</a></li>
								<li class=" ye" style="border:0;background:#5f88ff;"><div class="yequan"></div><a href="#" style="color:#fff;">1</a></li>
								<li class=" ye"><a href="#">2</a></li>
								<li class=" ye"><a href="#">3</a></li>
								<li class=" ye"><a href="#">4</a></li>
								<li class=" ye">···</li>
								<li class="shouye ye"><a href="#">下一页</a></li>
								<li class="shouye ye"><a href="#">末页</a></li> -->
								<?php echo $pages;?>
							</ul>
						</div>
					</div>
				</div>
     	</div>
     </section>


<?php include template("content","footer"); ?>