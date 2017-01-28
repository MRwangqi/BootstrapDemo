<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>license</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.bootcss.com/jquery/3.1.0/jquery.js"></script>

    <link href="css/fileinput.min.css" rel="stylesheet">
    <script src="css/fileinput.min.js"></script>
</head>
<body>

<div class="container">
    <?php
    @$user_id = $_GET['user_id'];
    @$user_type=$_GET['user_type'];

    ?>
    <form action="do_license.php?user_id=<?php echo $user_id; ?>&user_type=<?php echo $user_type; ?>" method="post" role="form"
          enctype='multipart/form-data'>

        <div class="content">
            <div class="bg">Zip code/post code</div>
        </div>

        <div style="text-align:left; color: #014888; font-size: 15px;margin: 20px">
            Use this space to give a brief description about your bussiness and services you offer ,we will use to
            market
            your business on our website and app!
        </div>

        <div class="content">
            <textarea name="content" id="article-content" cols="15" rows="5" placeholder="Business Profile"
                      class="bg" required="required"></textarea>
        </div>

        <div class="content">
            <div class="bg">Upload a business picture</div>
        </div>

        <div class="content">
            <input id="input-2" name="file" type="file" class="file" data-show-upload="false"
                   data-show-caption="true">
        </div>


        <div style="margin-top: 20px">
            <button class="btn btn-lg btn-warning btn-block" type="submit">Agress & Create Account</button>
        </div>

        <div style="text-align:left; color: #014888; font-size: 15px;margin: 5px" class="col-sm-9">
            You have read and agress to our policy <a href="http://www.baidu.com" style="text-decoration:underline">Safe
                Trading Hub Policy</a>
        </div>
    </form>

</div>


<script>


</script>
</body>
</html>