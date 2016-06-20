<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/Public/dist/admin-commons.css"/>
    
    <!-- <link rel="stylesheet" href="/Public/dist/admin-reward-save.css"> -->

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
        <span ng-init="petUrl = '<?php echo U('pet/data');?>'"></span>
        <span ng-init="propUrl = '<?php echo U('prop/data');?>'"></span>
        <span ng-init="ticketUrl = '<?php echo U('ticket/data');?>'"></span>
        <div class="am-padding-lg">
            <div class="am-panel am-panel-default " >
                <div class="am-panel-hd">
                    <h3 class="am-panel-title"><i class="am-icon am-icon-file-text am-margin-right-sm"></i>题目奖励编辑</h3>
                </div>
                <form name="Form" action="" method="post" class="am-form am-form-horizontal am-margin-bottom-0">
                    <div class="am-panel-bd">
                        <div class="am-g">
                            <div class="am-u-sm-11 am-u-md-11 am-u-lg-11 am-u-sm-centered am-u-md-centered am-u-lg-centered">
                                <input type="hidden" name="reward_id" value="<?php echo ($reward_id); ?>">
                                <input type="hidden" name="item_id" value="<?php echo ($data['item_id']); ?>">
                                <div class="am-form-group">
                                    <label class="am-u-sm-2 am-form-label">奖励名称<span
                                            class="am-text-danger am-margin-left-xs">*</span></label>
                                    <div class="am-u-sm-10">
                                        <input type="text" placeholder="奖励名称" name="item_name" required
                                               value="<?php echo ($data['item_name']); ?>">
                                        <div class="am-alert am-alert-danger am-hide">请填写奖励名称</div>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label class="am-u-sm-2 am-form-label">有效日期<span
                                            class="am-text-danger am-margin-left-xs">*</span></label>
                                    <div class="am-u-sm-10">
                                        <input type="number" placeholder="有效期" name="expire_time" required
                                               value="<?php echo ($data['expire_time']); ?>">
                                        <div class="am-alert am-alert-danger am-hide">请填写有效期</div>
                                    </div>
                                </div>

                                <div class="am-form-group">
                                    <label class="am-u-sm-2 am-form-label">类型<span
                                            class="am-text-danger am-margin-left-xs">*</span></label>
                                    <div class="am-u-sm-10">
                                        <select required name="item_type" ng-model="type" ng-init="type = '<?php echo ($data['item_type']); ?>'">
                                            <option value="">请选择类型</option>
                                            <option value="0">金币</option>
                                            <option value="3">礼券</option>
                                            <option value="1">零仔</option>
                                            <option value="2">道具</option>
                                        </select>

                                        <div class="am-alert am-alert-danger am-hide">请选择类型</div>
                                    </div>
                                </div>

                                <div class="am-form-group" ng-show="type >= 1">
                                    <label class="am-u-sm-2 am-form-label">{{typeStr}}<span
                                            class="am-text-danger am-margin-left-xs">*</span></label>
                                    <div class="am-u-sm-10">
                                        <p ng-init="itemText = '<?php echo ($data['pname']); ?>'">{{itemText}}</p>
                                        <input type="hidden" class="am-validate" ng-required="type >= 1" value="<?php echo ($data['extra_data']); ?>" ng-init="itemId = '<?php echo ($data['extra_data']); ?>'" name="item_pid" ng-model="itemId">
                                        <span  class="am-btn am-btn-primary am-radius" ng-click="modal()">选择{{typeStr}}</span>
                                        <div class="am-alert am-alert-danger am-hide">请选择{{typeStr}}</div>
                                    </div>
                                </div>

                                <div class="am-form-group" ng-show="type && type < 1">
                                    <label class="am-u-sm-2 am-form-label">{{typeStr}}个数<span
                                            class="am-text-danger am-margin-left-xs">*</span></label>
                                    <div class="am-u-sm-10">
                                        <input type="number"  name="item_num" required
                                               value="<?php echo ($data['item_num']); ?>" class="am-validate" ng-model="num" ng-init="num = '<?php echo ($data['item_num']); ?>'">
                                        <div class="am-alert am-alert-danger am-hide">请填写{{typeStr}}个数</div>
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

        <div class="am-modal am-modal-xl am-modal-no-btn" tabindex="-1" id="selectModal">
            <div class="am-modal-dialog">
                <div class="am-modal-hd">
                    <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close><i class="am-icon am-icon-close am-text-danger"></i></a>
                </div>
                <div class="am-modal-bd">
                    <div simple-datatable ng-model="datalist" sdt-action-col="actionColFactory" sdt-on="sdtOn" sdt-selected="sdtSelected">
                        <p class="am-alert am-margin-horizontal am-alert-secondary am-text-left">当前选择: {{itemText}}</p>

                        <div class="am-g" style="margin-top: 20px; margin-bottom: 20px;">
                            <div class="am-u-md-4 am-u-md-offset-8">
                                <div class="am-input-group">
                                    <input type="text" class="am-form-field" sdt-search-input>
                                    <span sdt-search-btn class="am-input-group-label"><i class="am-icon-search"></i></span>
                                </div>
                            </div>
                        </div>

                        <div class="am-g">
                            <div class="am-u-md-12">
                                <table class="am-table am-table-striped am-table-hover am-table-bordered center-table table-md-img">
                                    <thead>
                                    <tr>
                                        <th data-sdt-col="id" width="160px">编号</th>
                                        <th data-sdt-col="name">标题</th>
                                        <th style="width: 80px;"></th>
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
            </div>
        </div>
    </div>

    <script type="text/x-handlebars-template" id="row-btn">
        <td>
            <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-primary" sdt-row-click="select" >选中</button>
            </div>
        </td>
    </script>
    <script type="text/html" id="img-template">
        <div>
            <figure data-am-widget="figure" class="am am-figure am-figure-default "   data-am-figure="{  pureview: 'true' }">
                <img src="{{src}}"/>
            </figure>
        </div>

    </script>


    </div>
    <!-- content end -->

</div>
<!--[if lt IE 9]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/Public/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->

<script src="/Public/dist/admin-commons.js"></script>

    <script src="/Public/dist/admin-reward-save.js"></script>

</body>
</html>