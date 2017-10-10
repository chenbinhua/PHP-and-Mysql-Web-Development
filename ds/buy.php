<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>购物车</title>
    <link rel="stylesheet" href="/ds/css/common.css">
    <link rel="stylesheet" href="/ds/css/main.css">
</head>
<body>
<div class="headerBar">
    <div class="topBar">
        <div class="conWidth">
            <div class="leftArea">
                <a href="#" class="collection">收藏磨课</a>
            </div>
            <div class="rightArea">
                欢迎来到慕课网！<a href="">[登录]</a><a href="">[免费注册]</a>
            </div>
        </div>
    </div>
    <div class="logoBar">
        <div class="conWidth clearfix">
            <div class="logo fl">
                <a href="#"><img src="/ds/images/icon/logo.jpg" alt="摩客网"></a>
            </div>
            <div class="progress">
                <img src="/ds/images/progress.jpg" alt="进度">
            </div>
        </div>
    </div>
    <div class="navBox clearfix">
        <div class="conWidth">

            <ul class="nav fl">
                <li><a href="" class="active">数码城</a></li>
                <li><a href="">天黑黑</a></li>
                <li><a href="">团购</a></li>
                <li><a href="">发现</a></li>
                <li><a href="">二手特卖</a></li>
                <li><a href="">名品会</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="buy_address conWidth">
    <div class="buy_area clearfix">
        <h3>收货信息</h3>
        <div class="address">
            <ul class="address_list">
                <li class="clearfix">
                    <div class="fl">
                        <span><em>*</em>选择地区：</span></div>
                    <div class="select ">
                        <h3>海定区5环内</h3>
                        <span></span>
                        <div class="show_select">
                            <ul>
                                <li>上海</li>
                                <li>深圳</li>
                                <li>北京</li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><span><em>*</em>详细地址：</span><input type="text" name="address" placeholder="最多输入26个汉字" size="52"></li>
                <li><span><em>*</em>收货人：</span><input type="text" name="username" placeholder="最多输入10个汉字" size="20"></li>
                <li><span><em>*</em>手机：</span><input type="text" name="phone" placeholder="如131445254" size="10"><span>或固定电话：</span>
                    <input type="text" name="area" placeholder="区号" size="3"><span>-</span>
                    <input type="text" name="telephone" placeholder="电话号码" size="10"><span>-</span>
                    <input type="text" name="ext" placeholder="分机号（可选）" size="10">
                </li>
                <li class="button"><input type="button" value="确认收货" ></li>
            </ul>
        </div>
    </div>
    <div class="buy_area clearfix">
        <h3>支付方式</h3>
        <div class="address">
            <ul class="address_list">
                <li><input type="radio" name="payment" class="radio" id="weixin"><label for="weixin">用微信扫一扫就能支付！</label></li>
                <li><input type="radio" name="payment" class="radio" id="payment"><label for="payment">货到付款&nbsp;送货上门后在付款，使用现金或刷银行卡。</label></li>
            </ul>
        </div>
    </div>
    <div class="buy_area clearfix">
        <h3>送货清单 <a href="" class="back_buy">返回购物车修改</a></h3>
        <div class="buy_shop">
                <div class="car_head clearfix">
                    <div class="car_item car_with">
                        商品名称
                    </div>
                    <div class="car_item ">
                        单价
                    </div>
                    <div class="car_item ">
                        返现
                    </div>
                    <div class="car_item">
                        数量
                    </div>
                    <div class="car_item">
                        小计
                    </div>
                </div>
            <div class="car_cont clearfix">
                <div class="car_item car_with">
                    <div class="car_info clearfix">
                        <img src="/ds/images/buy01.jpg" alt="">
                        <div class="car_info_con">
                            <p><a href="">海信中央冰箱 三门冰箱（银色）</a></p>
                            <p>【赠品】保鲜盒 保鲜袋</p>
                        </div>
                    </div>

                </div>
                <div class="car_item ">
                    ￥1450.00
                </div>
                <div class="car_item ">
                    ￥0.00
                </div>
                <div class="car_item">
                    1
                </div>
                <div class="car_item color">
                    ￥1450.00
                </div>
            </div>
            <div class="car_message">
                若您对包裹有要求，请在此留言
            </div>
            <div class="exclamation">
                <i></i><span class="excl_img">抱歉，以下商品不能购买，已自动帮您剔除并减去相应金额。</span>
            </div>
            <div class="car_cont clearfix">
                <div class="car_item car_with">
                    <div class="car_info clearfix">
                        <img src="/ds/images/buy01.jpg" alt="">
                        <div class="car_info_con">
                            <p><a href="">海信中央冰箱 三门冰箱（银色）</a></p>
                            <p>【赠品】保鲜盒 保鲜袋</p>
                        </div>
                    </div>

                </div>
                <div class="car_item ">
                    ￥1450.00
                </div>
                <div class="car_item ">
                    ￥0.00
                </div>
                <div class="car_item">
                    1
                </div>
                <div class="car_item color">
                    ￥1450.00
                </div>
            </div>
        </div>
    </div>
    <div class="buy_area clearfix">
        <h3>订单结算</h3>
            <div class="car_count">
                <div class="car_rmb">
                    总计：<span>￥1459.00</span>
                </div>
                    <input type="submit" value="提交订单" class="commit">
            </div>
    </div>

</div>




<div class="footer">
    <p><a href="">慕课简介</a><span>|</span><a href="">慕课公告</a><span>|</span><a href="">招纳贤士</a><span>|</span><a href="">联系我们</a><span>|</span>客服热线：400-675-1234</p>
    <p>Copyright &copy; 2006 - 2014 慕课版权所有&nbsp;&nbsp;京ICP备09037834号&nbsp;&nbsp;京ICP证B1034-8373号&nbsp;&nbsp;某市公安局XX分局备案编号：123456789123</p>
</div>

</body>
</html>