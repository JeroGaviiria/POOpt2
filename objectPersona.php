<?php
include_once('Persona.php');

//Creamos el objeto con los valores que se definen en el contructor
$persona = new Persona('Fernado', 'Garcia', 12);

//Mostramos por pantalla los valores
echo $persona->saludar();

//Destruimos el objeto
unset($persona);



//