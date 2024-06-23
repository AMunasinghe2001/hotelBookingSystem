<?php 
include "db.php";
include "function.php";

if(isset($_POST['submit'])){

    $result = roomCategory($_POST);
    if($result){
        $success ='<div style="color:#0a8340;"> successfully added new employee </div>';
    }
    else{
        $error = '<div style="color:#8d131d;">something went wrong , please try again </div>';
    }

}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Room-category - Ak Hotel</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Edu+NSW+ACT+Foundation:wght@600&family=Nunito:ital@1&family=Open+Sans:ital,wght@0,300;1,300&display=swap" rel="stylesheet">
</head>

<body>
    <!-- HTML -->

    <?php include "nav-bar.php" ?>

    <div id="content">

        <?php include "top-header.php" ?>

        <div class="wapper">

            <div class="form-content">
                <form action="" method="post">

                    <div class="row">

                        <div class="col-1">
                            <h2>Room category</h2>
                        </div>

                    </div>
                    <div class="col-1">
                            
<?php

if(isset($success)){

    echo $success;

}
else if(isset($error)){

    echo $error;
}



?>

                  
                    <div class="row">

                        <div class="col-3">
                            <div class="lbl"><label for="categoryName">Category name :</label></div>
                            <div class="inpt"><input type="text" name="categoryName" id="categoryName" placeholder="type your category_name"></div>
                        </div>

                        <div class="col-3">
                            <div class="lbl"><label for="fullboardPrice">Fullboard price :</label></div>
                            <div class="inpt"><input type="fullboard_price" name="fullboardPrice" id="fullboardPrice" placeholder="type your fullboard_price"></div>
                        </div>

                        <div class="col-3">
                            <div class="lbl"><label for="halfboardPrice">Halfboard_price :</label></div>
                            <div class="inpt"><input type="halfboard_price" name="halfboardPrice" id="halfboardPrice" placeholder="type your halfboard_price"></div>
                        </div>

                    </div>

                    <div class="row">

                                <div class="col-1">
                                    <div class="btn"><input type="submit" name="submit" id="submit" value="submit"></div>
                                </div>

                            </div>


                    


                    </form>
            </div>

        </div>
    </div>

</body>

</html>