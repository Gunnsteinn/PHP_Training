 <!-- 

Given a square matrix of size N x N, calculate the absolute difference between the sums of its diagonals.

Input Format

The first line contains a single integer, N. The next N lines denote the matrix's rows, with each line containing N space-separated integers describing the columns.

Output Format

Print the absolute difference between the two sums of the matrix's diagonals as a single integer.

Sample Input

3
11 2 4
4 5 6
10 8 -12
Sample Output

15
Explanation

The primary diagonal is: 
11
      5
            -12

Sum across the primary diagonal: 11 + 5 - 12 = 4

The secondary diagonal is:
            4
      5
10
Sum across the secondary diagonal: 4 + 5 + 10 = 19 
Difference: |4 - 19| = 15

-->
 
<?php

    $handle = fopen ("php://stdin","r");
    fscanf($handle,"%d",$n);
    $a = array();
    for($a_i = 0; $a_i < $n; $a_i++) {
       $a_temp = fgets($handle);
       $a[] = explode(" ",$a_temp);   
    }
        $primDiag = 0;
        $secDiag = 0; 
    for($i = 0; $i < $n; $i++){
        $primDiag += $a[$i][$i];
        $secDiag += $a[$i][$n - 1 -$i];
    }
    echo abs($primDiag - $secDiag);
?>
