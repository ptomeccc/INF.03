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
                <tbody></tbody>
            </table>
        </section>
        <section id="right">
            <h2>Zapisy na kursy</h2>
            <form action="" method="POST">
                <label for="name">
                    Imię: <br>
                    <input type="text" id="name">
                </label><br>
                <label for="surname">
                    Nazwisko: <br>
                    <input type="text" id="surname">
                </label><br>
                <label for="age">
                    Wiek: <br>
                    <input type="number" id="age">
                </label><br>
                <label for="course">Rodzaj kursu <br>
                    <select name="" id="course">
                        <?php
                        echo "<option></option>";
                        ?>
                    </select>
                </label><br>
                <input type="submit" value="Dodaj dane">
                <?php
                echo "<p id='message'>Wprowadź wszystkie dane</p>";
                ?>
            </form>
        </section>
    </main>
    <footer>
        <p>Stronę wykonał: 00000000000</p>
    </footer>
</body>

</html>