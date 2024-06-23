<?php 
include "db.php";
include "function.php";

if(isset($_POST['submit'])){

    $result = booking($_POST);
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
    <title>Booking - Ak Hotel</title>
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
                            <h2>Booking</h2>
                        </div>

                    </div>

                    <div class="row">
                    <div class="col-1">
                            
                            <?php
                            
                            if(isset($success)){
                            
                                echo $success;
                            
                            }
                            else if(isset($error)){
                            
                                echo $error;
                            }
                            
                            
                            
                            ?>

                        

                        <div class="col-4" >
                            <div class="lbl"><label for="customerId">Customer Id:</label></div>
                            <div class="inpt"><input type="customerId" name="customerId" id="customerId" placeholder="type your Customer Id">
                        </div>
                        </div>
                        <div class="col-4" >
                            <div class="lbl"><label for="roomId">Room Id:</label></div>
                            <div class="inpt"><input type="roomId" name="roomId" id="roomId" placeholder="type your room Id"></div>

                        </div>
                        <div class="col-4" >
                            <div class="lbl"><label for="checking">Checking :</label></div>
                            <div class="inpt"><input type="date" name="checking" id="checking" placeholder="type your Checking">
                        </div>
                        </div>

                        <div class="col-4" >
                            <div class="lbl"><label for="checkout">Checkout:</label></div>
                            <div class="inpt"><input type="date" name="checkout" id="checkout" placeholder="type your Checkout">
                        </div>

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