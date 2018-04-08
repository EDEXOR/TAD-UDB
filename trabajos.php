<!DOCTYPE html>
<html>
<head>
	<title>TRABAJO</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
<div class='container'>
<h1>Ofertas de Trabajo:</h1>
<?php
$file = file('http://www.cdb.edu.sv/notas/index.php');
 
foreach($file as $linenum => $line){
    echo "<b>Line #{$linenum}</b> ".htmlspecialchars($line).' ';
}
?>

</div>
</body>
</html>