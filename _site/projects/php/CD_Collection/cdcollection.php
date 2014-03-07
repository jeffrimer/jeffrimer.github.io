<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
	<title>CD Collection</title>
</head>
<body>
	<div style="margin: 0 auto; width: 335px;">
		
		<h1>My CD Collection</h1>
		<h3>XML file contents before hitting button:</h3>
		<table>
			<tr>
				<th>Title</th>
				<th>Artist</th>
				<th>Year</th>
			</tr>		
		
		<?php
		if( file_exists('cdcollection.xml') ) {
			$xml = simplexml_load_file( 'cdcollection.xml' );
			foreach( $xml as $cd ) {
				echo '<tr>';
				echo '<td>' . $cd->title . '</td>';
				echo '<td>' . $cd->artist . '</td>';
				echo '<td>' . $cd->year . '</td>';
				echo '</tr>';
				}
		} ?>
		
		</table>
		
		<form name="cds" action="cdcollection.php" method="post" style="border: 1px solid black; width: 275px; padding: 0 10px; margin: 15px 0;" >
			<p>Add CD's by clicking this button: <input type="submit" name="addsubmit" value="Add CD's" /></p>
			<p>Delete CD's by clicking this button: <input type="submit" name="deletesubmit" value="Delete CD's" /></p>
		</form>
	
	<?php
	
	if( isset($_POST['addsubmit']) ) {
	
		if( file_exists('cdcollection.xml') ) {
			$xml = simplexml_load_file( 'cdcollection.xml' );
			$cd = $xml->addChild( 'cd' );
			$cd->addChild('title', 'Days of Grays');
			$cd->addChild('artist', 'Sonata Arctica');
			$cd->addChild('year', '2010');
			$cd = $xml->addChild( 'cd' );
			$cd->addChild('title', 'V');
			$cd->addChild('artist', 'Symphony X');
			$cd->addChild('year', '2004');
			$xml->asXML('cdcollection.xml');
			echo '<h3>XML file contents after hitting button:</h3>';
			echo '<table>';
			echo '<tr><th>Title</th><th>Artist</th><th>Year</th></tr>';
			foreach( $xml as $cd ) {
				echo '<tr>';
				echo '<td>' . $cd->title . '</td>';
				echo '<td>' . $cd->artist . '</td>';
				echo '<td>' . $cd->year . '</td>';
				echo '</tr>';
				}
			echo '</table>';
			}
		else
			echo "File doesn't exist!";
	}
	
	if( isset($_POST['deletesubmit']) ) {
	
		if( file_exists('cdcollection.xml') ) {
			$doc = new DOMDocument;
			$doc->load('cdcollection.xml');
			
			$xpath = new DOMXpath($doc);
			foreach( $xpath->query( "//cd[title='Days of Grays']") as $node ) {
				$node->parentNode->removeChild($node);
			}
			foreach( $xpath->query( "//cd[title='V']") as $node ) {
				$node->parentNode->removeChild($node);
			}
			$xml = simplexml_import_dom( $doc );
			$xml->asXML('cdcollection.xml');
			echo '<h3>XML file contents after hitting button:</h3>';
			echo '<table>';
			echo '<tr><th>Title</th><th>Artist</th><th>Year</th></tr>';
			foreach( $xml as $cd ) {
				echo '<tr>';
				echo '<td>' . $cd->title . '</td>';
				echo '<td>' . $cd->artist . '</td>';
				echo '<td>' . $cd->year . '</td>';
				echo '</tr>';
				}
			echo '</table>';
			}
		else
			echo "File doesn't exist!";
		}
?>

</div>
</body>
</html>