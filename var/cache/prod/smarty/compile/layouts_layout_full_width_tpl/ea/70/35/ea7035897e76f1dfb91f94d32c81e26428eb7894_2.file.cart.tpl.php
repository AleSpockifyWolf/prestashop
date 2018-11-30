<?php
/* Smarty version 3.1.33, created on 2018-11-29 13:42:52
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\checkout\cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c00413c8e3985_76958269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea7035897e76f1dfb91f94d32c81e26428eb7894' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\checkout\\cart.tpl',
      1 => 1542830309,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-detailed.tpl' => 1,
    'file:checkout/_partials/cart-detailed-totals.tpl' => 1,
    'file:checkout/_partials/cart-detailed-actions.tpl' => 1,
  ),
),false)) {
function content_5c00413c8e3985_76958269 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6818221365c00413c887fb2_26224366', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'cart_overview'} */
class Block_20497874675c00413c894a19_64245622 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
          <?php
}
}
/* {/block 'cart_overview'} */
/* {block 'continue_shopping'} */
class Block_4581470745c00413c8aabf8_98136922 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <a class="label" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
            <i class="material-icons">chevron_left</i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Continue shopping','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </a>
        <?php
}
}
/* {/block 'continue_shopping'} */
/* {block 'hook_shopping_cart_footer'} */
class Block_9959519325c00413c8be009_88759407 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCartFooter'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_shopping_cart_footer'} */
/* {block 'hook_shopping_cart'} */
class Block_15692676115c00413c8c7c59_92502262 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayShoppingCart'),$_smarty_tpl ) );?>

            <?php
}
}
/* {/block 'hook_shopping_cart'} */
/* {block 'cart_totals'} */
class Block_19337754635c00413c8cdb88_25054542 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-totals.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_totals'} */
/* {block 'cart_actions'} */
class Block_742117605c00413c8d38d8_60311173 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

              <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-detailed-actions.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
            <?php
}
}
/* {/block 'cart_actions'} */
/* {block 'cart_summary'} */
class Block_19630072715c00413c8c5757_97720566 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <div class="card cart-summary">

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15692676115c00413c8c7c59_92502262', 'hook_shopping_cart', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19337754635c00413c8cdb88_25054542', 'cart_totals', $this->tplIndex);
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_742117605c00413c8d38d8_60311173', 'cart_actions', $this->tplIndex);
?>


          </div>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'hook_reassurance'} */
class Block_16420788925c00413c8db188_46342715 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'hook_reassurance'} */
/* {block 'content'} */
class Block_6818221365c00413c887fb2_26224366 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_6818221365c00413c887fb2_26224366',
  ),
  'cart_overview' => 
  array (
    0 => 'Block_20497874675c00413c894a19_64245622',
  ),
  'continue_shopping' => 
  array (
    0 => 'Block_4581470745c00413c8aabf8_98136922',
  ),
  'hook_shopping_cart_footer' => 
  array (
    0 => 'Block_9959519325c00413c8be009_88759407',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_19630072715c00413c8c5757_97720566',
  ),
  'hook_shopping_cart' => 
  array (
    0 => 'Block_15692676115c00413c8c7c59_92502262',
  ),
  'cart_totals' => 
  array (
    0 => 'Block_19337754635c00413c8cdb88_25054542',
  ),
  'cart_actions' => 
  array (
    0 => 'Block_742117605c00413c8d38d8_60311173',
  ),
  'hook_reassurance' => 
  array (
    0 => 'Block_16420788925c00413c8db188_46342715',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">
    <div class="cart-grid row">

      <!-- Left Block: cart product informations & shpping -->
      <div class="cart-grid-body col-xs-12 col-lg-8">

        <!-- cart products detailed -->
        <div class="card cart-container">
          <div class="card-block">
            <h1 class="h1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shopping Cart','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h1>
          </div>
          <hr class="separator">
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20497874675c00413c894a19_64245622', 'cart_overview', $this->tplIndex);
?>

        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4581470745c00413c8aabf8_98136922', 'continue_shopping', $this->tplIndex);
?>


        <!-- shipping informations -->
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9959519325c00413c8be009_88759407', 'hook_shopping_cart_footer', $this->tplIndex);
?>

      </div>

      <!-- Right Block: cart subtotal & cart total -->
      <div class="cart-grid-right col-xs-12 col-lg-4">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19630072715c00413c8c5757_97720566', 'cart_summary', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16420788925c00413c8db188_46342715', 'hook_reassurance', $this->tplIndex);
?>


      </div>

    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
}
