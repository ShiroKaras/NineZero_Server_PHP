<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/Public/dist/admin-commons.css"/>
    
    <link rel="stylesheet" href="/Public/dist/admin-reward-list.css">
    <style>
        tr td:nth-child(1) {
            width: 178px;
        }

        tr td:nth-child(3) {
            width: 40px;
        }

        .fullscreen-modal iframe {
            width: 100%;
            height: 100%;
        }

        .am-figure-zoomable:after {
            display: none !important;
        }
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
        
    <div ng-controller="AppCtrl" ng-cloak>
        <span ng-init="queryUrl = '<?php echo U('Reward/items');?>'"></span>
        <span ng-init="removeUrl = '<?php echo U('Reward/remove');?>'"></span>
        <span ng-init="newIdUrl = '<?php echo U('Reward/newReward');?>'"></span>
        <div class="am-padding">

            <div >
                <div class="am-g am-margin-vertical">
                    <div class="am-u-md-4">
                        <form class="am-input-group am-input-group-sm">
                            <select class="am-form-field" ng-options="reward as reward.reward_id for reward in rewards track by reward.reward_id" id="key" ng-model="reward" name="rewardId">
                            </select>
                            <span class="am-input-group-label" id="query" ng-click="query()"><i class="am-icon am-icon-search"></i></span>
                        </form>
                    </div>
                    <div class="am-u-md-4 am-u-offset-2 am-text-right">
                        <span class="am-btn am-btn-primary am-radius" ng-click="newId()">新建reward_id</span>
                    </div>
                </div>
                <div class="am-g">
                    <div class="am-u-md-10 am-u-md-centered">
                        <div ng-show="!dirty" class="am-alert am-alert-secondary am-alert-sm">请在左上角选择编号</div>
                        <div ng-show="dirty">
                            <div ng-repeat="row in list track by $index" ng-controller="ItemCtrl" >
                                <div class="am-margin am-g sdl-item am-padding am-padding-bottom-xs" >
                                    <span ng-init="detailUrl = '<?php echo U('Reward/itemDetail');?>'"></span>
                                    <p>
                                        <strong class="am-text-lg">{{row.item_name}}</strong>
                                        <!-- <span class="am-badge am-badge-success am-text-lg">{{row.item_type | rewardType}}</span> -->
                                    </p>
                                    <div class="am-g">
                                        <div class="am-u-md-4 ">
                                            <span class="am-badge am-badge-success ">{{row.item_type | rewardType}}</span>
                                        </div>
                                        <div class="am-u-md-4 am-text-center">
                                            份数: x {{row.num}}
                                        </div>
                                        <div class="am-u-md-4 am-text-right">
                                            有效日期: {{row.expire_time}}
                                        </div>
                                    </div>
                                    <div class="" ng-show="expaned">
                                        <div class="am-divider am-divider-default"></div>
                                        <div class="am-g">
                                            <div class="am-u-md-12" ng-show="row.item_type  == 3">
                                                <div class="sdl-item-header">
                                                    <p >
                                                        <small class="am-badge am-badge-xs am-badge-primary">{{row.item.ticket_id}}
                                                        </small>
                                                        {{row.item.title}}
                                                    </p>
                                                </div>
                                                <div class="am-divider am-divider-default"></div>
                                                <div>
                                                    <p style="margin: 0;">
                                                        <span class="am-badge am-badge-xs am-badge-primary">{{row.item.type_str}}
                                                        </span>
                                                        <span class="am-badge am-badge-xs am-badge-primary">上限数量:{{row.item.total_num}}
                                                        </span>
                                                        <br/ >
                                                        <span>地址: {{row.item.address}}</span>
                                                        <br/ >
                                                        <span>电话: {{row.item.mobile}}</span>
                                                    </p>
                                                </div>

                                            </div>
                                        </div>


                                        <div class="am-g" ng-if="row.item_type >= 1 && row.item_type <= 2 ">
                                            <div class="am-u-md-2" >
                                                <figure data-am-widget="figure" class="am am-fr am-figure am-figure-default " data-am-figure="{  pureview: 'true' }">
                                                    <img ng-src={{row.item.pic}} alt="{{row.item.name}}" class="am-img-responsive am-radius sdl-item-main-img">
                                                </figure>
                                            </div>
                                            <div class="am-u-md-10">
                                                <div class="am-cf sdl-item-header" >
                                                    <figure ng-show="row.item.icon" data-am-widget="figure" class="am am-fr am-figure am-figure-default " data-am-figure="{  pureview: 'true' }">
                                                        <img ng-src="{{row.item.icon}}" alt="" class="sdl-item-icon am-circle">
                                                    </figure>
                                                    <p class="am-fl"><small class="am-badge am-badge-xs am-badge-primary">{{row.item.id}}</small>{{row.item.name}}</p>
                                                </div>
                                                <div class="am-divider am-divider-default"></div>
                                                <p  ng-show="row.item.type"><small class="am-badge am-badge-xs am-badge-primary">{{row.item.type}}</small><small ng-show="row.item.type == 2">上限数量{{row.item.num}}</small></p>
                                                <div ng-bind-html="row.item.desc">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="am-divider am-divider-default"></div>
                                    <div class="sdl-item-actions am-text-right">
                                        <span class="am-btn am-btn-warning am-btn-xs am-radius" ng-click="expand()" ng-show="row.item_type >= 1" >{{!expaned ? "展开" : "收起"}}详情</span>
                                        <a ng-href="{{row.url}}" class="am-btn am-btn-xs am-radius am-btn-success">编辑</a>
                                        <span class="am-btn am-btn-warning am-btn-xs am-radius" ng-click="remove(row, $index)">删除</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="am-g" ng-show="reward">
                    <div class="am-u-md-12 am-text-right ">
                        <a ng-href="{{reward.url}}"  class="am-btn am-btn-primary am-radius">添加奖励项</a>
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

    <script type="application/json" id="reward">
        <?php echo ($rewardIds); ?>
    </script>
    <script src="/Public/dist/admin-reward-list.js"></script>

</body>
</html>