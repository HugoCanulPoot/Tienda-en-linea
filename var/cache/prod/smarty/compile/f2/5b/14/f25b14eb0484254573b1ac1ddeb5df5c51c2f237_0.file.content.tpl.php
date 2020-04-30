<?php
/* Smarty version 3.1.33, created on 2020-04-29 22:52:44
  from 'C:\xampp2\htdocs\tienda\admin_pagofe\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5eaa4b8c4488e9_33279032',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f25b14eb0484254573b1ac1ddeb5df5c51c2f237' => 
    array (
      0 => 'C:\\xampp2\\htdocs\\tienda\\admin_pagofe\\themes\\new-theme\\template\\content.tpl',
      1 => 1588216580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5eaa4b8c4488e9_33279032 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>


<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
