<!-- 
	Alice and Bob each created one problem for HackerRank. A reviewer rates the two challenges, awarding points on a scale from 1 to 100 for three categories: problem clarity, originality, and difficulty.

We define the rating for Alice's challenge to be the triplet A = (a0, a1, a2), and the rating for Bob's challenge to be the triplet B = (b0, b1, b2).

Your task is to find their comparison points by comparing a0 with b0, a1 with b1, and a2 with b2.

If ai > bi, then Alice is awarded  point.
If ai < bi, then Bob is awarded  point.
If ai = bi, then neither person receives a point.
Comparison points is the total points a person earned.

Given A and B, can you compare the two challenges and print their respective comparison points?

Input Format

The first line contains  space-separated integers, a0, a1 and a2, describing the respective values in triplet A. 
The second line contains  space-separated integers, b0, b1 and b2, describing the respective values in triplet B.


Output Format

Print two space-separated integers denoting the respective comparison points earned by Alice and Bob.

Sample Input

5 6 7
3 6 10
Sample Output

1 1 
Explanation

In this example:
A = (a0, a1, a2) = (5, 6, 7)
B = (b0, b1, b2) = (3, 6, 10)

Now, let's compare each individual score:

a0 > b0 , so Alice receives 1 point.
a1 = b1, so nobody receives a point.
a2 < b2, so Bob receives 1 point.
Alice's comparison score is 1, and Bob's comparison score is 1. Thus, we print 1 1 (Alice's comparison score followed by Bob's comparison score) on a single line.
 -->

<?php

$handle = fopen ("php://stdin","r");
    fscanf($handle,"%d %d %d",$a0,$a1,$a2);
    fscanf($handle,"%d %d %d",$b0,$b1,$b2);

    $a = [$a0,$a1,$a2];
    $b = [$b0,$b1,$b2];
    $aliceScore = 0;
    $bobScore = 0;
    for($i=0 ; $i<3 ; $i++){
        if($a[$i] >= 1 && $a[$i] <=100 && $b[$i] >= 1 && $b[$i] <= 100){
            if($a[$i] > $b[$i]){
                $aliceScore++;
            }  
            if($a[$i] == $b[$i]){
                $aliceScore =  $aliceScore + 0;
                $bobScore = $bobScore + 0;
            }
            if($a[$i] < $b[$i]){
                $bobScore++;
            }
        }     
    }

    echo $aliceScore." ".$bobScore;
?>