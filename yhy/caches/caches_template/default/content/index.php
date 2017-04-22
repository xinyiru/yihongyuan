<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!-- 泥塑艺术开始 -->
	<!-- 泥塑轮播 --> 
	<div class="nsys nsys1">
		<div class="ns-box">
			<div class="top">
				<ul class="slide">
					<li class="item">
						<span class="text">佛造像</span>
					</li>
					<li class="item">
						<span class="text">彩塑</span>
					</li>
					<li class="item">
						<span class="text hot">原生态泥人</span>
					</li>
				</ul>
				<div class="topimg"></div>
			</div>
			<div class="bottom">
				<ul class="lunbo">
					<div class="swiper-container swiper-container1 ban1">
						<div class="swiper-wrapper wrapper">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=bbbef7a6f6d42ebd7b036d8866dcb926&action=position&posid=2&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="<?php echo $r['url'];?>" class="slide hot">
									<div class="img">
										<img src="<?php echo $r['thumb'];?>" alt="">
									</div>
									<span class="t1">
										泥塑<span class="t2">丰富和多样</span>
									</span>
								</a>
								
							<?php $n++;}unset($n); ?>
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=61a68dbabc1c750eb03f4165c2207ac9&action=position&posid=1&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
							<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="<?php echo $r['url'];?>" class="slide hot">
									<div class="img">
										<img src="<?php echo $r['thumb'];?>" alt="">
									</div>
									<span class="t1">
										泥塑<span class="t2">丰富和多样</span>
									</span>
								</a>
								
							<?php $n++;}unset($n); ?>
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</div>
						<ul class="swiper-pagination lis"></ul>
					</div>
				</ul>
				<ul class="lunbo">
					<div class="swiper-container swiper-container1 ban1">
						<div class="swiper-wrapper wrapper">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=4fa823606db81a9a8bc8a4daeb753d82&action=position&posid=16&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'16','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="<?php echo $r['url'];?>" class="slide hot">
									<div class="img">
										<img src="<?php echo $r['thumb'];?>" alt="">
									</div>
									<span class="t1">
										泥塑<span class="t2">丰富和多样</span>
									</span>
								</a>
								
								<?php $n++;}unset($n); ?>
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=e1510a629d11fe3b4b20f8c776d85265&action=position&posid=15&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'15','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="<?php echo $r['url'];?>" class="slide hot">
									<div class="img">
										<img src="<?php echo $r['thumb'];?>" alt="">
									</div>
									<span class="t1">
										泥塑<span class="t2">丰富和多样</span>
									</span>
								</a>
								<?php $n++;}unset($n); ?>
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</div>
						<ul class="swiper-pagination lis"></ul>
					</div>
				</ul>
				<ul class="lunbo" style="opacity:1">
					<div class="swiper-container swiper-container1 ban1">
						<div class="swiper-wrapper wrapper">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d930393098749c41f5b65db152c59edd&action=position&posid=12&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="<?php echo $r['url'];?>" class="slide hot">
									<div class="img">
										<img src="<?php echo $r['thumb'];?>" alt="">
									</div>
									<span class="t1">
										泥塑<span class="t2">丰富和多样</span>
									</span>
								</a>
								<?php $n++;}unset($n); ?>
								
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=3142b9bdc79af5dfac491662db6b1cb4&action=position&posid=14&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'14','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="<?php echo $r['url'];?>" class="slide hot">
									<div class="img">
										<img src="<?php echo $r['thumb'];?>" alt="">
									</div>
									<span class="t1">
										泥塑<span class="t2">丰富和多样</span>
									</span>
								</a>
								<?php $n++;}unset($n); ?>
								
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</div>
						<ul class="swiper-pagination lis"></ul>
					</div>
				</ul>
				
			</div>
			
			
		</div>
	</div>

	<!-- 新石器时期 -->
			<div class="shiqi">
				<div class="xsq">
					<div class="img">
						<img src="<?php echo IMG_PATH;?>images/zh/title_da.png" alt="">
					</div>
					<h3>人类早期手工捏制的艺术品，泥塑艺术可上溯到距今4千到1万年前</h3>
					<p>泥塑艺术具有强烈的视觉冲击效果，欣赏角度也极为的丰富和多样化，更能贴近于人们的生活高科技迅猛发展的今天，是人们追<br>求其返璞归真的具体写照，同时也是当今人们追求时尚、个性的一种体现</p>
					<a href="<?php echo $CATEGORYS['11']['url'];?>" class="chakan"></a>
				</div>

				<div class="sqcontent">
					<div class="shan">
						<img src="<?php echo IMG_PATH;?>images/zh/pic_shan.png" alt="">
					</div>
					<div class="caisu">
						<img src="<?php echo IMG_PATH;?>images/zh/menu_yang.png" alt="">
					</div>
					<div class="contain">
						<div class="neirong">
							<div class="title">
								<img src="<?php echo IMG_PATH;?>images/zh/title_da.png" alt="">
							</div>
							<span class="bigtext">泥塑艺术可上溯至距今4千至1万年前<br>人类早期手工捏制的艺术品</span>
							<h5 class="shortext">泥塑艺术具有强烈的视觉冲击效果，欣赏角度也极为的丰富和多样化更<br>能贴近于人们的生活高科技迅猛发展的今天，是人们追求其返璞归真的<br>具体写照，同时也是当今人们追求时尚、个性的一种体现</h5>
						</div>
					</div>
					<div class="shouni">
						<img src="<?php echo IMG_PATH;?>images/zh/menu_yang1.png" alt="">
					</div>
					<div class="yun">
						<img src="<?php echo IMG_PATH;?>images/zh/pic_yun.png" alt="">
					</div>
					<div class="shan1">
						<img src="<?php echo IMG_PATH;?>images/zh/pic_shan.png" alt="">
					</div>
				</div>
				
			</div>
	
	<!-- 泥塑艺术结束 -->

	<!-- 剪纸艺术开始 -->
	<div class="nsys jzys">
		<div class="ns-box">
			<div class="top">
				<ul class="slide">
					<li class="item">
						<span class="text">剪纸收藏品</span>
					</li><li class="item">
						<span class="text">肖像剪纸</span>
					</li>
					<li class="item">
						<span class="text">多层剪纸</span>
					</li>
					<li class="item">
						<span class="text hot">传统剪纸</span>
					</li>
					
				</ul>
				<div class="topimg"></div>
			</div>
			<div class="bottom jzbottom">
				<ul class="lunbo jzlunbo">
					<div class="swiper-container swiper-container7 ban1">
						<div class="swiper-wrapper wrapper">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a128ff722fa96596970d575a0866d579&action=position&posid=10&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'10','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="javascript:;" class="slide">
									<div class="border">
										<img src="<?php echo $r['jianzhi'];?>" alt="">
									</div>
									
									<span class="t1">
										泥塑<span class="t2">传统剪纸   丰富和多样＃22cm</span>
									</span>
								</a>
								<?php $n++;}unset($n); ?>
								
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=47b4684a39447a8b35a647b25b7f85f9&action=position&posid=9&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'9','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="javascript:;" class="slide">
									<div class="border">
										<img src="<?php echo $r['jianzhi'];?>" alt="">
									</div>
									
									<span class="t1">
										泥塑<span class="t2">传统剪纸   丰富和多样＃22cm</span>
									</span>
								</a>
								<?php $n++;}unset($n); ?>
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</div>
						<ul class="swiper-pagination lis"></ul>
					</div>
				</ul>
				<ul class="lunbo jzlunbo">
					<div class="swiper-container swiper-container8 ban1">
						<div class="swiper-wrapper wrapper">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=acf00a0c3e91ac38919675755f2398b7&action=position&posid=17&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'17','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="javascript:;" class="slide">
									<div class="border">
										<img src="<?php echo $r['jianzhi'];?>" alt="">
									</div>
									
									<span class="t1">
										泥塑<span class="t2">传统剪纸   丰富和多样＃22cm</span>
									</span>
								</a>
								<?php $n++;}unset($n); ?>
								
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b53fa2bb091fcb90d84bc3f60841e975&action=position&posid=18&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="javascript:;" class="slide">
									<div class="border">
										<img src="<?php echo $r['jianzhi'];?>" alt="">
									</div>
									
									<span class="t1">
										泥塑<span class="t2">传统剪纸   丰富和多样＃22cm</span>
									</span>
								</a>
								<?php $n++;}unset($n); ?>
								
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</div>
						<ul class="swiper-pagination lis"></ul>
					</div>
				</ul>
				<ul class="lunbo jzlunbo">
					<div class="swiper-container swiper-container4 ban1">
						<div class="swiper-wrapper wrapper">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=323063a6ba4f256687bfafdb5ab76209&action=position&posid=19&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'19','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="<?php echo $r['url'];?>" class="slide">
									<div class="border">
										<img src="<?php echo $r['jianzhi'];?>" alt="">
									</div>
									
									<span class="t1">
										泥塑<span class="t2">传统剪纸   丰富和多样＃22cm</span>
									</span>
								</a>
								<?php $n++;}unset($n); ?>
								
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=497b0ba69cda4dd8201b3af857157e13&action=position&posid=20&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'20','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="<?php echo $r['url'];?>" class="slide">
									<div class="border">
										<img src="<?php echo $r['jianzhi'];?>" alt="">
									</div>
									
									<span class="t1">
										泥塑<span class="t2">传统剪纸   丰富和多样＃22cm</span>
									</span>
								</a>
								<?php $n++;}unset($n); ?>
								
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</div>
						<ul class="swiper-pagination lis"></ul>
					</div>
				</ul>
				<ul class="lunbo jzlunbo" style="opacity:1">
					<div class="swiper-container swiper-container5 ban1">
						<div class="swiper-wrapper wrapper">
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1d2fea69e8a08362d41532fcfae79619&action=position&posid=21&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'21','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="<?php echo $r['url'];?>" class="slide">
									<div class="border">
										<img src="<?php echo $r['jianzhi'];?>" alt="">
									</div>
									
									<span class="t1">
										泥塑<span class="t2">传统剪纸   丰富和多样＃22cm</span>
									</span>
								</a>
								<?php $n++;}unset($n); ?>
								
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
							<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c59b1e357362a88a2eeaf5c28be68db8&action=position&posid=22&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'22','order'=>'listorder ASC','limit'=>'4',));}?>
							<div class="swiper-slide">
								<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
								<a href="{#r[url]}" class="slide">
									<div class="border">
										<img src="<?php echo $r['jianzhi'];?>" alt="">
									</div>
									
									<span class="t1">
										泥塑<span class="t2">传统剪纸   丰富和多样＃22cm</span>
									</span>
								</a>
								<?php $n++;}unset($n); ?>
								
							</div>
							<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						</div>
						<ul class="swiper-pagination lis"></ul>
					</div>
				</ul>
				

			</div>
			
			
		</div>
	</div>

	<div class="shiqi">
		<div class="xsq">					
			<p>泥塑艺术具有强烈的视觉冲击效果，欣赏角度也极为的丰富和多样化，更能贴近于人们的生活高科技迅猛发展的今天，是人们追<br>求其返璞归真的具体写照，同时也是当今人们追求时尚、个性的一种体现</p>
			<a href="<?php echo $CATEGORYS['12']['url'];?>" class="chakan"></a>
		</div>
	</div>
	<!-- 剪纸艺术结束 -->

	<!-- 品牌介绍开始 -->
	<div class="ppjs">
		<div class="ppjs-box">
			<div class="pptitle">
				<img src="<?php echo IMG_PATH;?>images/zh/title_pin.png" alt="">
			</div>

			<div class="introduction">
				<div class="bjimg">
					<img src="<?php echo IMG_PATH;?>images/zh/menu_yang.png" alt="">
				</div>
				<div class="shan">
					<img src="<?php echo IMG_PATH;?>images/zh/pic_shan.png" alt="">
				</div>
				<div class="shan1">
					<img src="<?php echo IMG_PATH;?>images/zh/pic_shan.png" alt="">
				</div>
				<div class="contain">
					<h4 class="title">太原市艺鸿苑晋韵古今文化传播中心</h4>

					<p class="text">太原市艺鸿苑晋韵古今文化传播中心成立于2010年12月，位于开化寺古玩市场四层，是一家专业从事设计，生产及销售的企业，我们在充分挖掘了中华五千年悠久灿烂的民族文化的基础上，创作出了极具山西地域文化特色的各种泥塑，剪纸。其中泥塑有小亲疙瘩系列，乡村母亲系列，乡村父亲系列等，剪纸 有高档画轴系列，精美画册系列等，产品销往全国各地，并销海内外，深受客户好评。为弘扬山西厚重文化，传承中华民间艺术，开拓山西特色文化礼品做出自己的贡献。</p>

					<a href="<?php echo $CATEGORYS['18']['url'];?>" class="more">
						<img src="<?php echo IMG_PATH;?>images/zh/pic_you.png" alt="">
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- 品牌介绍结束 -->




	<!-- 晋韵文化 -->
    
        <div class="container-box">
            <!--标题-->
            <div class="title">
                <span><img src="<?php echo IMG_PATH;?>images/ml/title_jin.png" alt=""></span>
            </div>
            <!--标题结束-->
            <div class="line"></div>
            <!--内容-->
            <div class="con">
               <ul class="con-title">

                       <li><a href="<?php echo $CATEGORYS['90']['url'];?>"> <i>壹 <img src="<?php echo IMG_PATH;?>images/ml/menu_meishi.png" alt="" style=""></i></a>
                       <span><img src="<?php echo IMG_PATH;?>images/ml/title_lvyou.png" alt=""></span>
                       </li>
                       <li><a href="<?php echo $CATEGORYS['46']['url'];?>"><i>贰 <img src="<?php echo IMG_PATH;?>images/ml/menu_meishi.png" alt="" style=""></i></a>
                       <span><img src="<?php echo IMG_PATH;?>images/ml/title_renwen.png" alt=""></span>
                       </li>

                       <li><a href="<?php echo $CATEGORYS['47']['url'];?>"><i>叁 <img src="<?php echo IMG_PATH;?>images/ml/menu_meishi.png" alt="" style=""></i></a>
                       <span><img src="<?php echo IMG_PATH;?>images/ml/title_meishi.png" alt=""></span>

                       <li><a href="<?php echo $CATEGORYS['45']['url'];?>"><i>肆 <img src="<?php echo IMG_PATH;?>images/ml/menu_meishi.png" alt="" style=""></i></a>
                       <span><img src="<?php echo IMG_PATH;?>images/ml/title_mingsu.png" alt=""></span>
                       </li>

                       <li><a href="<?php echo $CATEGORYS['48']['url'];?>"><i>伍 <img src="<?php echo IMG_PATH;?>images/ml/menu_meishi.png" alt="" style=""></i></a>
                       <span><img src="<?php echo IMG_PATH;?>images/ml/title_shanxi.png" alt=""></span>
                       </li>
               </ul>
            </div>
            <!--内容结束-->
            <!--背景图片-->
            <div class="img-box">
                <img src="<?php echo IMG_PATH;?>images/ml/pic_wushan.png" alt="">
            </div>
        </div>
		<!-- 晋韵文化结束 -->

