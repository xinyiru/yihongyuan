<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=a7adc3d47c1f63062d0824ead64b5066&sql=SELECT+%2A+FROM+v9_page+where+catid%3D15\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("SELECT * FROM v9_page where catid=15 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>

<?php $n=1; if(is_array($data)) foreach($data AS $key => $val) { ?>

<?php echo $val['content'];?>

<?php $n++;}unset($n); ?>

<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
<?php include template("content","footer"); ?>