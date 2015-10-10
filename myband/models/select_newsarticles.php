<?php

$nr_items_page = NR_ITEMS_PAGE;

$start_item = ($page_nr-1) * $nr_items_page ;

$sql = "SELECT * FROM newsarticles LIMIT " . $start_item . ", ".$nr_items_page ;
$result = $mysqli->query($sql);
?>
