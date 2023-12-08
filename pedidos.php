<?php 

include("conexion.php");

   $pedido= $_POST['pedido'];

   $query = "INSERT INTO pedidos(pedido) VALUES('$pedido')";
   $resultado= $conexion->query($query);

   if ($resultado) {
   	echo "Insercion Exitosa";
   }
   else{
   	echo "Insercion No Exitosa";
   }

?>