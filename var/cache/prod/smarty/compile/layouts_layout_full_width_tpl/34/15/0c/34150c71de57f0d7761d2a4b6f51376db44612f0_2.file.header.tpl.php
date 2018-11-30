<?php
/* Smarty version 3.1.33, created on 2018-11-29 13:49:35
  from 'C:\xampp\htdocs\prestashop\themes\classic\templates\_partials\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0042cf434187_80752726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '34150c71de57f0d7761d2a4b6f51376db44612f0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\themes\\classic\\templates\\_partials\\header.tpl',
      1 => 1543422324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0042cf434187_80752726 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6022113215c0042cf40fe64_79005726', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8703572395c0042cf415782_96404405', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9578366055c0042cf41c997_54039844', 'header_top');
?>

<?php }
/* {block 'header_banner'} */
class Block_6022113215c0042cf40fe64_79005726 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_6022113215c0042cf40fe64_79005726',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_8703572395c0042cf415782_96404405 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_8703572395c0042cf415782_96404405',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <nav class="header-nav">
    <div class="container">
      <div class="row">
        <div class="hidden-sm-down">
          <div class="col-md-5 col-xs-12">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

          </div>
          <div class="col-md-7 right-nav">
              <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

          </div>
        </div>
        <div class="hidden-md-up text-sm-center mobile">
          <div class="float-xs-left" id="menu-icon">
            <i class="material-icons d-inline">&#xE5D2;</i>
          </div>
          <div class="float-xs-right" id="_mobile_cart"></div>
          <div class="float-xs-right" id="_mobile_user_info"></div>
          <div class="top-logo" id="_mobile_logo"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </div>
  </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_9578366055c0042cf41c997_54039844 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_9578366055c0042cf41c997_54039844',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-top">
    <div class="container">
       <div class="row">
        <div class="col-xs-6 col-sm-6" id="_desktop_logo">
            <?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
            <div class="col-xs-5 col-sm-5 logos">
                <a href="http://www.gob.mx/" target="_blank">
                  <img class=" img-responsive" src="../themes/classic/assets/img/presidencia.png" alt="" height="70px">
                </a>
            </div>
            <div class="col-xs-3 col-sm-3 logos">
              <a href="http://educacionensalud.imss.gob.mx/" target="_blank">
                <img class=" img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="70px">
              </a>
            </div>
            <div class="col-xs-3 col-sm-3 logos">
              <a href="http://www.imss.gob.mx/" target="_blank">
                <img class=" img-responsive" src="../themes/classic/assets/img/imss.png" alt="" height="70px">
              </a>
            </div>
            <?php } else { ?>
            <div class="col-xs-5 col-sm-5 logos">
                <a href="http://www.gob.mx/" target="_blank">
                  <img class=" img-responsive" src="../themes/classic/assets/img/presidencia.png" alt="" height="70px">
                </a>
            </div>
            <div class="col-xs-3 col-sm-3 logos">
              <a href="http://educacionensalud.imss.gob.mx/" target="_blank">
                <img class=" img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
" height="70px">
              </a>
            </div>
            <div class="col-xs-3 col-sm-3 logos">
              <a href="http://www.imss.gob.mx/" target="_blank">
                <img class=" img-responsive" src="../themes/classic/assets/img/imss.png" alt="" height="70px">
              </a>
            </div>
            <?php }?>
        </div>
        <section id="btn-divisiones" class="col-xs-6 col-sm-6"><br>
          <div class="region region-head-button">
            <section id="block-block-3" class="block block-block clearfix">
              <div class="col-xs-12 col-sm-4 col-md-4 main-CESbuttons">
                <div class="btn-pad botonPE">
                  <a class="main-button" href="http://educacionensalud.imss.gob.mx/programas-educativos/acerca" target="_blank" style="color: #ffffff;">PROGRAMAS EDUCATIVOS</a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 main-CESbuttons">
                <div class="btn-pad botonEC">
                  <a class="main-button" href="http://educacionensalud.imss.gob.mx/educacion-continua/acerca" target="_blank" style="color: #ffffff;">EDUCACIÓN CONTINUA</a>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 main-CESbuttons">
                <div class="btn-pad botonIE">
                  <a class="main-button" href="http://educacionensalud.imss.gob.mx/innovacion-educativa/acerca" target="_blank" style="color: #ffffff;">INNOVACIÓN EDUCATIVA</a>
                </div>
              </div>
            </section>
          </div>
        </section>
      </div>
      <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
        <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
        <div class="js-top-menu-bottom">
          <div id="_mobile_currency_selector"></div>
          <div id="_mobile_language_selector"></div>
          <div id="_mobile_contact_link"></div>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 position-static menu-ces">
      <div class="container-fluid">
      <div class="container">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

        <!-- <div class="clearfix"></div> -->
      </div>
      </div>
    </div>
  </div>
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'header_top'} */
}
