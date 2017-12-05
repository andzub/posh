<?php /* Smarty version 3.1.27, created on 2017-11-06 13:35:39
         compiled from "/home/posh00/posh.pro/www/super/templates/default/element/tv/renders/input/autotag.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9728506845a00490bef0542_08820089%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87d9f9801912f8a3161b23422fe1d417752f42d4' => 
    array (
      0 => '/home/posh00/posh.pro/www/super/templates/default/element/tv/renders/input/autotag.tpl',
      1 => 1505311503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9728506845a00490bef0542_08820089',
  'variables' => 
  array (
    'tv' => 0,
    'style' => 0,
    'params' => 0,
    'opts' => 0,
    'item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a00490bf35281_30520757',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a00490bf35281_30520757')) {
function content_5a00490bf35281_30520757 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9728506845a00490bef0542_08820089';
?>
<input id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"
	type="text" class="textfield"
	value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
"
	<?php echo $_smarty_tpl->tpl_vars['style']->value;?>

	tvtype="<?php echo $_smarty_tpl->tpl_vars['tv']->value->type;?>
"
/>
<div id="tv-tags-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
"></div>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    var fld<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
 = MODx.load({
    
        xtype: 'textfield'
        ,applyTo: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,width: 400
        ,id: 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,enableKeyEvents: true
        ,msgTarget: 'under'
        ,allowBlank: <?php if ($_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 1 || $_smarty_tpl->tpl_vars['params']->value['allowBlank'] == 'true') {?>true<?php } else { ?>false<?php }?>
    
        ,listeners: { 'keydown': { fn:MODx.fireResourceFormChange, scope:this}}
    });
    MODx.makeDroppable(fld<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
,function(v) {
        var tf = fld;
        if (tf) {
            var ov = tf.getValue();
            if (ov != '') {
                v = ','+v;
            }
        }
        return v;
    });
    Ext.getCmp('modx-panel-resource').getForm().add(fld<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
);
});

// ]]>
<?php echo '</script'; ?>
>

<ul class="modx-tag-list" id="tv-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-tag-list">
<?php
$_from = $_smarty_tpl->tpl_vars['opts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
    <li class="modx-tag-opt<?php if ($_smarty_tpl->tpl_vars['item']->value['checked']) {?> modx-tag-checked<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['value'];?>
</li>
<?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
</ul>

<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[

Ext.onReady(function() {
    Ext.select('#tv-<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-tag-list li',true).on('click',function(e,i) {
        var li = Ext.get(i);
        if (!li) { return; }
        var tf = Ext.getCmp('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
');
        var v = tf.getValue();
        if (li.hasClass('modx-tag-checked')) {
            tf.setValue(Ext.util.Format.trimCommas(v.replace(li.dom.title,'')));
            li.removeClass('modx-tag-checked');
        } else {
            v = v+(v != '' ? ',' : '');
            tf.setValue(Ext.util.Format.trimCommas(v+li.dom.title));
            li.addClass('modx-tag-checked');
        }
        MODx.fireResourceFormChange();
    });
    var p = Ext.getCmp('modx-panel-resource');
    if (p) {
        p.on('tv-reset',function(o) {
            if (o.id != '<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
') return;
            var df = Ext.get('tvdef'+o.id).dom.value;
            df = df.split(',');
            Ext.select('#tv-'+o.id+'-tag-list li',true).each(function(li,c,idx) {
                if (df.indexOf(li.dom.title) != -1) {
                    li.addClass('modx-tag-checked');
                } else {
                    li.removeClass('modx-tag-checked');
                }
            });
        });
    }
});

// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>