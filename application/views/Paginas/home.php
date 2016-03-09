<h1 class="container">Contenido</h1>

<?php
$contrasena='admin123';

$pass_encript= do_hash($pass);
$contrasena_encript= do_hash($contrasena);

if($pass_encript==$contrasena_encript)
echo "Funciono";



 ?>
 <br>
<?= $pass_encript?><br>
<?= $contrasena_encript?>
