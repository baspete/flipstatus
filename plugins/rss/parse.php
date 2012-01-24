<?php
require_once('coreylib/coreylib.php');
// your code goes here:
// $feed = $_GET["url"];
$feed = new clApi('http://feeds.feedburner.com/github');
if($feed = $api -> parse()){
	$feed -> inspect();
} else {
	echo "no feed found";
}

?>
