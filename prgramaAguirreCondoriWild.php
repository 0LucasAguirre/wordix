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


//ejercicio 7

    /**
     * 
     * 
     * 
     * 
     */
    function agregarPalabra($coleccionPalabras)
    {  
        $nuevaPalabra = leerPalabra5Letras();
        array_push($coleccionPalabras, $nuevaPalabra);
        return $coleccionPalabras;
        
    }
    //ejercicio 7 PERO PARA ARRAYS

    /**
     * 
     * 
     * 
     * 
     */
    function agregarPartida($coleccionPartidas, $nuevaPartida)
    {  
        array_push($coleccionPartidas, $nuevaPartida);
        return $coleccionPartidas;
        
    }
    

    //ejercicio 8

    /**
     * 
     * 
     * $partidaGanada ["palabraWordix"] = $coleccionDePartidas["palabraWordix"];
     * $partidaGanada ["jugador"] = $coleccionDePartidas["jugador"];
     * $partidaGanada ["puntaje"] = $coleccionDePartidas["puntaje"];
     * $partidaGanada ["intentos"] = $coleccionDePartidas["intentos"];
     * 
     * 
     */
    function primerPartidaGanada($coleccionDePartidas, $jugador)
    {  
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
        



//ejercicio 9

    /**
     * 
     * 
     *  $partidasGuardadas[9]= ["palabraWordix "=> "NUDOS" , "jugador" => "ana", "intentos"=> 3, "puntaje" => 14] ;
     * 
     */
    function datosJugadorDeterminado($registroPartidas, $jugadorAbuscar)
    {  
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
        
    
/**
 * 
 * ejericio 10
 *
 * 
 * 
 */
function  solicitarJugador()
{
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


/**
 * 
 * ejericio 11
 *
 *  Una función sin retorno que, dada una colección de partidas, muestre la colección de partidas ordenada
 *  por el nombre del jugador y por la palabra. Utilice la función predefinida uasort de php y print_r.
 */

 
/**
 * 
 * strcmp — Comparación de string segura a nivel binario
 * Devuelve < 0 si str1 es menor que str2; > 0 si str1 es mayor que str2 y 0 si son iguales.
 * SE PODRIA UTILIZAR if con condiciones de igualdad mayor  o menor, esta funcion acorta dicho paso.
 * https://www.php.net/manual/es/function.strcmp.php
 */
function compararPartidas($arregloA , $arregloB)
{
    $res = strcmp($arregloA["jugador"],$arregloB["jugador"]);
    if( $res == 0)
    {
        $res = strcmp($arregloA["palabraWordix "],$arregloB["palabraWordix "]);
    }
    return $res; 
}
    
/**
 * https://www.php.net/manual/es/function.usort.php
 * Esta función ordenará un array según sus valores usando una función de comparación definida por el usuario.
 * 
 * https://www.php.net/manual/es/function.print-r.php
 *  Imprime información legible para humanos sobre una variable
 * 
 */
function collecionOrdenada($coleccionPartidas)
{
    uasort($coleccionPartidas, 'compararPartidas' );
    print_r($coleccionPartidas);
}


//FUNCIONES EXTRAS

/**
 * 
 * PALABRA ALEATORIA DE ARREGLO DE PALABRAS
 *  
 */

function palabraAleatoria($nombre, $partidasGuardadas,$coleccionPalabrasWordix){
    
    
    $palabraDisponible = false;    
    $cantPartidas = count($partidasGuardadas);    
    $i = 0;
    do{
        $seRepitePalabra = false;      
        $posicionAleatoria = array_rand($coleccionPalabrasWordix);
        $palabraEscogida = $coleccionPalabrasWordix[$posicionAleatoria];
        while( $i < $cantPartidas && !$seRepitePalabra ){
            if( $partidasGuardadas[$i]["jugador"] == $nombre )
            {
                if($palabraEscogida ==  $partidasGuardadas[$i]["palabraWordix "]){
                     $seRepitePalabra = true;                 
                }
            }
            $i++;
        }          
         if(!$seRepitePalabra){
            $palabraDisponible = true;
        }  
        }while(!$palabraDisponible);
        return $palabraEscogida;

}




/**
 * 
 * USAR FUNCION DE ENTRE VALORES DE WORDIX.PHP
 * 
 */
function palabraDisponible($nombre, $partidasGuardadas, $coleccionPalabrasWordix){
      
    $rangoPalabrasWordix = count($coleccionPalabrasWordix) - 1;
    $cantPartidas = count($partidasGuardadas);   
    $palabraDisponible = false;
    $i = 0;
    do{
        $seRepitePalabra = false;
        echo " Ingrese el numero de una palabra para poder jugar entre 0 y ". $rangoPalabrasWordix." :\n";
        $numSelecto = solicitarNumeroEntre(0, $rangoPalabrasWordix);    
        $palabraEscogida = $coleccionPalabrasWordix[$numSelecto];
        while( $i < $cantPartidas && !$seRepitePalabra ){
            if( $partidasGuardadas[$i]["jugador"] == $nombre )
            {
                if($palabraEscogida ==  $partidasGuardadas[$i]["palabraWordix "]){
                     $seRepitePalabra = true; 
                     echo "Palabra ya utilizada. \n";
                     echo "Intente con otro numero de palabra. \n";                   
                }
            }
            $i++;
        }          
         if(!$seRepitePalabra){
            $palabraDisponible = true;
        }  
        }while(!$palabraDisponible);
        return $palabraEscogida;
    }



    /**
     * 
     * EJERCICIOS DE EXPLICACION 2 TP
     * 
     * 
     */
    $partidasGuardadas = cargarPartidas();
    $palabrasGuardadas = cargarColeccionPalabras();
    do{
        $cantidadDePartidas = count($partidasGuardadas) - 1;
        $opcionElegida = seleccionarOpcion();
        switch ($opcionElegida){
    
            case 1:
                $nombreJugador = solicitarJugador();
                $palabraEscogida = palabraDisponible($nombreJugador, $partidasGuardadas, $palabrasGuardadas);
                $nuevaPartida = jugarWordix($palabraEscogida, $nombreJugador );
                $partidasGuardadas = agregarPartida($partidasGuardadas, $nuevaPartida);
                
            ;break;

            case 2:
                $nombreJugador = solicitarJugador();
                $palabraEscogida = palabraAleatoria($nombreJugador, $partidasGuardadas, $palabrasGuardadas);
                $nuevaPartida = jugarWordix($palabraEscogida, $nombreJugador );
                $partidasGuardadas = agregarPartida($partidasGuardadas, $nuevaPartida);

            ;break; 
            
            case 3:                
                $numeroDePartidaJugada = solicitarNumeroEntre(0, $cantidadDePartidas);
                datosPartida($partidasGuardadas, $numeroDePartidaJugada);
            ;break;

            case 4:
                $nombreJugador = solicitarJugador();
                $numeroDePartidaJugada = primerPartidaGanada($partidasGuardadas, $nombreJugador);                
                if($numeroDePartidaJugada >= 0){
                    datosPartida($partidasGuardadas, $numeroDePartidaJugada);
                }else{
                    echo "El jugador no ha ganado ninguna partida. \n";
                }
                              

            ;break;

            case 5:
                $nombreJugador = solicitarJugador();
                $datosJugador = datosJugadorDeterminado($partidasGuardadas, $nombreJugador);
                mostrarDatosJugador($datosJugador);
            ;break;
               
            case 6:
                collecionOrdenada($partidasGuardadas);
            ;break;

            case 7:
                $palabrasGuardadas = agregarPalabra($palabrasGuardadas);

            ;break; 
        }
    }while($opcionElegida != 8);
    
    print_r($partidasGuardadas);
 
    

   

    