<?php

require_once 'dbh.classes.php';
require_once 'medicamente.classes.php';

$med = new Medicamente();
$medicamente = $med->getMeds();
