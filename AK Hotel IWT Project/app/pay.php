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

                    </div>

                    <div class="row">

                        <div class="col-3" >
                        <div class="lbl"><label>Contact Number :</label></div>
                        <div class="inpt"><input type="text" name="Contact Number" id="Contact Number" placeholder="type your Contact Number"></div>

                        </div>
                        <div class="col-3" >
                        <div class="lbl"><label>Address :</label></div>
                        <div class="inpt"><input type="text" name="Address" id="Address" placeholder="type your Address"></div>

                        </div>
                        <div class="col-3">
                        <div class="lbl"><label>Gender :</label></div>
                        <div class="inpt"><input type="text" name="Gender" id="Gender" placeholder="type your Gender"></div>

                        </div>
                    </div>

                    <div class="row">

                        <div class="col-4">
                           <div class="lbl"><label>joined date :</label></div>
                           <div class="inpt"><input type="date" name="joined date" id="joined date" placeholder="type your joined date"></div>
                        </div>

                        <div class="col-4" >
                          <div class="lbl"><label>stetas :</label></div>
                          <div class="inpt"><input type="text" name="stetas" id="stetas" placeholder="type your stetas"></div>
                        </div>

                        <div class="col-4">
                          <div class="lbl"><label>Image :</label></div>
                          <div class="inpt"><input type="file" name="Image" id="Image" placeholder="type your Image"></div>
                        </div>

                        <div class="col-4">
                            <div class="lbl"><label>Designation :</label></div>
                            <div class="inpt"><input type="text" name="Designation" id="Designation" placeholder="type your Designation"></div>
                        </div>
                        <div>
                            <div><input type="submit" value="Submit"></div>


                        </div>

                    </div>


                </form>
            </div>

        </div>
    </div>

</body>

</html>