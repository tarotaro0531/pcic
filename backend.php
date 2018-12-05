<html>
<h1>welcome!!<br><br>
<h4>



</html>

<?php	
	
		$file = fopen('C:\xampp\htdocs\xampp\opinion.csv','r');   
		while ($data = fgetcsv($file)) {    
        print_r($data); 
		}   
		fclose($file);
?>
