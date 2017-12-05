<?php /* Smarty version 3.1.27, created on 2017-11-07 17:06:59
         compiled from "/home/posh00/posh.pro/www/super/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12425996385a01cc13180ee3_62079228%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '218f0dbc7500e3be495ad30a17fd0a87a18be219' => 
    array (
      0 => '/home/posh00/posh.pro/www/super/templates/default/workspaces/index.tpl',
      1 => 1505311381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12425996385a01cc13180ee3_62079228',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a01cc1318b159_73870346',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a01cc1318b159_73870346')) {
function content_5a01cc1318b159_73870346 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12425996385a01cc13180ee3_62079228';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>