<!-- footer开始 -->
	<div class="footer">
		<div class="wrap">
			<div class="contact">
				<div class="title-contact"></div>
				<!-- 地址开始 -->
				<div class="address">
					<div class="ch"><i></i>山西省太原市迎泽区开化寺古玩市场东417</div>
					<div class="en">
						<p>417 East of Kaihua Temple Antique Market, Yingze District,</p>
						<p>Taiyuan City, Shanxi Province </p>
					</div>
				</div>
				<!-- 地址结束 -->
				<div class="tel">
					<i></i>+86 351 4035882
				</div>
				<div class="email">
					<i></i>shanxiyihomgyuan@.com
				</div>
			</div>
			<div class="kuaisu">
				<div class="title-tongdao"></div>
				<!-- 底部导航开始 -->
				<ul class="footernav">
					<li>
						<a href="<?php echo $CATEGORYS['18']['url'];?>">品牌介绍</a>
					</li>
					<li>
						<a href="<?php echo $CATEGORYS['45']['url'];?>">晋韵文化</a>
					</li>
					<li>
						<a href="<?php echo $CATEGORYS['37']['url'];?>">原生态泥塑</a>
					</li>
					<li>
						<a href="<?php echo $CATEGORYS['13']['url'];?>">园林雕塑</a>
					</li>
					<li>
						<a href="<?php echo $CATEGORYS['35']['url'];?>">旅游产品</a>
					</li>
					<li>
						<a href="<?php echo $CATEGORYS['12']['url'];?>">剪纸艺术</a>
					</li>
				</ul>
				<!-- 底部导航结束 -->
				<!-- 搜索开始 -->
				<div class="search">
					<div class="title-search"></div>
					<div class="search-input">
						<form action="">
							<input type="text">
						</form>
					</div>
				</div>
				<!-- 搜索结束 -->
			</div>
			<div class="erweima">
				<img src="<?php echo IMG_PATH;?>images/bzp/pic_erwei.png" alt="">
			</div>
		</div>
	</div>
