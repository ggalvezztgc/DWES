<form action="guardar.php" method="post" enctype="multipart/form-data">

Id Usuario: <input type="text" name="id"><br>
Nombre: <input type="text" name="nombre"><br>
Apellidos: <input type="text" name="apellidos"><br>
Fecha Nacimiento: <input type="text" name="fecha"><br>
Telefono: <input type="text" name="telefono"><br>

Sexo:
<input type="radio" name="sexo" value="H"> Hombre
<input type="radio" name="sexo" value="M"> Mujer
<br>

Email: <input type="text" name="email"><br>
Poblacion: <input type="text" name="poblacion"><br>

Pais:
<select name="pais">
  <option>España</option>
  <option>Francia</option>
  <option>Italia</option>
</select>
<br>

Usuario: <input type="text" name="usuario"><br>
Contraseña: <input type="password" name="password"><br>

Foto: <input type="file" name="foto"><br><br>

<input type="submit" value="Guardar">

</form>
