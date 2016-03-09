<?php
 if($files){
     echo heading('Archivo(s) disponible(s) para descargar', 3);

      foreach($files as $file){

          echo anchor('prueba/downloads/'.$file, $file).br(1);

      }
echo br(1).anchor('prueba', 'Subir otro archivo');
 }else{

echo heading('No hay archivos para descargar', 3).anchor('prueba', 'Subir un Archivo');

 } 
