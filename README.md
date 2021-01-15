# manejo-datos-php
    Curso de manejo de datos de platzi

# Apuntes

    - Las variables en PHP siempre llevan este signo $ al principio
    - Para concatenar dos string se usa un punto
    - El operador de asignacion '=" funciona en las variables, mientras que '=>' funciona en arreglos asociativos
    - PHP no maneja tipos de dato explicito, es decir que no es necesario poner el tipo de dato que se esta manejando, solo en caso de querer tener un tipo de dato fijo si se coloca.

# Variables

    ¿Qué es una variable?
    En sencillas palabras, una variable es una parte de código que te permite guardar un dato. Un ejemplo puede ser una caja, en donde dentro de ellas guardamos cosas. La caja es la variable contenedora que tiene al objeto y las cosas que guardamos son los datos.

    Para declarar una variable, siempre debe iniciar con una letra o un _ (guion bajo)

## Ejemplos

    $nombre = ‘Martin’;
    $apellido = ‘Roldan’;

## ¿Cómo se pueden concatenar (agregarlas una al lado de otra) estas variables? Ejemplos:

    - Para concatenar, se puede logran coloconco un . entre cada una, pero hay diversas formas de hacerlo, aquí se ven dos:

    $nombreCompleto = $nombre . $apellido;
    $nombre = ‘Martin’ . $apellido;
    $nombre = “Martin $apellido”;

## ¿Notaste que había dos tipos de comillas entre las variables?

    - Las comillas simples (’ ') se interpretan como texto plano. Como por ejemplo, el nombre agregado en la variable $nombre.
    - Las comillas dobles (" ") intentan interpretar todo lo que encuentre dentro.

## Complemento:
    Si al nombrar una variable, esta posee mas de una palabra, la siguiente debe empezar con una mayúscula. Ejemplos:

    $nombreCompleto;
    $aguantePlatzi;
    $tengoMuchaHambre;