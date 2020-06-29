<?php

include('BaseDatos.php');

if(isset($_POST["btnEnviar"])) {
    $nombre=$_POST["nombreUsuario"];
    $apellido=$_POST["ApellidosUsuario"];
    $numerodeidentificacion=$_POST["NumeroDeIdentificacion"];
    $telefono=$_POST["telefonodeUsuario"];
    $emaildeusuario=$_POST["EmailUsuario"];
    $valortotaldonacion=$_POST["ValorTotalDonacion"];
    $referenciadepagousuario=$_POST["ReferenciaPagoUsuario"];

$consulta="INSERT INTO usuarios( nombre, apellido, identificacion, telefono, email, valordonacion, referenciapago) VALUES ('$nombre','$apellido','$numerodeidentificacion','$telefono','$emaildeusuario','$valortotaldonacion','$referenciadepagousuario')";

$operacion= new BaseDatos();

$resultado=$operacion->alterarBaseDatos($consulta);

if($resultado){
    echo("Se enviaron los datos con exito");

}else{
    echo("No se a procesado la solicitud");
}


}else{


    echo("No se a presionado el boton");
}

?>