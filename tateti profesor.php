<?php

/*Mientras no haya ganador o este lleno:
    buscar posicion al azar
    si esta ocupado empezar de nuevo
    sino, escribo posicion del jugador
    cambiar jugador

*/
const LIBRE=3;

const CIRCULO=1;

const CRUZ=2;

$tablero = array ();
$tablero[] =array (LIBRE,LIBRE,LIBRE);
$tablero[] =array (LIBRE,LIBRE,LIBRE);
$tablero[] =array (LIBRE,LIBRE,LIBRE);

function lleno($tablero) {
    foreach ($tablero as $fila) {
        foreach($fila as $posicion) {
            if ($posicion == LIBRE) {
                return false;
            }

        }
    }
    return false;
}

function buscarPosicionAzar(){
    return array(
        rand(0,2),
        rand(0,2),
    );
}

function ganador ($tablero){
    if ($tablero [0][0] !=LIBRE and $tablero[0][0]== $tablero [0][1] and $tablero [0][1] ==$tablero[0][2]){
        return true;
    }
    if ($tablero [1][0] !=LIBRE and $tablero[1][0]== $tablero [1][1] and $tablero [1][1] ==$tablero[1][2]){
        return true;
    }
    if ($tablero [2][0] !=LIBRE and $tablero[2][0]== $tablero [2][1] and $tablero [2][1] ==$tablero[2][2]){
        return true;
    }
    if ($tablero [0][0] !=LIBRE and $tablero[0][0]== $tablero [1][0] and $tablero [1][0] ==$tablero[2][0]){
        return true;
    }
    if ($tablero [0][1] !=LIBRE and $tablero[0][1]== $tablero [1][1] and $tablero [1][1] ==$tablero[2][1]){
        return true;
    }
    if ($tablero [0][2] !=LIBRE and $tablero[0][2]== $tablero [1][2] and $tablero [1][2] ==$tablero[2][2]){
        return true;
    }
    if ($tablero [0][0] !=LIBRE and $tablero[0][0]== $tablero [1][1] and $tablero [1][1] ==$tablero[2][2]){
        return true;
    }
    if ($tablero [2][2] !=LIBRE and $tablero[2][2]== $tablero [1][1] and $tablero [1][1] ==$tablero[0][2]){
        return true;
    }

    return false;
}
$jugadorActivo= CRUZ;

while (!lleno($tablero) && !ganador ($tablero)){
    $posicion = buscarPosicionAzar();
    // $position = array (1, 0),

    if ($tablero[$posicion[0]][$posicion[1]] !==LIBRE) {
         //empezar de nuevo
    } else {
        //sino, escribo posicion del jugador
        $tablero[$posicion[0] ][ $posicion[1]] =$jugadorActivo;
        if ($jugadorActivo ==CRUZ) {
            $jugadorActivo = CIRCULO;
        }else {
            $jugadorActivo =CRUZ;
        }
    }
}


        foreach($tablero as $fila) {
            echo $fila [0] .' - ' . $fila[1] . ' - '. $fila[2] . "\n";
}

echo '</pre>';
       




