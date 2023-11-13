<?php
include_once("wordix.php");

//ejercicio 1

    /**
     * 
     * 
     * include_once("wordix.php");

     * 
     */
function cargarColeccionPalabras()
    {
        $coleccionPalabras = ["CALOR","SILLA","MANGO","COCHE","MANOS","LIBRO","PARED","TACOS","RONDA","QUESO","PELON","CARNE","COMER","LUGAR","JUEGO","TABLA","PLATA","SONAR","NUDOS","CASAS"];
        return $coleccionPalabras;
    }


    //ejercicio 2
    /**
     * 
     * 
     * 
     * 
     */
function cargarPartidas()
    {
        $partidasGuardadas[0]= ["palabraWordix "=> "MANGO" , "jugador" => "felipe", "intentos"=> 0, "puntaje" => 0] ;
        $partidasGuardadas[1]= ["palabraWordix "=> "CASAS" , "jugador" => "floyd", "intentos"=> 3, "puntaje" => 14];
        $partidasGuardadas[2]= ["palabraWordix "=> "COCHE" , "jugador" => "floyd", "intentos"=> 6, "puntaje" => 10];
        $partidasGuardadas[3]= ["palabraWordix "=> "RONDA" , "jugador" => "luis", "intentos"=> 4, "puntaje" => 8] ;
        $partidasGuardadas[4]= ["palabraWordix "=> "QUESO" , "jugador" => "carl", "intentos"=> 3, "puntaje" => 10] ;
        $partidasGuardadas[5]= ["palabraWordix "=> "CARNE" , "jugador" => "pepe", "intentos"=> 2, "puntaje" => 6] ;
        $partidasGuardadas[6]= ["palabraWordix "=> "SILLA" , "jugador" => "floyd", "intentos"=> 1, "puntaje" => 4] ;
        $partidasGuardadas[7]= ["palabraWordix "=> "QUESO" , "jugador" => "george", "intentos"=> 6, "puntaje" => 0] ;
        $partidasGuardadas[8]= ["palabraWordix "=> "TABLA" , "jugador" => "kevin", "intentos"=> 5, "puntaje" => 10] ;
        $partidasGuardadas[9]= ["palabraWordix "=> "NUDOS" , "jugador" => "ana", "intentos"=> 3, "puntaje" => 14] ;
        
        return $partidasGuardadas;
    } 
    


//ejercicio 3

    /**
     * 
     * 
     * 
     * 
     */
function seleccionarOpcion()
{

    echo "Menú de opciones:\n";
    echo "1) Jugar al wordix con una palabra elegida\n";
    echo "2) Jugar al wordix con una palabra aleatoria\n";
    echo "3) Mostrar una partida\n";
    echo "4) Mostrar la primer partida ganadora\n";
    echo "5) Mostrar resumen de Jugador\n";
    echo "6) Mostrar listado de partidas ordenadas por jugador y por palabra\n";
    echo "7) Agregar una palabra de 5 letras a Wordix\n";
    echo "8) salir\n";

    echo "Ingrese el numero de la opcion a seleccionar: ";
    do{
        $opcion = trim(fgets(STDIN));
        switch ($opcion){    
        case 1: echo "Seleccionaste la opción 1\n";break;
        case 2: echo "Seleccionaste la opción 2\n";break;
        case 3: echo "Seleccionaste la opción 3\n";break;
        case 4: echo "Seleccionaste la opción 4\n";break;
        case 5: echo "Seleccionaste la opción 5\n";break;
        case 6: echo "Seleccionaste la opción 6\n";break;
        case 7: echo "Seleccionaste la opción 7\n";break;
        case 8: echo "Seleccionaste la opción 8\n";break;
        default: echo "Seleccione una opcion valida\n";    
    }}
    while($opcion < 1 || $opcion >8);
    
    return $opcion;
}


    //ejercicio 6

    /**
     * 
     */
    function datosPartida($partidasGuardadas , $numPartida)
    {         
        echo "Partida WORDIX ".$numPartida.": palabra " . $partidasGuardadas[$numPartida]["palabraWordix "]."\n" ;
        echo "Jugador: " . $partidasGuardadas[$numPartida]["jugador"]."\n";
        echo "Puntaje: " . $partidasGuardadas[$numPartida]["puntaje"]."\n";
        echo "Intento: " . $partidasGuardadas[$numPartida]["intentos"]."\n";
        
    }
