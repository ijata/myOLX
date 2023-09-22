<?php

include_once 'view/header.php';
require_once 'contoler/connect.php';
include_once 'view/footer.php';
$connect = new Connect();

if(!$_SESSION['connect']&&$_SESSION['connect']!=''){
    echo '<div class="alert alert-danger" role="alert">Błąd połączenia z bazą danych!</div>';
}

