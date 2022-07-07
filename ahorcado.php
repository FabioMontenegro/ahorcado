<?php
    $palabras = [
        "submarino", "hamburguesa", "tequila", "ginebra", "pizza", "pelicula", "sixpack"
    ];
    define("intentos_maximos",5);
    echo "Bienvenido al juego del ahorcado \n \n ";
        $palabra_seleccionada = $palabras(rand(0,7));
    $longitud_palabra = strlen($palabra_seleccionada);
    $letras_descubiertas = str_pad("",$longitud_palabra,"_");
    $intentos = 0;

    echo "La palabra tiene $longitud_palabra letras \n \n";
    echo $letras_descubiertas . "\n \n "; 

    $letras_jugador = readline(("Escribe una letra: "));

    if(str_contains($palabra_seleccionada, $letras_jugador)){
        //verificamos todas las veces que se repite esta letra para reemplazarla
        $offset =0;
        while($posicion_letra = strpos($palabra_seleccionada, $letras_jugador, $offset) !==false){
            $letras_descubiertas[$posicion_letra] = $letras_jugador;
            $offset = $posicion_letra + 1;

        }
    }
    else {
        $intentos =1; 
        echo "letra incorrecta. Te quedan " . (intentos_maximos - $intentos) . " intentos \n" ;
    }
    




?>