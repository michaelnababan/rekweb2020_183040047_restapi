<?php

$mahasiswa = [
    [
        "nama" => "Shandika Galih",
        "nrp" => "043040023",
        "email" => "sandhikagalih@unpas.ac.id"
    ],
    [
        "nama" => "Erik Doank",
        "nrp" => "023040001",
        "email" => "erik@gmail.com"
    ]
];
$data = json_encode($mahasiswa);
echo $data;
