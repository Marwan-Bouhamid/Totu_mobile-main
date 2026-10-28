<?php


require_once __DIR__ . '/../../backend/classes/GestionCategorie.php';

class CategorieController
{

    public function listerCategories(): void
    {

        $gestion = new GestionCategorie();


        $categories = $gestion->getAll();


        ?>
        <!DOCTYPE html>
        <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Liste des Catégories</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
            <style>
                * { margin: 0; padding: 0; box-sizing: border-box; }

                body {
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    background: #f4f6f8;
                    color: #333;
                    padding: 2rem;
                }

                h1 {
                    text-align: center;
                    margin-bottom: 2rem;
                    color: #2c3e50;
                }

                .categories {
                    display: flex;
                    flex-wrap: wrap;
                    gap: 1.5rem;
                    justify-content: center;
                    max-width: 900px;
                    margin: 0 auto;
                }

                .categorie-card {
                    background: #fff;
                    border-left: 5px solid;
                    border-radius: 8px;
                    padding: 1.5rem;
                    width: 260px;
                    box-shadow: 0 2px 8px rgba(0,0,0,0.08);
                    transition: transform 0.2s;
                }

                .categorie-card:hover {
                    transform: translateY(-4px);
                }

                .categorie-card .icon {
                    font-size: 2rem;
                    margin-bottom: 0.8rem;
                }

                .categorie-card .nom {
                    font-size: 1.15rem;
                    font-weight: 600;
                    margin-bottom: 0.4rem;
                }

                .categorie-card .info {
                    font-size: 0.9rem;
                    color: #666;
                }
            </style>
        </head>
        <body>

            <h1> Liste des Catégories</h1>

            <div class="categories">
                <?php foreach ($categories as $categorie): ?>
                    <div class="categorie-card" style="border-color: <?= htmlspecialchars($categorie->getCouleur()) ?>;">
                        <div class="icon" style="color: <?= htmlspecialchars($categorie->getCouleur()) ?>;">
                            <i class="fas <?= htmlspecialchars($categorie->getIcone()) ?>"></i>
                        </div>
                        <div class="nom"><?= htmlspecialchars($categorie->getNom()) ?></div>
                        <div class="info">
                            Couleur : <?= htmlspecialchars($categorie->getCouleur()) ?> |
                            Icône : <?= htmlspecialchars($categorie->getIcone()) ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

        </body>
        </html>
        <?php
    }
}

$controller = new CategorieController();
$controller->listerCategories();
