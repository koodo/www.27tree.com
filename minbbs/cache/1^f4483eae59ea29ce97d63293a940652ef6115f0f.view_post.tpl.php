<?php /*%%SmartyHeaderCode:15708850551a0142387f8e8-44183512%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4483eae59ea29ce97d63293a940652ef6115f0f' => 
    array (
      0 => './templates/view_post.tpl',
      1 => 1366293583,
      2 => 'file',
    ),
    '94576f19f9e8f594e167eac4b2396fa5812c5788' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/bbshead.tpl',
      1 => 1365894661,
      2 => 'file',
    ),
    'cec4ef372ad8d063f1d2bb2b72393f7000fdd977' => 
    array (
      0 => '/www/users/itsrcs.com/templates/nav_v3.php',
      1 => 1369445944,
      2 => 'file',
    ),
    '26e665168fa43d4e7c8baf59fbf5e9001832d7b8' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/view_post_comm.tpl',
      1 => 1363699359,
      2 => 'file',
    ),
    '22d1643e793a2fe27cb30c1ecff58342c4f8febd' => 
    array (
      0 => '/www/users/itsrcs.com/templates/stat_code.php',
      1 => 1360988927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15708850551a0142387f8e8-44183512',
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52ce69c6ee8e96_60695147',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ce69c6ee8e96_60695147')) {function content_52ce69c6ee8e96_60695147($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>第一个水楼</title>
        <meta name="description" content="第一个水楼:第一个水楼" />
        <meta name="keywords" content="Java编程 AJAX技术 PHP技术 WEB技术 IT技术社区" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php" />
        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/bbs.css" />
        <script type="text/javascript" src="/jss/jquery-min.js"></script>
        <script type="text/javascript" src="/jss/coref.js?v=4-1"></script>
        <script src="/jss/dojo/dojo.js"></script>
        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/postList.css" />
        <link rel="stylesheet" type="text/css" href="/minbbs/static/css/view_post.css?v=4-1" />
        <link rel="stylesheet" type="text/css" href="/mod/kd/themes/default/default.css" />
        <link rel="stylesheet" type="text/css" href="/mod/kd/SyntaxHighlighter/Styles/SyntaxHighlighter.css" />
    </head>
    <body>
        <div class="Shadow" id="navWapper">
    <div class="sdCenter nav-v3">
        <div style="float:left;">
            <a class="logo-v3" href="/" title="返回首页"></a>
            <div id="nav">
                <ul>
                    <li><a href="/">首页</a></li>
                    <li><a href="/blog/index.html">博客广场</a></li>
                    <li><a href="/bookLib/">好书分享</a></li>
                    <li><a href="/minbbs/tech/">技术分享</a></li>
                    <li style="border:none;"><a href="/minbbs/ques/">技术问答</a></li>
                </ul>
            </div>
        </div>
        <div id="nav-right">
            <div class="borderR15 tsearch-wapp">
                <input type="text" class="borderR15" value="" id="search-inp"
                       onfocus="$(this).css('width','105px').attr('placeholder','&#35831;&#36755;&#20837;&#25628;&#32034;&#20869;&#23481;');"
                       onblur="$(this).css('width','35px').attr('placeholder','&#25628;&#32034;');"
                       placeholder="&#25628;&#32034;"
                       onkeydown="search_enter(event);"/>
                <a class="tsearch-btn borderR10" href="javascript:;" onclick="Search($('#search-inp').val())"></a>
            </div>
            <div id="top-menu-wapp">
                <a class="next-cp top-bm" id="gb-reg" href="/account/register/" style="color:green;">&#27880;&#20876;</a>&nbsp;
                <a class="next-cp top-bm" id="gb-log" href="/account/login/">登录</a>&nbsp;
                <div id="top-menu-bar">
                    <div id="top-menu">
                        <div class="top-menu-in">
                            <a class="top-menu-btn" id="gb-ucc">个人中心</a>
                            <a class="top-menu-btn" id="gb-usm">发表文章</a>
                            <a class="top-menu-btn" id="gb-usa">修改头像</a>
                            <a class="top-menu-btn" id="gb-ext" href="javascript:;">退出账号</a>
                        </div>
                    </div>
                    <span style="display:inline-block;cursor:pointer;color:#444;" id="gb-usn"><a style="width:19px;height:13px;background:url('/img/loading_19_13.gif') bottom center no-repeat;display:inline-block;"></a></span>
                    <span style="display:inline-block;width:10px;height:10px;background:url('/img/arrd-1.png') center no-repeat;" id="gb-arr"></span>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--<div id="usr-bar">
    <div id="usr-bar-i">
        <div class="ms-l"></div>
        <div>
            <a class="ms-btn" id="ms-btn-top" href="javascript:;" onclick="javascript:goTop();" title="页面顶部"></a>
            <a class="ms-btn" id="ms-btn-ush"></a>
            <a class="ms-btn" id="ms-btn-log" href="/account/login/" title="登录你的帐号">登陆</a>
            <a class="ms-btn" id="ms-btn-reg" href="/account/register/" title="注册一个帐号"><b>注册</b></a>
            <a class="ms-btn" id="ms-btn-dy" href="javascript:;" title="动态"><b id="ms-btn-dym">9+</b></a>
        </div>
        <div class="clear"></div>
    </div>
</div>
<!--[if lt IE 7]>
<script src="//letskillie6.googlecode.com/svn/trunk/2/zh_CN.js"></script>
<![endif]-->
        <div class="sdCenter" style="margin-top:15px;">
            <input type=hidden value="1" id="postid" />

            <div class="ps-left">
                <div class="ps-items" id="vps-author">
                    <a id="vps-head" href="/user/2"><img src="/user/data/head-img/2_head.jpg"/><span id="author-nickname">koodo</span></a>
                </div>
                <!--<div class="ps-items" style="background:url('/img/br_l.png') repeat-y right center #fefefe;">
                    <a class="next-cp" href="javascript:window.history.back();"><span style="background:url('/minbbs/static/img/arrow_large_left.png') left 53.5% no-repeat;display:inline-block;padding-left:18px;">返回列表</span></a>
                </div>-->
            </div>

            <div class="ps-right">
                <div class="ps-items" id="vps-body">

                    <div id="vps-title-wapp">
                        <h1 class="autowrap" id="vps-title">第一个水楼</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2012年8月6日 12:47</span>
                    </div>

                    <div class="autowarp" id="vps-content">第一个水楼</div>
                </div>

                <!-- 编辑器 -->
                <div class="ps-items" id="ps-editor-wapper">
                    <textarea id="ps-editor" style="width:99.8%;display:none;margin-bottom:10px;"></textarea>
                    <a class="next-cp" style="margin-top:10px;" href="javascript:;" id="ps-submit-btn">马上发表</a>
                </div>
                <!-- 编辑器 -->

                <!-- 回复按钮 -->
                <div class="ps-items">
                    <span class="RedBar">
    <span class="RedBar-in">说几句吧</span><span class="Gray RedBar-in-mr">水水更健康</span>
</span>
<div id="vps-comm-wapper">
    <div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x6C99;&#x53D1; / <a href="/user/2">koodo</a> / 2012年8月6日 15:24 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="0" actUID="2">回复</a></div><img src="/mod/kd/plugins/emoticons/images/jx2/j_0003.gif" border="0" alt="" /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default4.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x677F;&#x51F3; / <a href="/user/29">human</a> / 2012年8月6日 15:57 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="1" actUID="29">回复</a></div><img src="/mod/kd/plugins/emoticons/images/tsj/t_0023.gif" border="0" alt="" /><div class="cms"><div class="sub-comm-item"><tx></tx><t></t><em class="ct-t-whw"><img src="/minbbs/default/headimg/default4.jpg" width="32px" height="32px"/></em><div style="margin-left:45px;line-height:20px;"><a href="/user/29">human</a> @ <a href="/user/29">human</a>&nbsp;：...<span class="block Gray">2012年9月6日 21:15 / <a href="javascript:;" rel="0" actUID="29" onclick="javascript:rep(this,2);">回复</a></span></div></div></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/19_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">&#x5730;&#x677F; / <a href="/user/19">Serria</a> / 2012年8月6日 19:08 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="2" actUID="19">回复</a></div>草<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">4&#x697C; / <a href="/user/2">koodo</a> / 2012年8月6日 21:37 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="3" actUID="2">回复</a></div><img src="/mod/kd/plugins/emoticons/images/tsj/t_0040.gif" border="0" alt="" /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">5&#x697C; / <a href="/user/2">koodo</a> / 2012年8月6日 23:04 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="4" actUID="2">回复</a></div><img src="/mod/kd/plugins/emoticons/images/tsj/t_0031.gif" border="0" alt="" /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default4.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">6&#x697C; / <a href="/user/29">human</a> / 2012年8月7日 10:28 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="5" actUID="29">回复</a></div><img src="/mod/kd/plugins/emoticons/images/tsj/t_0013.gif" border="0" alt="" /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default4.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">7&#x697C; / <a href="/user/31">不是打酱油的路人甲</a> / 2012年8月7日 14:01 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="6" actUID="31">回复</a></div>才哥尼玛<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">8&#x697C; / <a href="/user/2">koodo</a> / 2012年8月7日 15:07 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="7" actUID="2">回复</a></div>正哥你妹？<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default4.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">9&#x697C; / <a href="/user/29">human</a> / 2012年8月8日 09:28 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="8" actUID="29">回复</a></div><img src="/mod/kd/plugins/emoticons/images/jx2/j_0007.gif" border="0" alt="" /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default4.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">10&#x697C; / <a href="/user/29">human</a> / 2012年8月8日 16:45 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="9" actUID="29">回复</a></div><img src="/mod/kd/plugins/emoticons/images/tsj/t_0036.gif" border="0" alt="" /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">11&#x697C; / <a href="/user/2">koodo</a> / 2012年8月14日 17:52 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="10" actUID="2">回复</a></div>置顶功能已经完成<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default4.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">12&#x697C; / <a href="/user/29">human</a> / 2012年8月17日 20:13 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="11" actUID="29">回复</a></div><img src="/mod/kd/plugins/emoticons/images/tsj/t_0020.gif" border="0" alt="" /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default4.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">13&#x697C; / <a href="/user/29">human</a> / 2012年8月20日 12:41 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="12" actUID="29">回复</a></div><img src="/mod/kd/plugins/emoticons/images/tsj/t_0029.gif" border="0" alt="" /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/73_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">14&#x697C; / <a href="/user/73">_后觉</a> / 2012年8月20日 12:54 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="13" actUID="73">回复</a></div><img border="0" alt="" src="/mod/kd/plugins/emoticons/images/jx2/j_0022.gif" /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default4.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">15&#x697C; / <a href="/user/31">不是打酱油的路人甲</a> / 2012年8月22日 15:52 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="14" actUID="31">回复</a></div>才哥我又来打酱油！！！！！！<div class="cms"><div class="sub-comm-item"><tx></tx><t></t><em class="ct-t-whw"><img src="/user/data/head-img/2_head.jpg" width="32px" height="32px"/></em><div style="margin-left:45px;line-height:20px;"><a href="/user/2">koodo</a> @ <a href="/user/31">不是打酱油的路人甲</a>&nbsp;：我叉<span class="block Gray">2012年8月31日 17:32 / <a href="javascript:;" rel="0" actUID="2" onclick="javascript:rep(this,2);">回复</a></span></div></div></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default4.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">16&#x697C; / <a href="/user/31">不是打酱油的路人甲</a> / 2012年8月22日 16:02 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="15" actUID="31">回复</a></div><img src="/mod/kd/plugins/emoticons/images/jx2/j_0003.gif" border="0" alt="" />水王来也！！！<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/19_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">17&#x697C; / <a href="/user/19">Serria</a> / 2012年9月3日 21:15 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="16" actUID="19">回复</a></div>我不是来灌水的，是来吹水的哦。<div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/img/tavatar.gif" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">18&#x697C; / <a href="/user/96">永才他哥哥</a> / 2012年9月3日 21:33 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="17" actUID="96">回复</a></div>找个回复都找半天- - 尼玛“回复帖子”做的太小了 得改改 就下面按个大的表单   <div class="cms"><div class="sub-comm-item"><tx></tx><t></t><em class="ct-t-whw"><img src="/user/data/head-img/2_head.jpg" width="32px" height="32px"/></em><div style="margin-left:45px;line-height:20px;"><a href="/user/2">koodo</a> @ <a href="/user/96">永才他哥哥</a>&nbsp;：就是要你找<span class="block Gray">2012年9月3日 22:21 / <a href="javascript:;" rel="0" actUID="2" onclick="javascript:rep(this,2);">回复</a></span></div></div></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/52_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">19&#x697C; / <a href="/user/52">_亿柿网。</a> / 2012年9月4日 14:17 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="18" actUID="52">回复</a></div><img src="/mod/kd/plugins/emoticons/images/jx2/j_0022.gif" border="0" alt="" /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/minbbs/default/headimg/default4.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">20&#x697C; / <a href="/user/29">human</a> / 2012年9月6日 12:46 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="19" actUID="29">回复</a></div><img src="/mod/kd/plugins/emoticons/images/tsj/t_0033.gif" border="0" alt="" /><div class="cms"></div></div></div><div class="vps-wapper"><a class="headwapper"><img src="/user/data/head-img/2_head.jpg" class="Shadow"/></a><div class="Shadow vps-wapper-i"><s></s><i></i><div class="Gray">21&#x697C; / <a href="/user/2">koodo</a> / 2012年12月27日 01:25 <a href="javascript:;" onclick="javascript:rep(this,1);" rel="20" actUID="2">回复</a></div>xtest<img src="/mod/kd/plugins/emoticons/images/jx2/j_0002.gif" border="0" alt="" /><div class="cms"></div></div></div></div>
                    <a class="next-cp" id="loadEditor" style="margin-top:10px;">发表回复</a>
                </div>
                <!-- 回复按钮 -->
            </div>
            <div class="clear"></div>
        </div>
        <script charset="utf-8" src="/minbbs/bin_js/bbs-post.js?v=19"></script>
        <script charset="utf-8" src="/mod/kd/SyntaxHighlighter/Scripts/shCore.js"></script>
        <script language="javascript">$(function() {
            dp.SyntaxHighlighter.HighlightAll("code");
        });
        </script>
        <span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
    </body>
</html><?php }} ?>