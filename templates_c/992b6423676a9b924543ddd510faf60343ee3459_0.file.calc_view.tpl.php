<?php
/* Smarty version 4.0.0, created on 2022-01-06 23:01:34
  from 'C:\xampp\htdocs\LAB8\app\views\calc_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_61d766bec4a474_17766723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '992b6423676a9b924543ddd510faf60343ee3459' => 
    array (
      0 => 'C:\\xampp\\htdocs\\LAB8\\app\\views\\calc_view.tpl',
      1 => 1641506430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61d766bec4a474_17766723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_130962799661d766bec2b764_29651060', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27343961061d766bec2cfb4_64676420', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'footer'} */
class Block_130962799661d766bec2b764_29651060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_130962799661d766bec2b764_29651060',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_27343961061d766bec2cfb4_64676420 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_27343961061d766bec2cfb4_64676420',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3 class="content-head is-center">Kalkulator Kredytowy</h3>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
	<fieldset>
	<label for="id_x">Kwota: </label>
	<input id="id_x" type="text" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
" /><br />
	<label for="id_y">Oprocentowanie: </label>
	<input id="id_y" type="text" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
" /><br />
        <label for="id_z">Ilosc rat: </label>
	<input id="id_z" type="text" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->z;?>
" /><br />
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>
</div>
    
<div class="l-box-lrg pure-u-1 pure-u-med-3-5">

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
$_smarty_tpl->tpl_vars['err']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
$_smarty_tpl->tpl_vars['err']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
$_smarty_tpl->tpl_vars['inf']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
$_smarty_tpl->tpl_vars['inf']->do_else = false;
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</ol>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['res']->value->result))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>
</div>

<?php
}
}
/* {/block 'content'} */
}
