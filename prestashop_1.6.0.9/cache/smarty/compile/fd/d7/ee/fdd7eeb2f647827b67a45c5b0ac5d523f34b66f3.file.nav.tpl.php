<?php /* Smarty version Smarty-3.1.19, created on 2014-11-23 06:29:39
         compiled from "/Users/skelo/Desktop/local/kokoromoda/prestashop_1.6.0.9/admin/themes/default/template/nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:571957643547170c364db08-78451641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdd7eeb2f647827b67a45c5b0ac5d523f34b66f3' => 
    array (
      0 => '/Users/skelo/Desktop/local/kokoromoda/prestashop_1.6.0.9/admin/themes/default/template/nav.tpl',
      1 => 1406839256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '571957643547170c364db08-78451641',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'employee' => 0,
    'tab' => 0,
    'tabs' => 0,
    't' => 0,
    't2' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547170c378af24_53760172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547170c378af24_53760172')) {function content_547170c378af24_53760172($_smarty_tpl) {?><div class="bootstrap">
	<nav id="<?php if ($_smarty_tpl->tpl_vars['employee']->value->bo_menu) {?>nav-sidebar<?php } else { ?>nav-topbar<?php }?>" role="navigation">
		<?php if (!$_smarty_tpl->tpl_vars['tab']->value) {?>
			<div class="mainsubtablist" style="display:none;"></div>
		<?php }?>
		<ul class="menu">
			<li class="searchtab">
				<?php echo $_smarty_tpl->getSubTemplate ("search_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('id'=>"header_search",'show_clear_btn'=>1), 0);?>

			</li>

			

			<?php  $_smarty_tpl->tpl_vars['t'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tabs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t']->key => $_smarty_tpl->tpl_vars['t']->value) {
$_smarty_tpl->tpl_vars['t']->_loop = true;
?>
				<?php if ($_smarty_tpl->tpl_vars['t']->value['active']) {?>
				<li class="maintab <?php if ($_smarty_tpl->tpl_vars['t']->value['current']) {?>active<?php }?> <?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])) {?>has_submenu<?php }?>" id="maintab-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
" data-submenu="<?php echo $_smarty_tpl->tpl_vars['t']->value['id_tab'];?>
">
					<a href="<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])&&isset($_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'])) {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['sub_tabs'][0]['href'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" class="title" >
						<i class="icon-<?php echo $_smarty_tpl->tpl_vars['t']->value['class_name'];?>
"></i>
						<span><?php if ($_smarty_tpl->tpl_vars['t']->value['name']=='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['class_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?></span>
					</a>
					<?php if (count($_smarty_tpl->tpl_vars['t']->value['sub_tabs'])) {?>
						<ul class="submenu">
						<?php  $_smarty_tpl->tpl_vars['t2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['t2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['t']->value['sub_tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['t2']->key => $_smarty_tpl->tpl_vars['t2']->value) {
$_smarty_tpl->tpl_vars['t2']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['t2']->value['active']) {?>
							<li id="subtab-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['class_name'], ENT_QUOTES, 'UTF-8', true);?>
" <?php if ($_smarty_tpl->tpl_vars['t2']->value['current']) {?> class="active"<?php }?>>
								<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['href'], ENT_QUOTES, 'UTF-8', true);?>
">
									<?php if ($_smarty_tpl->tpl_vars['t2']->value['name']=='') {?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['class_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php } else { ?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['t2']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>
								</a>
							</li>
							<?php }?>
						<?php } ?>
						</ul>
					<?php }?>
				</li>
				<?php }?>
			<?php } ?>
		</ul>
		<span class="menu-collapse">
			<i class="icon-align-justify"></i>
		</span>
	</nav>
</div><?php }} ?>
