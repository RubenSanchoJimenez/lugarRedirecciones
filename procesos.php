<?php
if($_GET['accion'] == 'Borrar')
    header("Location: borrar.php?{$_GET['ip']}");
else if($_GET['accion'] == 'Modificaar')
    header("Location: modificar.php?{$_GET['ip']}")
?>  

