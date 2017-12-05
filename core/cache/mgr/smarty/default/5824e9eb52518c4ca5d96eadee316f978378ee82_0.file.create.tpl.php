<?php /* Smarty version 3.1.27, created on 2017-11-21 11:06:09
         compiled from "/home/posh00/posh.pro/www/super/templates/default/element/chunk/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10351509915a13ec8152ffb6_58354887%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5824e9eb52518c4ca5d96eadee316f978378ee82' => 
    array (
      0 => '/home/posh00/posh.pro/www/super/templates/default/element/chunk/create.tpl',
      1 => 1505311410,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10351509915a13ec8152ffb6_58354887',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a13ec81531cd5_37164609',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a13ec81531cd5_37164609')) {
function content_5a13ec81531cd5_37164609 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10351509915a13ec8152ffb6_58354887';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>