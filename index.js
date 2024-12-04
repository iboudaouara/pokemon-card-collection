document.addEventListener('DOMContentLoaded', () => {
    fetchPokemons();
});

function fetchPokemons() {
    const urlParams = new URLSearchParams(window.location.search);
    let pokemonType = urlParams.get('type');

    if (pokemonType === null || pokemonType === 'All') {
        fetch('/api/pokemons', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json().then(data => ({status: response.status, body: data})))
        .then(({status, body}) => {
            if (status !== 200) {
                throw new Error('Failed to fetch Pokemons');
            }
            console.log('Fetched Pokemons:', body);
            addPokemon(body);
        })
        .catch(error => {
            console.error('Error fetching pokemon data:', error);
        });
    } else {
        fetch(`/api/pokemons/types/${pokemonType}`, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json'
            }
        })
        .then(response => response.json().then(data => ({status: response.status, body: data})))
        .then(({status, body}) => {
            if (status !== 200) {
                throw new Error('Failed to fetch Pokemons by type');
            }
            console.log('Fetched Pokemons:', body);
            addPokemon(body);
        })
        .catch(error => {
            console.error('Error fetching pokemon data:', error);
        });
    }
}

function addPokemon(pokemonList) {
    const main = document.getElementById('pokemon-list');
    main.innerHTML = '';

    if (!pokemonList.length) {
        const noPokemonMessage = document.createElement('p');
        noPokemonMessage.textContent = 'No Pokemons found.';
        main.appendChild(noPokemonMessage);
        return;
    }

    pokemonList.forEach(pokemon => {
        console.log('Adding Pokemon:', pokemon);

        const square = document.createElement('div');
        square.classList.add('square');

        const nameLink = document.createElement('a');
        nameLink.setAttribute('href', `pokemon.php?number=${pokemon.pokedex_number}`);
        nameLink.setAttribute('alt', `Name of the pokemon ${pokemon.name}`);
        nameLink.textContent = pokemon.name;

        const types = document.createElement('ul');
        types.classList.add('description');
        types.innerHTML = `
            <li>Types: ${pokemon.type1}${pokemon.type2 ? ', ' + pokemon.type2 : ''}</li>
            <li>${pokemon.generation}<sup>th</sup> Generation</li>
            <li><img src="${pokemon.url_image}" alt="${pokemon.name}"></li>
        `;

        square.appendChild(nameLink);
        square.appendChild(types);
        main.appendChild(square);
    });
}
