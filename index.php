<html>  
<body>  
<form method="post">  
Enter Number between 2 and 25:  
<input type="number" name="n" min="2" max="25"/><br><br>  
 
<input  type="submit" name="submit">  
</form>  
<?php 
function binCoef($n, $k) 
{ 
    $bc_result = 1; 
    if ($k > $n - $k) 
    $k = $n - $k; 
    for ($i = 0; $i < $k; ++$i) 
    { 
        $bc_result *= ($n - $i); 
        $bc_result /= ($i + 1); 
    } 
return $bc_result; 
} 
  
function Pascal($n) 
{ 
    
    for ($j = 0; $j < $n; $j++) 
    { 
        
        for ($i = 0; $i <= $j; $i++) 
                echo "".binCoef($j, $i)." "; 
                  
        echo nl2br("\n"); 
    } 
} 
  

$n= $_POST['n'];
Pascal($n); 
  
?>
</body>  
</html>  