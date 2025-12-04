<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $sueldo = $_POST["sueldo"];
    $edad = $_POST["edad"];
    $poblacion = $_POST["poblacion"];
    $categoria = $_POST["categoria"];
    $ingles = $_POST["ingles"];
    $discapacidad = isset($_POST["discapacidad"]) ? "Posee discapacidad" : "No posee discapacidad";

    if ($edad > 30 && $sueldo > 25000) {
        $retencion = $sueldo * 0.20;
    } else {
        $retencion = $sueldo * 0.10;
    }

    if ($poblacion != "Valencia") {
        $sueldo += 2000;
    }

    $sueldoFinal = $sueldo - $retencion;

    $categorias = [
        1 => "Ingenieros y Licenciados",
        2 => "Jefes Administrativos y de Taller",
        3 => "Ayudantes no Titulados",
        4 => "Oficiales Administrativos",
        5 => "Subalternos",
        6 => "Auxiliares Administrativos"
    ];

    echo "Empleado: $nombre $apellidos<br>";
    echo "Edad: $edad<br>";
    echo "Población: $poblacion<br>";
    echo "Categoría laboral: " . $categorias[$categoria] . "<br>";
    echo "Nivel de inglés: $ingles<br>";
    echo "$discapacidad<br>";
    echo "Sueldo bruto (con plus si aplica): $sueldo €<br>";
    echo "Retención: $retencion €<br>";
    echo "Sueldo final: $sueldoFinal €";
} else {
?>
<form method="post">
    Nombre: <input type="text" name="nombre"><br>
    Apellidos: <input type="text" name="apellidos"><br>
    Sueldo (€): <input type="number" name="sueldo" step="0.01"><br>
    Edad: <input type="number" name="edad"><br>

    Población:
    <select name="poblacion">
        <option value="Valencia">Valencia</option>
        <option value="Castellón">Castellón</option>
        <option value="Alicante">Alicante</option>
    </select><br>

    Categoría laboral:
    <select name="categoria">
        <option value="1">Ingenieros y Licenciados</option>
        <option value="2">Jefes Administrativos y de Taller</option>
        <option value="3">Ayudantes no Titulados</option>
        <option value="4">Oficiales Administrativos</option>
        <option value="5">Subalternos</option>
        <option value="6">Auxiliares Administrativos</option>
    </select><br>

    Nivel de inglés:<br>
    <input type="radio" name="ingles" value="Básico" checked> Básico<br>
    <input type="radio" name="ingles" value="Medio"> Medio<br>
    <input type="radio" name="ingles" value="Avanzado"> Avanzado<br><br>

    <input type="checkbox" name="discapacidad" value="1"> Posee discapacidad<br><br>

    <input type="submit" value="Calcular">
</form>
<?php
}
?>
