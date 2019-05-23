<?php

//require_once 'config/bazaDanych.php';

class DownloadNews
{
   public function Download()
    {
        require_once 'config/bazaDanych.php';
        $metoda = $polaczenie -> query("SELECT * FROM newsletter WHERE is_active='active' ORDER BY updated_at DESC ");
        $wiersze = $metoda -> fetch_all();
        $_SESSION['wiersze'] = $wiersze;

        $this->Login();
        mysqli_close($polaczenie);
    }
    public function Login()
    {
      require_once 'config/Connections.php';

    }
}
$ObjectDownloadNews = new DownloadNews();
$ObjectDownloadNews -> Download();