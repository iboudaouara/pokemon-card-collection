<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
    <link rel="stylesheet" href="style.css">
    <script src="form.js"></script>
</head>
<body>
    <header>
        <strong>Pokemon Information Form</strong>
    </header>

    <main class="main_form">
        <form id="pokemonForm">
            <label class="label1" for="name">Pokemon's Name:</label>
            <input class="input1" type="text" name="name" id="name" required>

            <label class="label2">Types:</label>
            <fieldset class="input2">
                <div>
                    <input type="checkbox" id="normal" name="types[]" value="normal">
                    <label for="normal">Normal</label>
                </div>

                <div>
                    <input type="checkbox" id="fire" name="types[]" value="fire">
                    <label for="fire">Fire</label>
                </div>

                <div>
                    <input type="checkbox" id="water" name="types[]" value="water">
                    <label for="water">Water</label>
                </div>

                <div>
                    <input type="checkbox" id="flying" name="types[]" value="flying">
                    <label for="flying">Flying</label>
                </div>

                <div>
                    <input type="checkbox" id="grass" name="types[]" value="grass">
                    <label for="grass">Grass</label>
                </div>

                <div>
                    <input type="checkbox" id="poison" name="types[]" value="poison">
                    <label for="poison">Poison</label>
                </div>

                <div>
                    <input type="checkbox" id="electric" name="types[]" value="electric">
                    <label for="electric">Electric</label>
                </div>

                <div>
                    <input type="checkbox" id="ground" name="types[]" value="ground">
                    <label for="ground">Ground</label>
                </div>

                <div>
                    <input type="checkbox" id="psychic" name="types[]" value="psychic">
                    <label for="psychic">Psychic</label>
                </div>

                <div>
                    <input type="checkbox" id="rock" name="types[]" value="rock">
                    <label for="rock">Rock</label>
                </div>

                <div>
                    <input type="checkbox" id="ice" name="types[]" value="ice">
                    <label for="ice">Ice</label>
                </div>

                <div>
                    <input type="checkbox" id="bug" name="types[]" value="bug">
                    <label for="bug">Bug</label>
                </div>

                <div>
                    <input type="checkbox" id="dragon" name="types[]" value="dragon">
                    <label for="dragon">Dragon</label>
                </div>

                <div>
                    <input type="checkbox" id="ghost" name="types[]" value="ghost">
                    <label for="ghost">Ghost</label>
                </div>

                <div>
                    <input type="checkbox" id="dark" name="types[]" value="dark">
                    <label for="dark">Dark</label>
                </div>

                <div>
                    <input type="checkbox" id="steel" name="types[]" value="steel">
                    <label for="steel">Steel</label>
                </div>

                <div>
                    <input type="checkbox" id="fairy" name="types[]" value="fairy">
                    <label for="fairy">Fairy</label>
                </div>

                <div>
                    <input type="checkbox" id="stellar" name="types[]" value="stellar">
                    <label for="stellar">Stellar</label>
                </div>

                <div>
                    <input type="checkbox" id="unrevealed" name="types[]" value="unrevealed">
                    <label for="unrevealed">Unrevealed</label>
                </div>
            </fieldset>

            <label class="label3" for="url_image">Pokemon's Picture (URL):</label>
            <input class="input3" type="url" id="url_image" name="url_image" required>

            <label class="label4" for="height_m">Height (meters):</label>
            <input class="input4" type="number" id="height_m" name="height_m" step="0.01" required>

            <label class="label5" for="weight_kg">Weight (kg):</label>
            <input class="input5" type="number" id="weight_kg" name="weight_kg" step="0.01" required>

            <label class="label6" for="generation">Generation:</label>
            <input class="input6" type="number" id="generation" name="generation" required>

            <div class="boutons">
                <button id="btnSubmit" class="submit_pokemon" type="submit">Submit</button>
                <button class="reload_pokemon" type="reset">Reload</button>
            </div>

            <div class="lien">
                <button class="cancel" type="button" id="cancelBtn">
                    <a href="index2.html">Cancel</a>
                </button>
            </div>
        </form>

        <!-- Modal pour l'erreur de sélection de types -->
        <div id="errorModal" class="modal">
            <div class="modal-content">
                <p>Error: You can only select up to 2 types.</p>
            </div>
            <div class="modal-buttons">
                <button id="errorConfirmBtn" class="modal-button">OK</button>
            </div>
        </div>

        <!-- Modal de confirmation pour Cancel -->
        <div id="confirmationModal" class="modal">
            <div class="modal-content">
                <p>Are you sure you want to cancel?</p>
            </div>
            <div class="modal-buttons">
                <button id="confirmCancelBtn" class="modal-button">Yes</button>
                <button id="cancelModalBtn" class="modal-button">No</button>
            </div>
        </div>

        <!-- Modal de succès pour l'ajout -->
        <div id="successModal" class="modal">
            <div class="modal-content">
                <p>Pokemon added successfully.</p>
            </div>
            <div class="modal-buttons">
                <button id="successConfirmBtn" class="modal-button">OK</button>
            </div>
        </div>
    </main>
</body>
</html>
