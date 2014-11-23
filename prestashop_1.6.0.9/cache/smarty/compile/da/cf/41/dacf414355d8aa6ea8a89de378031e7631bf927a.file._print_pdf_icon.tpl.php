<?php /* Smarty version Smarty-3.1.19, created on 2014-11-23 06:29:31
         compiled from "/Users/skelo/Desktop/local/kokoromoda/prestashop_1.6.0.9/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:463733382547170bbc89db1-49983537%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dacf414355d8aa6ea8a89de378031e7631bf927a' => 
    array (
      0 => '/Users/skelo/Desktop/local/kokoromoda/prestashop_1.6.0.9/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1406839256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '463733382547170bbc89db1-49983537',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_547170bbcaba30_98648892',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_547170bbcaba30_98648892')) {function content_547170bbcaba30_98648892($_smarty_tpl) {?>



<a class="btn btn-default" target="_blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo intval($_smarty_tpl->tpl_vars['order_slip']->value->id);?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>
