 <!-- 

Given five positive integers, find the minimum and maximum values that can be calculated by summing exactly four of the five integers. Then print the respective minimum and maximum values as a single line of two space-separated long integers.

Input Format

A single line of five space-separated integers.

Constraints

Each integer is in the inclusive range .
Output Format

Print two space-separated long integers denoting the respective minimum and maximum values that can be calculated by summing exactly four of the five integers. (The output can be greater than 32 bit integer.)

Sample Input

1 2 3 4 5
Sample Output

10 14
Explanation

Our initial numbers are , , , , and . We can calculate the following sums using four of the five integers:

If we sum everything except , our sum is .
If we sum everything except , our sum is .
If we sum everything except , our sum is .
If we sum everything except , our sum is .
If we sum everything except , our sum is .
As you can see, the minimal sum is  and the maximal sum is . Thus, we print these minimal and maximal sums as two space-separated integers on a new line.

Hints: Beware of integer overflow! Use 64-bit Integer.
-->
 
<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
  $arr_temp = fgets($_fp);
  $arr = explode(" ",$arr_temp);
  $except1 = $except2 = $except3 = $except4 = $except5 = 0;
  for($i=0;$i<sizeof($arr);$i++){
    $except1 += ($i == 0)  ? 0 : $arr[$i];
    $except2 += ($i == 1)  ? 0 : $arr[$i];
    $except3 += ($i == 2)  ? 0 : $arr[$i];
    $except4 += ($i == 3)  ? 0 : $arr[$i];
    $except5 += ($i == 4)  ? 0 : $arr[$i];
  }
    
   $arrExc =[$except1,$except2,$except3,$except4,$except5];
   $max = max($arrExc);     
   $min = min($arrExc);       
   echo $min." ".$max;

?>