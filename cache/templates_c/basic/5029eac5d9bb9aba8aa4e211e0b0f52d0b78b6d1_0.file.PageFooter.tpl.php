<?php
/* Smarty version 4.2.0, created on 2024-03-22 19:19:27
  from 'C:\Users\singh\Downloads\YetiForceCRM-6.4.0-complete\layouts\basic\modules\Vtiger\PageFooter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65fdd9bfe7d731_21168521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5029eac5d9bb9aba8aa4e211e0b0f52d0b78b6d1' => 
    array (
      0 => 'C:\\Users\\singh\\Downloads\\YetiForceCRM-6.4.0-complete\\layouts\\basic\\modules\\Vtiger\\PageFooter.tpl',
      1 => 1711131825,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fdd9bfe7d731_21168521 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-PageFooter --></div><input type="hidden" id="processEvents" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode(App\Process::getEvents()));?>
" /><?php if ($_smarty_tpl->tpl_vars['SHOW_FOOTER']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Footer.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('JSResources.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
if (\App\Debuger::isDebugBar()) {
echo \App\Debuger::getDebugBar()->getJavascriptRenderer()->render();
}?></body></html><!-- /tpl-Base-PageFooter -->
<?php }
}
