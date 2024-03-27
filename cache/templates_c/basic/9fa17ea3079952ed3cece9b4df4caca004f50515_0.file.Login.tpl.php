<?php
/* Smarty version 4.2.0, created on 2024-03-24 16:06:03
  from 'C:\Users\singh\Downloads\YetiForceCRM-6.4.0-complete\layouts\basic\modules\Users\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66004f6b35b104_65407766',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fa17ea3079952ed3cece9b4df4caca004f50515' => 
    array (
      0 => 'C:\\Users\\singh\\Downloads\\YetiForceCRM-6.4.0-complete\\layouts\\basic\\modules\\Users\\Login.tpl',
      1 => 1711131821,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66004f6b35b104_65407766 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('_DefaultLoginTemplate', \App\Layout::getTemplatePath('Login.Default.tpl','Users'));
$_smarty_tpl->_assignInScope('_CustomLoginTemplate', \App\Layout::getTemplatePath('Login.Custom.tpl','Users'));
$_smarty_tpl->_assignInScope('_CustomLoginTemplateFullPath', "layouts/basic/".((string)$_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value));?>

<?php if (file_exists($_smarty_tpl->tpl_vars['_CustomLoginTemplateFullPath']->value)) {?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_CustomLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
	<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['_DefaultLoginTemplate']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
