<?php

require_once __DIR__.'/router.php';
include 'connexion.php';
$pdo = $conn;


get('/', 'index.php');

get('/index2.php', 'index2.php');

get('/pokemon.php', 'pokemon.php');

get('/form.php', 'form.php');



get('/api/pokemons', function(){
    global $pdo;
    try {
        $stmt = $pdo->query("SELECT * FROM pokemon");
        $pokemons = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($pokemons);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["message" => "Error fetching data", "error" => $e->getMessage()]);
    }
});

get('/api/pokemons/$id', function($id){
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT * FROM pokemon WHERE pokedex_number = :id");
        $stmt->execute([':id' => $id]);
        $pokemon = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($pokemon) {
            echo json_encode($pokemon);
        } else {
            http_response_code(404);
            echo json_encode(["message" => "Pokemon not found"]);
        }
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["message" => "Error fetching data", "error" => $e->getMessage()]);
    }
});

get('/api/pokemons/types/$type', function($type){
    global $pdo;
    try {
        $stmt = $pdo->prepare("SELECT * FROM pokemon WHERE type1 = :type OR type2 = :type");
        $stmt->execute([':type' => $type]);
        $pokemons = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($pokemons);
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["message" => "Error fetching data", "error" => $e->getMessage()]);
    }
});

// Route where the query string happends right after a forward slash
get('/product', '');


get('/callback/$name/$last_name', function($name, $last_name){
  echo "Callback executed. The full name is $name $last_name";
});


post('/api/pokemons', function(){
    global $pdo;
    $data = json_decode(file_get_contents("php://input"), true);
    if(!empty($data['name']) && !empty($data['type']) && !empty($data['generation']) && !empty($data['url_image']) && !empty($data['height_m']) && !empty($data['weight_kg'])) {
        try {
            $stmt = $pdo->prepare("INSERT INTO pokemon (name, type1, type2, url_image, generation, height_m, weight_kg) VALUES (:name, :type1, :type2, :url_image, :generation, :height_m, :weight_kg)");
            $stmt->execute([
                ':name' => $data['name'],
                ':type1' => $data['type'][0],
                ':type2' => isset($data['type'][1]) ? $data['type'][1] : null,
                ':url_image' => $data['url_image'],
                ':generation' => $data['generation'],
                ':height_m' => $data['height_m'],
                ':weight_kg' => $data['weight_kg']
            ]);
            http_response_code(201);
            echo json_encode(["message" => "Pokemon added successfully"]);
        } catch (PDOException $e) {
            http_response_code(500);
            echo json_encode(["message" => "Error adding Pokemon", "error" => $e->getMessage()]);
        }
    } else {
        http_response_code(400);
        echo json_encode(["message" => "Invalid input"]);
    }
});

delete('/api/pokemons/$id', function($id){
    global $pdo;
    try {
        $stmt = $pdo->prepare("DELETE FROM pokemon WHERE pokedex_number = :id");
        $stmt->execute([':id' => $id]);
        if ($stmt->rowCount()) {
            http_response_code(204);
        } else {
            http_response_code(404);
            echo json_encode(["message" => "Pokemon not found"]);
        }
    } catch (PDOException $e) {
        http_response_code(500);
        echo json_encode(["message" => "Error deleting Pokemon", "error" => $e->getMessage()]);
    }
});
