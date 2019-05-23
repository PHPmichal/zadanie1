<?php


class Validation
{
    public function LoginValidation()
    {
        if(isset($_POST['email'])){
            $email = $_POST['email'];
            $pass = $_POST['pass'];

            session_start();
            require_once 'config/bazaDanych.php';
            $email = htmlentities($email,ENT_QUOTES,"UTF-8");

            $sql = " SELECT * FROM user WHERE email='$email' AND password='$pass'";
            if($rezultat = @$polaczenie->query(sprintf(" SELECT * FROM user WHERE email='%s'",//zmienna rezultat przyjmie wartosc false jesli bedzie błęde hasło
                mysqli_real_escape_string($polaczenie,$email)))){

                $ile_userow = $rezultat->num_rows;
                if($ile_userow>0){
                    $wiersz = $rezultat->fetch_assoc();
                    if(password_verify($pass,$wiersz['password'])){
                        $_SESSION['zalogowany'] = true;
                        $_SESSION['user_id'] = $wiersz['user_id'];
                        $sesja = true;
                        echo $sesja;
                    }else{
                        echo "Zły adres e-mail lub hasło";
                    }
                } else{
                    echo "Zły adres e-mail lub hasło";
                }
            }else{
                echo "Zły adres e-mail lub hasło";
            }
            mysqli_close($polaczenie);
        }

    }
}
$Check = new Validation();
$Check ->LoginValidation();