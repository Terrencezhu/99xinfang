<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>99新房网_楼盘查询</title>
    <script type="text/javascript" src="/Public/mobile/js/yidong.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/search.css" />
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/shaixuan.css" />
</head>

<body>
    <!--顶部信息-->
    <div id="top">
        <a id="link-top" href="javascript:history.back(-1)">
            <img src="/Public/mobile/img/tubiao/link-top.png" alt="" />
        </a>
        <a id="link-index" href="/mobile.php/index/index">
            <img src="/Public/mobile/img/tubiao/link-index.png" />
        </a>
        <span>楼盘查询</span>
    </div>
    <div id="top-height"></div>
    <!--顶部定位搜索-->
    <div id="sousuo-top">
        <form action="/mobile.php/search/search" method="get" class="search" >
            <input type="text" name="guanjianzi" class="search-text" placeholder="输入楼盘名称开始找房" value="" />
            <div class="search-span">
                <span>
                    <img src="/Public/mobile/img/tubiao/sousuo-02.png" alt="" />
                </span>搜索</div>
            <input type="submit" name="" class="search-submit" value="搜索" />
        </form>
        <!-- <a id="sousuo-link" href="sousuo.html"></a> -->
    </div>
    <!--banner-->
    <div class="swiper-container" id="banner">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="/Public/mobile/img/banner/banner-01.jpg" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="/Public/mobile/img/banner/banner-02.jpg" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="/Public/mobile/img/banner/banner-03.jpg" alt="" />
            </div>
            <div class="swiper-slide">
                <img src="/Public/mobile/img/banner/banner-04.jpg" alt="" />
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <!--搜索-->
    <div class="search-box">
        <form class="search" action="/mobile.php/search/search" method="get">
            <input type="text" name="guanjianzi" class="search-text" placeholder="输入楼盘名称开始找房" value="" />
            <div class="search-span">
                <span>
                    <img src="/Public/mobile/img/tubiao/sousuo-02.png" alt="" />
                </span>搜索</div>
            <input type="submit" name="" class="search-submit" value="搜索" />
        </form>
    </div>
    <ul id="shaixuan">
        <li class="shaixuan-navs">区域
            <span class="shaixuan-arrow">
                <img src="/Public/mobile/img/tubiao/xiala.png" alt="" />
            </span>
        </li>
        <li class="shaixuan-navs">总价
            <span class="shaixuan-arrow">
                <img src="/Public/mobile/img/tubiao/xiala.png" alt="" />
            </span>
        </li>
        <li class="shaixuan-navs">户型
            <span class="shaixuan-arrow">
                <img src="/Public/mobile/img/tubiao/xiala.png" alt="" />
            </span>
        </li>
        <li class="shaixuan-navs">更多
            <span class="shaixuan-arrow">
                <img src="/Public/mobile/img/tubiao/xiala.png" alt="" />
            </span>
        </li>
    </ul>
    <!--楼盘筛选-->
    <div id="shaixuan-fixed">
        <ul id="shaixuan-box">
            <li class="shaixuan-nav">区域
                <span class="shaixuan-arrow">
                    <img src="/Public/mobile/img/tubiao/xiala.png" alt="" />
                </span>
            </li>
            <li class="shaixuan-nav">总价
                <span class="shaixuan-arrow">
                    <img src="/Public/mobile/img/tubiao/xiala.png" alt="" />
                </span>
            </li>
            <li class="shaixuan-nav">户型
                <span class="shaixuan-arrow">
                    <img src="/Public/mobile/img/tubiao/xiala.png" alt="" />
                </span>
            </li>
            <li class="shaixuan-nav">更多
                <span class="shaixuan-arrow">
                    <img src="/Public/mobile/img/tubiao/xiala.png" alt="" />
                </span>
            </li>
            <!--区域-->
            <div class="shaixuan-list">
                <div class="sxlist-top">
                    <!--<img src="/Public/mobile/img/tubiao/shanxuan-top.png" alt="" />-->
                </div>
                <div class="sxlist-title">
                    <div class="sxlist-tag">区域</div>
                </div>
                <div class="sxlist-shi">
                    <div class="sxlist-tag">湖州</div>
                    <div class="sxlist-tag">海宁</div>
                    <div class="sxlist-tag">海盐</div>
                    <div class="sxlist-tag">嘉善</div>
                    <div class="sxlist-tag">南湖</div>
                    <div class="sxlist-tag">平湖</div>
                    <div class="sxlist-tag">桐乡</div>
                    <div class="sxlist-tag">秀洲</div>
                    <div class="sxlist-tag">宁波</div>
                    <div class="sxlist-tag">南通</div>
                </div>
                <!--<div class="sxlist-shi">
						<div class="sxlist-tag">不限</div>
						<div class="sxlist-tag">嘉兴</div>
						<div class="sxlist-tag">无锡</div>
						<div class="sxlist-tag">宁波</div>
						<div class="sxlist-tag">南通</div>
						<div class="sxlist-tag">苏州</div>
					</div>-->
                <!--县市列表-->
                <!--<div class="sxlist-xian">
						<ul class="xianqu-list">
							<div class="sxlist-tag">不限</div>
						</ul>
						<ul class="xianqu-list">
							<div class="sxlist-tag">不限</div>
							<div class="sxlist-tag">秀洲区</div>
							<div class="sxlist-tag">南湖区</div>
							<div class="sxlist-tag">嘉善县</div>
							<div class="sxlist-tag">平湖市</div>
							<div class="sxlist-tag">海盐县</div>
							<div class="sxlist-tag">海宁市</div>
							<div class="sxlist-tag">桐乡市</div>
						</ul>
						<ul class="xianqu-list">
							<div class="sxlist-tag">不限</div>
							<div class="sxlist-tag">梁溪区</div>
							<div class="sxlist-tag">滨湖区</div>
							<div class="sxlist-tag">惠山区</div>
							<div class="sxlist-tag">锡山区</div>
							<div class="sxlist-tag">新吴区</div>
							<div class="sxlist-tag">江阴市</div>
							<div class="sxlist-tag">宜兴市</div>
						</ul>
						<ul class="xianqu-list">
							<div class="sxlist-tag">不限</div>
							<div class="sxlist-tag">海曙区</div>
							<div class="sxlist-tag">江北区</div>
							<div class="sxlist-tag">北仑区</div>
							<div class="sxlist-tag">镇海区</div>
							<div class="sxlist-tag">鄞州区</div>
							<div class="sxlist-tag">奉化区</div>
							<div class="sxlist-tag">余姚市</div>
							<div class="sxlist-tag">慈溪市</div>
							<div class="sxlist-tag">象山县</div>
							<div class="sxlist-tag">宁海县</div>
						</ul>
						<ul class="xianqu-list">
							<div class="sxlist-tag">不限</div>
							<div class="sxlist-tag">崇川区</div>
							<div class="sxlist-tag">港闸区</div>
							<div class="sxlist-tag">通州区</div>
							<div class="sxlist-tag">海安县</div>
							<div class="sxlist-tag">如皋市</div>
							<div class="sxlist-tag">如东县</div>
							<div class="sxlist-tag">海门市</div>
							<div class="sxlist-tag">启东市</div>
						</ul>
						<ul class="xianqu-list">
							<div class="sxlist-tag">不限</div>
							<div class="sxlist-tag">姑苏区</div>
							<div class="sxlist-tag">相城区</div>
							<div class="sxlist-tag">吴中区</div>
							<div class="sxlist-tag">虎丘区</div>
							<div class="sxlist-tag">吴江区</div>
							<div class="sxlist-tag">常熟市</div>
							<div class="sxlist-tag">昆山市</div>
							<div class="sxlist-tag">张家港市</div>
							<div class="sxlist-tag">太仓市</div>
						</ul>
						
					</div>-->
            </div>
            <!--总价-->
            <div class="shaixuan-list">
                <div class="sxlist-top">
                    <!--<img src="/Public/mobile/img/tubiao/shanxuan-top.png" alt="" />-->
                </div>
                <div class="sxlist-jiage">
                    <div class="sxlist-tag">单价</div>
                    <div class="sxlist-tag">总价</div>
                </div>
                <div class="sxlist-danjia">
                    <div class="sxlist-tag">不限</div>
                    <div class="sxlist-tag">6000元/㎡以下</div>
                    <div class="sxlist-tag">6000-8000元/㎡</div>
                    <div class="sxlist-tag">8000-10000元/㎡</div>
                    <div class="sxlist-tag">10000-12000元/㎡</div>
                    <div class="sxlist-tag">12000-14000元/㎡</div>
                    <div class="sxlist-tag">14000-16000元/㎡</div>
                    <div class="sxlist-tag">16000元/㎡以上</div>
                </div>
                <div class="sxlist-danjia">
                    <div class="sxlist-tag">不限</div>
                    <div class="sxlist-tag">60万以下</div>
                    <div class="sxlist-tag">60万-70万</div>
                    <div class="sxlist-tag">70万-80万</div>
                    <div class="sxlist-tag">80万-90万</div>
                    <div class="sxlist-tag">90万-100万</div>
                    <div class="sxlist-tag">100万以上</div>
                </div>
                <form id="sxlist-dingyi" action="">
                    <span>自定义价格：</span>
                    <input type="text" id="" value="" placeholder="最小" />
                    <span>—</span>
                    <input type="text" id="" value="" placeholder="最大" />
                    <div class="dingyi-queding">确定</div>
                    <input type="submit" id="dingyi-submit" value="确定" />
                </form>
            </div>
            <!--户型-->
            <div class="shaixuan-list">
                <div class="sxlist-top">
                    <!--<img src="/Public/mobile/img/tubiao/shanxuan-top.png" alt="" />-->
                </div>
                <div class="box-width">
                    <div class="sxlist-huxing">不限</div>
                    <div class="sxlist-huxing">一居</div>
                    <div class="sxlist-huxing">二居</div>
                    <div class="sxlist-huxing">三居</div>
                    <div class="sxlist-huxing">四居</div>
                    <div class="sxlist-huxing">五居以上</div>
                </div>
            </div>
            <!--更多-->
            <form class="shaixuan-list">
                <div class="sxlist-top">
                    <!--<img src="/Public/mobile/img/tubiao/shanxuan-top.png" alt="" />-->
                </div>
                <div class="tag-box">
                    <div class="gengduo-title">住房类型</div>
                    <div class="zhaofang-tag">住宅
                        <input type="radio" name="zhufang" value="住宅" />
                    </div>
                    <div class="zhaofang-tag">洋房
                        <input type="radio" name="zhufang" value="洋房" />
                    </div>
                    <div class="zhaofang-tag">商业
                        <input type="radio" name="zhufang" value="商业" />
                    </div>
                </div>
                <div class="tag-box">
                    <div class="gengduo-title">销售状态</div>
                    <div class="zhaofang-tag">现房
                        <input type="radio" name="xiaoshou" value="现房" />
                    </div>
                    <div class="zhaofang-tag">待售
                        <input type="radio" name="xiaoshou" value="待售" />
                    </div>
                </div>
                <div class="tag-box">
                    <div class="gengduo-title">装修情况</div>
                    <div class="zhaofang-tag">精装
                        <input type="radio" name="zhuangxiu" value="精装" />
                    </div>
                    <div class="zhaofang-tag">毛坯
                        <input type="radio" name="zhuangxiu" value="毛坯" />
                    </div>
                </div>
                <div class="gengduo-bottom">
                    <span id="tag-chongzhi">重置</span>
                    <span class="gengduo-queding">确定</span>
                    <input type="submit" name="" id="" value="确定" />
                </div>

            </form>
        </ul>
    </div>
    <!--楼盘列表-->
    <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="loupan-list" href="/mobile.php/building/detail?id=<?php echo ($vo["house_id"]); ?>">
            <div class="loupan-img">
                <img src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" />
            </div>
            <div class="loupan-body">
                <div class="loupan-name">
                    <?php echo ($vo["house_name"]); ?>
                </div>
                <span class="zongjia"></span>
                <span class="loupan-jiage">
                    <?php echo ($vo["junjia"]); ?>元/㎡</span>
                <div class="loupan-xinxi">
                    <?php echo ($vo["dili"]); ?>
                </div>
                <div class="loupan-xinxi">
                    <?php echo ($vo["max_mianji"]); ?>㎡ | 2-3室</div>
                <ul class="loupan-tag">
                    <li>产权70年</li>
                    <li>期房</li>
                    <li>毛坯</li>
                    <li>交通便利</li>
                </ul>
            </div>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>
    <!--中间标签-->
    <div class="search-biaoqian">
        <a class="search-tag" href="">小户型</a>
        <a class="search-tag" href="">公寓</a>
        <a class="search-tag" href="">低总价</a>
        <a class="search-tag" href="">商铺</a>
        <a class="search-tag" href="">精装房</a>
        <a class="search-tag" href="">现房</a>
        <a class="search-tag" href="">期房</a>
        <a class="search-tag" href="">特惠房</a>
    </div>
    <!--楼盘列表-->
    <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,5,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="loupan-list" href="/mobile.php/building/detail?id=<?php echo ($vo["house_id"]); ?>">
            <div class="loupan-img">
                <img src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" />
            </div>
            <div class="loupan-body">
                <div class="loupan-name">
                    <?php echo ($vo["house_name"]); ?>
                </div>
                <span class="zongjia">¥134万起</span>
                <span class="loupan-jiage">
                    <?php echo ($vo["junjia"]); ?>元/㎡</span>
                <div class="loupan-xinxi">
                    <?php echo ($vo["dili"]); ?>
                </div>
                <div class="loupan-xinxi">
                    <?php echo ($vo["max_mianji"]); ?>㎡ | 2-3室</div>
                <ul class="loupan-tag">
                    <li>产权70年</li>
                    <li>期房</li>
                    <li>毛坯</li>
                    <li>交通便利</li>
                </ul>
            </div>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>

    <!--中部有推荐-->
    <a class="center-img" href="sousuo.html">
        <img src="/Public/mobile/img/search-center1.jpg" />
    </a>
    <!--楼盘列表-->
    <a class="loupan-list" href="/mobile.php/building/detail?id=<?php echo ($vo["house_id"]); ?>">
        <div class="loupan-img">
            <img src="/Public/mobile/img/hot.png" alt="" />
        </div>
        <div class="loupan-body">
            <div class="loupan-name">绿地长岛</div>
            <span class="zongjia">¥134万起</span>
            <span class="loupan-jiage">11000元/㎡</span>
            <div class="loupan-xinxi">嘉兴市-嘉善</div>
            <div class="loupan-xinxi">88-124㎡ | 2-3室</div>
            <ul class="loupan-tag">
                <li>产权70年</li>
                <li>期房</li>
                <li>毛坯</li>
                <li>交通便利</li>
            </ul>
        </div>
    </a>
    <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,10,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="loupan-list" href="/mobile.php/building/detail?id=<?php echo ($vo["house_id"]); ?>">
            <div class="loupan-img">
                <img src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" />
            </div>
            <div class="loupan-body">
                <div class="loupan-name">
                    <?php echo ($vo["house_name"]); ?>
                </div>
                <span class="zongjia">¥134万起</span>
                <span class="loupan-jiage">
                    <?php echo ($vo["junjia"]); ?>元/㎡</span>
                <div class="loupan-xinxi">
                    <?php echo ($vo["dili"]); ?>
                </div>
                <div class="loupan-xinxi">
                    <?php echo ($vo["max_mianji"]); ?>㎡ | 2-3室</div>
                <ul class="loupan-tag">
                    <li>产权70年</li>
                    <li>期房</li>
                    <li>毛坯</li>
                    <li>交通便利</li>
                </ul>
            </div>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>
    <!--中部有推荐-->
    <div class="center-imgt">
        <img src="/Public/mobile/img/search-center2.jpg" />
    </div>
    <!--楼盘列表-->
    <?php if(is_array($list)): $i = 0; $__LIST__ = array_slice($list,15,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="loupan-list" href="/mobile.php/building/detail?id=<?php echo ($vo["house_id"]); ?>">
            <div class="loupan-img">
                <img src="/Upload/lpimg/<?php echo ($vo["image"]); ?>" alt="" />
            </div>
            <div class="loupan-body">
                <div class="loupan-name">
                    <?php echo ($vo["house_name"]); ?>
                </div>
                <span class="zongjia">¥134万起</span>
                <span class="loupan-jiage">
                    <?php echo ($vo["junjia"]); ?>元/㎡</span>
                <div class="loupan-xinxi">
                    <?php echo ($vo["dili"]); ?>
                </div>
                <div class="loupan-xinxi">
                    <?php echo ($vo["max_mianji"]); ?>㎡ | 2-3室</div>
                <ul class="loupan-tag">
                    <li>产权70年</li>
                    <li>期房</li>
                    <li>毛坯</li>
                    <li>交通便利</li>
                </ul>
            </div>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>
    <div class="bottom-link">没有更多了...</div>
    <div class="bottom-hieght"></div>
    <!--右侧搜索-->
    <!--<div class="fixed-sousuo"><img src="/Public/mobile/img/tubiao/sousuo.png" alt="" /></div>-->
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
    <script type="text/javascript" src="/Public/mobile/js/swiper.min.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/shaixuan.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/search.js"></script>
</body>

</html>