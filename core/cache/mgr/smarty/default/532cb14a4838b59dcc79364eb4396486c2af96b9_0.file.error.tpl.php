<?php /* Smarty version 3.1.27, created on 2017-11-02 16:59:57
         compiled from "/home/posh00/posh.pro/www/super/templates/default/error.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:170906133859fb32ed46f972_18921984%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '532cb14a4838b59dcc79364eb4396486c2af96b9' => 
    array (
      0 => '/home/posh00/posh.pro/www/super/templates/default/error.tpl',
      1 => 1505311364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170906133859fb32ed46f972_18921984',
  'variables' => 
  array (
    '_e' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59fb32ed47f534_57249594',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59fb32ed47f534_57249594')) {
function content_59fb32ed47f534_57249594 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '170906133859fb32ed46f972_18921984';
?>
<div class="modx_error">
    <h2><i class="icon icon-exclamation-triangle"></i> An error occurred...</h2>

    <div class="error_container<?php if (count($_smarty_tpl->tpl_vars['_e']->value['errors']) > 0) {?> multiple<?php }?>">
        <p><?php echo $_smarty_tpl->tpl_vars['_e']->value['message'];?>
</p>

        <?php if (count($_smarty_tpl->tpl_vars['_e']->value['errors']) > 0) {?>
        <p>&nbsp;</p>
        <p><strong>Errors:</strong></p>
        <ul>
        <?php
$_from = $_smarty_tpl->tpl_vars['_e']->value['errors'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['error'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['error']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
$foreach_error_Sav = $_smarty_tpl->tpl_vars['error'];
?>
            <li><i class="icon icon-angle-right"></i> <?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
        <?php
$_smarty_tpl->tpl_vars['error'] = $foreach_error_Sav;
}
?>
        </ul>
        <?php }?>
    </div>
</div><?php }
}
?>