<?php
/* Smarty version 3.1.33, created on 2020-04-29 22:54:56
  from 'C:\xampp2\htdocs\tienda\admin_pagofe\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eaa4c1033f6f0_49487165',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '395b7c4f2ffd93aaab071908492090a8daa6fe9a' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tienda\\admin_pagofe\\themes\\default\\template\\content.tpl',
      1 => 1588216579,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaa4c1033f6f0_49487165 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
