<?php
/* Smarty version 4.2.0, created on 2024-03-22 19:19:15
  from 'C:\Users\singh\Downloads\YetiForceCRM-6.4.0-complete\install\tpl\InstallPostProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65fdd9b392a2b7_02746760',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b202869e19ad63e44bde819cc16579d3e6dbe4e0' => 
    array (
      0 => 'C:\\Users\\singh\\Downloads\\YetiForceCRM-6.4.0-complete\\install\\tpl\\InstallPostProcess.tpl',
      1 => 1711131904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:JSResources.tpl' => 1,
  ),
),false)) {
function content_65fdd9b392a2b7_02746760 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-install-tpl-InstallPostProcess --><br><footer class="noprint text-center fixed-bottom c-footer"><p class="text-center text-center <?php if (App\Config::module('Users','IS_VISIBLE_USER_INFO_FOOTER')) {?>u-p-05per<?php }?>"><span class="d-none d-sm-inline ">Copyright &copy; YetiForce.com All rights reserved.<br /><?php echo \App\Language::translateArgs('LBL_FOOTER_CONTENT','Vtiger','open source project');?>
</span><span class="d-inline d-sm-none text-center">&copy; YetiForce.com All rights reserved.</span></p></footer><?php $_smarty_tpl->_subTemplateRender('file:JSResources.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div></body></html><!-- /tpl-install-tpl-InstallPostProcess -->
<?php }
}
