<?php



 
 function main()
{
	 $i; $j; $k;
	 $arr=  
		    array(
		        array(
		        	array(11 ,12 ,13)
		        	,array(14 ,15 ,16)
		        	,array(17 ,18 ,19)
		        )
		        ,array(
		        	array(21 ,22 ,23)
		        	,array(24 ,25 ,26)
		        	,array(27 ,28 ,29)
		        )
		        ,array(
		        	array(31 ,32 ,33)
		        	,array(34 ,35 ,36)
		        	,array(37 ,38 ,39)
		        )
		    ,);

	printf(":::3D Array Elements:::\n\n");
	for($i=0;$i<3;$i++)
	{
		for($j=0;$j<3;$j++)
		{
		    for($k=0;$k<3;$k++)
		    {
		    	printf("%d\t",$arr[$i][$j][$k]);
		    }
		    printf("\n");
		}
		printf("\n");
	}
}

main();

?>