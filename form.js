document.addEventListener('DOMContentLoaded', () => {
    // Pour compter les cases cochées
    function countCheckedCheckboxes() {
        var checkboxes = document.querySelectorAll('input[name="types[]"]:checked');
        return checkboxes.length;
    }

    // Pour limiter la sélection à 2 types
    function limitCheckboxes(event) {
        var checkedCount = countCheckedCheckboxes();
        if (checkedCount > 2) {
            document.getElementById('errorModal').style.display = 'block';
            event.preventDefault();
            return false;
        }
        return true;
    }

    // Définit le module en cas de réussite
    function showSuccessModal() {
        document.getElementById('successModal').style.display = 'block';
    }

    // Écouteur pour le bouton ok
    var errorConfirmBtn = document.getElementById('errorConfirmBtn');
    if (errorConfirmBtn) {
        errorConfirmBtn.addEventListener('click', function() {
            document.getElementById('errorModal').style.display = 'none';
        });
    }

    // Confirmation de cancel
    var cancelBtn = document.getElementById('cancelBtn');
    if (cancelBtn) {
        cancelBtn.addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('confirmationModal').style.display = 'block';
        });
    }

    // Bouton non 'Cancel'
    var cancelModalBtn = document.getElementById('cancelModalBtn');
    if (cancelModalBtn) {
        cancelModalBtn.addEventListener('click', function() {
            document.getElementById('confirmationModal').style.display = 'none';
        });
    }

    // Bouton oui 'Cancel'
    var confirmCancelBtn = document.getElementById('confirmCancelBtn');
    if (confirmCancelBtn) {
        confirmCancelBtn.addEventListener('click', function() {
            window.location.href = 'index2.php';
        });
    }


    var successConfirmBtn = document.getElementById('successConfirmBtn');
    if (successConfirmBtn) {
        successConfirmBtn.addEventListener('click', function(event) {
            event.preventDefault();
            window.location.href = 'form.php';
        });
    }

    var pokemonForm = document.getElementById('pokemonForm');
    if (pokemonForm) {
        pokemonForm.addEventListener('submit', function(event) {
            if (!limitCheckboxes(event)) {
                return; 
            }
            event.preventDefault(); 

            const formData = new FormData(event.target);
            const pokemonData = {
                name: formData.get('name'),
                type: Array.from(document.querySelectorAll('input[name="types[]"]:checked')).map(cb => cb.value),
                url_image: formData.get('url_image'),
                generation: formData.get('generation'),
                height_m: formData.get('height_m'),
                weight_kg: formData.get('weight_kg')
            };

            console.log(pokemonData.name);
            console.log(pokemonData.type);
            console.log(pokemonData.url_image);
            console.log(pokemonData.generation);
            console.log(pokemonData.height_m);
            console.log(pokemonData.weight_kg);

            fetch('/api/pokemons', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(pokemonData)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                showSuccessModal();
            })
            .catch(error => {
                console.error('Error:', error);
                alert('There was an error adding the Pokemon.');
            });
        });
    }
});