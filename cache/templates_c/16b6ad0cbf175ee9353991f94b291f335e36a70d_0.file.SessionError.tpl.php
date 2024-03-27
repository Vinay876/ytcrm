<?php
/* Smarty version 4.2.0, created on 2024-03-22 19:13:09
  from 'C:\Users\singh\Downloads\YetiForceCRM-6.4.0-complete\install\tpl\SessionError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_65fdd845ec4583_86062428',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16b6ad0cbf175ee9353991f94b291f335e36a70d' => 
    array (
      0 => 'C:\\Users\\singh\\Downloads\\YetiForceCRM-6.4.0-complete\\install\\tpl\\SessionError.tpl',
      1 => 1711131904,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65fdd845ec4583_86062428 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-install-tpl-SessionError --><div class="container px-2 px-sm-3"><main class="main-container"><div class="inner-container"><form name="step<?php echo $_smarty_tpl->tpl_vars['STEP_NUMBER']->value;?>
" method="post" action="Install.php"><div class="row"><div class="col-12 text-center"><h2><?php echo \App\Language::translate('LBL_ERROR_INSTALL','Install');?>
</h2></div></div><hr><div class="row"><div class="col-12"><h5><?php echo \App\Language::translate('LBL_SESSION_ERROR_TITLE','Install');?>
</h5><p><?php echo \App\Language::translate('LBL_SESSION_ERROR_DESC','Install');?>
</p></div></div></form></div></main></div>
<?php }
}
