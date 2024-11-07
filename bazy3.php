<!DOCTYPE HTML>
<html>
    <head>
        <title>Odczyt danych z bazy danych</title>
        <meta charset="UTF-8">
    </head>
    <body>

        <?php
        $do_bazy=mysqli_connect('localhost','root','','klienci');

        if (!$do_bazy)
        {
            echo "Błąd połączenia z serwerem MySQL";
            ?>
            </body>
            </html>
            <?php
            exit;
        }
        else
        {
            $zapytanie=mysqli_query($do_bazy,'SELECT * FROM klienci');
            if(!$zapytanie)
            {
                mysqli_close();
                echo "Blad w zapytaniu <br>";
                ?>
                </body>
                </html>
                <?php
                exit;
            }
            else
            {
                ?>
                <table id="tab1">
                    <tr>
                        <td>Nr Klienta</td>
                        <td>Imię</td>
                        <td>Nazwisko</td>
                        <td>Miejscowość</td>
                    </tr>
                    <?php
                    while($wiersze=mysqli_fetch_row($zapytanie))
                    {
                        echo "<tr>";
                        echo "<td>$wiersze[0]</td>";
                        echo "<td>$wiersze[1]</td>";
                        echo "<td>$wiersze[2]</td>";
                        echo "<td>$wiersze[3]</td>";

                        echo "</tr>";
                    }
                    ?>
                    </table>
                    <?php
                    mysqli_close($do_bazy);
            }
        }

        # incluce, require
    
    ?>