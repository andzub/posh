<?php /* Smarty version 3.1.27, created on 2017-11-14 22:36:32
         compiled from "/home/posh00/posh.pro/www/core/components/migx/elements/tv/tinymce.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20733542695a0b53d0bc29a3_90350245%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0952a96bea6ea1691a9745673db95a3a1c6e46bd' => 
    array (
      0 => '/home/posh00/posh.pro/www/core/components/migx/elements/tv/tinymce.tpl',
      1 => 1505310851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20733542695a0b53d0bc29a3_90350245',
  'variables' => 
  array (
    'tv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a0b53d0c208e8_71280822',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a0b53d0c208e8_71280822')) {
function content_5a0b53d0c208e8_71280822 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20733542695a0b53d0bc29a3_90350245';
?>
<textarea id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" class="rtf-tinymcetv tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" onchange="MODx.fireResourceFormChange();"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->get('value'), ENT_QUOTES, 'UTF-8', true);?>
</textarea>

<?php echo '<script'; ?>
 type="text/javascript">

Ext.onReady(function() {
    
    MODx.makeDroppable(Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    var tvid = 'tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
';
    
    var field = (Ext.get('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'));
    
    field.onLoad = function(){
        //console.log('we load');
        if (typeof(Tiny) != 'undefined') {
		    var s={};
            if (Tiny.config){
                s = Tiny.config || {};
                delete s.assets_path;
                delete s.assets_url;
                delete s.core_path;
                delete s.css_path;
                delete s.editor;
                delete s.id;
                delete s.mode;
                delete s.path;
                s.cleanup_callback = "Tiny.onCleanup";
                var z = Ext.state.Manager.get(MODx.siteId + '-tiny');
                if (z !== false) {
                    delete s.elements;
                }			
		    }
			//s.mode = "specific_textareas";
            //s.editor_selector = "modx-richtext";
            			
            s.mode = "exact";
            s.elements = "tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
";              
 		    //s.language = "en";// de seems not to work at the moment
            tinyMCE.init(s);
            
		}
    };
        
    field.onHide = function(){
        //console.log('we hide');
        if (typeof(tinyMCE) != 'undefined') {
            var tinyinstance = tinyMCE.getInstanceById('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
');
            if (typeof(tinyinstance) != 'undefined') {
                tinyinstance.remove();
            }
        }     
    };
        
    field.onBeforeSubmit = function(){
        //console.log('we submit');
        if (typeof(tinyMCE) != 'undefined') {
            tinyMCE.getInstanceById('tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
').save(); 
        }       
    };        


});

<?php echo '</script'; ?>
>
<?php }
}
?>