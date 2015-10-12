<?php

$search_string; //user input in search

$sql = "SELECT * FROM newsarticles WHERE title LIKE '%$search_string%'";

$search_result = $mysqli->query($sql);

$search_result = $mysqli->query($sql);

$search_result = resultToArray($search_result);

<<<<<<< HEAD
?>
=======
?>
>>>>>>> cee750d3f59a1ad490880597c0d0f947d49906d0
