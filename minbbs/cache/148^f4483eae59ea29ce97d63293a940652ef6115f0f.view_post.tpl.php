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
  'unifunc' => 'content_52d54864dba216_84457448',
  'has_nocache_code' => false,
  'cache_lifetime' => 120,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52d54864dba216_84457448')) {function content_52d54864dba216_84457448($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Ubuntu APT 软件包管理命令</title>
        <meta name="description" content="Ubuntu APT 软件包管理命令:
	1、APT


	APT(高级软件包工具)是一个强大的包管理系统，而那些图形化程序如添加/删除应用程序和Synaptic都是建立在它的基础之上的。APT自动处理依赖关系并在系统软件包执行其他操作以便安装所要的软件包。运行APT要求管理权" />
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
            <input type=hidden value="148" id="postid" />

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
                        <h1 class="autowrap" id="vps-title">Ubuntu APT 软件包管理命令</h1>
                        <span id="vps-title-info">由 <a href="/user/2">koodo</a> 发表于 2012年10月13日 02:51</span>
                    </div>

                    <div class="autowarp" id="vps-content"><p>
	1、APT
</p>
<p>
	APT (高级软件包工具) 是一个强大的包管理系统，而那些图形化程序如 添加/删除 应用程序 和 Synaptic 都是建立 在它的基础之上的。APT 自动处理依赖关系并在系统软件包执行其他操作以便安装所要的软件包。 运行 APT 要求管理权限 。 可以被 APT 使用的一些常用命令：
</p>
<p>
	安装软件包：
</p>
<p>
	sudo apt-get install packagename &nbsp;
</p>
<p>
	删除软件包：
</p>
<p>
	sudo apt-get remove packagename &nbsp;
</p>
<p>
	获取新的软件包列表：
</p>
<p>
	sudo apt-get update &nbsp;
</p>
<p>
	升级有可用更新的系统：
</p>
<p>
	sudo apt-get upgrade &nbsp;
</p>
<p>
	列出更多命令和选项：
</p>
<p>
	apt-get help &nbsp;
</p>
<p>
	2、安装/卸载 .deb 文件
</p>
<p>
	这 些是Debian 软件包。这些与 Ubuntu 相关的软件包文件使用 .deb 后缀是因 为 Ubuntu 与 Debian GNU/Linux 发行版有着紧密的关系。您将需要管理权限来安装 .deb 文件 。
</p>
<p>
	要安装 .deb 文件，简单地双击它，然后选择 安装软件包 即可。
</p>
<p>
	或者，您也可以打开一个终端并输入：
</p>
<p>
	sudo dpkg -i package_file.deb &nbsp; 来安装 .deb 文件。
</p>
<p>
	如需卸载 .deb 文件，在您软件包管理器中反选它，或输入：
</p>
<p>
	sudo dpkg -r package_name &nbsp;
</p>
<p>
	3、将 .rpm 文件转为 .deb 文件
</p>
<p>
	另 一种软件包文件是 .rpm为后缀的 Red Hat 软件包管理器文件。我们并不建议在 Ubuntu 系统中安装它们。在绝大多数情况 下，Ubuntu 自身的 .deb 软件包是可用的。然而，如果绝对必要，可以使用程序 alien 将 .rpm 文件转化为.deb 文件。
</p>
<p>
	安装 alien 程序。
</p>
<p>
	在终端使用管理权限运行以下命令：
</p>
<p>
	sudo alien package_file.rpm &nbsp;
</p>
<p>
	4、安装 tarballs
</p>
<p>
	以 .tar.gz 或 .tar.bz2 作 为后缀名的文件是在 Linux 和 Unix 中被广泛使用的 tarballs 的打包文件。 如果在任何 Ubuntu 软件库中都没 有 Ubuntu 的软件包，您可以按照软件包自带的指示使用命令行来安装和卸载 Tarball 文件。 Tarballs 通常包括程序的源代码，并 且需要 编译 才能使用。要做到这一点，一般需要其它软件 。
</p>
<p>
	5、dpkg命令
