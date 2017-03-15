 <!-- 

Jim is off to a party and is searching for a matching pair of socks. His drawer is filled with socks, each pair of a different color. In its worst case scenario, how many socks (x) should Jim remove from his drawer until he finds a matching pair?

Input Format 
    The first line contains the number of test cases T. 
    Next T lines contains an integer N which indicates the total pairs of socks present in the drawer.

Output Format 
    Print the number of Draws (x) Jim makes in the worst case scenario.

Sample Input

    2
    1
    2

Sample Output

    2   
    3

Explanation 
    Case 1 : A pair of socks are present, hence exactly 2 draws for the socks to match. 
    Case 2 : 2 pair of socks are present in the drawer. The first and the second draw might result in 2 socks of different color. The 3rd sock picked will definitely match one of previously picked socks. Hence, 3.

-->
 
<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
    $array = [];
    while( $line = fgets($_fp ) ) {
        array_push($array, $line);
    }
    
    $t = $array[0];
    if($t>=1 && $t<=1000){
        for($i=1 ; $i <= $t ;$i++){
            $n = $array[$i];
            if($n>0 && $n<10000000){
                $n+=1;
            }
            $res .= $n."\r\n";
        }
    }
    echo  $res;

?>
