<?php /* Smarty version 3.1.27, created on 2017-11-18 12:45:00
         compiled from "/home/posh00/posh.pro/www/super/templates/default/help.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8176107105a100f2c50df74_07128648%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e92c71601b290426cbd1fc96e426387e71ecaf46' => 
    array (
      0 => '/home/posh00/posh.pro/www/super/templates/default/help.tpl',
      1 => 1505311365,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8176107105a100f2c50df74_07128648',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5a100f2c519aa7_03498738',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a100f2c519aa7_03498738')) {
function content_5a100f2c519aa7_03498738 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8176107105a100f2c50df74_07128648';
?>
<div id="modx-page-help-content" class="container">
    <h2>[[%help_page_title]]</h2>

    <div id="helpBanner">
        <h3>[[%help_main_head]]</h3>
        <p>[[%help_main_subhead]]</p>
    </div>

    <div id="managerbuttons">
        <ul>
            <li>
                <a href="[[%forums_link]]" target="_blank" title="[[%forums_title]]">
                    <span class="icon"><i class="icon icon-comments icon-3x"></i></span>
                    <span class="headline">[[%forums]]</span>
                    <span class="subline">[[%forums_description]]</span>
                </a>
            </li>
            <li>
                <a href="[[%docs_link]]" target="_blank" title="[[%docs_title]]">
                    <span class="icon"><i class="icon icon-book icon-3x"></i></span>
                    <span class="headline">[[%docs]]</span>
                    <span class="subline">[[%docs_description]]</span>
                </a>
            </li>
            <li>
                <a href="[[%bugs_link]]" target="_blank" title="[[%bugs_title]]">
                    <span class="icon"><i class="icon icon-exclamation-circle icon-3x"></i></span>
                    <span class="headline">[[%bugs]]</span>
                    <span class="subline">[[%bugs_description]]</span>
                </a>
            </li>
            <li>
                <a href="[[%support_link]]" target="_blank" class="supportTicket" title="[[%support_title]]">
                    <span class="icon"><i class="icon icon-credit-card icon-3x"></i></span>
                    <span class="headline">[[%support]]</span>
                    <span class="subline">[[%support_description]]</span>
                </a>
            </li>
        </ul>
    </div>

    <div id="contactus">
        <h3>[[%email_sub]]</h3>
        <p>[[%email_sub_description]]</p>
        <form id="mcsignup" action="http://modxcms.list-manage.com/subscribe/post" method="post">
            <input type="hidden" name="u" value="08b25a8de68a29fe03a483720"/>
            <input type="hidden" name="id" value="848cf40420"/>
            <input type="hidden" name="MERGE7" value="[[++site_url]] Manager" id="MERGE7">

            <input type="email" placeholder="[[%email_placeholder]]" required id="MERGE0" name="MERGE0" value="" class="textbox"/>
            <input type="submit" class="x-btn primary-button" name="Submit" value="[[%email_sub_button]]"/>
        </form>

        <p>[[%social_follows]]</p>
        <p><a href="https://twitter.com/modx" target="_blank"><i class="icon icon-2x icon-twitter"></i>Twitter: twitter.com/modx</a></p>
        <p><a href="https://www.facebook.com/modxcms" target="_blank"><i class="icon icon-2x icon-facebook"></i>Facebook: www.facebook.com/modxcms</a></p>
        <p><a href="https://www.linkedin.com/groups/MODX-697477" target="_blank"><i class="icon icon-2x icon-linkedin"></i>LinkedIn: linkedin.com/groups/MODX-697477</a></p>
        <p><a href="http://www.pinterest.com/modx/" target="_blank"><i class="icon icon-2x icon-pinterest"></i>Pinterest: pinterest.com/modx </a></p>
        <p><a href="https://plus.google.com/+modx/" target="_blank"><i class="icon icon-2x icon-google-plus"></i>Google+: google.com/+modx </a></p>
    </div>

    <div id="aboutMODX">
        <p>[[%help_about]]</p>
        <p>[[%help_credit? &current_year=`<?php echo date('Y');?>
`]]</p>
    </div>
</div>
<?php }
}
?>