<?php
$nombre= array(
  'name' => 'nombre',
    'placeholder'=> 'escribe tu nombre'
);
?>
<section class="container">
<?= form_open('prueba/recibir');?>
<label>Nombre</label>
<?= form_input($nombre)?>
    <?= form_submit('','Subir curso');?>
<?= form_close();?>
</section>
