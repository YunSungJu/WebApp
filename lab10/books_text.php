<?php
# A PHP script to return book data.  Author: Marty Stepp, Nov 30 2008
$BOOKS_FILE = "books.txt";

# Removes all characters except letters/numbers from query parameters
function filter_chars($str) {
	return preg_replace("/[^A-Za-z0-9_]*/", "", $str);
}


# main program
if (!isset($_SERVER["REQUEST_METHOD"]) || $_SERVER["REQUEST_METHOD"] != "GET") {
	header("HTTP/1.1 400 Invalid Request");
	die("ERROR 400: Invalid request - This service accepts only GET requests.");
}

$category = "";

if (isset($_REQUEST["category"])) {
	$category = filter_chars($_REQUEST["category"]);
}

# read file
if (!file_exists($BOOKS_FILE)) {
	header("HTTP/1.1 500 Server Error");
	die("ERROR 500: Server error - Unable to read input file: $BOOKS_FILE");
}

if ($category) {
	foreach (file($BOOKS_FILE) as $line) {
		# Bachelor Chow in 20 Minutes|Gloria Demartelaere|cooking|2005|30.00
		list($title, $author, $book_category, $year, $price) = explode("|", trim($line));
		if ($book_category == $category) {
			# print it as Text 
			print "title: $title, author: $author, year: $year, price: $price\n";
		}
	}
} 
?>
