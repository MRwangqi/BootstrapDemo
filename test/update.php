<!DOCTYPE html>
<!--
这里是管理文章页面,首先while循环显示所有的文章
功能:
    1.修改文章调用update.html(php)
    2.删除文章调用del.php
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="page-header ex-page-header">
        <h1 class="title">Admin System</h1>
    </div>
    <div class="body-container">
        <div class="row">
            <div class="col-md-10">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>Images List</h4>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>img_name</th>
                                <th>img</th>
                                <th>opera</th>
                            </tr>
                            <tbody>
                            <!--这里和我跟你们说的ul里面的li标签一样我们学的是对li标签循环,这里直接对tr标签进行循环-->
                            <?php
                            //$cid = intval($_POST);

                            $username = $_GET['user_name'];

                            include "connect.php";

                            $sql = "select * from uploadimg where user_name={$username}";
                            $res = mysqli_query($link, $sql);
                            $i = 0;
                            if (mysqli_affected_rows($link) > 0){
                            while ($val = mysqli_fetch_array($res, MYSQLI_ASSOC)){
                            $i++;
                            ?>
                            <tr>

                                <td><?php echo $i; ?></a></td>
                                <td><?php echo $val['imgurl']; ?></a></td>
                                <td><img src="<?php echo $val['imgurl']; ?>"</a></td>

                                <td>
                                    <a href="del.php?imgurl=<?php echo $val['imgurl']; ?>">
                                        <button type="button" class="btn btn-danger btn-xs"><i
                                                class="glyphicon glyphicon-trash "></i></button>
                                    </a>
                                </td>
                            </tr>
                            </tbody>
                            <?php
                            }
                            }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--<footer class="copyright">-->
<!--    &copy;e8net-->
<!--</footer>-->
</body>
</html>