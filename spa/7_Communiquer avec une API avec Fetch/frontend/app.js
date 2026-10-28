const API_URL = '../backend/api.php';

function chargerCategories() {
    fetch(API_URL)
        .then(res => res.json())
        .then(result => {
            let html = '';
            result.data.forEach(cat => {
                html += `<tr>
                    <td>${cat.id}</td><td>${cat.nom}</td><td>${cat.couleur}</td>
                    <td><button onclick="supprimer(${cat.id})">Supprimer</button></td>
                </tr>`;
            });
            document.getElementById('categoriesTableBody').innerHTML = html;
        });
}

document.getElementById('categorieForm').addEventListener('submit', function (e) {
    e.preventDefault();
    const categorie = {
        nom: document.getElementById('nom').value,
        couleur: document.getElementById('couleur').value
    };

    fetch(API_URL, {
        method: 'POST',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify(categorie)
    })
    .then(res => res.json())
    .then(() => { this.reset(); chargerCategories(); });
});

function supprimer(id) {
    fetch(API_URL, {
        method: 'DELETE',
        headers: { 'Content-Type': 'application/json' },
        body: JSON.stringify({ id })
    })
    .then(res => res.json())
    .then(() => chargerCategories());
}

chargerCategories();