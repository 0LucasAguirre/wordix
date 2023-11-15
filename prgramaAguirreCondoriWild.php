<?php
include_once("wordix.php");

//ejercicio 1

/** Realizamos una función cargarColeccionesPalabras donde se guardaran palabras ya cargadas para poder elegir y jugar dentro de Wordix 
 * donde muestra variables del tipo array que tendran 15 palabras, todas de 5 letras de longitud 
 * @return array (indexado)
 * */

    function cargarColeccionPalabras()
    //array $coleccionPalabras
    {
        $coleccionPalabras = ["CALOR","SILLA","MANGO","COCHE","MANOS",
                              "LIBRO","PARED","TACOS","RONDA","QUESO",
                              "PELON","CARNE","COMER","LUGAR","JUEGO",
                              "TABLA","PLATA","SONAR","NUDOS","CASAS",
                              "JAPON", "PERRO", "ZORRO", "QUINO", "AKIRA",
                              "CHILE", "URGIR", "DADOS", "JUGAR", "JUNCO",
                              "SALIR", "MANTA", "MARTE", "VENUS", "XENON"];
        return $coleccionPalabras;
    }



 //ejercicio 2

    /**
     * Esta funcion carga las partidas guardadas
     * @return array 
     */
function cargarPartidas()
//array $partidaGuardadas
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
     * Esta función te muestra una serie de opciones para jugar al wordix (menu de inicio)
     * 
     * @return string
     */

    function seleccionarOpcion()
    //string $opcion
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
    
    
        // EJERCICIO 6
    
        /**
         * función que muestra los datos de las partidas guardadas 
         */
        function datosPartida($partidasGuardadas , $numPartida)
        {         
            echo "Partida WORDIX ".$numPartida.": palabra " . $partidasGuardadas[$numPartida]["palabraWordix "]."\n" ;
            echo "Jugador: " . $partidasGuardadas[$numPartida]["jugador"]."\n";
            echo "Puntaje: " . $partidasGuardadas[$numPartida]["puntaje"]."\n";
            echo "Intento: " . $partidasGuardadas[$numPartida]["intentos"]."\n";
            
        }
    


//EJERCICIO 7

    /**
     * Agrega una palabra al final de una coleccion/arreglo de palabras
     * @param array $coleccionPalabras
     * @param String $nuevaPalabra
     * @return array 
     */
    function agregarPalabra($coleccionPalabras, $nuevaPalabra)
    {      
        //array $coleccionPalabras
        array_push($coleccionPalabras, $nuevaPalabra);
        return $coleccionPalabras;
        
    }
    
    /**
     * Solicita el ingreso de una nueva palabra para Wordix, 
     * la cual  no debe existir en la coleccion de palabras original.
     * @param array $coleccionPalabras
     * @return string
     */
    function nuevaPalabraWordix($coleccionPalabras)
    {
    // Boolean $palabraSeRepite, int $i, $cantidadDePalabras, String $nuevaPalabra
        $cantidadDePalabras = count($coleccionPalabras);      
        do{
            $palabraSeRepite = false;
            $i = 0;
            $nuevaPalabra = leerPalabra5Letras();
            while ($i < $cantidadDePalabras ){
                if( $nuevaPalabra == $coleccionPalabras[$i]){
                    $palabraSeRepite = true;
                    echo "Ya existe la palabra ".$nuevaPalabra." en Wordix. \n"; 
                }
                $i++;
            }
            
        }while($palabraSeRepite);
        
       return $nuevaPalabra;
    }
    
    

    //EJERCICIO 8

    /**
     * Busca el numero de la partida con la primer victoria de un jugador determinado. 
     * En caso este no haya ganado partidas el indice de retorno sera -1.
     * @param array $coleccionDePartidas
     * @param String $jugador
     * @return int
     */
    function primerPartidaGanada($coleccionDePartidas, $jugador)
    {  
        //int $long,$i,$indiceBuscado,puntaje
        $long = count( $coleccionDePartidas );
        $i = 0;
        $indiceBuscado = -1;
        $puntaje = 0 ;     
          
        while(  $i < $long && $puntaje == 0 ){
            if ($coleccionDePartidas[$i]["jugador"] == $jugador && $coleccionDePartidas[$i]["puntaje"] > 0 ){             
                $puntaje = $coleccionDePartidas[$i]["puntaje"] ; 
                $indiceBuscado = $i;
            }
            $i++;
        } 
        return $indiceBuscado;              
    }
        



