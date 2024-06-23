


<?php

function userLogin($un, $pw)
    {
        $date = new DateTime();
        $date->setTimezone(new DateTimeZone('Asia/hong_kong'));
        $now = $date->format("Y-m-d HH:MM:SS");

        $error = false;

        // prevent sql injections/ clear user invalid inputs
        $username = trim($un);
        $username = strip_tags($username);
        $username = htmlspecialchars($username);

        $password = trim($pw);
        $password = strip_tags($password);
        $password = htmlspecialchars($password);
        // prevent sql injections / clear user invalid inputs

        if (empty($username)) {
            $error = true;
            $uerror = "Please enter your Username";
            return $uerror;
        } elseif (empty($password)) {
            $error = true;
            $perror = "Please enter your password";
            return $perror;
        } else {

            // if there's no error, continue to login
            if (!$error) {

                $query = "SELECT * FROM user WHERE email='$username'";

                $db = new DB();

                $result = $db->selectQuery($query);

                $row = mysqli_fetch_assoc($result);

                $count = mysqli_num_rows($result);

                $hash = sha1($password);
                
                if ($count == 1 && $row['password'] == $hash) {

                    $_SESSION['user'] = $row['email']; 
                        header("Location: ./index.php");
                } else {
                    $error = true;
                    $lerror = "Incorrect email or Password, Try again...";
                    return $lerror;
                }
            }
        }
    }

function addEmployee($data)

{

    $firstName = $data['fname'];
    $lastName = $data['lname'];
    $email = $data['email'];
    $contactNumber = $data['contactNumber'];
    $address = $data['Address'];
    $gender = $data['Gender'];
    $joinedDate = $data['joinedDate'];
    $designation = $data['Designation'];


    $db = new DB();

    $query = "INSERT INTO `employee` (first_name,last_name,email,contact_number,address,gender,joined_date,designation)
VALUES('" . $firstName . "','" . $lastName . "','" . $email . "','" . $contactNumber . "','" . $address . "','" . $gender . "','" . $joinedDate . "','" . $designation . "')";

    $result = $db->readQuery($query);

    return $result;
}
function updateEmployee($data){

    $id = $data['id'];
    $firstName = $data['fname'];
    $lastName = $data['lname'];
    $email = $data['email'];
    $contactNumber = $data['contactNumber'];
    $address = $data['Address'];
    $gender = $data['Gender'];
    $joinedDate = $data['joinedDate'];
    $designation = $data['Designation'];


    $db = new DB();

    $query = "UPDATE `employee` SET "
    . "`first_name` = '" . $firstName . "',"
    . "`email` = '" . $email . "',"
    . "`contact_number` = '" . $contactNumber . "',"
    . "`address` = '" . $address . "',"
    . "`gender` = '" . $gender . "',"
    . "`joined_date` = '" . $joinedDate . "',"
    . "`designation` = '" . $designation . "',"
    . "`last_name` = '" . $lastName . "'"
    . "WHERE `id` = '" . $id . "'";

    $result = $db->readQuery($query);

    return $result;

}

function Customer($data)
{

    $firstName = $data['fname'];
    $lastName = $data['lname'];
    $email = $data['email'];
    $contactNumber = $data['contactNumber'];
    $address = $data['Address'];
    $joinedDate = $data['joinedDate'];
    $userId = $data['userId'];


    $db = new DB();

    $query = "INSERT INTO `customer` (first_name,last_name,email,contact_number,address,joined_date,user_id)
    VALUES('" . $firstName . "','" . $lastName . "','" . $email . "','" . $contactNumber . "','" . $address . "','" . $joinedDate . "','" . $userId . "')";

    $result = $db->readQuery($query);

    return $result;
}
function Payment($data)
{

    $invoiceId = $data['invoiceId'];
    $Amount = $data['Amount'];
    $paymentDate = $data['paymentDate'];


    $db = new DB();

    $query = "INSERT INTO `payment` (invoice_id,amount,payment_date)
        VALUES('" . $invoiceId . "','" . $Amount . "','" . $paymentDate . "')";

    $result = $db->readQuery($query);

    return $result;
}
function invoice($data)
{

    $invoiceNumber = $data['invoiceNumber'];
    $bookingId = $data['bookingId'];
    $totalAmount = $data['totalAmount'];
    $invoiceDate = $data['invoiceDate'];
    $dueDate = $data['dueDate'];
    $dueAmount = $data['dueAmount'];
    $paidAmount = $data['paidAmount'];
    $db = new DB();

    $query = "INSERT INTO `invoice` (invoice_number,booking_id,total_amount,invoice_date,due_date,due_amount,paid_amount)
            VALUES('" . $invoiceNumber . "','" . $bookingId . "','" . $totalAmount . "','" . $invoiceDate . "','" . $dueDate . "','" . $dueAmount . "','" . $paidAmount . "')";

    $result = $db->readQuery($query);

    return $result;
}

function roomCategory($data)
{

    $categoryName = $data['categoryName'];
    $fullboardPrice = $data['fullboardPrice'];
    $halfboardPrice = $data['halfboardPrice'];


    $db = new DB();

    $query = "INSERT INTO `room_category` (category_name,fullboard_price,halfboard_price)
                VALUES('" . $categoryName . "','" . $fullboardPrice . "','" . $halfboardPrice . "')";

    $result = $db->readQuery($query);

    return $result;
}
function user($data)
{

    $empId = $data['empId'];
    $userName = $data['userName'];
    $password = $data['password'];
    $role = $data['role'];


    $db = new DB();

    $query = "INSERT INTO `user` (emp_id,username,password,role)
                    VALUES('" . $empId . "','" . $userName . "','" . $password . "','" . $role . "')";

    $result = $db->readQuery($query);

    return $result;
}
function booking($data)
{

    $customerId = $data['customerId'];
    $roomId = $data['roomId'];
    $checking = $data['checking'];
    $checkOut = $data['checkout'];


    $db = new DB();

    $query = "INSERT INTO `booking` (customer_id,room_id,checking,checkout)
                        VALUES('" . $customerId . "','" . $roomId . "','" . $checking . "','" . $checkOut . "')";

    $result = $db->readQuery($query);

    return $result;
}
function addRoom($data)
{

    $room_number = $data['room_number'];
    $category_id = $data['category_id'];

    $db = new DB();

    $query = "INSERT INTO `room` (room_number,category_id)
                      VALUES('" . $room_number . "','" . $category_id . "')";

    $result = $db->readQuery($query);

    return $result;
}



function getAllEmployee() {

    $query = "SELECT * FROM `employee` ORDER BY id DESC";

    $db = new DB();
    $result = $db->selectQuery($query);

    $array_res = array();

    while ($row = mysqli_fetch_array($result)) {
        array_push($array_res, $row);
    } 

    return $array_res;
}

function getOneEmployee($id) {

    $query = "SELECT * FROM `employee` WHERE `id` = '$id' LIMIT 1";

    $db = new DB();
    $result = $db->selectQuery($query);

    $row = mysqli_fetch_assoc($result);

    return $row;
}

function delete($id) {
 

    $sql = "DELETE FROM `employee` WHERE `id` =  '$id'";

    $db = new DB();

    $result = $db->readQuery($sql);

    return $result;
}