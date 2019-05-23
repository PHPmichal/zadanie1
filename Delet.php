<?php


class Delet
{
    public function DeletNew()
    {
        require_once 'config/bazaDanych.php';
        $id = $_POST['newsletter_id'];
        $polaczenie->query("DELETE  FROM newsletter WHERE newsletter_id='$id' ");

        mysqli_close($polaczenie);

    }
}
$ObDelet = new Delet();
$ObDelet->DeletNew();