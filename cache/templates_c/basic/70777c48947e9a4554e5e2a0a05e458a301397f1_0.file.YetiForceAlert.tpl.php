<?php
/* Smarty version 4.2.0, created on 2024-03-22 19:19:38
  from 'C:\Users\singh\Downloads\YetiForceCRM-6.4.0-complete\layouts\basic\modules\Users\Modals\YetiForceAlert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65fdd9ca697334_18040668',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70777c48947e9a4554e5e2a0a05e458a301397f1' => 
    array (
      0 => 'C:\\Users\\singh\\Downloads\\YetiForceCRM-6.4.0-complete\\layouts\\basic\\modules\\Users\\Modals\\YetiForceAlert.tpl',
      1 => 1711131823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fdd9ca697334_18040668 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Users-Modals-YetiForceAlert --><div class="modal-body pb-3"><?php if ($_smarty_tpl->tpl_vars['MODE']->value === 'registration') {?><div class="alert alert-danger"><span class="yfi yfi-yeti-register-alert color-red-600 u-fs-5x mr-4 float-left"></span><h3 class="alert-heading"><?php echo \App\Language::translate('LBL_SYSTEM_NOT_REGISTERED','Settings::Companies');?>
</h3></div><?php if (\App\Security\AdminAccess::isPermitted('Companies')) {?><a href="index.php?module=Companies&parent=Settings&view=List&displayModal=online" target="_blank" class="btn btn-success mr-1 float-right"><span class="adminIcon-company-detlis mr-2"></span><?php echo App\Language::translate('LBL_COMPANY_DATA','Settings:SystemWarnings');?>
</a><?php }
} else { ?><div class="alert alert-danger"><span class="yfi yfi-shop-alert text-warning u-fs-5x mr-4 float-left"></span><h3 class="alert-heading"><?php echo \App\Language::translateArgs('LBL_PAID_FN_NO_SUBSCRIPTION','Settings::Companies',$_smarty_tpl->tpl_vars['PRODUCTS']->value);?>
</h3></div><?php if (\App\Security\AdminAccess::isPermitted('YetiForce')) {?><a href="index.php?module=YetiForce&parent=Settings&view=Shop" target="_blank" class="btn btn-success mr-1 float-right"><span class="yfi yfi-shop mr-2"></span><?php echo App\Language::translate('LBL_YETIFORCE_SHOP');?>
</a><?php }
}?><div class="clearfix"></div><div class="mt-3"><div class="progress"><div class="progress-bar progress-bar-striped progress-bar-animated js-progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width: 100%;" data-js="container"><span class="sr-only"></span></div></div></div></div><!-- /tpl-Users-Modals-YetiForceAlert -->
<?php }
}
