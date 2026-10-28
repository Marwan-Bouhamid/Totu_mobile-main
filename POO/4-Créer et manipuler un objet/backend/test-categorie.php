<?php
require_once 'Categorie.php';

$cat1 = new Categorie(1, "Design UI/UX", "Bleu", "palette");
$cat2 = new Categorie(2, "Développement Web", "Vert", "code");

$cat1->afficher();
$cat2->afficher();
?>