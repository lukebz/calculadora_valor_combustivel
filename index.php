<!DOCTYPE html>

<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Calule o valor gasto em R$ de combustível de acordo com a distância e autonomia do seu carro.">
		<title>Formulário Online</title>
		<link href=".\css\styles.css" rel="stylesheet">
	</head>
	
	<body>
		<div class="container_all"> 
			<div class = "box_container box_on_main">
				<div class="container_top">
					<h1>Instruções</h1>
				</div>
				<div class="container_info">
					<p>Esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem, com base no consumo do seu veículo e com a distância determinada por você.</p>
					<p>Os combustíveis disponíveis para este cálculo são:</p>
					<ul>
						<li>Gasolina</li>
						<li>Álcool</li>
						<li>Diesel</li>					
					</ul>
				</div>
			</div> <!--end box_container -->
		
			<div class="box_container box_on_main">
				<div class="container_top">
					<h1>Calculo do valor (R$) do combustível</h1>
				</div>
				<div class="container_form">
					<main>
						<form action="result.php" method="POST">
							<label for="distance_km">Distância em KM a ser percorrida</label>
							<input type="number" id="distance_km" name="distance_km">
							
							<label for="fuel_consumption">Consumo de combustível do veículo (Km/l)</label>
							<input type="number" id="fuel_consumption" name="fuel_consumption">
							
							<button type="submit">Calcular</button>
						</form>
					</main>	
				</div>
			</div> <!--end box_container -->
		</div><!--end container_all -->
	</body>
	
</html>