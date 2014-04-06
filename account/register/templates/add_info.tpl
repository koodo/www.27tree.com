<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>注册 - 二叉树社区欢迎你</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="Content-Language" content="zh-cn" />
        <meta name="robots" content="all" />
        <meta name="author" content="itsrcs.com" />
        <meta name="Copyright" content="Copyright itsrcs.com All Rights Reserved." />
        <link rel="stylesheet" type="text/css" href="/sources-gz/core.css.php?v=5-7-2" />
        <link rel="stylesheet" type="text/css" href="/account/register/signUp.css?v=5-7" />
        <script src="/jss/jquery-min.js"></script>
        <script src="/jss/coref.js?v=5-7-2"></script>
        <script src="/jss/dojo/dojo.js"></script>
        <script src="/account/register/js/add_info.js?v=5-7"></script>
    </head>
    <body>
        {include file={$PATH.nav_path}}
        <div class="sdCenter Shadow borderR10" id="sign-info-wapp" style="">
            <span class="RedBar" style="margin:0 10px;margin-right:20px;">
                <span class="RedBar-in">在下面填入个人信息</span>
                <span class="RedBar-in-r"><a href="/account/register/foll" id="skip-btn" class="Gbtn">跳过</a></span>
            </span>
            <div id="am-if-wapp">
                <form id="am-if-log-form" action="#" method="post">
                    <input type="hidden" value="change" name="mod" id="modx"/>
                    <!--FORM_POST_DATA： 'sex','ages','job','prov','city','self-info','qqnumber' -->
                    <div class="am-cii">
                        <label for="sex" class="log-label">性别：</label>
                        <div id="select-sex"></div>
                        <!--<select class="ex" name="sex">
                            <option>男</option>
                            <option>女</option>
                            <option>保密</option>
                        </select>-->
                    </div>
                    <div class="am-cii validate-f">
                        <label for="ages" class="log-label">年龄：</label>
                        <span class="sdText sdText-min">
                            <input id="age" name="ages" type="text" onkeyup="validate_userinfo(this,'ages')"/>
                        </span>
                        <span class="validate-span"></span>
                    </div>
                    <div class="am-cii validate-f">
                        <label>扣扣：</label>
                        <span class="sdText sdText-min">
                            <input id="qqnumber"
                                   name="qqnumber"
                                   type="text"
                                   onkeyup="validate_userinfo(this,'qq')"/>
                        </span>
                        <span class="validate-span"></span>
                    </div>
                    <div class="am-cii">
                        <label>职业：</label>
                        <div id="select-job"></div>
                        <!--
                        <select class="ex" name="job" id="job-list">
                            <option>软件工程师</option>
                            <option>系统分析师</option>
                            <option>系统设计师</option>
                            <option>软件测试工程师</option>
                            <option>系统管理工程师</option>
                            <option>数据库管理工程师</option>
                            <option>售前技术工程师</option>
                            <option>需求分析工程师</option>
                            <option>WEB开发工程师</option>
                            <option>程序美工</option>
                            <option>网站营维工程师</option>
                            <option>网站架构工程师</option>
                            <option>手机应用软件开发工程师</option>
                            <option>手机游戏开发工程师</option>
                            <option>WAP开发工程师</option>
                            <option>在校大学生</option>
                            <option>其他领域人员</option>
                            <option>无业游民</option>
                        </select>-->
                    </div>
                    <div class="am-cii">
                        <label>地址：</label>
                        <select class="ex ex2" id="pro-list" onchange="togger_city(this.value)" name="prov">
                            <option disabled="true">加载中</option>
                        </select>
                        <select class="ex ex2" id="city-list" name="city">
                            <option disabled="true">加载中</option>
                        </select>
                    </div>
                    <div class="am-cii">
                        <label style="float:left;">技能：</label>
                        <input type="hidden" name="lan" value="" id="langsubmit" />
                        <div style="line-height:24px;font-size:14px;margin-left:55px;">
                            {$language_list}
                            <div class="clear"></div>
                        </div>
                    </div>
                    <div class="am-cii validate-f">
                        <label>公司：</label>
                        <span class="sdText sdText-min">
                            <input id="inc"
                                   name="inc"
                                   type="text"
                                   class="info-input"
                                   onkeyup="validate_userinfo(this,'inc')"/>
                        </span>
                        <span class="validate-span"></span>
                    </div>

                    <div style="margin-top:15px;">
                        <a class="next-cp borderR5" id="add-info-btn" href="javascript:;"><span>保存资料</span></a>
                    </div>
                </form>
            </div>
        </div>
        {include file={$PATH.stat_path}}
    </body>
</html>