<?php
/* Smarty version 4.2.0, created on 2024-03-26 06:44:22
  from 'C:\Users\singh\Downloads\YetiForceCRM-6.4.0-complete\layouts\basic\modules\Vtiger\menu\Shortcut.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.0',
  'unifunc' => 'content_66026ec699c303_11024369',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '65158b03e3bbc4998d975e7c539cc36a54c98654' => 
    array (
      0 => 'C:\\Users\\singh\\Downloads\\YetiForceCRM-6.4.0-complete\\layouts\\basic\\modules\\Vtiger\\menu\\Shortcut.tpl',
      1 => 1711131842,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_66026ec699c303_11024369 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- tpl-Base-menu-Shortcut --><?php $_smarty_tpl->_assignInScope('ICON', Vtiger_Menu_Model::getMenuIcon($_smarty_tpl->tpl_vars['MENU']->value,$_smarty_tpl->tpl_vars['MENU']->value['name']));
if (((isset($_smarty_tpl->tpl_vars['MENU']->value['active'])) && $_smarty_tpl->tpl_vars['MENU']->value['active']) || $_smarty_tpl->tpl_vars['PARENT_MODULE']->value == $_smarty_tpl->tpl_vars['MENU']->value['id']) {
$_smarty_tpl->_assignInScope('ACTIVE', 'true');
} else {
$_smarty_tpl->_assignInScope('ACTIVE', 'false');
}?><li class="tpl-menu-Shortcut c-menu__item js-menu__item nav-item menuShortcut <?php if (!$_smarty_tpl->tpl_vars['HASCHILDS']->value) {?>hasParentMenu<?php }?>" data-id="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
" data-js="mouseenter mouseleave"><a class="nav-link <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == 'true') {?>active<?php } else { ?>collapsed<?php }
if ($_smarty_tpl->tpl_vars['ICON']->value) {?> hasIcon<?php }
if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?> js-submenu-toggler is-submenu-toggler<?php }
if ((isset($_smarty_tpl->tpl_vars['MENU']->value['hotkey']))) {?> hotKey<?php }
if ($_smarty_tpl->tpl_vars['PARENT_MODULE']->value) {?> js-menu__link--draggable<?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['MENU']->value['hotkey']))) {?> data-hotkeys="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['hotkey'];?>
" <?php }
if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?> data-toggle="collapse" data-target="#submenu-<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
" role="button" <?php }?>href="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MENU']->value['dataurl']);?>
" <?php if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?> aria-haspopup="true" aria-expanded="<?php echo $_smarty_tpl->tpl_vars['ACTIVE']->value;?>
" aria-controls="submenu-<?php echo $_smarty_tpl->tpl_vars['MENU']->value['id'];?>
" <?php }
if ($_smarty_tpl->tpl_vars['MENU']->value['newwindow'] == 1) {?>target="_blank" <?php }?> rel="noreferrer noopener" data-js="draggable"><?php echo $_smarty_tpl->tpl_vars['ICON']->value;?>
<span class="c-menu__item__text js-menu__item__text" title="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['name'];?>
" data-js="class: u-white-space-n"><?php echo $_smarty_tpl->tpl_vars['MENU']->value['name'];?>
</span><?php if ($_smarty_tpl->tpl_vars['HASCHILDS']->value == 'true') {?><span class="toggler" aria-hidden="true"><span class="fas fa-plus-circle"></span><span class="fas fa-minus-circle"></span></span><?php }
if ((isset($_smarty_tpl->tpl_vars['MENU']->value['addonIcon']))) {?><span <?php if ((isset($_smarty_tpl->tpl_vars['MENU']->value['addonIconTitle']))) {?>title="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['addonIconTitle'];?>
" <?php }?> class="<?php echo $_smarty_tpl->tpl_vars['MENU']->value['addonIcon'];?>
 ml-2"></span><?php }?></a><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('menu/SubMenu.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></li><!-- /tpl-Base-menu-Shortcut -->
<?php }
}