//EJERCICIO 9

    /**
     * Dado un registro de partidas y un nombre de jugador , busca los datos
     * de juego de dicho jugador, retornado en un array los datos
     * del jugador
     * @param array $registroPartidas
     * @param String $jugadorAbuscar
     * @return array 
     */
    function datosJugadorDeterminado($registroPartidas, $jugadorAbuscar)
    {    
        //array $registroPartidas,$datosJugador, int $indice
        $datosJugador["nombreJugador"] = $jugadorAbuscar;
        $datosJugador["numPartidas"] = 0;
        $datosJugador["puntajeTotal"] = 0;
        $datosJugador["victorias"] = 0;
        $datosJugador["intento1"] = 0;
        $datosJugador["intento2"] = 0;
        $datosJugador["intento3"] = 0;
        $datosJugador["intento4"] = 0;
        $datosJugador["intento5"] = 0;
        $datosJugador["intento6"] = 0;
        
        foreach($registroPartidas as $indice => $dato){
            if ( $registroPartidas [$indice]["jugador"] == $jugadorAbuscar ){         
                $datosJugador["numPartidas"] = $datosJugador["numPartidas"] + 1;
                $datosJugador["puntajeTotal"] = $datosJugador["puntajeTotal"] +   $registroPartidas[$indice]["puntaje"];
                if($registroPartidas[$indice]["puntaje"] > 0){
                    $datosJugador["victorias"] = $datosJugador["victorias"] + 1;
                }
                switch ($registroPartidas[$indice]["intentos"]){
                    case 1: $datosJugador["intento1"] = $datosJugador["intento1"] + 1;break;
                    case 2: $datosJugador["intento2"] = $datosJugador["intento2"] + 1;break;
                    case 3: $datosJugador["intento3"] = $datosJugador["intento3"] + 1;break;
                    case 4: $datosJugador["intento4"] = $datosJugador["intento4"] + 1;break;
                    case 5: $datosJugador["intento5"] = $datosJugador["intento5"] + 1;break;
                    case 6: $datosJugador["intento6"] = $datosJugador["intento6"] + 1;break;                      
                }
            }
         }
        
         return $datosJugador;
    }

    /**
     * Muestra en patalla los datos Wordix de un jugador
     * @param array $datoJugador
     */
    function mostrarDatosJugador($datoJugador){
         echo "jugador: " . $datoJugador["nombreJugador"] ."\n";
         echo "Partidas: ".$datoJugador["numPartidas"] ."\n";
         echo "Puntaje Total: " . $datoJugador["puntajeTotal"]."\n";
         echo "Victorias: " .$datoJugador["victorias"]."\n";
         echo "intento 1: " .$datoJugador["intento1"]."\n";
         echo "intento 2: " .$datoJugador["intento2"]."\n";
         echo "intento 3: " .$datoJugador["intento3"]."\n";
         echo "intento 4: " .$datoJugador["intento4"]."\n";
         echo "intento 5: " .$datoJugador["intento5"]."\n";
         echo "intento 6: " .$datoJugador["intento6"]."\n";
    }
        
    
//EJERCICIO 10

    /**
     * solicita al usuario el nombre de un jugador y 
     * retorna el nombre en minúsculas. Ademas asegura que el nombre del jugador 
     * comience con una letra
     * @return String 
     */
function  solicitarJugador()
{
    //String $nombreJugador, String $primerLetra, String $nombreJugadorMinuscula, Boolean $requisito
    do{
       echo "Ingrese su nombre de usuario (debe comenzar con una letra): \n";
    $nombreJugador = trim(fgets(STDIN));
    $primerLetra = $nombreJugador[0];
    if(esPalabra($primerLetra)){
        $nombreJugadorMinuscula = strtolower($nombreJugador);
        $requisito = true;
    }
    else{
        echo "Ingrese un nombre de usuario correcto.\n";
        $requisito = false;
    }
    }while(!$requisito);
   
    return  $nombreJugadorMinuscula;
}


//EJERCICIO 11

/**
 *  Dada una colección de partidas, muestra la colección de partidas ordenada
 *  por el nombre del jugador y por la palabra.
 * @param array $coleccionPartidas
 */

 function collecionOrdenada($coleccionPartidas)
{
    uasort($coleccionPartidas, 'compararPartidas' );
    print_r($coleccionPartidas);
}

/**
 * En base a 2 partidas compara el orden lexicografico de los nombres
 * de los jugadores y a posterior la palabraWordix. Retorna < 0 si partidaA es menor que partidaB
 *  > 0 si partidaA es mayor que partidaB y 0 si son iguales. Lo mismo para la palabra Wordix si se hubiera mantenido
 * la igualdad
 * @param array $partidaA
 * @param array $partidaA
 * @return int 
 */
function compararPartidas($partidaA , $partidaB)
{   
    //int $res
    $res = strcmp($partidaA["jugador"],$partidaB["jugador"]);
    if( $res == 0)
    {
        $res = strcmp($partidaA["palabraWordix "],$partidaB["palabraWordix "]);
    }
    return $res; 
}
  

do{
    $opcion = seleccionarOpcion();
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

        }
}while($opcion != 8);





