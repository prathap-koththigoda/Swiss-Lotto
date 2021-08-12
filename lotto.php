<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Lotto</title>
</head>

<body>
    <h1>Es bizzli Lotto</h1>
    <form action="lotto.php" method="POST">
        <?php
        // leere Arrays
        $lotto = []; 
        $zusatz = [];

        // Füllt das Array mit allen Zahlen von 1-42
        for ($i = 0; $i < 42; $i++) {
            $lotto[$i] = $i + 1;
        }

        // Füllt das Array mit allen Zahlen von 1-6
        for ($i = 0; $i < 6; $i++) {
            $zusatz[$i] = $i + 1;
        }

        // gibt alle Zahlen der beiden Arrays, getrennt mit Komma, aus (einfach nur zu Test-Zwecken)
        echo "<p> Alle Lottozahlen:<br>" . implode(',', $lotto) . "</p>";
        echo "<p> Alle Zusatzzahlen:<br>" . implode(',', $zusatz) . "</p>";
        echo "<br><br>";

        // beide Arrays mischeln
        shuffle($lotto);
        shuffle($zusatz);

        // Array machen für die 6 ersten Zahlen des gemischelten Lotto-Arrays
        $die6Lottozahlen = [];
        for ($i = 0; $i < 6; $i++) {
            $die6Lottozahlen[] = $lotto[$i];
        }
        // ausgabe der gemischelten Zahlen
        echo "<p> 6 Lottozahlen:<br>" . implode(',', $die6Lottozahlen) . "</p>";
        echo "<p> Eine Zusatzzahl:<br>" . $zusatz[0] . "</p>";

        ?>
    </form>

</body>

</html>