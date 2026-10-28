# 2.1. Décomposer la fonctionnalité « Gérer les catégories »

## Tableau

| # | Libellé (action concrète) | Dépendance |
|---|---|---|
| T1 | Créer la table `categories` en SQL (id, nom, description) | Aucune |
| T2 | Créer le fichier `config/db.php` (connexion PDO à MySQL) | T1 |
| T3 | Créer le layout : `includes/header.php`, `sidebar.php`, `footer.php` (Tailwind) | Aucune |
| T4 | Créer `categories.php` : requête `SELECT` + affichage dans un tableau | T2, T3 |
| T5 | Créer `add.php` : formulaire d'ajout + traitement `INSERT` avec validation | T2, T3, T4 |
| T6 | Créer `edit.php` : pré-remplir le formulaire (`SELECT` par id) + `UPDATE` | T4, T5 |
| T7 | Créer `delete.php` : suppression `DELETE` avec confirmation | T4 |
| T8 | Tester l'ensemble (ajout, modification, suppression, validation) | T5, T6, T7 |

