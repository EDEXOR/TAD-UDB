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

 error_reporting(0);
$page = file_get_contents('http://www.sv.computrabajo.com/ofertas-de-trabajo/');
    $doc = new DOMDocument();
    $doc->loadHTML($page);
    foreach ($doc->getElementsByTagName('section') as $node) {

    	
    	echo "<div class='jumbotron'>";
    	$nodo = $doc->getElementById('p_ofertas');
        echo $doc->saveHtml($nodo), PHP_EOL;
        echo "</div>";
        
    }


?>
</div>
</body>
</html>