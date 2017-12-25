<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <title>99新房网_楼盘详情</title>
    <script type="text/javascript" src="/Public/mobile/js/yidong.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/swiper.min.css">
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/loupan.css" />
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=mspnPTYYnjZb3sNu36ysEZw1"></script>
</head>

<body>
    <div id="loupan-head">
        <img src="/Public/mobile/img/banner.jpg" alt="" />
        <a id="head-top" href="javascript:history.back(-1)">
            <img src="/Public/mobile/img/tubiao/loupan-top.png" alt="" />
        </a>
        <div id="head-fenxiang">
            <img src="/Public/mobile/img/tubiao/loupan-fenxiang.png" />
        </div>
        <a id="head-tuce" href="tuce.html">楼盘图册
            <span>(88)</span>
        </a>
    </div>
    <!--分享-->
    <div id="loupan-fenxiang">
        <div id="fenxiang-guanjbi">
            <img src="/Public/mobile/img/tubiao/loupan-fenxiang.png" alt="" />
        </div>
        <div id="fenxiang-box">
            <div class="fenxiang-title">
                <img src="/Public/mobile/img/tubiao/fenxiangdao.png" alt="" />
            </div>
            <!-- JiaThis Button BEGIN -->
            <div class="jiathis_style_m"></div>
            <script type="text/javascript" src="http://v3.jiathis.com/code/jiathis_m.js" charset="utf-8"></script>
            <!-- JiaThis Button END -->
        </div>
    </div>
    <!--项目名称-->
    <div class="loupan-mingcheng">
        <span>
            <?php echo ($house_info["house_name"]); ?>
        </span>
        <div class="cankao-jiage">参考价格:
            <span>
                <?php echo ($house_info["junjia"]); ?>元/㎡</span>
        </div>
    </div>

    <!--楼盘标签-->
    <ul id="loupan-biaoqian">
        <li>低总价</li>
        <li>品牌地产</li>
        <li>交通便利</li>
        <li>国际化社区</li>
    </ul>
    <!--热度-->
    <div class="loupan-redu">
        <span class="redu-span">热度</span>
        <div class="redu-box">
            <span class="redu-background"></span>
        </div>
        <span class="redu-span">8.6</span>
        <div class="redu-num">阅读：2345</div>
    </div>
    <!--顶部信息-->
    <div class="top-xinxi">
        <p id="loupan-tongzhi">
            <span>
                <img src="/Public/mobile/img/tubiao/loupan-tixing.png" />
            </span>最新开盘通知</p>
        <div>
            <span>
                <img src="/Public/mobile/img/tubiao/topxinxi-01.png" alt="" />
            </span>开盘时间：
            <?php echo ($house_info["first_time"]); ?>
        </div>
        <div>
            <span>
                <img src="/Public/mobile/img/tubiao/topxinxi-02.png" alt="" />
            </span>楼盘户型：
            <?php echo ($house_info["mix_mianji"]); ?>㎡~
                <?php echo ($house_info["max_mianji"]); ?>㎡</div>
        <div>
            <span>
                <img src="/Public/mobile/img/tubiao/topxinxi-03.png" alt="" />
            </span>楼盘地址：
            <?php echo ($house_info["house_address"]); ?>
        </div>
        <div>
            <span>
                <img src="/Public/mobile/img/tubiao/topxinxi-04.png" alt="" />
            </span>开发商：
            <?php echo ($house_info["developer"]); ?>
        </div>
    </div>
    <!--顶部优惠通知-->
    <div id="loupan-yuyue">
        <p>
            <img src="/Public/mobile/img/tubiao/loupan-yuyue.png" />
        </p>预约专车（99专车免费接送看房）</div>
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
    <div class="jiange"></div>
    <!--推荐-->
    <!-- <div class="loupan-title">
        <span></span>推荐理由</div>
    <div class="loupan-tuijian">
        <div class="tuijian-num">1</div>
        <div class="tuijian-liyou">
            引进十五年制的上海外国语大学西外分校，将自建9年制优质公立学校，幼儿园、小学、中学一应俱全，满足全龄段教育需求。
        </div>
    </div>
    <div class="loupan-tuijian">
        <div class="tuijian-num">2</div>
        <div class="tuijian-liyou">
            2.5公里风情水街，15万㎡时尚欲望，以“文化、互动、跨界”的极致体验为导向，以精品酒店、传统手工、特色餐饮等服务营造自由、风尚、高雅三大主题，满足休憩、观光、商务社交的精致需求。
        </div>
    </div>
    <div class="loupan-tuijian">
        <div class="tuijian-num">3</div>
        <div class="tuijian-liyou">
            新西塘孔雀城融合了一站式服务、管家模式、保安服务、工程服务、社区文化、大型文化服务的六大亲情服务环节，利用城市资源，开展便捷性增值服务，为业主量身打造最贴心的幸福集市。
        </div>
    </div>
    <div class="loupan-tuijian">
        <div class="tuijian-num">4</div>
        <div class="tuijian-liyou">
            加油站、停车场、学校及商业配套设施齐全，且在一公里之内；10分钟可直达秦皇岛机场，距秦皇岛站和京哈高速仅2公里，距离海边仅仅9公里，小区周边有16路、703、4路等公交途径小区，交通便利，沿着海岸线观赏美景，让您真正住在景区。
        </div>
    </div> -->
    <div class="jiange"></div>
    <!--楼盘信息-->
    <div class="loupan-title">
        <span></span>楼盘信息</div>
    <div id="center-xinxi">
        <div>
            <p class="centerx-text">产权年限：
                <span>
                    <?php echo ($house_info["property_right"]); ?>
                </span>
            </p>
            <p class="centerx-text">物业类型：
                <span>
                    <?php echo ($house_info["wuye_type"]); ?>
                </span>
            </p>
        </div>
        <div>
            <p class="centerx-text">装修标准：
                <span>
                    <?php echo ($house_info["decorate"]); ?>
                </span>
            </p>
            <p class="centerx-text">交房时间
                <span>
                    <?php echo ($house_info["last_time"]); ?>
                </span>
            </p>
        </div>
        <p class="centerx-border"></p>
        <p class="centerx-text">开发商：
            <span>
                <?php echo ($house_info["developer"]); ?>
            </span>
        </p>
        <p class="centerx-text">楼盘地址：
            <span>
                <{$house_info.house_address}</span>
        </p>
    </div>
    <a id="xinxi-link" href="xinxi.html">查看更多</a>
    <div class="jiange"></div>
    <!--户型介绍-->
    <div class="loupan-title">
        <span></span>户型介绍</div>
    <div class="swiper-container" id="huxing">
        <div class="swiper-wrapper">
            <?php if(is_array($hxt_info)): $i = 0; $__LIST__ = $hxt_info;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><a class="swiper-slide" href="huxing.html">
                    <div class="huxing-img">
                        <img src="/Upload/lphxt/<?php echo ($v["hx_img"]); ?>" alt="" />
                    </div>
                    <div class="huxing-title">
                        <?php echo ($v["jushi"]); ?>
                    </div>
                    <div class="huxing-text">建筑面积约
                        <?php echo ($v["hx_mianji"]); ?>㎡</div>
                    <div class="huxing-jiage">总参考价：
                        <span>
                            <?php echo ($v["ck_price"]); ?>万元</span>
                    </div>
                </a><?php endforeach; endif; else: echo "" ;endif; ?>
        </div>
    </div>
    <div class="jiange"></div>
    <!--周边配套-->
    <div class="loupan-title">
        <span></span>周边配套</div>
    <div id="loupan-map" onclick="window.location.href='map.html'">
        <div id="container"></div>
        <div id="map-luxian">
            <span>
                <img src="/upload/tubiao/luxian.png" alt="" />
            </span>路线</div>
        <div id="map-list">
            <div class="mapl-li">公交</div>
            <div class="mapl-li">学校</div>
            <div class="mapl-li">购物</div>
            <div class="mapl-li">餐饮</div>
            <div class="mapl-li">娱乐</div>
            <div class="mapl-li">楼盘</div>
        </div>
    </div>
    <!--喜欢此楼盘的人还看了-->
    <div class="loupan-title loupan-list-top">
        <span></span>喜欢此楼盘的人还看了</div>
    <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><a class="loupan-list" href="/mobile.php/building/detail?id=<?php echo ($vo["house_id"]); ?>">
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
                    <?php echo ($vo["max_mianji"]); ?>㎡</div>
                <ul class="loupan-tag">
                    <li>产权70年</li>
                    <li>期房</li>
                    <li>毛坯</li>
                    <li>交通便利</li>
                </ul>
            </div>
        </a><?php endforeach; endif; else: echo "" ;endif; ?>
    <!--底部固定-->
    <div class="bottom-hieght"></div>
    <!--右侧搜索-->
    <!--<a class="fixed-sousuo" href="sousuo.html"><img src="/Public/mobile/img/tubiao/sousuo.png" alt="" /></a>-->
    <!--底部固定窗口-->
    <div id="bottom-fixed">
        <a href="zhaofang.html">
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
    <script type="text/javascript" src="/Public/mobile/js/loupan.js"></script>
    <script type="text/javascript" src="/Public/mobile/js/map.js"></script>
</body>

</html>