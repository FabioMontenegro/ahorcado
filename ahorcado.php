<?php
    $palabras = [
        "submarino", "hamburguesa", "tequila", "ginebra", "pizza", "pelicula", "sixpack"
    ];
    define("intentos_maximos",5);
    echo "Bienvenida al juego del ahorcado \n \n ";
    
    $palabra_seleccionada = $palabras(rand(0,7));
    $longitud_palabra = strlen($palabra_seleccionada);
    $letras_descubiertas = str_pad("",$longitud_palabra,"_");
    $intentos = 0;

    echo "La palabra tiene $longitud_palabra letras \n \n";
    echo $letras_descubiertas . "\n \n "; 

    $letras_jugador = readline(("Escribe una letra: "));

    if(str_contains($palabra_seleccionada,$letras_jugador)){
        //verificamos todas las veces que se repite esta letra para reemplazarla
        while($posicion_letra = strpos()){

        }
    }




?>