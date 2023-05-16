<?php
session_start();
session_unset();
session_destroy();
header('location: /jourj1/forms/connexion.php');
include '../heady.php';