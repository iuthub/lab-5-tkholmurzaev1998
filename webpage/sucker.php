<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Buy Your Way to a Better Education!</title>
		<link href="buyagrade.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<?php 
			if($_SERVER["REQUEST_METHOD"] == "POST"){
				$name = $_REQUEST["name"];
				$section = $_REQUEST["section"];
				$crCode = $_REQUEST["crCode"];
				$crType = $_REQUEST["crType"];	
			}
			if ($name != "" && $section != "" && $crCode != "" && $crType != ""){
		 		file_put_contents("suckers.txt", $name.";", FILE_APPEND);
				file_put_contents("suckers.txt", $section.";", FILE_APPEND);
				file_put_contents("suckers.txt", $crCode.";", FILE_APPEND);
				file_put_contents("suckers.txt", $crType."\r\n", FILE_APPEND);
		?>
		<h1>Thanks, sucker!</h1>
		<p>Your information have been recorded.</p>
		<dl>
			<dt>Name</dt>
			<dd><?= $name?></dd>
			<dt>Section</dt>
			<dd><?= $section?></dd>
			<dt>Credit Card</dt>
			<dd><?= $crCode?>(<?= $crType?>)</dd>
		</dl>
		<p>Here are all the suckers who have submitted here:</p>
<<<<<<< HEAD
		<?php
=======
			<?php
>>>>>>> d9b0563e107d3ec74e9d3247f4d0cba4b66edbf3
				$file = fopen("suckers.txt", "r");
				while(!feof($file)){
					echo fgets($file)."<br>";
				}
				fclose($file);
<<<<<<< HEAD
			} 
		 	else{
		?>
=======
		 } 
		 else{
		 	?>
>>>>>>> d9b0563e107d3ec74e9d3247f4d0cba4b66edbf3
			<h1 align="center">Sorry</h1>
			<p>You didn't fill out the form completely. <a href="buyagrade.html">Try again?</a></p>
		<?php
			}
<<<<<<< HEAD
		?>
=======
			?>
>>>>>>> d9b0563e107d3ec74e9d3247f4d0cba4b66edbf3
	</body>
</html>