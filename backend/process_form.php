<?php

	$distance = $_POST['distance_km'];
	$autonomy = $_POST['fuel_consumption'];
	$output_top = "";
	$output_result = "";
	
	if($distance == NULL || $autonomy == NULL || $distance <=0 || $autonomy <=0)
	{
		$output_top = "Erro:";
		$output_result = "	<div class=\"error\">
								<p> Por favor, insira apenas valores válidos! </p>
							</div>";	
	}
	else
	{
		define("PRICE_AT_PUMP", array(5.88, 3.80, 3.90)); /* index: 0 = gasoline; 1 = alcohol; 2 = diesel */
		$finalValue;
		
		for($x = 0; $x < 3; $x++)
		{
			$finalValue[$x] = number_format((($distance / $autonomy) * PRICE_AT_PUMP[$x]), 2, ",", ".");
		}
		
		$output_top = "O valor total gasto será de:";
		$output_result = "	<ul>
								<li>Gasolina: R$ " . $finalValue[0] . "</li>
								<li>Álcool: R$ " . $finalValue[1] . "</li>
								<li>Diesel: R$ " . $finalValue[2] . "</li>
							</ul>";
	}

?>