<?php 

/*
print_r($_FILES);
echo '<br>';
echo 'nombre de la imagen: ';
print_r($_FILES['imagen']['name']);


echo '<br>';
echo 'tipo de la imagen: ';
print_r($_FILES['imagen']['type']);



echo '<br>';
echo 'ruta temporal de la imagen: ';
print_r($_FILES['imagen']['tmp_name']);
*/

include ("conexion.php");

$casa= substr(md5(uniqid(rand())),0,3);

$rutaEnServidor= 'imagenes';
$rutaTemporal=$_FILES['imagen']['tmp_name'];
$nombreImagen=$_FILES['imagen']['name'];
$rutaDestino=$rutaEnServidor.'/'.$casa.$nombreImagen;
move_uploaded_file($rutaTemporal,$rutaDestino);

$desc=$_POST['descripcion'];

$sql="INSERT INTO datos (ruta,descripcion) values ('".$rutaDestino."', '".$desc."')";
$res= mysql_query($sql,$conexion);

if($res) {
	echo ' Inserción con éxito';
	 }else{
	 echo 'No se pudo insertar';
	  }
	
	?>