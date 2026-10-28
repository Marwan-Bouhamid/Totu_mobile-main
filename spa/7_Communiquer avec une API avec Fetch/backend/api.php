<?php
header('Content-Type: application/json');
$file = 'categorie.json';
$categories = json_decode(file_get_contents($file), true) ?? [];
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    echo json_encode(['data' => $categories]);
}

elseif ($method === 'POST') {
    $input = json_decode(file_get_contents('php://input'), true);
    $input['id'] = count($categories) ? max(array_column($categories, 'id')) + 1 : 1;
    $categories[] = $input;
    file_put_contents($file, json_encode($categories));
    echo json_encode(['success' => true]);
}

elseif ($method === 'DELETE') {
    $input = json_decode(file_get_contents('php://input'), true);
    $categories = array_values(array_filter($categories, fn($c) => $c['id'] != $input['id']));
    file_put_contents($file, json_encode($categories));
    echo json_encode(['success' => true]);
}