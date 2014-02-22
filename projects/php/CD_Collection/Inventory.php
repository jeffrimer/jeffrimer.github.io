<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Item Added!</title>
	<style type="text/css">
	a {
		display: block;
	}
	</style>
</head>
<body>

	<div style="margin: 0 auto; width: 400px;">
	<h1>Inventory Addition</h1>
	<?php
	
		$manufacturer = stripslashes( $_POST['manufacturer'] );
		$color = stripslashes( $_POST['color'] );
		$material = ( $_POST['material'] );
		$price = stripslashes( $_POST['price'] );
		
		if( file_exists('Inventory.xml') ) {
			$xml = simplexml_load_file( 'Inventory.xml' );
			$towel = $xml->addChild( 'towel' );
			$towel->addChild('manufacturer', $manufacturer);
			$towel->addChild('color', $color);
			$towel->addChild('material', $material);
			$towel->addChild('price', $price);
			$xml->asXML('Inventory.xml');
			echo "<p>Item added!</p>";
			}
			else {
			echo "<p>File not found!</p>";
			}
	?>	
	<a href="StoreFront.html">Add another item.</a>
	<a href="ItemsEntered.php">View all items entered.</a>
	<a href="Inventory.xml">View xml file.</a>
	</div>

</body>
</html>