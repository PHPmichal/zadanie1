<?php


class dodaj
{
   public function Articledodaj()
   {
         session_start();
        require_once 'config/bazaDanych.php';

       $title = $_POST['title'];
        $description = $_POST['description'];
        $created_at = date("Y-m-d H:i:s");

        $user_id = $_SESSION['user_id'];

        ($polaczenie->query("INSERT INTO newsletter VALUE (NULL ,'$title','$description','active','$created_at','$created_at','$user_id')"));

        mysqli_close($polaczenie);
   }
}
$oDodaj = new dodaj();
$oDodaj ->Articledodaj();