<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Amaze UI Admin index Examples</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="renderer" content="webkit">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="stylesheet" href="/Public/dist/admin-commons.css"/>
    
    <link rel="stylesheet" href="/Public/dist/admin-question-save.css">

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
        
    <div class="am-padding-top">
        <span id="uploadUrl" class="am-hide"><?php echo U('upload/secret');?></span>
        <div class="am-g">
            <div class="am-u-sm-10">
                <form action="" method="post" class="am-form am-form-horizontal">
                    <input type="hidden" name="qid" value="<?php echo ($question['qid']); ?>">
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">章节</label>
                        <div class="am-u-sm-9">
                            <input type="text" placeholder="章节" name="chapter" required value="<?php echo ($question['chapter']); ?>">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">城市</label>
                        <div class="am-u-sm-9" data-toggle="distpicker">
                            <div class="am-g">
                                <div class="am-u-sm-12">
                                    <select name="city" required id="city" data-val="<?php echo ($question['area_id']); ?>" <?php echo isset($question) ? "readonly disabled": "";?>>
                                        <option data-citycode="010" data-areacode="110000" value="010">北京市</option>
                                        <option data-citycode="021" data-areacode="310000" value="021">上海市</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">标题</label>
                        <div class="am-u-sm-9">
                            <input type="text" placeholder="标题" name="content" required value="<?php echo ($question['content']); ?>">
                        </div>
                    </div>
                    <div class="am-form-group" id="type">
                        <label class="am-u-sm-3 am-form-label">类型</label>
                        <div class="am-u-sm-9">
                            <select name="type" required data-value="<?php echo ($question['type']); ?>" id="type-input">
                                <option value="1">文字</option>
                                <option value="0">AR</option>
                            </select>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">图片</label>
                        <div class="am-u-sm-9">
                            <?php if(isset($question['description_pic'])): ?><img src="<?php echo ($question['description_pic_url']); ?>"  class="am-img-thumbnail upload-thumbnail">
                                <?php else: ?><img src="/Public/empty.png"  class="am-img-thumbnail upload-thumbnail"><?php endif; ?>
                            <div class="am-margin-xs"></div>
                            <input class="am-validate  uploaded-img" type="hidden" placeholder="图片" name="description_pic" required value="<?php echo ($question['description_pic']); ?>">
                            <span class="upload-picker">上传图片</span>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">视屏封面</label>
                        <div class="am-u-sm-9">
                            <?php if(isset($question['question_video_cover'])): ?><img src="<?php echo ($question['question_video_cover_url']); ?>"  class="am-img-thumbnail upload-thumbnail">
                                <?php else: ?><img src="/Public/empty.png"  class="am-img-thumbnail upload-thumbnail"><?php endif; ?>
                            <div class="am-margin-xs"></div>
                            <input class="am-validate  uploaded-img" type="hidden" placeholder="视屏封面" name="question_video_cover" required value="<?php echo ($question['question_video_cover']); ?>">
                            <span class="upload-picker">上传视屏封面</span>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">视频地址</label>
                        <div class="am-u-sm-9">
                            <input type="text" placeholder="视频地址" name="question_video" required value="<?php echo ($question['question_video']); ?>">
                        </div>
                    </div>

                    <div class="am-form-group"  id="answer">
                        <label class="am-u-sm-3 am-form-label">答案</label>
                        <div class="am-u-sm-9 answer-container">
                            <div class="am-g">
                                <div class="am-u-sm-10">
                                    <input class="answer-inputs answer-main-input" name="question_answer" value='<?php echo ($question['type'] == 1 ? $question['question_answer']: ''); ?>' type="text" placeholder="答案">
                                </div>
                                <div class="am-u-sm-2">
                                    <i class="am-icon-btn am-icon-btn-sm am-success am-icon-plus" id="add-answer"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="am-form-group" id="ar">
                        <label class="am-u-sm-3 am-form-label">AR地址</label>
                        <div class="am-u-sm-9">
                            <div class="am-g">
                                <div class="am-u-sm-6">
                                    <input class="am-validate" type="number" placeholder="AR地址经度" name="question_ar_lng" value='<?php echo ($question['question_ar_lng']); ?>'>
                                </div>
                                <div class="am-u-sm-6">
                                    <input class="am-validate" type="number" placeholder="AR地址纬度" name="question_ar_lat" value='<?php echo ($question['question_ar_lat']); ?>'>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="am-form-group" id="ar_pet">
                        <label class="am-u-sm-3 am-form-label">零仔动图</label>
                        <div class="am-u-sm-9">
                            <input type="text" name="question_ar_pet" value="<?php echo ($question['question_ar_pet']); ?>">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">详细链接</label>
                        <div class="am-u-sm-9">
                            <input type="text" placeholder="详细链接" name="detail_url" required value="<?php echo ($question['detail_url']); ?>">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">奖励ID</label>
                        <div class="am-u-sm-9">
                            <select name="reward_id" required="" data-value="<?php echo ($question['reward_id']); ?>">
                                <option value="">请选择奖励Id</option>
                                <?php if(is_array($rewardIds)): foreach($rewardIds as $key=>$rewardId): ?><option value="<?php echo ($rewardId['reward_id']); ?>"><?php echo ($rewardId['reward_id']); ?></option><?php endforeach; endif; ?>
                            </select>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">提示信息</label>
                        <div class="am-u-sm-9">
                            <input type="text" placeholder="提示信息" name="hint" required value="<?php echo ($question['hint']); ?>">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">简介</label>
                        <div class="am-u-sm-9">
                            <textarea name="description" required id="editor" style="min-height: 200px;"><?php echo ($question['description']); ?></textarea>
                        </div>
                    </div>

                    <div class="am-form-group">
                        <div class="am-u-sm-12 am-text-right">
                            <a href="<?php echo U('Question/index');?>" class="am-btn am-btn-warning">返回</a>
                            <button type="submit" class="am-btn am-btn-success">提交</button>
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

    <script id="tmp" type="text/x-handlebars-template">
        <div class="am-g answer-item am-margin-vertical" >
            <div class="am-u-sm-10">
                <input type="text" placeholder="答案" class="answer-inputs" >
            </div>
            <div class="am-u-sm-2">
                <i class="am-icon-btn am-icon-btn-sm am-danger am-icon-trash remove-answer"></i>
            </div>
        </div>
    </script>
    <script src="/Public/dist/admin-question-save.js"></script>

</body>
</html>