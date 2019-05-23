<?php


class FormDetail
{
    public function Routing()
    {
        $take = htmlspecialchars($_GET["n"]);
        $this->Reading($take);

    }
    public function Reading($take)
    {
        require_once 'config/bazaDanych.php';
        if($metoda = $polaczenie->query("SELECT * FROM newsletter WHERE newsletter_id = $take")){
            $wiersz = $metoda->fetch_assoc();
            $this->Response($wiersz);

        }
        mysqli_close($polaczenie);
    }
    public function Response($wiersz)
    {
        session_start();
        $title = $_SESSION['titleEdit'] = $wiersz['name'];
        $_SESSION['descriptionEdit'] = $wiersz['description'];
        $_SESSION['newsletter_id'] = $wiersz['newsletter_id'];
        header('location:Edytujesz-'.$title);

    }
}
$Orute = new FormDetail();
$Orute->Routing();