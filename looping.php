<?php
//looping basic
$people = [
    ["name" => "Oka", "askot" => "Tulungagung"],
    ["name" => "Tayo", "askot" => "Malang"],
    ["name" => "Waluyo", "askot" => "Surabaya"],
];
for ($i = 0 ; $i < count($people); $i++){
    echo $people[$i]["name"]." ".$people[$i]["askot"]." "|;
}
?>