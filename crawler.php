<?php
include_once("simple_html_dom.php");

// set target url to crawl

$url = "your_url_shold_be_here";
// open the web page
$html = new simple_html_dom();
$html->load_file($url);



// crawl the webpage for links
foreach($html->find("a") as $link){
    //array_push($links, $link->href);
	if($link->href!="../")
	echo $url.$link->href."<br />";
}



?>
