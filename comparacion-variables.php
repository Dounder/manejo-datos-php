<?php

    /**
     * Comparacion
     * Para comparar valores se usa '==": '9' = 9 
     * Para que se sea una comparacion exacta se usa '===': 9 === 9 ademas de comparar el tipo de dato
     * Para las diferencias de valor se usa '!='
     * Para las diferencias de valor - tipo se usa '!=='
     * <, >, <=, => tambien son signos utilizados para comparar
     */

     // Variables

     $app = 'name';
     $name = 'platzi';

     echo $app; //Aqui se imprimiria la palabra name
     echo $$app; //Aqui se imprimiria la palabra platzi ya que se profundiza y ya que el nombre de la variable es igual al valor que contiene la variable, entonces toma el valor de la variable para sustituir el original

     /**
      * Eso quiere decir que… ¿El nombre de mi variable es $app? ¡Sí! El nombre de tu variable es $app, pero un momento, $app también tiene un signo de dólar… ¡$app también es una variable! entonces, PHP trata de resolver ese valor, ¿Cuál es el valor de $app? El valor de $app es “name” por tanto, en la expresión “echo $$app;” PHP reemplaza “$app” por “name” (que es su valor), y entonces, la epresión queda como “echo $name;” recuerda, $app fue sustituido por el valor de su variable, ¡Y ahora si! Ya tenemos la variable que queríamos, le estamos pidiendo a PHP que me imprima el valor de $name, ¿Y cuál es el valor de $name? ¡El valor de $name es “platzi”!
      */