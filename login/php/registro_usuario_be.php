<?php
        include'conexion_be.php';

        $nombre_completo = $_POST['nombre_completo'];
        $correo = $_POST['correo'];
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

$query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
                VALUES ('$nombre_completo','$correo','$usuario','$contrasena')";
$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
        echo'
           <script>
                alert("Usuario ingresado con exito");
                 window.location = "../login.php";

                s </script>
        ';
}else{echo'
        <script>
             alert("Usuario NO registrado");
              window.location = "../login.php";

             s </script>
     ';

}

mysqli_close($conexion);

?>

