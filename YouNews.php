<?php


class YouNews
{
    function EditYourNews()
    {
        require_once 'config/bazaDanych.php';
        $user_id = $_SESSION['user_id'];
        $metoda = $polaczenie -> query("SELECT * FROM newsletter WHERE user_id='$user_id'  ORDER BY updated_at DESC ");
        $wiersze = $metoda -> fetch_all();
        $_SESSION['wierszeUsera'] = $wiersze;

        mysqli_close($polaczenie);

    }
}
$create = new YouNews();
$create->EditYourNews();