<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>userinfo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php
$user_type = $_GET['user_type'];
$user_id = $_GET['user_id'];
?>

<div class="container kv-main">
    <div class="userinfo">
        Buyer or Seller membership<br>
        Let's get started!
    </div>
    <form action="do_info.php?user_type=<?php echo $user_type; ?>&user_id=<?php echo $user_id; ?>" method="post"
          role="form">
        <div class="bg">
            <div class="info-text">
                <div>
                    Choose your country:
                    <div class="form-group" style="float: right">
                        <select name="country" id="lunch"
                                style="background-color: #BDE6FF; color: #014888;  border: none; ">
                            <option>American</option>
                            <option>China</option>
                            <option>Canada</option>
                            <option>Japan</option>
                            <option>English</option>
                        </select>
                    </div>

                </div>
                <br>
                First Name:
                <input type="text" class="form-control info-input" name="first_name" required="required"/>
                Last Name:
                <input type="text" class="form-control" name="last_name" required="required"/>
                Email:
                <input type="text" class="form-control" name="email" required="required"/>
                Business Name:
                <input type="text" class="form-control" name="business_name" required="required"/>
                Address line 1:
                <input type="text" class="form-control" name="address_1" required="required"/>
                Address line 2:
                <input type="text" class="form-control" name="address_2" required="required"/>
                Town/city:
                <input type="text" class="form-control" name="twon_city" required="required"/>
                Country/State:
                <input type="text" class="form-control" name="country_state" required="required"/>
            </div>

            <button class="btn btn-lg btn-warning btn-block" type="submit">ok</button>
        </div>
    </form>
</div>

</body>
</html>