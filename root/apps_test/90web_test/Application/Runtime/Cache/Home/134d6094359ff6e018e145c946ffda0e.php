<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/Public/dist/admin-commons.css"/>
    
    <link rel="stylesheet" href="/Public/dist/admin-ticket-list.css">
    <style>
    </style>

</head>
<body>
<header class="am-topbar admin-header am-topbar-fixed-top">
    <div class="am-topbar-brand">
        <!-- <img src="/Public/img/am-logo.png" class="logo"> -->
        后台管理中心
    </div>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only" data-am-collapse="{target: '#topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="topbar-collapse">

        <ul class="am-nav am-nav-pills am-topbar-nav am-topbar-right admin-header-list">
            <li><a href="javascript:;" style="height: 50px;"><span class="am-icon-user am-success am-icon-btn am-icon-btn-sm" style="margin: 9px 0;;"></span><?php echo ($CurrentUser['login_name']); ?> </a></li>
            <!-- <li><a href="javascript:;">登录</a></li> -->
            <li><a href="<?php echo U('Auth/logout');?>">注销</a></li>
        </ul>
    </div>
</header>

<div class="am-cf admin-main">
    <!-- sidebar start -->
    <div class="admin-sidebar am-offcanvas" id="admin-offcanvas">
        <div class="am-offcanvas-bar admin-offcanvas-bar">
            <ul class="am-list admin-sidebar-list">
    <li><a href="/"><span class="am-icon-home"></span> 首页</a></li>
    <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-user'}">
            用户管理
            <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-user">
            <li>
                <a href="<?php echo U('User/cityQuery');?>" class="am-cf">城市用户数查询</a>
            </li>
        </ul>
    </li>
    <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-question'}">
            题目管理
            <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-question">
            <li>
                <a href="<?php echo U('Question/index', ['citycode' => '010']);?>" class="am-cf">北京题目详情</a>
            </li>
            <li>
                <a href="<?php echo U('Question/index', ['citycode' => '021']);?>" class="am-cf">上海题目详情</a>
            </li>
            <li>
                <a href="<?php echo U('Question/save');?>" class="am-cf">添加题目</a>
            </li>
            <!-- <li>
                <a href="#" class="am-cf">AR管理</a>
            </li> -->
        </ul>
    </li>
    <?php if($CurrentUser['type'] == MANAGER_ADMIN): ?><li class="admin-parent">
            <a class="am-cf" data-am-collapse="{target: '#collapse-manager'}">
                后台人员管理
                <span class="am-icon-angle-right am-fr am-margin-right"></span>
            </a>
            <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-manager">
                <li>
                    <a href="<?php echo U('manager/list');?>" class="am-cf">列表</a>
                </li>
                <li>
                    <a href="<?php echo U('manager/save');?>" class="am-cf">添加人员</a>
                </li>
            </ul>
        </li><?php endif; ?>

    <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-nav1'}">
            推送管理
            <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-nav1">
            <!-- <li>
                <a href="#" class="am-cf">推送提示</a>
            </li> -->
            <!-- <li>
                <a href="#" class="am-cf">推送文章</a>
            </li> -->
            <!-- <li>
                <a href="<?php echo U('Push/');?>" class="am-cf">推送小贴士</a>
            </li> -->
            <li>
                <a href="<?php echo U('Push/save');?>" class="am-cf">推送通知</a>
            </li>
            <li>
                <a href="<?php echo U('Push/pushRestArticle');?>" class="am-cf">推送休息日消息</a>
            </li>
        </ul>
    </li>
    <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-prop'}">
            道具管理
            <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-prop">
            <li>
                <a href="<?php echo U('Prop/index');?>" class="am-cf">列表</a>
            </li>
            <li>
                <a href="<?php echo U('Prop/save');?>" class="am-cf">新建</a>
            </li>
        </ul>
    </li>
    <li class="admin-parent">
        <a class="am-cf" href="<?php echo U('Picture/save');?>">
            图片管理
        </a>
    </li>
    <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-pet'}">
            零仔管理
            <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-pet">
            <li>
                <a href="<?php echo U('Pet/index');?>" class="am-cf">列表</a>
            </li>
            <li>
                <a href="<?php echo U('Pet/save');?>" class="am-cf">新建</a>
            </li>
        </ul>
    </li>
    <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-article'}">
            文章管理
            <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-article">
            <li>
                <a href="<?php echo U('Article/index');?>" class="am-cf">列表</a>
            </li>
            <li>
                <a href="<?php echo U('Article/save');?>" class="am-cf">新建</a>
            </li>
        </ul>
    </li>
    <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-ticket'}">
            礼券管理
            <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-ticket">
            <li>
                <a href="<?php echo U('Ticket/index');?>" class="am-cf">列表</a>
            </li>
            <li>
                <a href="<?php echo U('Ticket/save');?>" class="am-cf">新建</a>
            </li>
        </ul>
    </li>
    <li class="admin-parent">
        <a class="am-cf" data-am-collapse="{target: '#collapse-reward'}">
            奖励管理
            <span class="am-icon-angle-right am-fr am-margin-right"></span>
        </a>
        <ul class="am-list am-collapse admin-sidebar-sub" id="collapse-reward">
            <li>
                <a href="<?php echo U('Reward/index');?>" class="am-cf">列表</a>
            </li>

        </ul>
    </li>
    <li><a href="<?php echo U('Exchange/index');?>">道具兑换页</a></li>
    <li><a href="<?php echo U('Feedback/index');?>">反馈</a></li>
    <li><a href="<?php echo U('Medal/index');?>">勋章管理</a></li>

</ul>

        </div>
    </div>
    <!-- sidebar end -->

    <!-- content start -->
    <div class="admin-content">
        
    <div ng-controller="AppCtrl">
        <span ng-init="removeUrl = '<?php echo U('Ticket/remove');?>'"></span>
        <div class="am-padding">
            <div simple-list ng-model="list" sdl-on="sdlOn" sdl-row-id="ticket_id" sdl-search-attrs="title">

                <div class="am-g am-margin-vertical">
                    <div class="am-u-md-4 am-u-md-offset-7 am-text-right">
                        <div class="am-input-group am-input-group-sm">
                            <input type="text" class="am-form-field" sdl-search-input>
                            <span class="am-input-group-label" sdl-search-btn><i class="am-icon-search"></i></span>
                        </div>
                    </div>

                </div>
                <div class="am-g">
                    <div class="am-u-md-10 am-u-md-centered">

                        <div sdl-template>
                            <div class="am-margin am-g sdl-item am-padding am-padding-bottom-xs" ng-controller="ItemCtrl" ng-init="expanded = false">
                                <span ng-init="descUrl = '<?php echo U('Ticket/desc');?>'"></span>
                                <div class="am-g" >
                                    <div class="am-u-md-12">
                                        <div class="am-cf sdl-item-header">
                                            <figure data-am-widget="figure" class="am am-fr am-figure am-figure-default " data-am-figure="{  pureview: 'true' }">
                                                <img ng-src="{{row.pic}}" alt="{{row.title}}" class="sdl-item-icon am-circle">
                                            </figure>
                                            <p class="am-fl">
                                                <small class="am-badge am-badge-xs am-badge-primary">{{row.ticket_id}}</small>
                                                {{row.title}}
                                            </p>
                                        </div>
                                        <div class="am-divider am-divider-default"></div>
                                        <div>
                                            <p style="margin: 0;">
                                                <span class="am-badge am-badge-xs am-badge-primary">{{row.type_str}}
                                                </span>
                                                <span class="am-badge am-badge-xs am-badge-primary">上限数量:{{row.total_num}}
                                                </span>
                                                <br/ >
                                                <span>地址: {{row.address}}</span>
                                                <br/ >
                                                <span>电话: {{row.mobile}}</span>
                                            </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="am-divider am-divider-default"></div>
                                <div class="sdl-item-actions am-text-right">
                                    <span class="am-btn am-btn-danger am-btn-xs am-radius"
                                          sdl-row-click="remove">删除</span>
                                </div>

                            </div>
                        </div>


                        <div class="am-cf">
                            <span class="am-fl">共<span sdl-total-label></span>条 <span sdl-total-page></span>页 第<span
                                    sdl-page></span>页</span>
                            <div class="am-btn-group am-fr" role="group" aria-label="...">
                                <button type="button" class="am-btn am-btn-xs am-btn-default" sdl-prev-btn>上一页</button>
                                <button type="button" class="am-btn am-btn-xs am-btn-default" sdl-next-btn>下一页</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>
    <!-- content end -->

</div>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Public/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<script src="/Public/dist/admin-commons.js"></script>

    <script type="application/json" id="data"><?php echo ($list); ?></script>
    <script src="/Public/dist/admin-ticket-list.js"></script>

</body>
</html>