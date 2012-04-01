<html>
   <head>
	<style type="text/css">
        body
        {
        font-size:30;
        }
      </style>

   <?php

     function isPrime($a){
       for ($i = 2; $i < $a; $i++) {
         if ($a%$i==0) { return false; }
       }
       return true;
     }//end func


     function find_3_prime()
     {
       global $arr;
       $count=0;
       foreach ($arr as $value){
          if (isPrime($value)) $count++;
          if ($count==3) {
		 echo "The third prime number is $value <br/>";
		 break;
		}
       }
     }

     function  check_exists($x)
     {
       global $arr;
       if(in_array($x,$arr))
	    echo "The number $x exists in the array <br/>";
       else    
	    echo "The number $x does not exist in the array <br/>";
    }
   ?>		
  </head>

<body>
  <?php 
    $arr=range(20,1000,37);
    find_3_prime();
    check_exists(146);
    check_exists(284);
    check_exists(871);
 ?>
	
</body>
</html> 
