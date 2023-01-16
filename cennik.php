<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wynajem pokoi</title>
    <link rel="stylesheet" type="text/css" href="styl2.css" />
</head>
<body>
    <?php

        $db = mysqli_connect('localhost', 'root', '', 'wynajem');
        if(!$db) echo "Nie udało się połączyć z bazą danych!";
    
    ?>
    <div class="banner">
        <h1>Pensjonat pod dobrym humorem</h1>
    </div>
    <div class="bloki">
        <div class="blok lewy">
            <a href="index.html">GŁÓWNA</a>
            <img width="300" height="300" src="1.jpg" alt="pokoje" />
        </div>
        <div class="blok srodek">
            <a href="cennik.php">CENNIK</a>
            <table>
                <thead>
                    <th>ID</th>
                    <th>Nazwa</th>
                    <th>Cena</th>
                </thead>
                <tbody>
                    <?php
                    
                        $query = mysqli_query($db, 'SELECT * FROM pokoje;');
                        while($row = mysqli_fetch_row($query)){
                            echo "<tr>";
                                echo "<td>".$row[0]."</td>";
                                echo "<td>".$row[1]."</td>";
                                echo "<td>".$row[2]."</td>";
                            echo "<tr>";
                        }

                    ?>
                </tbody>
            </table>
        </div>
        <div class="blok prawy">
            <a href="kalkulator.html">KALKULATOR</a>
            <img width="300" height="300" src="3.jpg" alt="pokoje" />
        </div>
    </div>
    <footer>
        <p>Stronę opracował: 1234567890</p>
    </footer>
    <?php mysqli_close($db); ?>
</body>
</html>