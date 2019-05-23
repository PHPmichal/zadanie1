<?php


class SaveEdit
{
    public function Save()
    {
        require_once 'config/bazaDanych.php';
      echo  $newsletter_id = $_POST['newsletter_id'];
        echo  $name = $_POST['name'];
        echo  $description = $_POST['description'];
        echo   $is_active = $_POST['status'];
        echo   $updated_at = date('Y-m-d H:i:s');


        $polaczenie->query("UPDATE newsletter SET name='$name',description='$description',is_active='$is_active',updated_at='$updated_at' WHERE newsletter_id='$newsletter_id' ");

        mysqli_close($polaczenie);
    }
}

$oop = new SaveEdit();
$oop->Save();