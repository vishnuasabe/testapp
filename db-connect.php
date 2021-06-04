<?php
/**
 * Created by PhpStorm.
 * User: Chaudhry Waqas
 * Date: 12/8/2015
 * Time: 2:42 PM
 */

$servername = "remotemysql.com";
$username = "MK7KrRYTrY";
$password = "dIkMGwwBr4";
$database = 'MK7KrRYTrY';

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

mysqli_select_db($conn, $database) or die( "Unable to select database");