<?php

session_start();
class Regis
{
    public function ValidationRegis()
    {
        if(isset(($_POST)['email'])) {
            require_once 'ValidationRegis.php';
            require_once"config/bazaDanych.php";

            if($rezultat = $polaczenie->query("SELECT * FROM user WHERE email='$email'")){
                $ile_takich_maili = $rezultat->num_rows;
                if($ile_takich_maili>0)
                {
                    $udana_walidacja = false;
                    echo "<span>Podany e-mail już istnieje</span><br>";
                }
                if($udana_walidacja == true)
                {
                    $expire_At = date("Y-m-d");
                    //poprawnie przeprowadzona walidacja :D
                    if($polaczenie->query("INSERT INTO user VALUES (NULL,'$imie','$nazwisko','$email','$gender','active','$haslo_hash','$expire_At','$expire_At')"))
                    {
                       // $_SESSION['zalogowany'] = true;
                        echo true;
                    }
                }
            }
           mysqli_close($polaczenie);
        }
    }
}
$Oregis = new Regis();
$Oregis -> ValidationRegis();

