<?php 
    $con = mysqli_connect("DB_HOST_PLACEHOLDER","DB_USER_PLACEHOLDER","DB_PASSWORD_PLACEHOLDER","DB_NAME_PLACEHOLDER");

    if (mysqli_connect_errno()){ 
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    } 
?>