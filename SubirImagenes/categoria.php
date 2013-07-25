    
    <?php 
include ("conexion.php");

$categoria= $_POST['select'];
$cate= mysql_query(" SELECT * FROM datos WHERE descripcion = '".$categoria."'");
while($filas= mysql_fetch_array($cate)){
	$ruta=$filas['ruta'];
	$desc=$filas['descripcion'];

 ?>
 
 <?php echo $desc; ?>
 <ins><img src="<?php echo $ruta;?>" width="180" height="214" /></ins> 
 <?php } ?>
 <br>