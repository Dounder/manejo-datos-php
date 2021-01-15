<?php

$name = 'nombre'; //Aqui se declara una variable normal
//Aqui se le dice a php que quiero declarar una variable pero que el nombre de la variable sea el valor de la variable que le estoy pasando como referencia
$$name = 'Nombre de otra variable';

echo "$nombre";
