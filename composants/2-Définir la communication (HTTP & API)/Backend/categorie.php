<?php
header("content-Type: application/json");

$categorie =[
    ["id" => 1, "name" => "Développement Web"],
    ["id" => 2, "name" => "Design UI/UX"],
    ["id" => 3, "name" => "Developpement mobile"],
];

echo json_encode($categorie);