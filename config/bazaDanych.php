<?php
require_once 'connect.php';
mysqli_report(MYSQLI_REPORT_STRICT);
    try
    {
    $polaczenie = new mysqli ($host,$db_user,$db_password,$db_name);
    if($polaczenie->error != 0) {
        throw new Exception(mysqli_connect_errno());
        }
    else{

    }
    } catch(Exception $e)
    {
        echo "Błąd dla developrea" . $e;
    }
