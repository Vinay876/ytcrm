<?php
/* Smarty version 4.2.0, created on 2024-03-22 19:21:28
  from 'C:\Users\singh\Downloads\YetiForceCRM-6.4.0-complete\layouts\basic\modules\Vtiger\ListViewContentsBottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65fdda380b6545_20974112',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98ef67e6b70bf43d527c8e7593d843073682d328' => 
    array (
      0 => 'C:\\Users\\singh\\Downloads\\YetiForceCRM-6.4.0-complete\\layouts\\basic\\modules\\Vtiger\\ListViewContentsBottom.tpl',
      1 => 1711131829,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fdda380b6545_20974112 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-ListViewContentsBottom --><?php if ($_smarty_tpl->tpl_vars['LISTVIEW_ENTRIES_COUNT']->value == '0') {?><table class="emptyRecordsDiv"><tbody><tr><td><?php echo \App\Language::translate('LBL_RECORDS_NO_FOUND');?>
. <?php if ($_smarty_tpl->tpl_vars['IS_MODULE_EDITABLE']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRecordUrl();?>
"><?php echo \App\Language::translate('LBL_CREATE_SINGLE_RECORD');?>
</a><?php }?></td></tr></tbody></table><?php }?><!-- /tpl-Base-ListViewContentsBottom -->
<?php }
}
