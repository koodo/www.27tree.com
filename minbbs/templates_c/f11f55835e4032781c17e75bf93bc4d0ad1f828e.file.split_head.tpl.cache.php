<?php /* Smarty version Smarty-3.1.12, created on 2013-05-25 09:33:21
         compiled from "templates/index/split_head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18777686885169e61d7573a8-71981463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f11f55835e4032781c17e75bf93bc4d0ad1f828e' => 
    array (
      0 => 'templates/index/split_head.tpl',
      1 => 1369445280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18777686885169e61d7573a8-71981463',
  'function' => 
  array (
  ),
  'cache_lifetime' => 60,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51a01388601837_74556498',
  'variables' => 
  array (
    'TYPE' => 0,
    'PATH' => 0,
    'cache_id' => 0,
    'INDEX' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51a01388601837_74556498')) {function content_51a01388601837_74556498($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
 - 二叉树IT技术社区</title>
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/bbs.css?v=4-1" />
        <script type="text/javascript" src="/jss/jquery-min.js"></script>
        <script type="text/javascript" src="/jss/coref.js?v=4-1"></script>
        <script src="/jss/dojo/dojo.js"></script>
        <script charset="utf-8" src="/minbbs/bin_js/bbs-font.js"></script>
    </head>
    <body>
        <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['PATH']->value['nav_path'];?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ($_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0);?>

        <input id="cache_id" value="<?php echo $_smarty_tpl->tpl_vars['cache_id']->value;?>
" type="hidden" />
        <div class="sdCenter" style="margin-top:55px;">
            <div style="position:absolute;top:-41px;z-index:1;left:0;right:0;height:50px;">
                <a class="ps-tab-btn <?php if ($_smarty_tpl->tpl_vars['INDEX']->value==0){?>ps-tab-btn-cur<?php }?>" href="/minbbs/ques/">技术问答</a>
                <a class="ps-tab-btn <?php if ($_smarty_tpl->tpl_vars['INDEX']->value==1){?>ps-tab-btn-cur<?php }?>" href="/minbbs/tech/">技术分享</a>
            </div><?php }} ?>