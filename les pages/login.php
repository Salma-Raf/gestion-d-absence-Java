<?php require "action_loging.php"?>
<!DOCTYPE html>
<html>

<head>

</head>

<body>

    <title> LOGIN FORM </title>
    <link rel=" stylesheet " href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">
    <link rel=" stylesheet " href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css ">
    <link rel="stylesheet " type=" text/css" href="style_login.css">
    <link rel="stylesheet" type="text/css" href="coco.css">
    <link rel="stylesheet" href="stylefooter.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <div class="form_bg ">
        <div class="container">
            <div class=" col-md-offset-4 col-md-4 col-sm-offset-3 col-sm-6">
                <form class="form_horizontal" action="" method="post">
                    <div class="form_icon">
                        <i class="fa fa-user-circle">
                        </i>
                    </div>
                    <h3 class="title"> login form </h3>
                    <div class="form-group">
                        <span class="input-icon">
                            <i class=" fa fa-user "> </i>
                        </span>
                        <input class="form-control" type="text" name="username" placeholder=" username " />
                    </div>
                    <div class="form-group">
                        <span class="input-icon">
                            <i class="fa fa-lock"> </i>
                        </span>
                        <input class="form-control" type="password" name="password" placeholder=" password " />
                    </div>
                    <br> <button type="submit" name="login" class="btn signin"> login </button>
                    <ul class="form-options">
                        <li>
                            <a href="#"> se souvenir mot de passe</a>
                        </li>
                    </ul>
                </form>
            </div>
        </div>
    </div>

    <?php $i = 0;
  while ($i < 50) {
    echo "<br>";
    $i++;
  }
  ?>
    <?php include "footer.php" ?>

</body>

</html>