<?php

    /**
     * las comillas simples se usan para textos ya que no pueden obtener datos de una variable, la salida debe ser texto
     * Las comillas dobles se utilizan para usar variables, pudiendo agregarlas a la cadena y esta sera reconocida
     */

    echo 'Texto de una linea 
    y varias lineas <br>';
    /**
     * Para usar signos que forman parte de la sintaxis de php se debe poner un backslash "\" antes del signo
     * La etiqueta "<br>" sirve para marcar un salto de linea
     */

    $nombre = 'douglas';
    echo "Mi nombre es $nombre <br>";

    $course = ['backend' => 'PHP'];

    /**
     * Cuando la estructura de datos compleja como la que esta a continuacion se deben poner llaves al inicio y al final
     */
    echo "{$course['backend'][0]} <br>";

    class User{
        public $name = 'douglas';
    }

    $User = new User; 
    echo "$User->name quiere aprender {$course['backend']} <br>";

    $teacher = 'douglas';
    $douglas = 'Profesor de PHP';
    echo "$teacher es ${$teacher}";

    function getSensei(){
        return 'Sensei';
    }

    $sensei = 'douglas';
    echo "${getSensei()} enseña PHP";