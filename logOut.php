<?php
session_start();
session_unset($_SESSION['zalogowany']);
header('location:prasowka');
