<?php /* Smarty version 3.1.27, created on 2017-11-03 13:28:57
         compiled from "/home/posh00/posh.pro/www/super/templates/default/element/tv/renders/input/richtext.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:136747477059fc52f9c711a1_61011494%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c573dfa600099c1a3c78267f9056eb40a257672b' => 
    array (
      0 => '/home/posh00/posh.pro/www/super/templates/default/element/tv/renders/input/richtext.tpl',
      1 => 1505311504,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136747477059fc52f9c711a1_61011494',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fc52f9cc0760_83513159',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fc52f9cc0760_83513159')) {
function content_59fc52f9cc0760_83513159 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '136747477059fc52f9c711a1_61011494';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="modx-richtext" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
});
<?php echo '</script'; ?>
><?php }
}
?>