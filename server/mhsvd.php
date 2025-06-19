<?php
    global $koneksi;
    include_once("konfigurasi.php");

    $sql = "SELECT NIM, NAMA, ALAMAT, TGL_LAHIR, JENISKEL FROM mhs;";
    $ps = mysqli_query($koneksi, $sql);
    while($res = mysqli_fetch_assoc($ps)){
        $h[] = array(
            "NIM"=>$res["NIM"],
            "NAMA"=>$res["NAMA"],
            "ALAMAT"=>$res["ALAMAT"],
            "LAHIR"=>$res["TGL_LAHIR"],
            "JNSKEL"=>$res["JENISKEL"],
        );
    }

    header("Content-type: application/json");
    echo json_encode($h);