<?php

#TATETI
//esto es un tablero


#tarea 1



$ar = array ();

    $ar []= array (3,3,3);
    $ar []= array (3,3,3);
    $ar []= array (3,3,3);




//while
//foreach ($ar as $item){  

for ($i=0; $i < 9 ; $i++) 
{ 

    $x = rand (0,2);
    $y = rand (0,2);

    $ar [$x][$y]= 'x';

    $x = rand (0,2);
    $y = rand (0,2);

    $ar [$x][$y]= 'y';
    foreach ($ar as $item){

    echo $item[0]    .    '-'   .    $item[1]  .   '-'  .  $item[2];
    echo "\n";
    
    }

    echo "**************************";
    echo "\n";
    
}
  






/*

    primero tengo que encontrar una posicion aleatoria para poner la x o el círculo
    luego de eso tengo que lograr ver si no está ocupada
    si está ocupada tengo que volver a buscar
    si no está ocupada escribo y pasa al otro jugador
    el proceso se repite hasta que un jugador gane
    compruebo si un jugador gana si es que 3 posiciones se llenaron de manera consecutiva con la x o el O
    cuando uno gana, vuelve a empezar
    */
