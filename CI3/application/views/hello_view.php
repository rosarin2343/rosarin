<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Welcome to Hello World</title>
	</head>
	<body>

		<div id="container">
			<h1>Hello World</h1>
		</div>
		<hr>
		HTML Helper
		<?php echo br(3);
		?>
		<br>
		RMUTL<br>TAK

		<p>Heading</p>
		<?php echo heading("FAH",1);?>
		<?php echo heading("FAH",2);?>
		<?php echo heading("FAH",3);?>
		<?php echo heading("FAH",4);?>
		<?php echo heading("FAH",5);?>
		<?php echo heading("FAH",6);?>

		<p>nbs</p>
		Test &nbsp;&nbsp;&nbsp;progreaming
		<br>
		<?php
			echo 'My Website';
			echo nbs(10);
			echo 'ROSARIN';

		?>

		<p>ol</p>
		<?php
			$list =array('Rosarin',
						'sadisson',
						'fah',
						'Kamphaeng Phet',
						'Kamphaeng Phet');

			echo ol($list);

			echo '<hr>';

			echo ul($list);
		?>


		
	</body>
</html>