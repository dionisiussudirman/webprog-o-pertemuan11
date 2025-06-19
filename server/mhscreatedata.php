<?php
    include_once("konfigurasi.php");

    $hsl["error"] = 1;
    
    if(isset($_POST["txNIM"])){
        $NIM=$_POST["txNIM"];
        $NAMA=$_POST["txNAMA"];
        $ALAMAT=$_POST["txALAMAT"];
        $TGL=$_POST["txTGL"];
        $JENISKEL=$_POST["txJK"];

        $sql = "INSERT INTO mhs(NIM,NAMA,ALAMAT,TGL_LAHIR,JENISKEL) values('$NIM','$NAMA','$ALAMAT','$TGL','$JENISKEL');";
        $hsl["sql"] = $sql;
        $hasil = mysqli_query($koneksi,$sql);
        $hsl["affectedrows"] = mysqli_affected_rows($koneksi);
        if($hasil){
            $hsl["error"] = 0;
        }
    }
    header("Content-type: application/json; charset=utf-8");
    echo json_encode($hsl);