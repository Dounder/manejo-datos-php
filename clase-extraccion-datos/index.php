<?php

$data = 'Estudio PHP';

echo "$data[0] <br>";//Aqui se le dice a php que imprima el caracter en la posicion que se le pase como parametro de un String

$post = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil exercitationem voluptas dicta eveniet cupiditate, amet impedit consectetur! Perferendis, sunt! Expedita cumque quibusdam libero ex praesentium harum quisquam ducimus aut velit!';
$extract = substr($post, 0, 20); // substr es una funcion de php que permite extraer caracteres de un String
        //Nombre de la variable a utilizar, posicion de inicio, cantidad de caracteres
echo "$extract... [ver mas]";

$dato = 'javascript, php, laravel';
$tags = explode(', ', $dato); //Con explode se convierte un String en un Array
        //Primero se le pasa la condicion a evaluar, la variable a evaluar
echo "<pre>"; // la etiqueta <pre> sirve para darle un pre-formato al texto
var_dump($tags);
echo "</pre>";

$courses = ['javascript','php','laravel'];
echo implode(' - ', $courses);// Con implode se convierte de un Array a un String
echo "\n";

$course = '      Curso de PHP      ';
$course = trim($course); // Trim sirve para quitar los espacion en blanco de un String
echo "<pre>";
echo "Quiero aprender $course, texto random";