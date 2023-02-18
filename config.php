<?php

include 'mail.php';

$conn = mysqli_connect("localhost", "root", "", "poc_share_wheels");

if (!$conn) {
       echo "Connection Failed, ERROR!";
}


