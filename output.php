<?php



 function factorial( $n)
{
    if($n!=1)
      return $n*factorial($n-1);
}


  function mult( $x,  $y)
{
   return  $x* $y;
}


 function main()
{
     $n;
     $vector;

     $n= 3;
    
    printf("%d\n", factorial(3));

    
     return 0;
}

main();

?>