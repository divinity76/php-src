--TEST--
DomDocument::schemaValidate() - file that is not a schema
--CREDITS--
Daniel Convissor <danielc@php.net>
# TestFest 2009 NYPHP
--EXTENSIONS--
dom
--FILE--
<?php

$doc = new DOMDocument;

$doc->load(__DIR__."/book.xml");

$result = $doc->schemaValidate(__DIR__."/book-not-a-schema.xsd");
var_dump($result);

?>
--EXPECTF--
Warning: DOMDocument::schemaValidate(): %sbook-not-a-schema.xsd:1: parser error : Start tag expected, '<' not found in %s on line %d

Warning: DOMDocument::schemaValidate(): Let's see what happens upon parsing a file that doesn't contain a schema. in %s on line %d

Warning: DOMDocument::schemaValidate(): ^ in %s on line %d

Warning: DOMDocument::schemaValidate(): Failed to parse the XML resource '%sbook-not-a-schema.xsd'. in %s on line %d

Warning: DOMDocument::schemaValidate(): Invalid Schema in %s on line %d
bool(false)