<!-- footer结束 -->
</body>
</html>
<script src="<?php echo JS_PATH;?>js/jquery-3.1.1.min.js"></script>
<script src="<?php echo JS_PATH;?>js/bzp/bzp-index.js"></script>
<script src="<?php echo JS_PATH;?>js/zh/swiper.min.js"></script>
<script>

	var swiper= new Swiper(".swiper-container1",{
		pagination: ".swiper-pagination",
		paginationClickable: true,
		slidePerView:4,
		loop:false,
		autoplayDisableOnInteraction : false,
		speed:1000
	})
	console.log(swiper);
	var swiper2= new Swiper(".swiper-container2",{
		pagination: ".swiper-pagination",
		paginationClickable: true,
		slidePerView:4,
		loop:false,
		autoplayDisableOnInteraction : false,
		speed:1000
	})
	console.log(swiper2);
	var swiper3= new Swiper(".swiper-container3",{
		pagination: ".swiper-pagination",
		paginationClickable: true,
		slidePerView:4,
		loop:false,
		autoplayDisableOnInteraction : false,
		speed:1000
	})
	console.log(swiper3);
	var swiper4= new Swiper(".swiper-container4",{
		pagination: ".swiper-pagination",
		paginationClickable: true,
		slidePerView:4,
		loop:false,
		autoplayDisableOnInteraction : false,
		speed:1000
	})
	var swiper5= new Swiper(".swiper-container5",{
		pagination: ".swiper-pagination",
		paginationClickable: true,
		slidePerView:4,
		loop:false,
		autoplayDisableOnInteraction : false,
		speed:1000
	})
	var swiper4= new Swiper(".swiper-container7",{
		pagination: ".swiper-pagination",
		paginationClickable: true,
		slidePerView:4,
		loop:false,
		autoplayDisableOnInteraction : false,
		speed:1000
	})
	var swiper5= new Swiper(".swiper-container8",{
		pagination: ".swiper-pagination",
		paginationClickable: true,
		slidePerView:4,
		loop:false,
		autoplayDisableOnInteraction : false,
		speed:1000
	})
</script>
<script src="<?php echo JS_PATH;?>js/zh/index.js"></script>