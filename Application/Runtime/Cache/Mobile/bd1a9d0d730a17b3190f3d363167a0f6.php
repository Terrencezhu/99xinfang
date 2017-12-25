<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <title>99新房网_专车看房</title>
    <script type="text/javascript" src="/Public/mobile/js/yidong.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/kanfang.css" />
</head>

<body>
    <div id="top">
        <a id="link-top" href="javascript:history.back(-1)">
            <img src="/Public/mobile/img/tubiao/link-top.png" alt="" />
        </a>
        <a id="link-index" href="index.html">
            <img src="/Public/mobile/img/tubiao/link-index.png" />
        </a>
        <span>专车看房</span>
    </div>
    <div id="top-height"></div>
    <!--00-->
    <div id="kanfang-top">
        <img src="/Public/mobile/img/kanfang.jpg" alt="" />
        <form id="dizhi" action="" method="post">
            <input type="" name="" id="" value="" placeholder="您的位置" />
            <input type="" name="" id="" value="" placeholder="您要去那个楼盘" />
        </form>
    </div>
    <div id="kanfang-baoming">立即报名</div>
    <!--报名弹窗-->
    <div id="baoming">
        <form id="baoming-box" action="">
            <div class="baoming-title">确认您的报名信息</div>
            <div class="baoming-input">
                <input type="text" name="" id="baoming-name" value="" placeholder="请输入您的姓名" />
            </div>
            <div class="baoming-input">
                <input type="text" name="" id="baoming-tel" value="" placeholder="请输入您的电话" />
            </div>
            <div class="baoming-input">
                <div id="baoming-quxiao">取消</div>
                <div id="baoming-tijiao">提交</div>
                <input id="baoming-submit" type="submit" value="提交" />
            </div>
        </form>
    </div>
    <div class="kanfang-zhu">
        注：99提供免费看房专车服务，全程免费，用户不承担任何交通费用。若有疑问，请详询400-888-8888
    </div>
    <div class="title">热门约看楼盘</div>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a href="/mobile.php/building/detail?id=<?php echo ($vo["house_id"]); ?>">
            <div class="kanfang-list">
                <div class="kanfang-img">
                    <img src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" />
                </div>
                <div class="kanfang-title"><?php echo ($vo["house_name"]); ?>
                    <span><?php echo ($vo["junjia"]); ?>元/㎡</span>
                </div>
                <div class="kanfang-xixni">
                    <span><?php echo ($vo["dili"]); ?></span>
                    <span><?php echo ($vo["jushi"]); ?> </span>
                    <span> <?php echo ($vo["max_mianji"]); ?>㎡</span>
                    <span></span>
                </div>
            </div>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="many-box">
        <a class="many-link" href="/mobile.php/search/index">查看更多</a>
    </div>
    <!--底部固定-->
    <div class="bottom-hieght"></div>
    <!--底部固定窗口-->
    <div id="bottom-fixed">
        <a href="/mobile.php/find/index">
            <span>
                <img src="/Public/mobile/img/tubiao/sousuo-01.png" alt="" />
            </span>帮您找房</a>
        <a>
            <span>
                <img src="/Public/mobile/img/tubiao/zixun.png" alt="" />
            </span>在线咨询</a>
        <a href="tel:111111111">
            <span>
                <img src="/Public/mobile/img/tubiao/tel.png" alt="" />
            </span>售楼热线</a>
    </div>
    <script type="text/javascript">
        function block(a, b) { //调出函数
            a.onclick = function () {
                b.style.display = "block";
            }
        }

        function none(a, b) { //隐藏函数
            a.onclick = function () {
                b.style.display = "none";
            }
        }
        //通知调出
        var tongZhi = document.getElementById("kanfang-baoming");
        var quXiao = document.getElementById("baoming-quxiao");
        var baoMing = document.getElementById("baoming");
        block(tongZhi, baoMing);
        none(quXiao, baoMing);
    </script>
</body>

</html>