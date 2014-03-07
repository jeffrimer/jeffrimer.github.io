<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>Items Entered</title>
	<style type="text/css">
	a {
		display: block;
	}
	</style>
</head>
<body>

	<div style="margin: 0 auto; width: 335px;">
		
		<h1>Entered Towels</h1>
		<table>
			<tr>
				<th>Manufacturer</th>
				<th>Color</th>
				<th>Material</th>
				<th>Price</th>
			</tr>		
		
		<?php
		if( file_exists('Inventory.xml') ) {
			$xml = simplexml_load_file( 'Inventory.xml' );
			foreach( $xml as $towel ) {
				echo '<tr>';
				echo '<td>' . $towel->manufacturer . '</td>';
				echo '<td>' . $towel->color . '</td>';
				echo '<td>' . $towel->material . '</td>';
				echo '<td>' . $towel->price . '</td>';
				echo '</tr>';
				}
		} ?>
		
		</table>
		<a href="StoreFront.html">Back to store front.</a>
		<a href="Inventory.xml">View the raw xml document.</a>
		</div>



</body>
</html>