<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/Public/dist/admin-commons.css"/>
    
    <link rel="stylesheet" href="/Public/dist/admin-ticket-save.css">

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
        

    <div ng-controller="FormCtrl" ng-loak>
        <div class="am-padding-lg">
            <div class="am-panel am-panel-default ">
                <div class="am-panel-hd">
                    <h3 class="am-panel-title">
                        <i class="am-icon am-icon-file-text am-margin-right-sm"></i>礼券编辑</h3>
                </div>
                <form name="Form" action="" method="post" class="am-form am-form-horizontal am-margin-bottom-0">
                    <div class="am-panel-bd">
                        <div class="am-g">
                            <div class="am-u-sm-11 am-u-md-11 am-u-lg-11 am-u-sm-centered am-u-md-centered am-u-lg-centered">
                                <div class="am-form-group">
                                    <label class="am-u-sm-2 am-form-label">礼券名称<span class="am-text-danger am-margin-left-xs">*</span>
                                    </label>
                                    <div class="am-u-sm-10">
                                        <input type="text" placeholder="礼券名称" name="title" required value="<?php echo ($data['title']); ?>">
                                        <div class="am-alert am-alert-danger am-hide">请填写礼券名称</div>
                                    </div>
                                </div>


                                <div class="am-form-group">
                                    <label class="am-u-sm-2 am-form-label">图片<span
                                            class="am-text-danger am-margin-left-xs">*</span></label>
                                    <div class="am-u-sm-10">
                                        <input type="hidden" name="pic" value="<?php echo ($data['pic']); ?>" class="am-validate uploaded-img" required>
                                        <div>
                                            <?php if(isset($data['pic'])): ?><img src="<?php echo ($data['pic']); ?>" class="am-img-responsive upload-thumbnails" data-uploaded="true">
                                                <?php else: ?>
                                                <img src="/Public/empty.png" class="am-img-responsive upload-thumbnails"><?php endif; ?>
                                        </div>
                                        <div class="am-margin-xs"></div>
                                        <span class="upload-picker">上传图片</span>
                                        <div class="am-alert am-alert-danger am-hide">请上传图片</div>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label class="am-u-sm-2 am-form-label">封面<span
                                            class="am-text-danger am-margin-left-xs">*</span></label>
                                    <div class="am-u-sm-10">
                                        <input type="hidden" name="ticket_cover" value="<?php echo ($data['ticket_cover']); ?>" class="am-validate uploaded-img" required>
                                        <div>
                                            <?php if(isset($data['ticket_cover'])): ?><img src="<?php echo ($data['ticket_cover']); ?>" class="am-img-responsive upload-thumbnails" data-uploaded="true">
                                                <?php else: ?>
                                                <img src="/Public/empty.png" class="am-img-responsive upload-thumbnails"><?php endif; ?>
                                        </div>
                                        <div class="am-margin-xs"></div>
                                        <span class="upload-picker">上传封面</span>
                                        <div class="am-alert am-alert-danger am-hide">请上传封面</div>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label class="am-u-sm-2 am-form-label">上限设置<span class="am-text-danger am-margin-left-xs">*</span>
                                    </label>
                                    <div class="am-u-sm-10">
                                        <label class="am-checkbox-inline">
                                            <input ng-model="type" type="radio" name="type" value="1" checked >
                                            无上限
                                        </label>
                                        <label class="am-checkbox-inline">
                                            <input ng-model="type" type="radio" name="type" value="2">
                                            有上限
                                        </label>
                                        <div class="am-alert am-alert-danger am-hide">请选择类型</div>
                                    </div>
                                </div>

                                <div class="am-form-group" ng-show="type == 2">
                                    <label class="am-u-sm-2 am-form-label">上限数量<span class="am-text-danger am-margin-left-xs">*</span>
                                    </label>
                                    <div class="am-u-sm-10">
                                        <input type="number" no-model="num" class="am-validate" placeholder="上限数量" name="total_num" required value="<?php echo ($data['total_num']); ?>">
                                        <div class="am-alert am-alert-danger am-hide">请填写上限数量</div>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label class="am-u-sm-2 am-form-label">地址<span class="am-text-danger am-margin-left-xs">*</span>
                                    </label>
                                    <div class="am-u-sm-10">
                                        <input type="text" placeholder="地址" name="address" required value="<?php echo ($data['address']); ?>">
                                        <div class="am-alert am-alert-danger am-hide">请填写地址</div>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label class="am-u-sm-2 am-form-label">电话<span class="am-text-danger am-margin-left-xs">*</span>
                                    </label>
                                    <div class="am-u-sm-10">
                                        <input type="text" placeholder="电话" name="mobile" required value="<?php echo ($data['mobile']); ?>" pattern="^[0-9]{11}$">
                                        <div class="am-alert am-alert-danger am-hide">请填写电话</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="am-panel-footer">
                        <div class="am-g">
                            <div class="am-u-sm-11 am-u-md-11 am-u-lg-11 am-u-sm-centered am-u-md-centered am-u-lg-centered am-text-right">
                                <button type="submit" class="am-btn am-btn-success am-radius" ng-disabled="submitted">
                                    提交
                                </button>
                            </div>
                        </div>

                    </div>
                </form>
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

    <script src="/Public/dist/admin-ticket-save.js"></script>

</body>
</html>