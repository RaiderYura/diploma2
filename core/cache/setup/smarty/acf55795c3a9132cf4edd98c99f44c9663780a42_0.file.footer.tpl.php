<?php /* Smarty version 3.1.27, created on 2017-04-24 23:14:55
         compiled from "W:\domains\modx.local\setup\templates\footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:378758fe5cbf2772e3_38643024%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'acf55795c3a9132cf4edd98c99f44c9663780a42' => 
    array (
      0 => 'W:\\domains\\modx.local\\setup\\templates\\footer.tpl',
      1 => 1490679794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '378758fe5cbf2772e3_38643024',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58fe5cbf289139_72123370',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58fe5cbf289139_72123370')) {
function content_58fe5cbf289139_72123370 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once 'W:/domains/modx.local/core/model/smarty/plugins\\modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '378758fe5cbf2772e3_38643024';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>