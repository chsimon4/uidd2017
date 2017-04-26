<?php

$conn = mysqli_connect("localhost", "groupa", "groupagroupa", "uidd2017_groupA");

if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}