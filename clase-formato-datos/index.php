<?php

//Alterar
echo "<pre>";
echo 'Alterar Texto<br>';
$text = "PHP es un LENGUAJE, año 2021, programación";
echo "$text<br>";
echo strtolower($text) . "<br>";//Todo minuscula
echo strtoupper($text) . "<br>";//Todo mayuscula
echo lcfirst($text) . "<br>";//Primer caracter en minuscula
echo ucfirst($text) . "<br>";//Primer caracter en mayuscula
echo "<br>";

//Reemplazar
echo 'Reemplazar Texto <br>';
$slug = str_replace(' ', '-', $text);//str_replace sirve para reemplazar caracteres de un String
//Caracter a evaluar, caracter de reemplazo, variable o elemento al que afecta
echo $slug . "<br>";
echo strtolower($slug) . "<br>";//Todo mayuscula
echo "<br>";

//Modificacion
echo 'Modificar Texto<br>';
$code = 39;
echo $code . "<br>";
echo str_pad($code, 8, '#', STR_PAD_BOTH) . "<br>";//str_pad sirve para agregar ciertos caracteres para rellenar un 
//Variable o elemento afectado, cantidad de caracteres, caracter de reemplazo, modificador de posicion
//STR_PATH_BOTH es para distribuir los caracteres a ambos lados
//STR_PATH_LEFT es para dejarlos a la izquierda 
//STR_PATH_RIGHT es para ponerlos en la derecha
echo strip_tags($text) . "<br>";//strip_tags sirve para quitar la etiquetas html de un texto

echo strtoupper($text) . "<br>";//asi seria cuando es un string monoByte
echo mb_strtoupper($text) . "<br>";//asi seria cuando es un strign multiByte

echo "</pre>";