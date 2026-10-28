document.addEventListener('DOMContentLoaded', () => {


    let btnShowForm = document.querySelector('#btn-show-form');
    let sectionForm = document.querySelector('#section-form');
    let btnCancelForm = document.querySelector('#btn-cancel-form');
    let formCategorie = document.querySelector('#form-categorie');

    btnShowForm.addEventListener('click', () => {
        btnShowForm.hidden = true;
        sectionForm.hidden = false;
    });

    btnCancelForm.addEventListener('click', () => {
        sectionForm.hidden = true;
        btnShowForm.hidden = false;
        formCategorie.reset();
    });


    let catNom = document.querySelector('#cat-nom');
    let catCouleur = document.querySelector('#cat-couleur');
    let tableBody = document.querySelector('#table-categories-body');

    formCategorie.addEventListener('submit', (event) => {
        event.preventDefault(); 

        let nom = catNom.value;
        let couleur = catCouleur.value;

        let ligne = `<tr>
            <td>${nom}</td>
            <td>${couleur}</td>
        </tr>`;

        tableBody.insertAdjacentHTML('beforeend', ligne);

        formCategorie.reset();
        sectionForm.hidden = true;
        btnShowForm.hidden = false;
    });

});