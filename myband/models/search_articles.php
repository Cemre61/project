<?php

$search_string; //user input in search

$sql = "SELECT * FROM newsarticles WHERE title LIKE '%$search_string%'";

$search_result = $mysqli->query($sql);

?>