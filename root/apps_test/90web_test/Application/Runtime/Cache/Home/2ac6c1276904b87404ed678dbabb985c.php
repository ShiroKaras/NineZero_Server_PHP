<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/Public/dist/admin-commons.css"/>
    
    <!-- <link rel="stylesheet" href="/Public/dist/admin-article-list.css"> -->
    <style>
        tr td:nth-child(1) { width: 178px;}
        tr td:nth-child(4) { width: 300px;}
        #windowModal iframe { width: 100%; height: 100%;}
        .am-popup-inner {padding-top: 0;}
        .am-popup-bd {padding: 0;}
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
        <span ng-init="removeUrl = '<?php echo U('Article/remove');?>'"></span>
        <span ng-init="pushUrl = '<?php echo U('Push/pushArticle');?>'"></span>
        <div class="am-padding" >
            <div simple-datatable ng-model="list" sdt-row-id="article_id" sdt-action-col="actionColFactory" sdt-on="sdtOn" sdt-selected="sdtSelected">
                <div class="am-g am-margin-vertical">
                    <div class="am-u-md-4">
                        <a href="<?php echo U('Article/save');?>" class="am-btn am-btn-primary am-radius">添加文章</a>
                    </div>
                    <div class="am-u-md-4 ">
                        <div class="am-input-group am-input-group-sm">
                            <span class="am-input-group-label">链接</span>
                            <input type="text" class="am-form-field" id="copyInput">
                        </div>
                    </div>
                    <div class="am-u-md-4 ">
                        <div class="am-input-group am-input-group-sm">
                            <input type="text" class="am-form-field" sdt-search-input>
                            <span class="am-input-group-label" sdt-search-btn><i class="am-icon-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="am-g">
                    <div class="am-u-md-12 am-u-lg-12">
                        <table class="am-table am-table-striped am-table-hover am-table-bordered center-table table-md-img">
                            <thead>
                            <tr>
                                <th data-sdt-col="article_id" width="160px">编号</th>
                                <th data-sdt-col="article_title">标题</th>
                                <th data-sdt-col="article_type_str">类型</th>
                                <!-- <th data-sdt-col="article_full_url">链接</th> -->
                                <th style="width: 160px;"></th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                        <div class="am-cf">
                            <span class="am-fl">共<span sdt-total-label></span>条 <span sdt-total-page></span>页 第<span sdt-page></span>页</span>
                            <div class="am-btn-group am-fr" role="group" aria-label="...">
                                <button type="button" class="am-btn am-btn-default" sdt-prev-btn>上一页</button>
                                <button type="button" class="am-btn am-btn-default" sdt-next-btn>下一页</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="am-popup" id="windowModal">
          <div class="am-popup-inner">
            <!-- <div class="am-popup-hd">
              <h4 class="am-popup-title">{{modalData.pet_id}}</h4>
              <span data-am-modal-close class="am-close">&times;</span>
            </div> -->
            <div class="am-popup-bd">
                <iframe ng-src="{{windowSrc}}" ></iframe>
            </div>
          </div>
        </div>
        <!-- <div class="am-modal am-modal-no-btn fullscreen-modal" tabindex="-1" id="windowModal">
            <div class="am-modal-dialog">
                <div class="am-modal-hd">
                    <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close><i class="am-icon am-icon-close am-text-danger"></i></a>
                </div>
                <div class="am-modal-bd">
                    <iframe ng-src="{{windowSrc}}" ></iframe>
                </div>
            </div>
        </div> -->
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
    <script type="text/x-handlebars-template" id="row-btn">
        <td>
            <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-primary" sdt-row-click="look" >查看</button>
                <a ng-href="{{row.editUrl}}" class="am-btn am-btn-success">编辑</a>
                <button type="button" class="am-btn am-btn-default" sdt-row-click="push" ng-show="row.article_type == 1">推送</button>
                <button type="button" class="am-btn am-btn-warning" sdt-row-click="remove" >删除</button>
                <button type="button" class="am-btn am-btn-default" sdt-row-click="copy" >复制链接</button>
            </div>
        </td>
    </script>
    <script src="/Public/dist/admin-article-list.js"></script>

</body>
</html>