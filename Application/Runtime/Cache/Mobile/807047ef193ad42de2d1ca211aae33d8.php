<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <title>99新房网_房贷计算器</title>
    <script type="text/javascript" src="/Public/mobile/js/yidong.js"></script>
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/style.css" />
    <link rel="stylesheet" type="text/css" href="/Public/mobile/css/jisuan.css" />
</head>

<body>
    <div id="top">
        <a id="link-top" href="javascript:history.back(-1)">
            <img src="/Public/mobile/img/tubiao/link-top.png" alt="" />
        </a>
        <a id="link-index" href="/mobile.php/index/">
            <img src="/Public/mobile/img/tubiao/link-index.png" />
        </a>
        <span>房贷计算器</span>
    </div>
    <div id="top-height"></div>
    <ul id="jisuan-nav">
        <li class="jisuan-tab">商业贷款</li>
        <li class="jisuan-tab">公积金贷款</li>
        <li class="jisuan-tab">组合贷款</li>
    </ul>
    <ul id="nav-arrow">
        <li>
            <img class="jisuan-jt" src="/Public/mobile/img/tubiao/nav-arrow.png" alt="" />
        </li>
        <li>
            <img class="jisuan-jt" src="/Public/mobile/img/tubiao/nav-arrow.png" alt="" />
        </li>
        <li>
            <img class="jisuan-jt" src="/Public/mobile/img/tubiao/nav-arrow.png" alt="" />
        </li>
    </ul>
    <!--商业贷款-->
    <div class="jisuan-box">
        <div class="fangshi-box">
            <div class="yuegong">
                <div id="sbx-yuegong">0</div>
                <div>参考月供（元）</div>
            </div>
            <ul class="huankuan">
                <li>
                    <div id="sbx-huankuan">0</div>
                    <div>还款总额</div>
                </li>
                <li>
                    <div id="sbx-daikuan">0</div>
                    <div>贷款总额</div>
                </li>
                <li>
                    <div id="sbx-lixi">0</div>
                    <div>支付利息</div>
                </li>
            </ul>
        </div>
        <div class="fangshi-box">
            <div class="yuegong">
                <div id="sbj-yuegong">0</div>
                <div>参考月供（元）</div>
            </div>
            <ul class="huankuan">
                <li>
                    <div id="sbj-huankuan">0</div>
                    <div>还款总额</div>
                </li>
                <li>
                    <div id="sbj-dijian">0</div>
                    <div>每月递减</div>
                </li>
                <li>
                    <div id="sbj-lixi">0</div>
                    <div>支付利息</div>
                </li>
            </ul>
        </div>
        <!--<div class="xiangxi">查看详细计算结果</div>-->
        <div class="jisuan-list">
            <span class="fangshi-span">还款方式：</span>
            <div class="fangshi">
                <span>
                    <img class="fangshi-img" src="/Public/mobile/img/tubiao/radios.png" alt="" />
                </span>等额本息</div>
            <div class="fangshi">
                <span>
                    <img class="fangshi-img" src="/Public/mobile/img/tubiao/radio.png" alt="" />
                </span>等额本金</div>
        </div>
        <div class="jisuan-list">
            <span>房屋总价：</span>
            <input type="text" name="" id="s-zongjia" value="" />
            <p class="jisuan-yuan">万元</p>
        </div>
        <div class="jisuan-list">
            <span>首付比例：</span>
            <div class="jisuan-text" id="s-shoufu"></div>
            <p class="jisuan-yuan">万元</p>
            <ul class="jisuan-menu" id="s-shoufu-menu">
                <li>一成</li>
                <li>两成</li>
                <li>三成</li>
                <li>四成</li>
                <li>五成</li>
            </ul>
        </div>
        <div class="jisuan-list">
            <span>贷款总额：</span>
            <input type="text" name="" id="s-daikuan" value="" />
            <p class="jisuan-yuan">万元</p>
        </div>
        <div class="jisuan-list">
            <span>商贷利率：</span>
            <input type="text" name="" id="s-lilv" value="" />
            <p class="jisuan-yuan">%</p>
            <ul class="jisuan-menu" id="s-lilv-menu">
                <li>基准利率</li>
                <li>7折</li>
                <li>7.5折</li>
                <li>8折</li>
                <li>8.5折</li>
                <li>9折</li>
                <li>1.05倍</li>
                <li>1.1倍</li>
                <li>1.2倍</li>
                <li>1.3倍</li>
            </ul>
        </div>
        <div class="jisuan-list">
            <span>按揭年限：</span>
            <div class="jisuan-text" id="s-shijian">5</div>
            <p class="jisuan-yuan">年</p>
            <ul class="jisuan-menu" id="s-shijian-menu">
                <li>5年</li>
                <li>10年</li>
                <li>15年</li>
                <li>20年</li>
                <li>25年</li>
                <li>30年</li>
            </ul>
        </div>
        <div class="jisuan">开始计算</div>
    </div>
    <!--公积金-->
    <div class="jisuan-box">
        <div class="fangshi-box">
            <div class="yuegong">
                <div id="gbx-yuegong">0</div>
                <div>参考月供（元）</div>
            </div>
            <ul class="huankuan">
                <li>
                    <div id="gbx-huankuan">0</div>
                    <div>还款总额</div>
                </li>
                <li>
                    <div id="gbx-daikuan">0</div>
                    <div>贷款总额</div>
                </li>
                <li>
                    <div id="gbx-lixi">0</div>
                    <div>支付利息</div>
                </li>
            </ul>
        </div>
        <div class="fangshi-box">
            <div class="yuegong">
                <div id="gbj-yuegong">0</div>
                <div>参考月供（元）</div>
            </div>
            <ul class="huankuan">
                <li>
                    <div id="gbj-huankuan">0</div>
                    <div>还款总额</div>
                </li>
                <li>
                    <div id="gbj-dijian">0</div>
                    <div>每月递减</div>
                </li>
                <li>
                    <div id="gbj-lixi">0</div>
                    <div>支付利息</div>
                </li>
            </ul>
        </div>
        <div class="xiangxi">查看详细计算结果</div>
        <div class="jisuan-list">
            <span class="fangshi-span">还款方式：</span>
            <div class="fangshi">
                <span>
                    <img class="fangshi-img" src="/Public/mobile/img/tubiao/radios.png" alt="" />
                </span>等额本息</div>
            <div class="fangshi">
                <span>
                    <img class="fangshi-img" src="/Public/mobile/img/tubiao/radio.png" alt="" />
                </span>等额本金</div>
        </div>
        <div class="jisuan-list">
            <span>房屋总价：</span>
            <input type="text" name="" id="g-zongjia" value="" />
            <p class="jisuan-yuan">万元</p>
        </div>
        <div class="jisuan-list">
            <span>首付比例：</span>
            <div class="jisuan-text" id="g-shoufu"></div>
            <p class="jisuan-yuan">万元</p>
            <ul class="jisuan-menu" id="g-shoufu-menu">
                <li>一成</li>
                <li>两成</li>
                <li>三成</li>
                <li>四成</li>
                <li>五成</li>
            </ul>
        </div>
        <div class="jisuan-list">
            <span>贷款总额：</span>
            <input type="text" name="" id="g-daikuan" value="" />
            <p class="jisuan-yuan">万元</p>
        </div>
        <div class="jisuan-list">
            <span>商贷利率：</span>
            <input type="text" name="" id="g-lilv" value="" />
            <p class="jisuan-yuan">%</p>
            <ul class="jisuan-menu" id="g-lilv-menu">
                <li>基准利率</li>
                <li>1.1倍</li>
                <li>1.2倍</li>
            </ul>
        </div>
        <div class="jisuan-list">
            <span>按揭年限：</span>
            <div class="jisuan-text" id="g-shijian">5</div>
            <p class="jisuan-yuan">年</p>
            <ul class="jisuan-menu" id="g-shijian-menu">
                <li>5年</li>
                <li>10年</li>
                <li>15年</li>
                <li>20年</li>
                <li>25年</li>
                <li>30年</li>
            </ul>
        </div>
        <div class="jisuan">开始计算</div>
    </div>
    <!--组合贷款-->
    <div class="jisuan-box">
        <div class="fangshi-box">
            <div class="yuegong">
                <div id="zbx-yuegong">0</div>
                <div>参考月供（元）</div>
            </div>
            <ul class="huankuan">
                <li>
                    <div id="zbx-huankuan">0</div>
                    <div>还款总额</div>
                </li>
                <li>
                    <div id="zbx-daikuan">0</div>
                    <div>贷款总额</div>
                </li>
                <li>
                    <div id="zbx-lixi">0</div>
                    <div>支付利息</div>
                </li>
            </ul>
        </div>
        <div class="fangshi-box">
            <div class="yuegong">
                <div id="zbj-yuegong">0</div>
                <div>参考月供（元）</div>
            </div>
            <ul class="huankuan">
                <li>
                    <div id="zbj-huankuan">0</div>
                    <div>还款总额</div>
                </li>
                <li>
                    <div id="zbj-dijian">0</div>
                    <div>每月递减</div>
                </li>
                <li>
                    <div id="zbj-lixi">0</div>
                    <div>支付利息</div>
                </li>
            </ul>
        </div>
        <div class="xiangxi">查看详细计算结果</div>
        <div class="jisuan-list">
            <span class="fangshi-span">还款方式：</span>
            <div class="fangshi">
                <span>
                    <img class="fangshi-img" src="/Public/mobile/img/tubiao/radios.png" alt="" />
                </span>等额本息</div>
            <div class="fangshi">
                <span>
                    <img class="fangshi-img" src="/Public/mobile/img/tubiao/radio.png" alt="" />
                </span>等额本金</div>
        </div>
        <div class="jisuan-list">
            <span>商业贷款：</span>
            <input type="text" name="" id="zs-daikuan" value="" />
            <p class="jisuan-yuan">万元</p>
        </div>
        <div class="jisuan-list">
            <span>商贷利率：</span>
            <input type="text" name="" id="zs-lilv" value="" />
            <p class="jisuan-yuan">%</p>
            <ul class="jisuan-menu" id="zs-lilv-menu">
                <li>基准利率</li>
                <li>7折</li>
                <li>7.5折</li>
                <li>8折</li>
                <li>8.5折</li>
                <li>9折</li>
                <li>1.05倍</li>
                <li>1.1倍</li>
                <li>1.2倍</li>
                <li>1.3倍</li>
            </ul>
        </div>
        <div class="jisuan-list">
            <span>公积金贷款：</span>
            <input type="text" name="" id="zg-daikuan" value="" />
            <p class="jisuan-yuan">万元</p>
        </div>
        <div class="jisuan-list">
            <span>公积金利率：</span>
            <input type="text" name="" id="zg-lilv" value="" />
            <p class="jisuan-yuan">%</p>
            <ul class="jisuan-menu" id="zg-lilv-menu">
                <li>基准利率</li>
                <li>1.1倍</li>
                <li>1.2倍</li>
            </ul>
        </div>
        <div class="jisuan-list">
            <span>按揭年限：</span>
            <div class="jisuan-text" id="z-shijian">5</div>
            <p class="jisuan-yuan">年</p>
            <ul class="jisuan-menu" id="z-shijian-menu">
                <li>5年</li>
                <li>10年</li>
                <li>15年</li>
                <li>20年</li>
                <li>25年</li>
                <li>30年</li>
            </ul>
        </div>
        <div class="jisuan">开始计算</div>
    </div>
    <!--底部固定窗口-->
    <!--<div id="bottom-fixed">
			<a href="zhaofang.html"><span><img src="/Public/mobile/img/tubiao/sousuo-01.png" alt="" /></span>帮您找房</a>
			<a><span><img src="/Public/mobile/img/tubiao/zixun.png" alt="" /></span>在线咨询</a>
			<a href="tel:111111111"><span><img src="/Public/mobile/img/tubiao/tel.png" alt="" /></span>售楼热线</a>
		</div>-->
    <script src="/Public/mobile/js/jisuan.js" type="text/javascript" charset="utf-8"></script>
</body>

</html>