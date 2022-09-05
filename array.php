<?php

function getArray( $width, $height){
    $arr = [];
    for($i = 0; $i<$width; $i++){
        for($j =0; $j <$height;$j++){
            $arr[$i][$j] = rand(1, 1000);
        }
    }
    return $arr;
}

function printArray($array){
    echo '<table>';
    
    $columns = count(current($array));
    $mask = "<tr>" . str_repeat("<td>%s</td>", $columns+1) . "</tr>" ;
    foreach($array as $row){
        printf($mask, ...array_merge($row, [array_sum($row)]));
    }
    
    $totalRow = [];
    for($columnIndex = 0; $columnIndex < $columns; $columnIndex ++){
        $totalRow[] = array_sum(array_column($array, $columnIndex));
    }

    printf($mask, ...array_merge($totalRow, [array_sum($totalRow)]));

    echo '</table>';
    
    
}

$array = getArray(5,7);

printArray($array);