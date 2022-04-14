<?php
function IsPrime($n){
 for($x=2; $x<$n; $x++){ // less than <
      if($n %$x ==0) // if the remainder of $n divded by $x is 0 then return 0 this is not a prime number
	      {
		   return 0;
		  }
}
  return 1; // this is the default return value. if $n divided by $x = 1 then it is a prime number
}
$a = IsPrime(4);
if ($a==0)
echo 'This is not a Prime Number.....'."\n";
else
echo 'This is a Prime Number..'."\n";
?>