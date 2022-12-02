<?php 
	
	$hasil = 0;
	if (isset($_POST['hitung'])) {
		$nilai1 = $_POST['nilai1'];
		$nilai2 = $_POST['nilai2'];
		$operator = $_POST['operators'];

		switch ($operator) {
			case 'x':
				$hasil = $nilai1 * $nilai2;
				break;
			case '-':
				$hasil = $nilai1 - $nilai2;
				break;
			case '+':
				$hasil = $nilai1 + $nilai2;
				break;
			case ':':
				$hasil = $nilai1 / $nilai2;
				break;
			case '%':
				$hasil = $nilai1 % $nilai2;
				break;
		}
	}


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Calculator</title>

</head>
<body>
	<div class="container">

		<div class="wrapper">
			<h2>Kalkulator Sederhana v1</h2>
			<p>by Loggis samjaya</p>
			
			<form action="" method="POST">

				<input type="text" name="nilai1" placeholder="nilai 1">

				<input type="text" name="nilai2" placeholder="nilai 2">

				<input class="hasil" type="text" name="hasil" placeholder="hasil" value="<?= $hasil; ?>">
			

					<select class="operators" name="operators">
						<option value="x">x</button>
						<option value=":">/</button>
						<option value="+">+</button>
						<option value="-">-</button>
						<option value="%">%</button>
					</select>

				<button type="submit" name="hitung">=</button>
			</form>	
		</div>
	</div>
</body>
</html>