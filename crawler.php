<?php
include_once("simple_html_dom.php");

// set target url to crawl
//$url = "http://dl2.downloado.site/dl2/Movie/"; // change this
$url = "http://fs.evonetbd.com/Media/Movies/English%20Movies/2017/";
// open the web page
$html = new simple_html_dom();
$html->load_file($url);

// array to store scraped links
//$links = array();

// crawl the webpage for links
foreach($html->find("a") as $link){
    //array_push($links, $link->href);
	if($link->href!="../")
	echo $url.$link->href."<br />";
}

// remove duplicates from the links array
//$links = array_unique($links);

?>