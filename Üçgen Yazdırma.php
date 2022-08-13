<?php


function UcgenYazdir($deger)
{
	for($i=1;$i<$deger;$i++)
	{
		$sayac=0;
		while($sayac < $i)
		{
			echo "0";
			$sayac++;
		}
		echo "<br>";
	}
}
UcgenYazdir(15);

?>