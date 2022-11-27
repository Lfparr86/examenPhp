<?php
include"Disco.php";

$miDisco=new Disco("Origen",24,15,"es,en,fr","16:9");
echo"<strong>".$miDisco->titulo."</strong>";
echo"<br>Precio:".$miDisco->getPrecio()."euros";
echo"<br>PrecioIVAincluido:".$miDisco->getPrecioConIva()."euros";
$miDisco->muestraResumen();
