<?php
$usuario= $_POST["cajauser"];
$password= $_POST["cajapass"];
mysql_connect("localhost" , "admin" , "adminadmin");
mysql_select_db("acceso");
$sql= "Select * from users where user ='$usuario' and pass ='$password'";
$r= mysql_query($sql);
if (($row= mysql_fetch_array($r)))
echo 'Bienvenid@';
else echo 'Error de Acceso';
?>
