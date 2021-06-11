<?php

function Conect()
{
    $echo = mysqli_connect("localhost","root","","cumbre");
    $echo -> set_charset("utf8");
    return $echo;
}

?>
