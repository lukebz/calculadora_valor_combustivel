<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href=".\css\styles.css" rel="stylesheet">
		<title>Resultado</title>
	</head>
	<body>
		<?php include ".\backend\process_form.php"; ?>
		<div class="container_all"> 
			<div class = "box_container box_on_result">
				<div class = "container_top">
					<h1> <?php echo $output_top; ?> </h1>
				</div>
				<div class="container_info">
					<?php echo $output_result; ?>
					<div class="center_button"> 
						<button type="button" onclick="history.back()">Voltar</button>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
