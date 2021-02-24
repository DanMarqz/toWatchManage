
<?php
	require_once "../../clases/Conexion.php";
	$con = new Conexion();
	$conexion = $con->conectar();

  $sql = "SELECT id_categoria,
					      nombre
			    FROM t_categorias
			    ORDER BY nombre";
	$result = mysqli_query($conexion, $sql);
?>

<label for="idCategoriaselect">Categoría del contacto</label>
<select name="idCategoriaselect" id="idCategoriaselect" class="form-control">
	<option value="0">Selecciona una categoría</option>
  <?php while($ver = mysqli_fetch_row($result)): ?>
    <option value="<?php echo $ver[0] ?>"><?php echo $ver[1]; ?></option>
  <?php endwhile; ?>
</select>
