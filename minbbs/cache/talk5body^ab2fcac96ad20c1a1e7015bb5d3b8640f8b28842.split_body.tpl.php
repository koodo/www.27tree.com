<?php /*%%SmartyHeaderCode:149000243251a014bb434ad6-73959172%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab2fcac96ad20c1a1e7015bb5d3b8640f8b28842' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/index/split_body.tpl',
      1 => 1369445251,
      2 => 'file',
    ),
    '725e50d5c1e3036f95bc59bcf8867b6bc6295ec1' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/index/editor/default_editor.tpl',
      1 => 1363576552,
      2 => 'file',
    ),
    '0a265e661a0422ccfb748a3c33beba30cf53d8e0' => 
    array (
      0 => '/www/users/itsrcs.com/minbbs/templates/index/sm_guss/talk.tpl',
      1 => 1363576553,
      2 => 'file',
    ),
    '22d1643e793a2fe27cb30c1ecff58342c4f8febd' => 
    array (
      0 => '/www/users/itsrcs.com/templates/stat_code.php',
      1 => 1360988927,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149000243251a014bb434ad6-73959172',
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52d62bc90e69c5_97174246',
  'has_nocache_code' => false,
  'cache_lifetime' => 60,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d62bc90e69c5_97174246')) {function content_52d62bc90e69c5_97174246($_smarty_tpl) {?>
<div class="ps-left" style="width:750px;float:left;z-index:0;position:relative;">

    <!--编辑器-->
    <div class="ps-items" id="ps-sm-wapper">
    <input type="hidden" value="3" id="sid"/>
    <span class="sdText" style="margin-bottom:10px;">
        <input type="text" value="" id="post-sm-title" placeholder="请输入标题"/>
    </span>
    <textarea id="ps-editor" style="width:99.8%;display:none;margin-bottom:10px;"></textarea>
    <a class="next-cp" style="margin-top:10px;" href="javascript:;" id="ps-submit-btn">马上发表</a>
</div>
    <!--编辑器-->
    <!-- 帖子列表 -->
    <div class="ps-items Shadow" id="ps-post-list">
        <div class="or-alert">
            <span>世界上有两种东西能治病，一是药物，二是语言。——希波克拉底</span>
        </div>
        <!--页码 start-->
        <div class="sp-page-wapp" id="pg-top"><a href="/minbbs/talk/4.html" class="s-pages-i borderR10 Shadow">&#19978;&#19968;&#39029;</a><a href="/minbbs/talk/1.html" class="s-pages-i borderR10 Shadow">1</a><a href="/minbbs/talk/2.html" class="s-pages-i borderR10 Shadow">2</a><a href="/minbbs/talk/3.html" class="s-pages-i borderR10 Shadow">3</a><a href="/minbbs/talk/4.html" class="s-pages-i borderR10 Shadow">4</a><a href="/minbbs/talk/5.html" class="s-pages-i s-pages-cur borderR10 Shadow">5</a><a href="/minbbs/talk/6.html" class="s-pages-i borderR10 Shadow">6</a><a href="/minbbs/talk/7.html" class="s-pages-i borderR10 Shadow">7</a><a href="/minbbs/talk/6.html" class="s-pages-i borderR10 Shadow">&#19979;&#19968;&#39029;</a></div>
        <!--页码 end-->
        <div id="ps-list">
            <div class="ps-list-items"><a class="headwapper" href="/user/visit/29"><img src="/minbbs/default/headimg/default4.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/103.html">找下有几个零！！！</a></span><span class="Gray">由 <a href="/user/visit/29">human</a> 发布于 2012年9月13日 15:34</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">643</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">1</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/101.html">这猛男不要命了</a></span><span class="Gray">由 <a href="/user/visit/2">koodo</a> 发布于 2012年9月12日 17:05</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">429</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">1</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/29"><img src="/minbbs/default/headimg/default4.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/102.html">无敌了啊。有木有</a></span><span class="Gray">由 <a href="/user/visit/29">human</a> 发布于 2012年9月12日 21:55</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">621</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">1</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/29"><img src="/minbbs/default/headimg/default4.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/99.html">哈哈  好消息</a></span><span class="Gray">由 <a href="/user/visit/29">human</a> 发布于 2012年9月12日 13:45</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">543</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">1</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/19"><img src="/user/data/head-img/19_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/98.html">哈，又一度军训的日子</a></span><span class="Gray">由 <a href="/user/visit/19">Serria</a> 发布于 2012年9月12日 13:18</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">403</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">3</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/29"><img src="/minbbs/default/headimg/default4.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/100.html">抵制日货</a></span><span class="Gray">由 <a href="/user/visit/29">human</a> 发布于 2012年9月12日 13:59</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">644</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">1</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/29"><img src="/minbbs/default/headimg/default4.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/97.html">国庆哥放11天假</a></span><span class="Gray">由 <a href="/user/visit/29">human</a> 发布于 2012年9月12日 10:41</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">406</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">2</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/78"><img src="/user/data/head-img/78_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/95.html">停课两周</a></span><span class="Gray">由 <a href="/user/visit/78">Sohol</a> 发布于 2012年9月10日 22:25</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">422</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">2</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/93.html">《We Are the World》群星版</a></span><span class="Gray">由 <a href="/user/visit/2">koodo</a> 发布于 2012年9月10日 21:24</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">340</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">0</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/29"><img src="/minbbs/default/headimg/default4.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/68.html">灌下水</a></span><span class="Gray">由 <a href="/user/visit/29">human</a> 发布于 2012年9月3日 22:39</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">893</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">7</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/78"><img src="/user/data/head-img/78_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/91.html">老板老是催我换头像</a></span><span class="Gray">由 <a href="/user/visit/78">Sohol</a> 发布于 2012年9月6日 23:56</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">870</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">2</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/66"><img src="/user/data/head-img/66_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/88.html">最常被程序员们谎称读过的计算机书籍</a></span><span class="Gray">由 <a href="/user/visit/66">影子</a> 发布于 2012年9月6日 19:35</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">580</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">4</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/19"><img src="/user/data/head-img/19_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/86.html">今天没有新贴</a></span><span class="Gray">由 <a href="/user/visit/19">Serria</a> 发布于 2012年9月6日 15:08</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">353</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">1</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/19"><img src="/user/data/head-img/19_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/82.html">吃柿饼</a></span><span class="Gray">由 <a href="/user/visit/19">Serria</a> 发布于 2012年9月5日 18:45</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">414</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">2</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/34"><img src="/minbbs/default/headimg/default4.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/80.html">发个爱国的帖子。</a></span><span class="Gray">由 <a href="/user/visit/34">cetian</a> 发布于 2012年9月5日 15:30</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">422</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">2</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/74.html">我们都爱广工大</a></span><span class="Gray">由 <a href="/user/visit/2">koodo</a> 发布于 2012年9月4日 20:31</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">549</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">4</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/75.html">百度真恶心</a></span><span class="Gray">由 <a href="/user/visit/2">koodo</a> 发布于 2012年9月4日 23:18</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">402</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">4</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/19"><img src="/user/data/head-img/19_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/76.html">变身师姐</a></span><span class="Gray">由 <a href="/user/visit/19">Serria</a> 发布于 2012年9月5日 12:18</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">426</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">2</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/101"><img src="/user/data/head-img/101_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/72.html">Hello, I'm Obama</a></span><span class="Gray">由 <a href="/user/visit/101">Obama</a> 发布于 2012年9月4日 18:29</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">535</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">5</b>回复</span></div></div><div class="clear"></div></div><div class="ps-list-items"><a class="headwapper" href="/user/visit/52"><img src="/user/data/head-img/52_head.jpg" width="45px" height="45px"/></a><div class="ps-lt-wapp"><div  class="ps-lt-wapp-l"><span class="block Elipsis"><a class="ps-lt-title" target="_blank" href="/minbbs/topic/70.html">BOOS登场</a></span><span class="Gray">由 <a href="/user/visit/52">_亿柿网。</a> 发布于 2012年9月4日 18:03</span></div><div class="ps-lt-wapp-r"><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">478</b>阅读</span><span style="width:42%;float:right;height:49px;display:inline-block;line-height:25px;"><b class="block" style="font-size:16px;">2</b>回复</span></div></div><div class="clear"></div></div>            <div class="clear"></div>
        </div>
        <!--页码 start-->
        <div class="sp-page-wapp"><a href="/minbbs/talk/4.html" class="s-pages-i borderR10 Shadow">&#19978;&#19968;&#39029;</a><a href="/minbbs/talk/1.html" class="s-pages-i borderR10 Shadow">1</a><a href="/minbbs/talk/2.html" class="s-pages-i borderR10 Shadow">2</a><a href="/minbbs/talk/3.html" class="s-pages-i borderR10 Shadow">3</a><a href="/minbbs/talk/4.html" class="s-pages-i borderR10 Shadow">4</a><a href="/minbbs/talk/5.html" class="s-pages-i s-pages-cur borderR10 Shadow">5</a><a href="/minbbs/talk/6.html" class="s-pages-i borderR10 Shadow">6</a><a href="/minbbs/talk/7.html" class="s-pages-i borderR10 Shadow">7</a><a href="/minbbs/talk/6.html" class="s-pages-i borderR10 Shadow">&#19979;&#19968;&#39029;</a></div>
        <!--页码 end-->
    </div>
</div>
<div class="ps-right" style="margin-left:760px;">

    

    <div class="ps-items Shadow borderR5" style="text-align:center;line-height:25px;">
    <h1 style="font-size:18px;">
        天下之大，无所不谈
    </h1>
    <a class="next-cp" href="javascript:;" id="ps-newpost-btn" style="width:60%;margin:0 auto;margin-top:20px;">
        <span style="display:inline-block;padding-left:20px;background:url('/user/sources/img/comment_question.png') left 55% no-repeat;">
            发表主题
        </span>
    </a>
</div>
    
    <div class="ps-items borderR5">
        <span class="RedBar">
            <span class="RedBar-in">热门主题</span>
        </span>
        <div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/minbbs/topic/1.html">第一个水楼</a></div><span class="Gray">22 / 809</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/66"><img src="/user/data/head-img/66_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/minbbs/topic/29.html">元老级人物强势灌水</a></div><span class="Gray">7 / 870</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/29"><img src="/minbbs/default/headimg/default4.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/minbbs/topic/68.html">灌下水</a></div><span class="Gray">7 / 893</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/101"><img src="/user/data/head-img/101_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/minbbs/topic/72.html">Hello, I'm Obama</a></div><span class="Gray">5 / 535</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/314"><img src="/img/tavatar.gif" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/minbbs/topic/305.html"> 公司直招兼职多名</a></div><span class="Gray">5 / 331</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/minbbs/topic/54.html">论坛招版主啦，想做的进来看看，有奖励。</a></div><span class="Gray">5 / 909</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/2"><img src="/user/data/head-img/2_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/minbbs/topic/307.html">用户系统调整，现在只能注册，没有登录按钮，哈哈哈，准备迎接强大的社区吧。</a></div><span class="Gray">5 / 489</span></div></div><div style="margin:10px 0;height:38px;"><a class="headwapper" href="/user/visit/341"><img src="/user/data/head-img/341_head.jpg" width="32px" height="32px"/></a><div style="margin-left:42px;line-height:20px;"><div class="Elipsis"><a href="/minbbs/topic/312.html">我是新手,报道来了</a></div><span class="Gray">5 / 299</span></div></div>    </div>
</div>
<div class="clear"></div>
</div>
<span style="display:none;"><script src="http://s21.cnzz.com/stat.php?id=4991736&web_id=4991736" language="JavaScript"></script></span>
</body>
</html><?php }} ?>