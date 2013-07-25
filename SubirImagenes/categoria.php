    
    <?php 
include ("conexion.php");

$categoria= $_POST['select'];
$cate= mysql_query(" SELECT * FROM datos WHERE descripcion = '".$categoria."'");
while($filas= mysql_fetch_array($cate)){
	$ruta=$filas['ruta'];
	$desc=$filas['descripcion'];

 ?>
 
 <?php echo $desc; ?>
 <table width="200" border="1">
   <tr>
     <td><ins><img src="<?php echo $ruta;?>" width="180" height="214"></ins></td>
   </tr>
 </table>
 <br>
     
     
 <?php } ?>