<!DOCTYPE html>
<!-- release v4.1.8, copyright 2014 - 2015 Kartik Visweswaran -->
<html lang="zh">
<head>
    <meta charset="UTF-8"/>
    <title>image file upload</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

    <script src="http://cdn.bootcss.com/jquery/3.1.0/jquery.js"></script>
    <link href="css/fileinput.min.css" rel="stylesheet">
    <script src="css/fileinput.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container ">
    <br>
    <?php
    $user_id = $_GET['user_id'];
    $user_type = $_GET['user_type'];
    ?>

    <form action="do_upload.php?user_id=<?php echo $user_id; ?>&user_type=<?php echo $user_type; ?>" method="post"
          role="form"
          enctype='multipart/form-data'>
        <div class="content">

            <div class="bg">Zip code/post code</div>
            <div class="bg">Identity Proof 1:Photo ID</div>
            <div class="bg">Take or Upload a passport style photo! See example below</div>

            <div id="123">
                <div style="text-align: center">
                    <img src="images/example.jpg"/>
                </div>
                <div class="guide">
                    Guidelines:  </br>
                    Please use white background or light coloured backgrounds were possible when taking a selfie, Avoid
                    laughing or smiling too much, otherwise photo will be rejected.
                </div>
            </div>

            <div class="content">
                <input id="input-2" name="file_photo" type="file" class="file" data-show-upload="false"
                       data-show-caption="true">
            </div>
            </br>

            <div class="bg">Identity Proof 2:Proof of identity</div>

            <div class="content">
                <input id="input-2" name="file_id" type="file" class="file" data-show-upload="false"
                       data-show-caption="true">
            </div>

            <div class="guide">
                Guidelines:  </br>
                Current valid full photo driving license or passport ID page.
                </br>
                Read full list of accepttable </br>
                documents for proof of ID</br>
                <a href="http://www.baidu.com" style="text-decoration:underline">READ</a>
            </div>
            <div class="bg">Identity Proof 3:Proof of address</div>


            <div class="content">
                <input id="input-2" name="file_address" type="file" class="file" data-show-upload="false"
                       data-show-caption="true">
            </div>

            <div class="guide">
                Guidelines:  </br>
                Upload or Take a picture of a utility bill,driving license ,or bank statment with yourname and
                address showing
                </br>
                Read full list of accepttable </br>
                documents for proof of address</br>
                <a href="http://www.baidu.com" style="text-decoration:underline">READ</a>
            </div>

            <div style="margin-top: 20px">
                <button class="btn btn-lg btn-warning btn-block" type="submit">upload</button>
            </div>

        </div>
    </form>


</div>


</body>

</html>