<?php



$categories =[
    ["id" => 1, "name" => "Développement Web"],
    ["id" => 2, "name" => "Design UI/UX"],
    ["id" => 3, "name" => "Developpement mobile"],
    ["id" => 4, "name" => "Backend"]
];

header("Content-Type: application/json");

echo json_encode($categories);