<?php
	
require 'vendor/autoload.php';
/**
 * 
 */
class Index
{
	const PHP_EOF = "\r\n";
	public function demo()
	{
		//实例化类库
		$parser = new \Smalot\PdfParser\Parser();

		if ($_FILES['file']) {
			$document = $parser->parseFile($_FILES['file']['tmp_name']);
			$pages = $document->getPages();

			foreach ($pages as $key => $value) {
				echo $value->getText() . "<br>";
			}
		}
	}
}

$index = new Index();

$index->demo();