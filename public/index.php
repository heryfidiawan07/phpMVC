<?php
    // Menampilkan pesan error PHP apache ubuntu
    error_reporting(E_ALL);
    ini_set('display_errors', TRUE);
    ini_set('display_startup_errors', TRUE);

    require_once '../app/init.php';

    $app = new App;