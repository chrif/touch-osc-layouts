<?php

require_once 'RecursiveDOMIterator.php';

$file = $argv[1];

$xml = file_get_contents($file);

$document = new DOMDocument('1.0', 'UTF-8');

$document->loadXML($xml);

$iterator = new RecursiveIteratorIterator(
	new RecursiveDOMIterator($document),
	RecursiveIteratorIterator::SELF_FIRST);

$attributesToEncode = array('name', 'text');

foreach($iterator as $node) {
	/** @var DOMElement $node */
	if ($node->nodeType == XML_ELEMENT_NODE) {
		foreach ($attributesToEncode as $attribute) {
			if ($node->hasAttribute($attribute)) {
				$node->setAttribute($attribute, base64_encode($node->getAttribute($attribute)));
			}
		}
	}
}

$document->formatOutput = false;

$tmp = tempnam("tmp", "zip");
$zip = new ZipArchive();
$zip->open($tmp, ZipArchive::OVERWRITE);
$zip->addFromString('index.xml', $document->saveXML());
$zip->close();

readfile($tmp);
unlink($tmp);