<?php
    define("DBHOST","localhost");
    define("DBUSERNAME","root");
    define("DBPASSWORD","");
    define("DBNAME","mahasiswa");
    define("DBPORT","3306");
    global $koneksi;

    $koneksi = mysqli_connect(DBHOST,DBUSERNAME,DBPASSWORD,DBNAME,DBPORT) 
        or die("Koneksi ke database gagal");