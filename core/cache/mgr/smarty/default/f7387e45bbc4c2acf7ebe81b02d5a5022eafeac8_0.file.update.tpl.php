<?php /* Smarty version 3.1.27, created on 2017-11-06 15:16:03
         compiled from "/home/posh00/posh.pro/www/super/templates/default/element/plugin/update.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:4412286435a006093690070_55430773%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f7387e45bbc4c2acf7ebe81b02d5a5022eafeac8' => 
    array (
      0 => '/home/posh00/posh.pro/www/super/templates/default/element/plugin/update.tpl',
      1 => 1505311411,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4412286435a006093690070_55430773',
  'variables' => 
  array (
    'onPluginFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a006093692945_02428744',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a006093692945_02428744')) {
function content_5a006093692945_02428744 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '4412286435a006093690070_55430773';
?>
<div id="modx-panel-plugin-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onPluginFormPrerender']->value;

}
}
?>