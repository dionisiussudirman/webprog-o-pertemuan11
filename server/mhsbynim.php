<?php
    include_once("konfigurasi.php");
    $dta["error"] = '1';

    if(isset($_GET["nim"])){
        $dta["error"] = '2';
        $nim = $_GET["nim"];
        $sql = "SELECT * FROM mhs WHERE NIM='$nim';";
        $hasil = mysqli_query($koneksi,$sql);
        $jAfrow = mysqli_affected_rows($koneksi);
        if($jAfrow>0){
            $h = mysqli_fetch_assoc($hasil);
            $dta["isi"] = [
                'NIM'=>$h["NIM"],
                'NAMA'=>$h["NAMA"],
                'ALAMAT'=>$h["ALAMAT"],
                'TGL'=>$h["TGL_LAHIR"],
                'JENISKEL'=>$h["JENISKEL"]
            ];
            $dta["error"] = '0';
        }
        mysqli_close($koneksi);
    }

    header("Content-type: application/json");
    echo json_encode($dta);