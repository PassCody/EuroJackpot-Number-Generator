<!DOCTYPE html>
<html lang="de">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="robots" content="noindex,nofollow" />
		<title>
			EuroJackpot Zahlengenerator
		</title>
		<link rel='stylesheet' href='./css/main.css' />
		<?php /* LIBARY LOADER */
			require_once("./init.php");
			$init = new Initialisation();
			
			/* RUN LIBARY LOADER */
			$init->loadBS();
			
			/* LOAD CSS FILES */
			$init->loadCSSFiles();
			
			/* LOAD JS FILES */
			$init->loadJSFiles();
		?>
	</head>
	<body>
		<?php
			ini_set('memory_limit', '24576M');
			set_time_limit(172800);
			$splittet_url = basename($_SERVER['REQUEST_URI']);
			$splittet_url = explode('?', $splittet_url);
			$splittet_url = $splittet_url[1];
			include_once("./tools/php/number.php");
			include_once("./tools/php/printer.php");
			include_once("./tools/php/ProbabilityCalculator.php");
			include_once("./tools/php/PCVar.php");
			$print = new Printer();
			echo("<center>");
			echo("<h1>EuroJackpot Zahlen Generator</h1>");
			for ($run = 0; $run != $splittet_url; $run++) {
				$numbers = Array();
				echo("<h2>Tipp: " . $run+1 . "</h2>");
				$pc = new ProbabilityCalculator();
					$variables = new PCVar();
				for ($i = 0; $i != 140000000; $i++) {
					$numbers = new Number();
					$numbers->numberMain($variables, $pc);
					unset($numbers);
				}
				$variables->sortProbabilitys();
				$print->print($variables);
				unset($pc);
				unset($variables);
			}
			echo("</center>");
		?>
	</body>
</html>