</p>
<p>
	dpkg -i /**/**/**.deb 安装软件
</p>
<p>
	dpkg -x **.deb 解开.deb文件
</p>
<p>
	dpkg -r /-p 删除并清配置
</p>
<p>
	更详细的 用dpkg --help 查询 如下：
</p>
<p>
	dpkg -i|--install &lt;.deb 文件的文件名&gt; ... | -R|--recursive &lt;目录&gt; ...
</p>
<p>
	dpkg --unpack &lt;.deb 文件的文件名&gt; ... | -R|--recursive &lt;目录&gt; ...
</p>
<p>
	dpkg -A|--record-avail &lt;.deb 文件的文件名&gt; ... | -R|--recursive &lt;目录&gt; ...
</p>
<p>
	dpkg --configure &lt;软件包名&gt; ... | -a|--pending
</p>
<p>
	dpkg -r|--remove | -P|--purge &lt;软件包名&gt; ... | -a|--pending
</p>
<p>
	dpkg --get-selections [&lt;表达式&gt; ...] 把已选中的软件包的列表打印到标准输出
</p>
<p>
	dpkg --set-selections 从标准输入里读出要选择的软件包列表
</p>
<p>
	dpkg --update-avail 替换现可安装的软件包信息
</p>
<p>
	dpkg --merge-avail 把文件中的信息合并到系统中
</p>
<p>
	dpkg --clear-avail 清除现有的软件包信息
</p>
<p>
	dpkg --forget-old-unavail 忘却已被删除，现在却不能安装的软件包
</p>
<p>
	dpkg -s|--status &lt;软件包名&gt; ... 显示软件包详尽的状态信息
</p>
<p>
	dpkg -p|--print-avail &lt;软件包名&gt; ... 显示软件包当前可供安装的版本的详细信 息
</p>
<p>
	dpkg -L|--listfiles &lt;软件包名&gt; ... 列出所有“属于”该软件包(或多个软件包)的文件
</p>
<p>
	dpkg -l|--list [&lt;表达式&gt; ... 简明地列出软件包的状态
</p>
<p>
	dpkg -S|--search &lt;表达式&gt; ... 搜寻拥有该文件(或多个文件)的软件包
</p>
<p>
	dpkg -C|--audit 检查搜寻残损的软件包
</p>
<p>
	dpkg --print-architecture 显示目标机的体系架构(借助 GCC)
</p>
<p>
	dpkg --print-gnu-build-architecture 显示目标机体系架构的 GNU 版本的表示
</p>
<p>
	dpkg --print-installation-architecture 显示本地主机的体系架构(用于安装)
</p>
<p>
	dpkg --compare-vesions &lt;甲&gt; &lt;关系&gt; &lt;乙&gt; 比较版本号 - 见下
</p>
<p>
	dpkg --help | --version 显示本帮助文档以及版本号
</p>
<p>
	dpkg --force-help | -Dh|--debug=help 强制操作时，有关出错方面的帮助
</p>
<p>
	dpkg --licence 显示版权和许可证的条文
</p>
<p>
	6、ubuntu下apt-get 命令参数
</p>
<p>
	常用的APT命令参数
</p>
<p>
	apt-cache search package 搜索包
</p>
<p>
	apt-cache show package 获取包的相关信息，如说明、大小、版本等
</p>
<p>
	sudo apt-get install package 安装包
</p>
<p>
	sudo apt-get install package - - reinstall 重新安装包
</p>
<p>
	sudo apt-get -f install 修复安装"-f = ――fix-missing"
</p>
<p>
	sudo apt-get remove package 删除包
</p>
<p>
	sudo apt-get remove package - - purge 删除包，包括删除配置文件等
</p>
<p>
	sudo apt-get update 更新源
</p>
<p>
	sudo apt-get upgrade 更新已安装的包
</p>
<p>
	sudo apt-get dist-upgrade 升级系统
</p>
<p>
	sudo apt-get dselect-upgrade 使用 dselect 升级
</p>
<p>
	apt-cache depends package 了解使用依赖
</p>
<p>
	apt-cache rdepends package 是查看该包被哪些包依赖
</p>
<p>
	sudo apt-get build-dep package 安装相关的编译环境
</p>
<p>
	apt-get source package 下载该包的源代码
</p>
<p>
	sudo apt-get clean &amp;&amp; sudo apt-get autoclean 清理无用的包
</p>
<p>
	sudo apt-get check 检查是否有损坏的依赖
</p>
<p>
	其中：
</p>
<p>
	1 有SUDO的表示需要管理员特权！
</p>
<p>
	2 在UBUNTU中命令后面参数为短参数是用“-”引出，长参数用“――”引出
</p>
<p>
	3 命令帮助信息可用man 命令的方式查看或者
</p>
<p>
	命令 -H（――help）方式查看
</p>
<p>
	4 在MAN命令中需要退出命令帮助请按“q”键！！
</p>
<p>
	选项 含义 作用
</p>
<p>
	sudo -h Help 列出使用方法，退出。
</p>
<p>
	sudo -V Version 显示版本信息，并退出。
</p>
<p>
	sudo -l List 列出当前用户可以执行的命令。只有在sudoers里的用户才能使用该选项。
</p>
<p>
	sudo -u username|#uid User 以指定用户的身份执行命令。后面的用户是除root以外的，可以是用户名，也可以是#uid。
</p>
<p>
	sudo -k Kill 清除“入场卷”上的时间，下次再使用sudo时要再输入密码。
</p>
<p>
	sudo -K Sure kill 与-k类似，但是它还要撕毁“入场卷”，也就是删除时间戳文件。
</p>
<p>
	sudo -b command Background 在后台执行指定的命令。
</p>
<p>
	sudo -p prompt command Prompt 可以更改询问密码的提示语，其中%u会代换为使用者帐号名称，%h会显示主机名称。非常人性化的设计。
</p>
<p>
	sudo -e file Edit 不是执行命令，而是修改文件，相当于命令sudoedit。
</p>
<p>
	一、Ubuntu采用Debian的软件包管理器dpkg来管理软件包,类似RPM.系统中所有packages的信息都在/var/lib/dpkg/
</p>
<p>
	目录下,其子目录/var/lib/dpkg/info用于保存各个软件包的配置文件列表:
</p>
<p>
	(1).conffiles记录了Ubuntu软件包的配置文件列表
</p>
<p>
	(2).list保存软件包中的文件列表,用户可以从.list的信息中找到软件包中文件的具体安装位置.
</p>
<p>
	(3).md5sums记录了软件包的md5信息,这个信息是用来进行包验证的.
</p>
<p>
	(4).prerm脚本在Debian包解包之前运行,主要作用是停止作用于即将升级的Ubuntu软件包的服务,直到软件包安装或升级完成.
</p>
<p>
	(5).postinst脚本是完成Debian包解开之后的配置工作,通常用于执行所安装软件包相关命令和服务重新启动.
</p>
<p>
	/var/lib/dpkg/available文件的内容是Ubuntu软件包的描述信息,该软件包括当前系统所使用的Debian安装源中的所有软件包,
</p>
<p>
	其中包括当前系统中已安装的和未安装的Ubuntu软件包.
</p>
<p>
	/var/cache/apt/archives目录是在用apt-getinstall安装软件时，软件包的临时存放路径
</p>
<p>
	/etc/apt/sources.list存放的是软件源站点,当你执行sudoapt-getinstallxxx时，Ubuntu就去这些站点下载软件包到本地并执行安装
</p>
<p>
	二、相关命令使用示例:
</p>
<p>
	(1)查看某Ubuntu软件包的安装内容
</p>
<p>
	dpkg-Lxxx
</p>
<p>
	(2)查找软件库中的软件包
</p>
<p>
	apt-cachesearch正则表达式
</p>
<p>
	(3)显示系统安装包的统计信息
</p>
<p>
	apt-cachestats
</p>
<p>
	(4)显示系统全部可用Ubuntu软件包的名称
</p>
<p>
	apt-cachepkgnames
</p>
<p>
	(5)显示某软件包的详细信息
</p>
<p>
	apt-cacheshowxxx
</p>
<p>
	(6)查找某文件属于哪个包
</p>
<p>
	apt-filesearchxxx
</p>
<p>
	(7)查看已经安装了哪些Ubuntu软件包
</p>
<p>
	dpkg-l
</p>
<p>
	(8)查询某软件依赖哪些软件包
</p>
<p>
	apt-cachedependsxxx
</p>
<p>
	(9)查询某软件被哪些软件包依赖
</p>
<p>
	apt-cacherdependsxxx
</p>
<p>
	(10)增加一个光盘源
</p>
<p>
	sudoapt-cdromadd
</p>
<p>
	注:顾名思义,就是安装更新Ubuntu软件包时让其优先从Ubuntu光盘上找(如果你不能上网安装/更新,但有Ubuntu的DVDISO,这会对你非常有用)
</p>
<p>
	(11)系统升级
</p>
<p>
	sudoapt-getupdate
</p>
<p>
	(12)清除所有已删除软件包的残馀配置文件
</p>
<p>
	dpkg-l|grep^rc|awk'{print$2}'|sudoxargsdpkg-P
</p>
<p>
	(13)编译时缺少h文件的自动处理
</p>
<p>
	sudoauto-aptrun./configure
</p>
<p>
	(14)查看安装软件时下载Ubuntu软件包的临时存放目录
</p>
<p>
	ls/var/cache/apt/archives
</p>
<p>
	(15)备份当前系统安装的所有软件包的列表
</p>
<p>
	dpkg--get-selections|grep-vdeinstall&gt;~/somefile
</p>
<p>
	(16)从上面备份的安装包的列表文件恢复所有包
</p>
<p>
	dpkg--set-selections&lt;~/somefile
</p>
<p>
	sudodselect
</p>
<p>
	(17)清理旧版本的软件缓存
</p>
<p>
	sudoapt-getautoclean
</p>
<p>
	(18)清理所有软件缓存
</p>
<p>
	sudoapt-getclean
</p>
<p>
	(19)删除系统不再使用的孤立软件
</p>
<p>
	sudoapt-getautoremove
</p>
<p>
	(20)查看Ubuntu软件包在服务器上面的地址
</p>
<p>
	7、Ubuntu软件推荐
</p>
<p>
	sudo apt-get install virtualbox#
</p>
<p>
	sudo apt-get install build-essential pkg-config xserver-xorg-dev linux-headers-`uname -r`
</p>
<p>
	sudo apt-get install libc6-dev
</p>
<p>
	sudo apt-get install apt-build #frontend to apt to build, optimize and install packages
</p>
<p>
	sudo apt-get install nautilus-open-terminal dpkg-dev
</p>
<p>
	sudo apt-get install testdisk #Partition scanner and disk recovery tool
</p>
<p>
	sudo apt-get install mkisofs # Creates ISO-9660 CD-ROM filesystem images
</p>
<p>
	sudo apt-get install cramfsswap #swap endianess of a cram filesystem (cramfs)
</p>
<p>
	sudo apt-get install cramfsprogs squashfs-tools #cramfs squashfs
</p>
<p>
	sudo apt-get install aptoncd # Installation disc creator for packages downloaded via APT
</p>
<p>
	sudo apt-get install language-support-zh language-pack-zh#安装中文语言支持
</p>
<p>
	sudo apt-get install compiz compizconfig-settings-manager compiz-corecompiz-fusion-plugins-extra compiz-fusion-plugins-unsupported emeraldemerald-themes#安装compiz/fusion 有史以来最炫的3D桌面
</p>
<p>
	sudo apt-get install stardict stardict-common stardict-cdict-gbstardict-cedict-gb stardict-hanzim stardict-langdao-ce-gbstardict-langdao-ec-gb stardict-oxford-gb stardict-xdict-ce-gbstardict-xdict-ec-gb stardict-jcedict stardict-jedictstardict-jmdict-en-ja stardict-jmdict-ja-en wyabdcrealpeopletts#安装StarDict
</p>
<p>
	sudo apt-get install kde-i18n-zhcn kde-i18n-zhtw#k程序中文支持，很讨厌kde ,但不太讨厌qt程序可以这样装
</p>
<p>
	sudo apt-get install gnome-common # common scripts and macros to develop with GNOME
</p>
<p>
	sudo apt-get install makeself #utility to generate self-extractable archives
</p>
<p>
	sudo apt-get install sun-java5-jdk #安装Java5环境
</p>
<p>
	sudo apt-get install sun-java5-plugin #安装Java5环境
</p>
<p>
	sudo apt-get install sun-java6-jre#安装JAVA6环境
</p>
<p>
	sudo apt-get install sun-java6-jdk #安装JAVA6环境#
</p>
<p>
	sudo update-alternatives --config java#设定JAVA环境
</p>
<p>
	sudo apt-get install nautilus-open-terminal #在右键菜单中加入打开终端
</p>
<p>
	sudo apt-get install qt4-qtconfig#qt4 gui配制工具, 如字体等，很讨厌kde ,但不太讨厌qt程序可以这样装
</p>
<p>
	sudo apt-get install kcontrol #k程序gui配制工具，很讨厌kde ,但不太讨厌qt程序可以这样装
</p>
<p>
	sudo apt-get install smbfs #smbfs挂载支持
</p>
<p>
	sudo apt-get install nfs-common #nfs
</p>
<p>
	sudo apt-get install samba nfs-kernel-server #samba
</p>
<p>
	sudo apt-get install nmap #网络端口扫描工具
</p>
<p>
	sudo apt-get install nmapfe #nmap前端
</p>
<p>
	sudo apt-get install kinstaller #application installer
</p>
<p>
	sudo apt-get install ubuntu-restricted-extras #有用的东东。skyx强力推荐
</p>
<p>
	sudo sudo apt-get install bum #系统服务管理软件
</p>
<p>
	sudo apt-get install sysv-rc-conf #一款基于perl的开机进程调整工具,sysv-rc-conf执行命令即可
</p>
<p>
	sudo apt-get install rcconf # Debian Runlevel configuration tool
</p>
<p>
	sudo apt-get install rar unrar p7zip* #安装rar 7zip
</p>
<p>
	sudo apt-get install rpm alien #安装rpm支持
</p>
<p>
	sudo apt-get install yum rpm #redhat相关
</p>
<p>
	sudo apt-get install xpdf xpdf-chinese-simplified #安装pdf查看软件
</p>
<p>
	sudo apt-get install xchm xpdf-chinese* #安装chm查看软件
</p>
<p>
	sudo apt-get install gnomebaker k3b#安装刻录软件
</p>
<p>
	sudo apt-get install brasero #gnome上的刻录软件
</p>
<p>
	sudo apt-get install subversion #svn
</p>
<p>
	sudo apt-get install meld #一个文件、目录比较器
</p>
<p>
	sudo apt-get install kompare # 又一个文件比较器
</p>
<p>
	sudo apt-get install xxdiff #- a graphical file and directories comparison and merge tool
</p>
<p>
	sudo apt-get install mc #类似norton commander 工具，skyx 吐血推荐
</p>
<p>
	sudo apt-get install gnome-commander #gnome 上类似Total commander的工具
</p>
<p>
	sudo apt-get install krusader #kde 上类似Total commander的工具
</p>
<p>
	sudo apt-get install rox-filer#一个简单的文件管理软件
</p>
<p>
	sudo apt-get install ghex #GNOME 上的十六进制文件编辑器
</p>
<p>
	sudo apt-get install rxvt yakuake tilda kuake konsole multi-gnome-terminal pyqonsole #几个终端
</p>
<p>
	sudo apt-get install pcmanx-gtk2 qterm mozilla-plugin-pcmanx #安装bbs 客户端
</p>
<p>
	sudo apt-get install mozilla-thunderbird thunderbird-gnome-support latex-xft-fonts #thunderbird
</p>
<p>
	sudo apt-get install ntfs-3g ntfs-config #ntfs写入支持，装完后运行ntfs-config,把两个钩打上即可。楼下方法作废
</p>
<p>
	sudo apt-get install googleearth googlizer gtalk#google相关，skyx友情提示:不推荐马甲 gtalk
</p>
<p>
	sudo apt-get install kvm #Full virtualization on x86 hardware 华主席推荐
</p>
<p>
	sudo apt-get install vmware-player #Free virtual machine player from VMware
</p>
<p>
	sudo apt-get install socks4-server socks4-clients #一个socks 代理服务器/soks4代理客户端
</p>
<p>
	sudo apt-get install liferea #超强的rss reader ，明显比akregator好用， 由zhuqin_83吐血推荐
</p>
<p>
	sudo apt-get install axel-kapt gwget aria2#多线程下载工具,也可在论坛search 超强工具prozilla，由雕啸长空吐血推荐
</p>
<p>
	sudo apt-get install privoxy #河#蟹# mixmaster anon-proxy socat#突破风锁线和雁过无痕
</p>
<p>
	sudo apt-get install kdebluetooth #超简单的ubuntu与蓝牙手机互传文件工具
</p>
<p>
	#蓝牙请参见：　　　http://www.in9.cn/r.php?url=http://forum.ubuntu.org.cn/viewtopic.php?t=61426&amp;highlight=
</p>
<p>
	sudo apt-get install build-essential #build-essential
</p>
<p>
	sudo apt-get install proxychains #一个socks4 socks5代理软件 ，可以支持apt-get代理
</p>
<p>
	sudo apt-get install viewglob #一个shell相关的工具
</p>
<p>
	sudo apt-get instll eva amsn wengophone skype licq #安装im语音视频聊天软件
</p>
<p>
	sudo apt-get install beryl emerald emerald-themes#安装beryl
</p>
<p>
	sudo apt-get install gkrell* #很好的一个东东，装了就知道了
</p>
<p>
	sudo apt-get install conky# 有意思的一个系统monitor
</p>
<p>
	sudo apt-get install imagemagick# e主席(ee)大力推荐的批量修改图片的软件，现在论坛个别人在搞个人崇拜
</p>
<p>
	sudo apt-get install kolourpaint #又一个画图软件
</p>
<p>
	sudo apt-get install tuxpaint #好玩的画图软件
</p>
<p>
	rgbpaint #getdeb上有，最弱，但很小巧的画图软件
</p>
<p>
	mtpaint（getdeb上有，比gpaint强一点的画图软件）。
</p>
<p>
	sudo apt-get install rbot # ruby写的irc bot
</p>
<p>
	sudo apt-get install gqview #一个图片浏览器
</p>
<p>
	sudo apt-get install ksnapshot #一个抓屏程序
</p>
<p>
	sudo apt-get install vncserver #vncserver,vncview默认已经安装了
</p>
<p>
	sudo apt-get install tightvncserver tightvnc-java #另一个vnc
</p>
<p>
	sudo apt-get install vim-full #vim无法高亮显示,然后编辑 /etc/vim/vimrc,取消syntax on前面的"注释符号
</p>
<p>
	sudo apt-get install firestarter #图形接口的防火墙设定程序
</p>
<p>
	sudo apt-get install flashplugin-nonfree #安装浏览器Flash插件
</p>
<p>
	sudo apt-get install gftp kftpgrabber filezilla kasablanca#安装ftp客户端
</p>
<p>
	sudo apt-get install build-essential # 安装编译环境
</p>
<p>
	sudo apt-get install mysql-client mysql-server #安装mysql服务
</p>
<p>
	sudo apt-get apache2 mysql-server php4 php4-gd php4-mysql #安装LAMP
</p>
<p>
	sudo apt-get install d4x azureus amule ktorrent mldonkey-servermldonkey-gui rtorrent qtorrent bittornado-gui bittorrent-guitorrentflux deluge-torrent# 几个下载/bt/电驴 工具
</p>
<p>
	sudo apt-get install sysstat #安装sar, iostat and mpstat
</p>
<p>
	sudo apt-get install xvidcap gnome-splashscreen-manager #安装屏幕视频录制 / splash 管理
</p>
<p>
	sudo apt-get install istanbul #Desktop session recorder
</p>
<p>
	sudo apt-get install sysinfo xsysinfo#系统信息查看
</p>
<p>
	sudo apt-get install scrot imagemagick #截图工具
</p></div>
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
    </div>
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