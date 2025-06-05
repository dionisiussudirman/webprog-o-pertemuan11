<?php
    $dta["ok"] = 'ok';

    header("content-type: application/json")
    echo json_encode($dta);