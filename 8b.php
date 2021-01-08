<?php

$a = array(array(1,2,3),array(4,5,6),array(7,8,9));

$b = array(array(7,8,9),array(4,5,6),array(1,2,3));

$m = count($a);
$n = count($b);
$p = count($a[2]);
$q = count($b[2]);

echo "the first matrix:"."<br/>";
for($row=0; $row < $m; $row++){
    for($col = 0; $col <$n; $col++){
        echo " ".$a[$row][$col];
    }
    echo "<br/>";
}

echo "the Second matrix:"."<br/>";
for($row=0; $row < $m; $row++){
    for($col = 0; $col <$n; $col++){
        echo " ".$b[$row][$col];
    }
    echo "<br/>";
}
//Transpose of the matrics
echo "The Transpose for the first matrix is :"."<br/>";
for($row=0; $row < $m; $row++){
    for($col = 0; $col <$n; $col++){
        echo " ".$a[$col][$row];
    
    }
    echo "<br/>";
}

//addition of the matrics
if(($m==$p) and ($n==$q)){
    echo "the addtion of the matrics is:"."</br>";
    for($row=0; $row <3; $row++){
        for($col = 0; $col <3; $col++){
            echo " ".$a[$row][$col]+$b[$row][$col]." ";
        }
        echo "<br/>";
    }
}
//the Multiplication of the matrics
if($n==$p){
    echo "the Multiplication of the matrics:<br/>";
    $result = array();
    for($i=0; $i<$m; $i++){
        for($j=0; $j<$q; $j++){
            $result[$i][$j] = 0;
            for($k=0; $k<$n; $k++){
                $result[$i][$j] += $a[$i][$k] *$b[$k][$j];
            }
        }
    }
for($row=0; $row < $m; $row++){
    for($col = 0; $col <$n; $col++){
        echo " ".$result[$row][$col];
        
    }  
    echo "<br/>";   
}

}
