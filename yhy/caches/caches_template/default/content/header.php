<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="renderer" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge"/>
    <title>首页</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/base/normalize.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>css/zh/swiper.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/ns-art.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>css/wjz.css">
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>css/DB_tab29.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/zh/index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/bzp/bzp-index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/ml/index.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>css/brand.css">
</head>
<body>
<!-- header开始 -->
    <div class="header">
        <div class="nav">
        <!-- logo开始 -->
        	<div class="logo">
        		<a href="<?php echo siteurl($siteid);?>">
        			<img src="<?php echo IMG_PATH;?>images/bzp/logo.png" alt="">
        		</a>
        	</div>
        <!-- logo结束 -->
        <!-- 导航开始 -->
        <div class="mainnav">
        	<ul class="navcon">
        		<li>
        			<a href="<?php echo siteurl($siteid);?>">首页</a>
        		</li>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b43f1459ac702900c8d44c91a5e796dd&action=category&catid=0&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                 <?php if($r[catid]==9||$r[catid]==10||$r[catid]==14) { ?>
        			<a href="javascript:;"><?php echo $r['catname'];?></a>
                    <?php } else { ?>
                    <a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a>
                <?php } ?>
        			<ul class="hiddenlist">
                     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2c5796102fc450f9052b61ce2eb23536&action=category&catid=%24r%5Bcatid%5D&num=25&siteid=%24siteid&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$r[catid],'siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                        <?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
        				<li>
        					<i></i>
        					<a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a>
        				</li>
                        <?php $n++;}unset($n); ?>
        				<!-- <li>
        					<i></i>
        					<a href="">最新动态</a>
        				</li> -->
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        			</ul>
        		</li>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        		<!-- <li>
        			<a href="">晋韵文化</a>
        			<ul class="hiddenlist">
        				<li>
        					<i></i>
        					<a href="">企业简介</a>
        				</li>
        				<li>
        					<i></i>
        					<a href="">最新动态</a>
        				</li>
        			</ul>
        		</li>
        		<li>
        			<a href="">泥塑艺术</a>
        			<ul class="hiddenlist">
        				<li>
        					<i></i>
        					<a href="">企业简介</a>
        				</li>
        				<li>
        					<i></i>
        					<a href="">最新动态</a>
        				</li>
        			</ul>
        		</li>
        		<li>
        			<a href="">剪纸艺术</a>
        			<ul class="hiddenlist">
        				<li>
        					<i></i>
        					<a href="">企业简介</a>
        				</li>
        				<li>
        					<i></i>
        					<a href="">最新动态</a>
        				</li>
        			</ul>
        		</li>
        		<li>
        			<a href="">园林雕塑</a>
        			<ul class="hiddenlist">
        				<li>
        					<i></i>
        					<a href="">企业简介</a>
        				</li>
        				<li>
        					<i></i>
        					<a href="">最新动态</a>
        				</li>
        			</ul>
        		</li>
        		<li>
        			<a href="">旅游产品</a>
        			<ul class="hiddenlist">
        				<li>
        					<i></i>
        					<a href="">企业简介</a>
        				</li>
        				<li>
        					<i></i>
        					<a href="">最新动态</a>
        				</li>
        			</ul>
        		</li>
        		<li>
        			<a href="">联系我们</a>
        			<ul class="hiddenlist">
        				<li>
        					<i></i>
        					<a href="">企业简介</a>
        				</li>
        				<li>
        					<i></i>
        					<a href="">最新动态</a>
        				</li>
        			</ul>
        		</li> -->
        	</ul>
        </div>
        <!-- 导航结束 -->
        </div>
    </div>
<!-- header结束 -->

<!-- banner开始 -->
	<div class="banner">
		<a href="" style="background: url(<?php echo IMG_PATH;?>images/bzp/banner.png) no-repeat center center/cover;"></a>
	</div>
<!-- banner结束 -->