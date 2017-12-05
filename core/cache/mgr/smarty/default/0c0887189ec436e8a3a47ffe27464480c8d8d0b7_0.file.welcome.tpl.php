<?php /* Smarty version 3.1.27, created on 2017-11-02 15:49:46
         compiled from "/home/posh00/posh.pro/www/super/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:72164761159fb227a29bf19_39436371%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0c0887189ec436e8a3a47ffe27464480c8d8d0b7' => 
    array (
      0 => '/home/posh00/posh.pro/www/super/templates/default/welcome.tpl',
      1 => 1505311365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72164761159fb227a29bf19_39436371',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fb227a29f714_17888650',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fb227a29f714_17888650')) {
function content_59fb227a29f714_17888650 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '72164761159fb227a29bf19_39436371';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>