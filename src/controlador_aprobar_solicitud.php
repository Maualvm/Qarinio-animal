<?php

    include("util.php");
    $id = limpia_entrada($_POST["idSolicitud"]);

   echo aceptarSolicitud($id);
   
?>
