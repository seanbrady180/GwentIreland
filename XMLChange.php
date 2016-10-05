


<?php
// Load the XML source
$xml = new DOMDocument;
$xml->load('cards.xml');
$xsl = new DOMDocument;
$xsl->substituteEntities = true; 
$xsl->load('cards.xsl');
// Configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); // attach the xsl rules
echo $proc->transformToXML($xml);


// http://www.w3schools.com/xsl/xsl_server.asp this code posts the xml to the and xsl to the div 

?>