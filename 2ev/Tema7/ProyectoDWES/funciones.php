<?php

function llamarAPI($moneda = 'USD') {
    $url = 'https://api.exchangerate-api.com/v4/latest/' . $moneda;

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $respuesta = curl_exec($ch);
    curl_close($ch);

    return $respuesta;
}

function obtenerTasas($moneda = 'USD') {
    $archivo = 'cache/tasas.json';

    if (file_exists($archivo) && time() - filemtime($archivo) < 3600) {
        $datos = file_get_contents($archivo);
    } else {
        $datos = llamarAPI($moneda);
        file_put_contents($archivo, $datos);
    }

    return json_decode($datos, true);
}
