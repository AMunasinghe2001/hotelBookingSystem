<?php
include "db.php";
include "function.php";

if (isset($_POST['submit'])) {

    $result = addEmployee($_POST);
    if ($result) {
        $success = '<div style="color:#0a8340;"> successfully added new employee </div>';
    } else {
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
    <title>Add Employee - Ak Hotel</title>
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
                            <h2>Add Employee</h2>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-1">

                            <?php

                            if (isset($success)) {

                                echo $success;
                            } else if (isset($error)) {

                                echo $error;
                            }



                            ?>

                        </div>


                    </div>
                    <div class="row">


                        <div class="col-3">
                            <div class="lbl"><label for="fname">First Name :</label></div>
                            <div class="inpt"><input type="text" name="fname" id="fname" placeholder="type your first name"></div>
                        </div>
                        <div class="col-3">
                            <div class="lbl"><label for="lname">Last Name :</label></div>
                            <div class="inpt"><input type="text" name="lname" id="lname" placeholder="type your last name"></div>
                        </div>
                        <div class="col-3">
                            <div class="lbl"><label for="email">Email :</label></div>
                            <div class="inpt"><input type="email" name="email" id="email" placeholder="type your email"></div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-3">
                            <div class="lbl"><label for="contactNumber">Contact Number :</label></div>
                            <div class="inpt"><input type="text" name="contactNumber" id="contactNumber" placeholder="type your Contact Number"></div>

                        </div>
                        <div class="col-3">
                            <div class="lbl"><label for="Address">Address :</label></div>
                            <div class="inpt"><input type="text" name="Address" id="Address" placeholder="type your Address"></div>

                        </div>
                        <div class="col-3">
                            <div class="lbl"><label for="Gender">Gender :</label></div>
                            <div class="input-radio">


                                <input type="radio" name="Gender" value="male">Male
                                <input type="radio" name="Gender" value="female">Female


                            </div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-3">
                            <div class="lbl"><label for="joinedDate">joined date :</label></div>
                            <div class="inpt"><input type="date" name="joinedDate" id="joinedDate" placeholder="type your joined date"></div>
                        </div>




                        <div class="col-3">
                            <div class="lbl"><label for="Designation">Designation :</label></div>
                            <div class="inpt">
                                <select name="Designation" id="Designation">
                                    <option value="Admin">Admin</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Accountant">Accountant</option>
                                    <option value="Receptionist">Receptionist</option>
                                </select>


                            </div>
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
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Email</th>
                                    <th>Contact number</th>
                                    <th>Adress</th>
                                    <th>Gender</th>
                                    <th>Joined date</th>
                                    <th>Designation</th>
                                    <th>Option</th>
                                </tr>


                                <?php

                                $allEmployee = getAllEmployee();

                                if (count($allEmployee) > 0) {
                                    foreach ($allEmployee as $value) {
                                ?>

                                        <tr id="row_<?=$value['id']; ?>">
                                            <td><?php echo $value["first_name"]; ?></td>
                                            <td><?php echo $value["last_name"]; ?></td>
                                            <td><?php echo $value["email"]; ?></td>
                                            <td><?php echo $value["contact_number"]; ?></td>
                                            <td><?php echo $value["address"]; ?></td>
                                            <td><?php echo $value["gender"]; ?></td>
                                            <td><?php echo $value["joined_date"]; ?></td>
                                            <td><?php echo $value["designation"]; ?></td>
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





                            </table>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>

    <?php
include "db.php";
include "functions.php";

$result = delete($_GET['id']);

if($result){
    header('location: ../app/user.php');
}
?>
</body>


</html>