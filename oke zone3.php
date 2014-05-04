<?php
// to retrieve selected html data, try these DomXPath examples:

$file ="http://techno.okezone.com/breaking/56";
$doc = new DOMDocument();
$doc->loadHTMLFile($file);

$xpath = new DOMXpath($doc);
$elements = $xpath->query("*/div[@id='subkanal-content-list fl']");

if (!is_null($elements)) {
  foreach ($elements as $element) {
    echo "<br/>[". $element->nodeName. "]";

    $nodes = $element->childNodes;
    foreach ($nodes as $node) {
      echo $node->nodeValue. "\n";
    }
  }
}
?>
