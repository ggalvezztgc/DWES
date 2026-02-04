<?php
require_once "conexion.php";

header("Content-Type: application/json");

$metodo = $_SERVER["REQUEST_METHOD"];

switch ($metodo) {

    // ================= GET =================
    case "GET":

        if (isset($_GET["codigo"])) {
            $codigo = $_GET["codigo"];
            $sql = "SELECT * FROM peliculas WHERE codigo = $codigo";
        } else {
            $sql = "SELECT * FROM peliculas";
        }

        $resultado = $conexion->query($sql);
        $peliculas = array();

        while ($fila = $resultado->fetch_assoc()) {
            $peliculas[] = $fila;
        }

        http_response_code(200);
        echo json_encode($peliculas);
        break;

    // ================= POST =================
    case "POST":

        $datos = json_decode(file_get_contents("php://input"), true);

        $sql = "INSERT INTO peliculas VALUES (
            ".$datos["codigo"].",
            '".$datos["titulo"]."',
            '".$datos["tema"]."',
            ".$datos["duracion"].",
            ".$datos["precio"].",
            '".$datos["cmoral"]."'
        )";

        if ($conexion->query($sql)) {
            http_response_code(200);
            echo json_encode(["mensaje" => "Película insertada"]);
        } else {
            http_response_code(400);
            echo json_encode(["error" => "No se pudo insertar"]);
        }

        break;

    // ================= PUT =================
    case "PUT":

        if (!isset($_GET["codigo"])) {
            http_response_code(400);
            echo json_encode(["error" => "Falta el código"]);
            break;
        }

        $codigo = $_GET["codigo"];
        $datos = $_GET;

        $campos = array();

        foreach ($datos as $campo => $valor) {
            if ($campo != "codigo") {
                $campos[] = "$campo='$valor'";
            }
        }

        $sql = "UPDATE peliculas SET ".implode(",", $campos)." WHERE codigo=$codigo";

        if ($conexion->query($sql)) {
            http_response_code(200);
            echo json_encode(["mensaje" => "Película modificada"]);
        } else {
            http_response_code(400);
            echo json_encode(["error" => "No se pudo modificar"]);
        }

        break;

    // ================= DELETE =================
    case "DELETE":

        if (!isset($_GET["codigo"])) {
            http_response_code(400);
            echo json_encode(["error" => "Falta el código"]);
            break;
        }

        $codigo = $_GET["codigo"];
        $sql = "DELETE FROM peliculas WHERE codigo=$codigo";

        if ($conexion->query($sql)) {
            http_response_code(200);
            echo json_encode(["mensaje" => "Película eliminada"]);
        } else {
            http_response_code(400);
            echo json_encode(["error" => "No se pudo eliminar"]);
        }

        break;

    default:
        http_response_code(405);
        echo json_encode(["error" => "Método no permitido"]);
}
