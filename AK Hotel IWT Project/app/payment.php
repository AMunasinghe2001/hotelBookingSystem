<?php 
include "db.php";
include "function.php";

if(isset($_POST['submit'])){

    $result = Payment($_POST);
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
    <title>Payment - Ak Hotel</title>
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
                            <h2>Payment</h2>
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

                   <!-- <div class="row">

                        <div class="col-3">
                            <div class="lbl"><label>First Name :</label></div>
                            <div class="inpt"><input type="text" name="fname" id="fname" placeholder="type your first name"></div>
                        </div>
                        <div class="col-3">
                            <div class="lbl"><label>Last Name :</label></div>
                            <div class="inpt"><input type="text" name="lname" id="lname" placeholder="type your last name"></div>
                        </div>
                        <div class="col-3">
                            <div class="lbl"><label>Email :</label></div>
                            <div class="inpt"><input type="email" name="email" id="email" placeholder="type your email"></div>
                        </div>

                    </div>-->

                     <div class="row">

                        <div class="col-3">
                            <div class="lbl"><label for="invoiceId">Invoice Id :</label></div>
                            <div class="inpt"><input type="text" name="invoiceId" id="invoiceId" placeholder="type your Invoice Id"></div>
                        </div>
                        <div class="col-3">
                            <div class="lbl"><label for="Amount">Amount :</label></div>
                            <div class="inpt"><input type="text" name="Amount" id="Amount" placeholder="type your Amount"></div>
                        </div>
                        <div class="col-3">
                            <div class="lbl"><label for="paymentDate">Payment date :</label></div>
                            <div class="inpt"><input type="date" name="paymentDate" id="paymentDate" placeholder="type your Payment date"></div>
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