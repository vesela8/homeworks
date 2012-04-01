<html>
  <head>
    <style type="text/css">
      body
      {
       color: red;
       font-size: 25;
      }
      .sinio
      {
       color: blue;
       font-size: 25;
      }
      .cherno
      {
       color: black;
       font-size: 25;
      }
    </style>
 </head>

<body>
 <?php 
   $a=$_GET["number"];
 
   //функция за проверка дали дадено число е просто:
  function isPrime($a){
    for ($i = 2; $i < $a; $i++) {
      if ($a%$i==0) { return false; }
    }
  return true;
  }//end func

if (is_numeric($a)){
   if (($a)>0 and ($a)<19999){
      if(isPrime($a)){
        echo '<p class="cherno"> The number ', $a, ' is prime!</p>';
      }else{
        echo '<p class="sinio"> The number ', $a, ' is NOT prime!</p>';
       }       
   }else{
   echo "The parameter is not within the range [0,19999]";
    }   
}else{
   echo "The parameter is not a number!";
}

 ?>
 
</body>
</html>
