<!DOCTYPE html>
<html>
<head>
  <title>taobao</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
@$page = $_GET['pager'];

if ($page < 0) {
$page=0;

}
?>
<ul class="list-group">
  

   
    <?php

    $start = $page * 10 + 1;
    $end = $page * 10 + 10;
    include_once "connect.php";
    $sql = "select * from taobao limit $start,$end";

    $res = mysqli_query($link, $sql);
    $i = 0;
    if (mysqli_affected_rows($link) > 0) {
        while ($val = mysqli_fetch_array($res, MYSQLI_ASSOC)) {
            $i++;
            ?>
            <li>

                <img src="<?php echo $val['shop_img']; ?>"
                     style="width: 100%;height: 100%;"
                />

                <a href="<?php echo $val['shop_info']; ?>">商品详情</a>
                <h6 style="font-weight: bold"> <?php echo $val['name']; ?></h6>

                <h6 style="font-weight: bold;color: red;font-size: 30px"> 原价:￥<?php echo $val['price']; ?></h6>
                <h6 style="font-weight: bold;color: red;font-size: 20px"> 优惠券面额:<?php echo $val['shop_youhui']; ?></h6>
                <div style="height:50px">
                    <a href="<?php echo $val['shop_url']; ?>">
                        <div style="float: left;width: 50%;background: #DD2727;height: 50px ; color:white;text-align: center;line-height: 50px">
                            购买
                        </div>
                    </a>
                    <a href="<?php echo $val['youhui_url']; ?>">
                        <div style="float: right;width: 50%;height: 50px ;color:white;background: #FF9500;text-align: center;line-height: 50px">
                            领券
                        </div>
                    </a>
                </div>
               <div style="backgroud:red;height:20px"> 
		    <hr></hr>
		</div>
			 
            </li>
            <?php
        }
    }
    ?>
</ul>

<div style="margin-Top:30px">
    <a href="index.php?pager=<?php echo($page - 1); ?>">
        <div style="float: left;width: 50%;background: #EDEDED;height: 50px ; color:#000;text-align: center;line-height: 50px">
            上一页
        </div>
    </a>
    <a href="index.php?pager=<?php echo($page + 1); ?>">
        <div style="float: right;width: 50%;height: 50px ; color:#000;background: #EDEDED;text-align: center;line-height: 50px">
            下一页
        </div>
    </a>
</div>
</body>
</html>