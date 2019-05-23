<?php
session_start();
require_once 'DownloadNews.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="js/bootstrap.min.js">
    <link rel="stylesheet" href="fontello/css/fontello.css">
    <meta charset="utf-8">
    <title>ZadanieI</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/ajax.js"></script>
    <script src="js/angular.js"></script>
    <script src="Login.js"></script>

</head>
<body data-ng-app="characterSheet" class="bg-dark">
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <p class="navbar-brand mt-3 ml-md-5" id="name"></p>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 ml-5 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link ml-5" href="#">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link ml-5" href="<?=$_SESSION['adresAdd']?>"><?=$_SESSION['Add'] ?><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link ml-5" href="<?=$_SESSION['adresEdit']?>"><?=$_SESSION['Edit'] ?><span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <a class="nav-link color-logout mr-5" href="<?=$_SESSION['adres']?>"><?=$_SESSION['logout'];?><span class="ml-2 icon-logout-1"></span></a>
            </div>
        </nav>
    </header>
</body>
    <main>
        <article>
            <div data-ng-view class='appView'></div>
        </article>
    </main>
</html>