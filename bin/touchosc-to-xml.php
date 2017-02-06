<?php

require_once 'RecursiveDOMIterator.php';

$file = $argv[1];

$command = 'unzip -p ' . escapeshellarg($file) . ' index.xml';

exec($command, $output);

$xml = implode("", $output);

$document = new DOMDocument('1.0', 'UTF-8');

$document->loadXML($xml);

$iterator = new RecursiveIteratorIterator(
	new RecursiveDOMIterator($document),
	RecursiveIteratorIterator::SELF_FIRST);

$attributesToDecode = array('name', 'text');

foreach ($iterator as $node) {
	/** @var DOMElement $node */
	if ($node->nodeType == XML_ELEMENT_NODE) {
		foreach ($attributesToDecode as $attribute) {
			if ($node->hasAttribute($attribute)) {
				$node->setAttribute($attribute, base64_decode($node->getAttribute($attribute)));
			}
		}
	}
}

$document->formatOutput = true;

echo $document->saveXML();
