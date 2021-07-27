<?php
//array basic
// $siswa = ["Oka","Rara","Aldo","Steven"];
// echo $siswa[1];

//array assosiative (array yang indeks nya string)
$people = [
    ["name" => "Oka", "askot" => "Tulungagung"],
    ["name" => "Tayo", "askot" => "Malang"],
    ["name" => "Waluyo", "askot" => "Surabaya"],
];
echo $people[2]["askot"];
?>