<!DOCTYPE html>
<html>
<meta charset="utf-8">

<?php

include 'functions.php';

?>

<head>
	<title>Namų darbas</title>
</head>
<body style="background-color: lightgray;">
	<div class="container">
		<div class="row">
			<h3>1 Uzduotis:</h3>
			<?php

			for ($t=0; $t < 4; $t++) { 
				for ($i=0; $i < 5; $i++) { 
					echo "#";
				} echo "<br>";
			}
			
			?>
		</div>
		<div class="row">
			<h3>2 Uzduotis:</h3>
			<?php

			for ($t=0; $t < 4; $t++) { 
				for ($i=4; $i > 0; $i--) { 
					echo "#";
				} echo "<br>";
			}

			?>
		</div>
		<div class="row">
			<h3>3 Uzduotis:</h3>
			<?php

			removeFirst($numbers);

			?>
		</div>
		<div class="row">
			<h3>4 Uzduotis:</h3>
			<?php

			removeBiggest($numbers);

			?>
		</div>
		<div class="row">
			<h3>5 Uzduotis:</h3>
			<?php

			swap($sentence);

			?>
		</div>
		<div class="row">
			<h3>6 Uzduotis:</h3>
			<?php

			upperCase($sentence);

			?>
		</div>
		<div class="row">
			<h3>7 Uzduotis:</h3>
			<?php

			getRandom($words);

			?>
		</div>
	</div>

</body>
</html>