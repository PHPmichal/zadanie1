<?php
$udana_walidacja = true;
$email = $_POST['email'];
$imie = $_POST['name'];
$nazwisko = $_POST['lastName'];
$haslo1 = $_POST['pass'];
$haslo2 = $_POST['pass2'];
$gender = $_POST['gender'];
$expire_At = date('d-m-Y');

if((strlen($imie)<2) ||(strlen($imie)>35))
{
    $udana_walidacja = false;
    echo "<span>* Imie nie może być puste</span><br>";
}
if((strlen($nazwisko)<2) ||(strlen($nazwisko)>35))
{
    $udana_walidacja = false;
    echo "<span>* Nazwisko nie może być puste</span><br>";
}
//walidacja e-maila
if((strlen($email)<5) ||(strlen($email)>25))
{
    $udana_walidacja = false;
    echo "<span>* Zły adres e-mail</span><br>";
}
$email = $_POST['email'];
$emailB = filter_var($email,FILTER_SANITIZE_EMAIL);
if((filter_var($emailB,FILTER_SANITIZE_EMAIL)==false)||($emailB!=$email))
{
    $wszystko_OK = false;
    echo "<span>* Niepoprawny adres e-mail</span><br>";
}
//walidacja hasła
if((strlen($haslo1)<8) || (strlen($haslo1)>25))
{
    $udana_walidacja = false;
    echo "<span>* hasło musi zawierać min 8 znaków</span><br>";
}

$haslo_hash = password_hash($haslo1,PASSWORD_DEFAULT);

/*if(!isset($_POST['regulamin']))
{
    $udana_walidacja = false;
    //echo "musisz zakceptować regulamin";
}*/
