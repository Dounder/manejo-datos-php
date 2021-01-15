<?php

    //El if funciona por medio de condicionales si la primera no se cumple pasa a la siguiente
    //hasta que alguna condicion se cumpla y si ninguna se cumple se salta el bloque de codigo
    if (condition) {
        # code...
    } elseif (condition) {
        # code...
    } else {
        # code...
    }

    //El switch es como un if pero con esteroides lo que lo diferencia es que compara la variable
    //que se le pasa como parametro con los casos que estan dentro del switch
    switch ($variable) {
        case 'value':
            # code...
            break;
        
        default:
            # code...
            break;
    }

    //Este ciclo se usa normalmente para traer datos
    foreach ($datos as $row) {
        # code...
    }

    //El while se ejecuta siempre y cuando la condicion sea verdadera
    while ($a <= 10) {
        # code...
    }

    //el Do While se ejecuta al menos una vez antes de entrar en la condicion
    do {
        # code...
    } while ($a <= 10);

    //El ciclo for se utiliza cuando sabemos cuantas veces se debe repetir un bloque de codigo
    for ($i=0; $i < 3; $i++) { 
        # code...
    }