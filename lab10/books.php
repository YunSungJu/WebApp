<?php
$BOOKS_FILE = "books.txt";

function filter_chars($str) {
	return preg_replace("/[^A-Za-z0-9_]*/", "", $str);
}

if (!isset($_SERVER["REQUEST_METHOD"]) || $_SERVER["REQUEST_METHOD"] != "GET") {
	header("HTTP/1.1 400 Invalid Request");
	die("ERROR 400: Invalid request - This service accepts only GET requests.");
}

$category = "";
$delay = 0;

if (isset($_REQUEST["category"])) {
	$category = filter_chars($_REQUEST["category"]);
}
if (isset($_REQUEST["delay"])) {
	$delay = max(0, min(60, (int) filter_chars($_REQUEST["delay"])));
}

if ($delay > 0) {
	sleep($delay);
}

if (!file_exists($BOOKS_FILE)) {
	header("HTTP/1.1 500 Server Error");
	die("ERROR 500: Server error - Unable to read input file: $BOOKS_FILE");
}

$xmldoc = new DomDocument('1.0', 'UTF-8'); 
$books_tag = $xmldoc->createElement('books'); 
$xmldoc->appendChild($books_tag);

$lines = file($BOOKS_FILE);
for ($i = 0; $i < count($lines); $i++) {
	list($title, $author, $bookCategory, $year, $price) = explode("|", trim($lines[$i]));
	if ($bookCategory == $category) {
		
		$book_tag = $xmldoc->createElement('book');
		$books_tag->appendChild($book_tag);
		$book_tag->setAttribute("category", "$category");
		
		$titleElement = $xmldoc->createElement('title' , "$title");
		
		$authorElement = $xmldoc->createElement('author', "$author");
	
		$yearElement = $xmldoc->createElement('year', "$year");
		
		$priceElement = $xmldoc->createElement('price', "$price");
		
		$book_tag->appendChild($titleElement);
		$book_tag->appendChild($authorElement);
		$book_tag->appendChild($yearElement);
		$book_tag->appendChild($priceElement);		
	}
}

header("Content-type: application/xml");
$xml = $xmldoc->saveXML(); 
print $xml; 
?>
