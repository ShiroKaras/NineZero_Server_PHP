<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/Public/dist/admin-commons.css"/>
    
    <link rel="stylesheet" href="/Public/dist/admin-article-save.css">
    <style>
        .tpl-thumbnail .am-icon { display: none;}
        .tpl-thumbnail.active .am-icon { display: inline-block;}
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
        
    <div class="am-padding" ng-controller="AppCtrl">
        <span ng-init="petDataUrl = '<?php echo U('Pet/data');?>'"></span>
        <div class=" am-margin">
            <div class="am-panel am-panel-default " >
                <div class="am-panel-hd">
                    <h3 class="am-panel-title"><i class="am-icon am-icon-file-text am-margin-right-sm"></i>零仔文章编辑</h3>
                </div>
                <form action="" method="post" class="am-form am-form-horizontal am-margin-bottom-0">
                    <div class="am-panel-bd">

                        <input type="hidden" name="id" value="<?php echo ($id); ?>">
                        <input type="hidden" name="pet_id" value="<?php echo ($pet_id); ?>">

                        <div class="am-form-group">
                            <label class="am-u-sm-2 am-form-label">类型<span
                                    class="am-text-danger am-margin-left-xs">*</span></label>
                            <div class="am-u-sm-10">
                                <select required name="article_type" ng-model="type" ng-init="type = '<?php echo ($article['article_type']); ?>'">
                                    <option value="">请选择类型</option>
                                    <option value="1">零仔文章</option>
                                    <option value="2">休闲日文章</option>
                                    <option value="3">题目答案文章</option>
                                </select>
                                <div class="am-alert am-alert-danger am-hide">请选择类型</div>
                            </div>
                        </div>


                        <div class="am-form-group" ng-show="type && type < 3">
                            <label class="am-u-sm-2 am-form-label">文章主标题<span
                                    class="am-text-danger am-margin-left-xs">*</span></label>
                            <div class="am-u-sm-10">
                                <input type="text" placeholder="文章主标题" name="article_title" required
                                       value="<?php echo ($article['article_title']); ?>">
                                <div class="am-alert am-alert-danger am-hide">请填写文章主标题</div>
                            </div>
                        </div>

                        <div class="am-form-group" ng-show="type && type < 3">
                            <label class="am-u-sm-2 am-form-label">文章副标题<span
                                    class="am-text-danger am-margin-left-xs">*</span></label>
                            <div class="am-u-sm-10">
                                <input type="text" placeholder="文章副标题" name="article_subtitle" required
                                       value="<?php echo ($article['article_subtitle']); ?>">
                                <div class="am-alert am-alert-danger am-hide">请填写文章副标题</div>
                            </div>
                        </div>



                        <div class="am-form-group" ng-show="type && type == 1">
                            <label class="am-u-sm-2 am-form-label">零仔<span
                                    class="am-text-danger am-margin-left-xs">*</span></label>
                            <div class="am-u-sm-10">
                                <p ng-init="itemText = '<?php echo ($pet['pet_name']); ?>'">{{itemText}}</p>
                                <input type="hidden" class="am-validate" ng-required="type == 1" value="<?php echo ($pet['pet_id']); ?>" ng-init="itemId = '<?php echo ($data['item_pid']); ?>'" name="pet_id" ng-model="itemId">
                                <span  class="am-btn am-btn-primary am-radius" ng-click="modal()">选择零仔</span>
                                <div class="am-alert am-alert-danger am-hide">请选择零仔</div>
                            </div>
                        </div>

                        <div class="am-form-group">
                            <label class="am-u-sm-2 am-form-label">文章头图<span
                                    class="am-text-danger am-margin-left-xs">*</span></label>
                            <div class="am-u-sm-10">
                                <input type="hidden" name="article_pic"
                                       value="<?php echo ($article['article_pic']); ?>" class="uploaded-img  am-validate" required>
                                <div>
                                    <?php if(isset($article['article_pic'])): ?><img class="uploaded-thumbnail am-img-responsive" src="<?php echo ($article['article_pic']); ?>"
                                             data-uploaded="true">
                                        <?php else: ?>
                                        <img class="uploaded-thumbnail am-img-responsive" src="/Public/empty.png"><?php endif; ?>

                                </div>
                                <div class="am-margin-xs"></div>
                                <span class="upload-picker">上传图片</span>
                                <div class="am-alert am-alert-danger am-hide">请上传图片</div>
                            </div>
                        </div>

                        <div class="am-form-group" ng-show="type < 3">
                            <label class="am-u-sm-2 am-form-label">文章icon<span
                                    class="am-text-danger am-margin-left-xs">*</span></label>
                            <div class="am-u-sm-10">
                                <input type="hidden" name="article_icon"
                                       value="<?php echo ($article['article_icon']); ?>" class="uploaded-img {{ type < 3 ? 'am-validate' : ''}}" required>
                                <div>
                                    <?php if(isset($article['article_icon'])): ?><img class="uploaded-thumbnail am-img-responsive" src="<?php echo ($article['article_icon']); ?>"
                                              data-uploaded="true">
                                        <?php else: ?>
                                        <img class="uploaded-thumbnail am-img-responsive" src="/Public/empty.png"><?php endif; ?>

                                </div>
                                <div class="am-margin-xs"></div>
                                <span class="upload-picker">上传图片</span>
                                <div class="am-alert am-alert-danger am-hide">请上传图片</div>
                            </div>
                        </div>


                        <div class="am-form-group" ng-show=" type < 3">
                            <label class="am-u-sm-2 am-form-label">文章图1<span
                                    class="am-text-danger am-margin-left-xs">*</span></label>
                            <div class="am-u-sm-10">
                                <input type="hidden" name="article_pic_1"
                                       value="<?php echo ($article['article_pic_1']); ?>" class="uploaded-img {{ type < 3 ? 'am-validate' : ''}}" required>
                                <div>
                                    <?php if(isset($article['article_pic_1'])): ?><img class="uploaded-thumbnail am-img-responsive" src="<?php echo ($article['article_pic_1']); ?>"
                                             data-uploaded="true">
                                        <?php else: ?>
                                        <img class="uploaded-thumbnail am-img-responsive" src="/Public/empty.png"><?php endif; ?>

                                </div>
                                <div class="am-margin-xs"></div>
                                <span class="upload-picker">上传文章图1</span>
                                <div class="am-alert am-alert-danger am-hide">请上传文章图1</div>
                            </div>
                        </div>

                        <div class="am-form-group" ng-show="type < 3">
                            <label class="am-u-sm-2 am-form-label">文章图2<span
                                    class="am-text-danger am-margin-left-xs">*</span></label>
                            <div class="am-u-sm-10">
                                <input type="hidden" name="article_pic_2"
                                       value="<?php echo ($article['article_pic_2']); ?>" class="uploaded-img {{ type < 3 ? 'am-validate' : ''}}" required>
                                <div>
                                    <?php if(isset($article['article_pic_2'])): ?><img class="uploaded-thumbnail am-img-responsive" src="<?php echo ($article['article_pic_2']); ?>"
                                             data-uploaded="true">
                                        <?php else: ?>
                                        <img class="uploaded-thumbnail am-img-responsive" src="/Public/empty.png"><?php endif; ?>

                                </div>
                                <div class="am-margin-xs"></div>
                                <span class="upload-picker">上传文章图2</span>
                                <div class="am-alert am-alert-danger am-hide">请上传文章图2</div>
                            </div>
                        </div>


                        <div class="am-form-group">
                            <label class="am-u-sm-2 am-form-label">文章内容<span
                                    class="am-text-danger am-margin-left-xs">*</span></label>
                            <div class="am-u-sm-10">
                                <textarea class="am-validate" name="description" required id="editor"><?php echo ($article['article_desc']); ?></textarea>
                                <div class="am-alert am-alert-danger am-hide">请填写文章内容</div>
                            </div>
                        </div>
                    </div>

                    <div class="am-panel-footer">
                        <div class="am-form-group am-margin-top am-text-right am-margin-right">
                            <button type="submit" class="am-btn am-btn-success am-radius">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="am-modal am-modal-xl am-modal-no-btn" tabindex="-1" id="petModal">
            <div class="am-modal-dialog">
                <div class="am-modal-hd">
                    <a href="javascript: void(0)" class="am-close am-close-spin" data-am-modal-close><i class="am-icon am-icon-close am-text-danger"></i></a>
                </div>
                <div class="am-modal-bd">
                    <div simple-datatable ng-model="pets" sdt-action-col="actionColFactory" sdt-on="sdtOn" sdt-selected="sdtSelected">
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
                                        <th data-sdt-col="pet_id" width="160px">编号</th>
                                        <th data-sdt-col="pet_name">标题</th>
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

    <script type="text/x-handlebars-template" id="row-btn">
        <td>
            <div class="am-btn-group am-btn-group-xs">
                <button type="button" class="am-btn am-btn-primary" sdt-row-click="select" >选中</button>
            </div>
        </td>
    </script>
    <script src="/Public/dist/admin-article-save.js"></script>

</body>
</html>