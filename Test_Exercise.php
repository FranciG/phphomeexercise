
<?php 

/* Exercise tes example
Write code that prints all distinct numbers from the array with the counts how many times a particular number exists in the array. */

// count distinct elements 
// in a given array 

function countNumbers( &$arr, $n) 
{ 
    $res = 1; 
  
//Two loops. For every element, check if it has already appeared .
// If yes, increment count of distinct elements.
    for ( $i = 1; $i < $n; $i++) 
    { 
  
        for ($j = 0; $j < $i; $j++) 
            if ($arr[$i] == $arr[$j]) 
                break; 
  
        // If not printed earlier, 
        // then print it 
        if ($i == $j) 
            $res++; 
    } 
    return $res; 
} 
  
// Driver Code 
$arr = array( 15, 9, 9, 5, 3, 15, 20, 30 ); 
$n = count($arr); 
echo countNumbers($arr, $n); 


//The program does not count how many times a particular number exists in the array.

?> 
