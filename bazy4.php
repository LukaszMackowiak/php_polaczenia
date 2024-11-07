<?php
 $do_bazy=mysqli_connect('localhost','root','','klienci');
 if(!$do_bazy)
 {
    exit("Błąd połączenia z serwerem MySQL");
 }

$zapytanie=mysqli_query($do_bazy,"SELECT * FROM klienci WHERE nazwisko LIKE 'Kruk'");

if(!$zapytanie)
{
    mysqli_close();
    exit("Błąd w zapytaniu <br>");
}
while ($tab=mysqli_fetch_array($zapytanie))
{
    echo "<ul>";
    echo "<li>".$tab['Nazwisko']." ".$tab['Imie']."</li>";
    echo "</ul>";
}
mysqli_close($do_bazy);
?>