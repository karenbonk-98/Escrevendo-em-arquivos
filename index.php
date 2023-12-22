<?php
$texto = file_get_contents('texto.txt');
$texto .= "\nKaren Bonk";
file_put_contents('texto.txt', $texto);
