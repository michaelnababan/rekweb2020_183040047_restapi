<?php

$mahasiswa = [
    [
        "nama" => "Dwi Yanto Subastian",
        "nrp" => "183040064",
        "email" => "subastian@unpas.ac.id"
    ],
    [
        "nama" => "Salsabila Bunga",
        "nrp" => "203040077",
        "email" => "salsabila@gmail.com"
    ]
];
$data = json_encode($mahasiswa);
echo $data;
