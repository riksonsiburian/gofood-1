<?php /* Smarty version Smarty-3.1.12, created on 2012-11-07 12:00:58
         compiled from "/data/phpweb/themes/classic/user/login.tpl.php" */ ?>
<?php /*%%SmartyHeaderCode:2015121825098e33d5c1dc0-22083266%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8211a6ba60c2f9fd812463d7a6c79faacfad2dff' => 
    array (
      0 => '/data/phpweb/themes/classic/user/login.tpl.php',
      1 => 1352260855,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2015121825098e33d5c1dc0-22083266',
  'function' => 
  array (
  ),
  'cache_lifetime' => 3600,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5098e33d65b645_56255812',
  'variables' => 
  array (
    'title' => 0,
    'result' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5098e33d65b645_56255812')) {function content_5098e33d65b645_56255812($_smarty_tpl) {?>Smarty is applied successfully!!~~
<pre>
<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

<<?php ?>?php echo $title."ok";?<?php ?>>

<?php echo print_r($_smarty_tpl->tpl_vars['result']->value);?>

</pre>
<?php }} ?>