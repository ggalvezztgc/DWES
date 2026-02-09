<?php
require_once "config.php";

header("Content-Type: application/json");

$metodo = $_SERVER["REQUEST_METHOD"];

switch ($metodo) {

    // ================= GET =================
    case "GET":
        if (isset($_GET["codigo"])) {
            $codigo = $_GET["codigo"];
            $sql = "SELECT * FROM peliculas WHERE codigo=$codigo";
        } else {
            $sql = "SELECT * FROM peliculas";
        }

        $result = $conn->query($sql);
        $peliculas = [];

        while ($fila = $result->fetch_assoc()) {
            $peliculas[] = $fila;
        }

        http_response_code(200);
        echo json_encode($peliculas);
        break;

    // ================= POST =================
    case "POST":
        $datos = json_decode(file_get_contents("php://input"), true);

        $sql = "INSERT INTO peliculas VALUES (
            {$datos['codigo']},
            '{$datos['titulo']}',
            '{$datos['tema']}',
            {$datos['duracion']},
            {$datos['precio']},
            '{$datos['cmoral']}'
        )";

        if ($conn->query($sql)) {
            http_response_code(201);
            echo json_encode(["mensaje" => "Película insertada"]);
        } else {
            http_response_code(400);
            echo json_encode(["error" => "Error al insertar"]);
        }
        break;

    // ================= PUT =================
    case "PUT":
        if (!isset($_GET["codigo"])) {
            http_response_code(400);
            echo json_encode(["error" => "Falta código"]);
            break;
        }

        $codigo = $_GET["codigo"];
        $datos = json_decode(file_get_contents("php://input"), true);

        $sql = "UPDATE peliculas SET tema='{$datos['tema']}' WHERE codigo=$codigo";

        if ($conn->query($sql)) {
            http_response_code(200);
            echo json_encode(["mensaje" => "Película modificada"]);
        } else {
            http_response_code(400);
            echo json_encode(["error" => "Error al modificar"]);
        }
        break;

    // ================= DELETE =================
    case "DELETE":
        if (!isset($_GET["codigo"])) {
            http_response_code(400);
            echo json_encode(["error" => "Falta código"]);
            break;
        }

        $codigo = $_GET["codigo"];

        if ($conn->query("DELETE FROM peliculas WHERE codigo=$codigo")) {
            http_response_code(200);
            echo json_encode(["mensaje" => "Película eliminada"]);
        } else {
            http_response_code(400);
            echo json_encode(["error" => "Error al eliminar"]);
        }
        break;

    // ================= OTROS =================
    default:
        http_response_code(405);
        echo json_encode(["error" => "Método no permitido"]);
}
?>
