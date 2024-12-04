document.addEventListener('DOMContentLoaded', () => {
    const params = new URLSearchParams(window.location.search);
    const pokemonId = params.get('number');

    fetch(`/api/pokemons/${pokemonId}`)
        .then(response => response.json())
        .then(pokemon => {
            if (!pokemon || pokemon.error) {
                showError();
                return;
            }

            const container = document.getElementById('pokemonContainer');
            const card = document.createElement('div');
            card.classList.add('card', pokemon.type1.toLowerCase());
            if (pokemon.type2) {
                card.classList.add(pokemon.type2.toLowerCase());
            }

            const name = document.createElement('h1');
            name.textContent = pokemon.name;

            const image = document.createElement('img');
            image.src = pokemon.url_image;
            image.alt = `Picture of the pokemon ${pokemon.name}`;
            image.style.width = "70%";

            const infos = document.createElement('ul');
            infos.classList.add('description');
            let typeInfo = `<li>Type 1: ${pokemon.type1}</li>`;
            if (pokemon.type2) {
                typeInfo += `<li>Type 2: ${pokemon.type2}</li>`;
            }
            infos.innerHTML = `
                <li>Number: ${pokemon.pokedex_number}</li>
                ${typeInfo}
                <li>Generation: ${pokemon.generation}</li>
                <li>Height: ${pokemon.height_m}</li>
                <li>Weight: ${pokemon.weight_kg}</li>
            `;

            card.appendChild(name);
            card.appendChild(image);
            card.appendChild(infos);
            container.appendChild(card);
        })
        .catch(error => {
            console.error('Error fetching Pokémon data:', error);
            showError();
        });

    document.getElementById('delete-button').addEventListener('click', () => {
        if (confirm('Are you sure you want to delete this Pokemon?')) {
            fetch(`/api/pokemons/${pokemonId}`, { method: 'DELETE' })
                .then(response => {
                    if (response.status === 204) {
                        alert('Pokemon deleted successfully');
                        window.location.href = 'index2.php';
                    } else {
                        alert('Error deleting Pokemon');
                    }
                })
                .catch(error => {
                    console.error('Error deleting Pokémon:', error);
                    alert('Error deleting Pokemon');
                });
        }
    });

    document.getElementById('return-button').addEventListener('click', () => {
        showModal();
    });

    document.getElementById('confirmBtn').addEventListener('click', () => {
        window.location.href = 'index2.php';
    });

    document.getElementById('cancelModalBtn').addEventListener('click', () => {
        hideModal();
    });
});

function showModal() {
    document.getElementById('confirmationModal').style.display = 'block';
}

function hideModal() {
    document.getElementById('confirmationModal').style.display = 'none';
}

function showError() {
    const container = document.getElementById('pokemonContainer');
    const errorMessage = document.createElement('p');
    errorMessage.textContent = 'The requested Pokémon is not available.';
    container.appendChild(errorMessage);
}