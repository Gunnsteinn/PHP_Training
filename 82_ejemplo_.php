 <!-- Input Format

Sample Input

2
0 0 1 1
1 1 2 2

Sample Output

2 2
3 3 

-->
 
<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
    $array = [];
    while( $line = fgets($_fp ) ) {
        array_push($array, $line);
    }

    for($i=1; $i <= $array[0]; $i++){
        $newArr = explode(' ',$array[$i]);
        $Rx = 2* ($newArr[2] - $newArr[0]) + $newArr[0];
        $Ry = 2* ($newArr[3] - $newArr[1]) + $newArr[1];
        $result .= $Rx.' '.$Ry."\r\n";
    }
    echo $result;
?>
