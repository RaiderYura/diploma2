<?php /* Smarty version 3.1.27, created on 2017-05-22 19:35:53
         compiled from "W:\domains\modx.local\manager\templates\default\welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32363592313693ce8e9_20066224%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc22e94f9cb3e0912ece72d186a832d2910e1893' => 
    array (
      0 => 'W:\\domains\\modx.local\\manager\\templates\\default\\welcome.tpl',
      1 => 1490679786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32363592313693ce8e9_20066224',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_592313693dc6a3_91097808',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_592313693dc6a3_91097808')) {
function content_592313693dc6a3_91097808 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32363592313693ce8e9_20066224';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>