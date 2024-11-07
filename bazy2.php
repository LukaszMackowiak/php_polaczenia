<?php

$do_bazy=mysqli_connect('localhost','root','','klienci');

if (mysqli_connect_errno())
{
    exit("Blad polaczenia z serwerem MySQL: ".mysqli_connect_error());
}
else
{
    echo "Połączono z serwerem baz danych.<br>";
}

mysqli_close($do_bazy);
?>