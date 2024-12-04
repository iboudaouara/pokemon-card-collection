<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pokémon</title>
    <link rel="stylesheet" href="style.css">
    <script src="pokemon.js"></script>
</head>

<body>
    <nav>
        <button class="return" type="button" id="return-button">
            Return
        </button>
    </nav>
    <main>
        <div id="pokemonContainer"></div>
        <button id="delete-button" class="delete-button">Delete</button>
    </main>

    <!-- Modal for confirmation -->
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <p>Do you really want to leave this page?</p>
        </div>
        <div class="modal-buttons">
            <button id="confirmBtn" class="modal-button">Yes</button>
            <button id="cancelModalBtn" class="modal-button">No</button>
        </div>
    </div>

    </body>
</html>

