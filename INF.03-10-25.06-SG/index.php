<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szkolenia i kursy</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "szkolenia";

    $conn = mysqli_connect($host, $user, $password, $db);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    ?>
    <header>
        <h1>SZKOLENIA</h1>
    </header>
    <main>
        <section id="left">
            <table>
                <thead>
                    <tr>
                        <td>Kurs</td>
                        <td>Nazwa</td>
                        <td>Cena</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = 'SELECT kod, nazwa, cena FROM kursy ORDER BY cena ASC';
                    $result = mysqli_query($conn, $query);
<<<<<<< HEAD

                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr>';
                        echo '<td><img src="' . $row['kod'] . '.jpg" alt="kurs"></td>';
                        echo '<td>' . $row['nazwa'] . '</td>';
                        echo '<td>' . $row['cena'] . '</td>';
                        echo '</tr>';
=======
                    $flags = mysqli_fetch_array($result);
                    foreach ($flags as $flag) {
                        echo "$flag <br/>";
>>>>>>> 4e38ca3b56c595087822c08642d7e654456b0444
                    }
                    ?>
                </tbody>
            </table>
        </section>
        <section id="right">
            <h2>Zapisy na kursy</h2>
            <form action="index.php" method="POST">
                <label for="name">
                    Imię: <br>
                    <input type="text" id="name" name="name">
                </label><br>
                <label for="surname">
                    Nazwisko: <br>
                    <input type="text" id="surname" name="surname">
                </label><br>
                <label for="age">
                    Wiek: <br>
                    <input type="number" id="age" name="age">
                </label><br>
                <label for="course">Rodzaj kursu <br>
                    <select name="" id="course">
                        <?php
                        $query2 = 'SELECT nazwa FROM kursy';
                        $result2 = mysqli_query($conn, $query2);
                        while ($row2 = mysqli_fetch_assoc($result2)) {
                            echo '<option>' . $row2['nazwa'] . '</option>';
                        }
                        ?>
                    </select>
                </label><br>
                <input type="submit" value="Dodaj dane">
                <?php

                if (isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['age'])) {
                    $name = $_POST['name'];
                    $surname = $_POST['surname'];
                    $age = $_POST['age'];

                    $insertQuery = "INSERT INTO uczestnicy VALUES (NULL, '$name', '$surname', $age)";
                    mysqli_query($conn, $insertQuery);
                    echo "<p id='message'>Dane uczestnika $name $surname zostały dodane</p>";
                } else {
                    echo "<p id='message'>Wprowadź wszystkie dane</p>";
                }
                mysqli_close($conn);
                ?>
            </form>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>

</html>