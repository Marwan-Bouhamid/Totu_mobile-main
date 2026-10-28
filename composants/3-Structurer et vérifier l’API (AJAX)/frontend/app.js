fetch("../backend/categories.php")
    .then(response => response.json())
    .then(data => {

        const container = document.getElementById("categories");

        data.forEach(category => {

            container.innerHTML += `
                <p>${category.name}</p>
            `;

        });

    });