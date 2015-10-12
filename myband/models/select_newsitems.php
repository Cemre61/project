<?php

$result = $mysqli->query("SELECT * FROM newsitems");

$result = $mysqli->query($sql);
$result = resultToArray($result);
