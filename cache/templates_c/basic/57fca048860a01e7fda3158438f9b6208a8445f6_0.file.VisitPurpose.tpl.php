<?php
/* Smarty version 4.2.0, created on 2024-03-22 19:19:47
  from 'C:\Users\singh\Downloads\YetiForceCRM-6.4.0-complete\layouts\basic\modules\Users\VisitPurpose.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65fdd9d3ba0f71_76435817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '57fca048860a01e7fda3158438f9b6208a8445f6' => 
    array (
      0 => 'C:\\Users\\singh\\Downloads\\YetiForceCRM-6.4.0-complete\\layouts\\basic\\modules\\Users\\VisitPurpose.tpl',
      1 => 1711131822,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fdd9d3ba0f71_76435817 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-VisitPurpose --><form name="VisitPurpose" class="form-horizontal validateForm"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
" /><input type="hidden" name="action" value="VisitPurpose" /><div class="modal-body"><div class="row"><div class="col-md-12"><textarea id="visitPurpose" maxlength="501" class="" name="visitPurpose" data-validation-engine="validate[required,maxSize[500]]"></textarea></div></div><?php if (!$_smarty_tpl->tpl_vars['CURRENT_USER']->value->isSuperUser()) {?><div class="alert alert-primary" role="alert"><span class="mdi mdi-information-outline u-fs-4x mr-2 float-left"></span><?php echo \App\Language::translate("LBL_VISIT_PURPOSE_ALERT");?>
</div><?php }?></div></form><!-- /tpl-Users-VisitPurpose -->
<?php }
}
