<?php
$serwer='localhost';
$login='root';
$haslo='';
$baza='klienci';

$do_bazy=mysqli_connect($serwer,$login,$haslo,$baza);
if (mysqli_connect_errno())
{
    exit("Blad polaczenia z serwerem MySQL: ".mysqli_connect_error());
}
else
{
    echo "Połączono z serwerem baz danych.<br>";
}

?>