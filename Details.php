<?php

class Details
{
    function Routing()
    {
        $take = htmlspecialchars($_GET["n"]);
        $this->DetailsNewstleter($take);
    }
    function DetailsNewstleter($take)
    {
        require_once 'config/bazaDanych.php';
        if($metoda = $polaczenie -> query("SELECT * FROM newsletter WHERE newsletter_id=$take  ")){
            $wierszN = $metoda -> fetch_assoc();
            $user_id = $wierszN['user_id'];
            if($metoda = $polaczenie -> query("SELECT * FROM user WHERE user_id=$user_id  ")){
                $wierszU = $metoda -> fetch_assoc();
            }
        }
        $this->ShowDetails($wierszN,$wierszU);
        mysqli_close($polaczenie);
    }
    function ShowDetails($wierszN,$wierszU)
    {
        session_start();

        $title = $_SESSION['name'] = $wierszN['name'];
        $_SESSION['description'] = $wierszN['description'];
        $_SESSION['is_active'] = $wierszN['is_active'];
        $_SESSION['updated_at'] = $wierszN['updated_at'];
        $_SESSION['first_name'] = $wierszU['first_name'];
        header('location:Czytasz-o-'.$title);
    }
}
$Detail = new Details();
$Detail -> Routing();