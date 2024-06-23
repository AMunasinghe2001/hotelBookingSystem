<?php

$role = 1;

?>

<nav id="sidebar">
    <div class="sidebar-header">
        <a href=""><img src="image/logoak.png" alt="logo" /></a>
    </div>
    <div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">

    <ul class="list-unstyled components">
        <li>
            <a href="./"><i class="fas fa-home"></i> Dashboard</a>
        </li>
<!-- Admin -->
        <?php
        if ($role == 1) {
        ?>
        <li>
                <a href="booking.php"><i class="fas fa-music"></i> Booking</a>
            </li>
            <li>
                <a href="add-room.php"><i class="fas fa-microphone"></i> Add Rooms</a>
            </li>
            <li>
                <a href="add-employee.php"><i class="fas fa-compact-disc"></i> Add Employee</a>
            </li>
            <li>
                <a href="Customer.php"><i class="fas fa-file-audio"></i> Customer</a>
            </li>
            <li>
                <a href="Payment.php"><i class="fas fa-user-tie"></i> Payment</a>
            </li> 
            <li>
                <a href="invoice.php"><i class="fas fa-user-tie"></i> invoice </a>
            </li>
            <li>
                <a href="room-category.php"><i class="fas fa-user-tie"></i> Room Category</a>
            </li>
            <li>
                <a href="user.php"><i class="fas fa-user-tie"></i> User</a>
            </li>
            

          
        <?php
        }
        ?>
<!-- Manager -->
        <?php
        if ($role == 2) {
        ?>
             <li>
                <a href="booking.php"><i class="fas fa-music"></i> Booking</a>
            </li>
            <li>
                <a href="add-room.php"><i class="fas fa-microphone"></i> Add Rooms</a>
            </li>
        
            <li>
                <a href="Customer.php"><i class="fas fa-file-audio"></i> Customer</a>
            </li>
            <li>
                <a href="Payment.php"><i class="fas fa-user-tie"></i> Payment</a>
            </li> 
            <li>
                <a href="invoice.php"><i class="fas fa-user-tie"></i> invoice </a>
            </li>
           
           

        <?php
        }
        ?>
<!-- Accountant -->
        <?php
        if ($role == 3) {
        ?> 
             <li>
                <a href="booking.php"><i class="fas fa-music"></i> Booking</a>
            </li>
            <li>
                <a href="add-room.php"><i class="fas fa-microphone"></i> Add Rooms</a>
            </li>
            <li>
                <a href="add-employee.php"><i class="fas fa-compact-disc"></i> Add Employee</a>
            </li>
            <li>
                <a href="Customer.php"><i class="fas fa-file-audio"></i> Customer</a>
            </li>
            <li>
                <a href="Payment.php"><i class="fas fa-user-tie"></i> Payment</a>
            </li> 
            <li>
                <a href="invoice.php"><i class="fas fa-user-tie"></i> invoice </a>
            </li>
            
            
            
           

        <?php
        }
        ?>

        <!-- Receptionist -->
         <?php
        if ($role == 4) {
        ?> 
             <li>
                <a href="booking.php"><i class="fas fa-music"></i> Booking</a>
            </li>
            <li>
                <a href="add-room.php"><i class="fas fa-microphone"></i> Add Rooms</a>
            </li>
            <li>
                <a href="add-employee.php"><i class="fas fa-compact-disc"></i> Add Employee</a>
            </li>
            <li>
                <a href="Customer.php"><i class="fas fa-file-audio"></i> Customer</a>
            </li>
            <li>
                <a href="Payment.php"><i class="fas fa-user-tie"></i> Payment</a>
            </li> 
            <li>
                <a href="invoice.php"><i class="fas fa-user-tie"></i> invoice </a>
            </li>
            <li>
                <a href="room-category.php"><i class="fas fa-user-tie"></i> Room Category</a>
            </li>
            <li>
                <a href="user.php"><i class="fas fa-user-tie"></i> User</a>
            </li>
           

        <?php
        }
        ?>


    </ul>
    <ul class="list-unstyled CTAs">

    </ul>
</nav>