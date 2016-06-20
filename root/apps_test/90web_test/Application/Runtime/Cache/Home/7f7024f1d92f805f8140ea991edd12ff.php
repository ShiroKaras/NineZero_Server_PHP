<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,maximum-scale=1.0,minimum-scale=1.0,initial-scale=1.0,user-scalable=no">
    <script src="/Public/90-templates/assets/lib/zepto.min.js"></script>
    <link rel="stylesheet" href="/Public/90-templates/build/css/common.top.min.css">
    <title>你会是下一个被选召的人吗？不是所有人都能完成这道考验</title>
</head>
<body id="detail-page" style="position: relative; z-index: 0;max-width: 100%;">
    <img src="<?php echo ($question["question_video_cover"]); ?>" alt="" style="position: absolute; z-index: -1;opacity: 0; max-width: 320px;">
    <div class="loading"> 玩命加载中... </div>
    <link rel="stylesheet" href="/Public/90-templates/build/css/share_chapter.min.css">
    <div class="container">

        <div class="header fix">
            <i class="logo"></i>
            <a href="http://90app.tv/" class="download"></a>
        </div>

        <div class="title"></div>
        <!-- 章节变量的处理 -->
        <div class="content">
            <div class="row mission">
                <i class="mission-desc"></i>
                <i class="mission-title" data-image="http://7xryb0.com1.z0.glb.clouddn.com/mission/mission_<?php echo ($id); ?>.png"></i>
            </div>
            <div class="row timer">
                <i class="timer-desc-1"></i>
                <i class="timer-desc"></i>
                <i class="count-down-timer" data-end-time="<?php echo ($endtime); ?>" data-delta-time="<?php echo ($delta); ?>"></i>
                <i class="border"></i>
                <i class="chapter-title" data-image="http://7xryb0.com1.z0.glb.clouddn.com/chapter/chapter_<?php echo ($id); ?>.png"></i>
            </div>
            <video src="<?php echo ($question["question_video"]); ?>" poster="<?php echo ($question["question_video_cover"]); ?>"></video>
            <!-- 线上版本 -->
            <?php if($type == 1): if($delta != 0): ?><form data-url="http://admin.90app.tv/index.php?s=/Home/user/answer" class="form">
                    <i class="placeholder"></i>
                    <input class="answer" type="text" name="answer">
                    <input type="hidden" name="area_id" id="citycode" value="">
                    <a href="javascript:;" class="btn submit"></a>
                </form><?php endif; ?>
                <?php else: ?>
                <div class="row tipinfo" data-image="http://7xryb0.com1.z0.glb.clouddn.com/offline/offline_<?php echo ($id); ?>.png"></div><?php endif; ?>

            <!-- 线下版本 -->
            <!-- <div class="row tipinfo" data-image="assets/res/offline.png"></div> -->
        </div>

        <?php if(isset($user_list)): ?><div class="participators">
            <p class="desc"></p>

            <ul class="avatars">
                <?php if(is_array($user_list)): $i = 0; $__LIST__ = $user_list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$user): $mod = ($i % 2 );++$i;?><li class="avatar" data-image="<?php echo ($user["user_avatar"]); ?>"></li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div><?php endif; ?>

        <div class="overlay"></div>
        <div class="share"></div>
        <div class="result">
            <div class="yes">
                <p class="answer-right" data-image="/Public/90-templates/assets/res/answer-right.gif"></p>
                <p><a href="javascript:;" class="btn btn-share J_share"></a></p>
            </div>
            <div class="no">
                <p class="answer-wrong" data-image="/Public/90-templates/assets/res/answer-wrong.gif"></p>
                <p>
                    <a href="javascript:;" class="btn btn-rethink"></a>
                    <a href="javascript:;" class="btn btn-help J_share"></a>
                </p>
            </div>
        </div>
    </div>


    <script src="/Public/90-templates/build/js/share_chapter.min.js"></script>
   <!--  <script src="/Public/90-templates/src/js/rem.js"></script>
    <script src="/Public/90-templates/src/js/clock.js"></script>
    <script src="/Public/90-templates/src/js/dateFormat.js"></script>
    <script src="/Public/90-templates/src/js/detail.js"></script> -->
</body>
</html>