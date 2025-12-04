<?php
$n = 3;

echo "<table border='1' cellpadding='5'>";
echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";

for ($i = $n; $i < $n + 5; $i++) {
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>" . ($i ** 2) . "</td>";
    echo "<td>" . ($i ** 3) . "</td>";
    echo "</tr>";
}

echo "</table>";
?>
