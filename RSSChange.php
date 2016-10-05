<?php
// Load the XML source
$xml = new DOMDocument;
$xml->load('rss.xml');
$xsl = new DOMDocument;
$xsl->subtituteEntitites = true;
$xsl->load('rss.xsl');
//configure the transformer
$proc = new XSLTProcessor;
$proc->importStyleSheet($xsl); //attatch the xsl rules
echo $proc->transformToXML($xml);
?>