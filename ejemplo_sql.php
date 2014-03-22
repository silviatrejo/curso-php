<?php
require_once("include/conexion.php");
require_once("include/data.php");

$data = new Data($conexion);


$sql='SELECT * FROM alumnos';

