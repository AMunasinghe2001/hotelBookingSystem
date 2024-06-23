<?php 
include "db.php";
include "function.php";

if(isset($_POST['submit'])){

    $result = addRoom($_POST);
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
    <title>Add Room - Ak Hotel</title>
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
                            <h2>Add Room</h2>
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
                            <div class="lbl"><label for="roomNumber">Room Number :</label></div>
                            <div class="inpt"><input type="roomNumber" name="roomNumber" id="roomNumber" placeholder="type your Room Number"></div>
                        </div>
                            <div class="col-3">
                            <div class="lbl"><label for="categoryId">category id :</label></div>
                            <div class="inpt"><input type="category id" name="categoryId" id="categoryId" placeholder="type your category id"></div>



                    </div>

                    </div>

                    <div class="row">

                                <div class="col-1">
                                    <div class="btn"><input type="submit" name="submit" id="submit" value="submit"></div>
                                </div>

                            </div>

                
                </form>

                <div class="row">

<div class="col-1">
    <div class="table-view">
        <table border="1" id="empList">
            <tr>
                <th>Room Number</th>
                <th>Category Id</th>
              
            </tr>


            <?php

            $allEmployee = getAllEmployee();

            if (count($allEmployee) > 0) {
                foreach ($allEmployee as $value) {
            ?>

                    <tr id="row_<?=$value['id']; ?>">
                        <td><?php echo $value["room_number"]; ?></td>
                        <td><?php echo $value["category_id"]; ?></td>
                        
                        <td>
                            <a href="edit-employee.php?id=<?php echo $value["id"]; ?>">Edit</a>
                            <button value="<?=$value['id']; ?>" id="<?=$value['id']; ?>" class="Delete"> delete  </button>
                        </td>
                    </tr>

                <?php
                }
            } else {
                ?>
                <b>No users in the database.</b>
            <?php } ?>




            </div>

        </div>
    </div>

</body>

</html>