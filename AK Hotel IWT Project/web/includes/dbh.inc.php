<?php

$serverName ="localhost";
$dbUsername ="admin";
$dbPassword ="p1P(pT3kx26dOb5B";
$dbName ="lands";

$conn = mysqli_connect($serverName , $dbUsername , $dbPassword ,$dbName);

if (!$conn)
{
    die ("Connection failed : ".mysqli_connect_error());
}
