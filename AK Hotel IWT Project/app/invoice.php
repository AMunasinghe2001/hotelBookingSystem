<?php 
include "db.php";
include "function.php";

if(isset($_POST['submit'])){

    $result = invoice($_POST);
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
    <title>Invoice - Ak Hotel</title>
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
                            <h2>Invoice</h2>
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


                        <div class="col-3">
                            <div class="lbl"><label for="invoiceNumber">Invoice Number :</label></div>
                            <div class="inpt"><input type="text" name="invoiceNumber" id="invoiceNumber" placeholder="type your invoice_Number"></div>
                        </div>

                        <div class="col-3">
                            <div class="lbl"><label for="bookingId">Booking Id :</label></div>
                            <div class="inpt"><input type="text" name="bookingId" id="bookingId" placeholder="type your Booking Id"></div>
                        </div>

                        <div class="col-3">
                            <div class="lbl"><label for="totalAmount"> Total Amount :</label></div>
                            <div class="inpt"><input type="date" name="totalAmount" id="totalAmount" placeholder="type your Total Amount"></div>
                        </div>

                    </div>

                    
                    <div class="row">

                        <div class="col-4">
                            <div class="lbl"><label for="invoiceDate">Invoice Date :</label></div>
                            <div class="inpt"><input type="date" name="invoiceDate" id="invoiceDate" placeholder="type your Invoice Date"></div>

                        </div>
                        <div class="col-4">
                            <div class="lbl"><label for="dueDate">Due Date :</label></div>
                            <div class="inpt"><input type="date" name="dueDate" id="dueDate" placeholder="type your dueDate"></div>

                        </div>
                        <div class="col-4">
                            
                            <div class="lbl"><label for="dueAmount">Due Amount :</label></div>
                            <div class="inpt"><input type="text" name="dueAmount" id="dueAmount" placeholder="type your Due Amount"></div>

                        
                        </div>
                        <div class="col-4">
                            
                            <div class="lbl"><label for="paidAmount">Paid Amount :</label></div>
                            <div class="inpt"><input type="text" name="paidAmount" id="paidAmount" placeholder="type your paid Amount"></div>

                        
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