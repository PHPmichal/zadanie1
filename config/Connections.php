<?php

if(isset($_SESSION['zalogowany'])){
    $_SESSION['logout'] = "Wyloguj się";
    $_SESSION['adres'] = "logOut.php";
    $_SESSION['Add'] = "Dodaj Newstleter";
    $_SESSION['adresAdd'] = "#!Add";
    $_SESSION['Edit'] = "Twoje Newstletery";
    $_SESSION['adresEdit'] = "#!Edit";

}else{
    $_SESSION['logout'] = "Zaloguj się";
    $_SESSION['adres'] = "#!Login";
    $_SESSION['Add'] = "Zarejestruj się";
    $_SESSION['adresAdd'] = "#!Regi";
    $_SESSION['Edit'] = "";
    $_SESSION['adresEdit'] = "";
}