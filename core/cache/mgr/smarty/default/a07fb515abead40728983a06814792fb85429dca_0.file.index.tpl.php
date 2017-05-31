<?php /* Smarty version 3.1.27, created on 2017-05-22 19:35:20
         compiled from "W:\domains\modx.local\manager\templates\default\workspaces\index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2855923134846a516_87179003%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a07fb515abead40728983a06814792fb85429dca' => 
    array (
      0 => 'W:\\domains\\modx.local\\manager\\templates\\default\\workspaces\\index.tpl',
      1 => 1490679786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2855923134846a516_87179003',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5923134847d448_69178235',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5923134847d448_69178235')) {
function content_5923134847d448_69178235 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2855923134846a516_87179003';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>