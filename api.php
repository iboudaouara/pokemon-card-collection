<?php

require_once __DIR__.'/router.php';
include 'routes.php';

$pdo = $conn;

catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(["message" => "PDOException: " . $e->getMessage()]);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(["message" => "Error: " . $e->getMessage()]);
}

?>