<?php include("conexion.php"); ?>

<?php

$id = $_GET['id'];

$sql = "SELECT * FROM articulos WHERE id=$id";
$resultado = $conn->query($sql);
$articulo = $resultado->fetch_assoc();

if($_POST){

    $nombre = $_POST['nombre'];
    $marca = $_POST['marca'];
    $cantidad = $_POST['cantidad'];
    $bodega = $_POST['bodega'];

    $sql = "UPDATE articulos SET
            nombre='$nombre',
            marca='$marca',
            cantidad='$cantidad',
            bodega='$bodega'
            WHERE id=$id";

    $conn->query($sql);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Editar Artículo</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

<h2>Editar Artículo</h2>

<form method="POST">

    <label>Nombre:</label>
    <input type="text" name="nombre" value="<?php echo $articulo['nombre']; ?>">

    <label>Marca:</label>
    <input type="text" name="marca" value="<?php echo $articulo['marca']; ?>">

    <label>Cantidad:</label>
    <input type="number" name="cantidad" value="<?php echo $articulo['cantidad']; ?>">

    <label>Bodega:</label>
    <input type="text" name="bodega" value="<?php echo $articulo['bodega']; ?>">

    <button type="submit">Actualizar</button>

</form>

</body>
</html>




