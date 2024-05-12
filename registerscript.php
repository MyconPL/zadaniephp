    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <?php
    session_start();
    require_once "connect.php";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imie = $_POST["imie"];
        $nazwisko = $_POST["nazwisko"];
        $adres = $_POST["adres"];
        $email = $_POST["email"];
        $miasto = $_POST["miasto"];
        $username = $_POST["username"];
        $password = $_POST["password"];

        $sql = "SELECT username FROM klient WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {

        $sql = "INSERT INTO `klient` (`imie`, `nazwisko`, `adres`, `email`, `miasto`, `username`, `password`) VALUES ('$imie','$nazwisko','$adres','$email','$miasto','$username','$password')";
        $conn -> query($sql);
            $_SESSION["username"] = $username;
            echo '<div class="alert alert-success container justify-content-center mt-5" role="alert">';
            echo '  Sukces! Za chwilę przeniesiemy Cię na stronę główną.';
            echo '</div>';
            header( "refresh:5;url=index.php" );
    } else {
        echo '<div class="alert alert-danger container justify-content-center mt-5" role="alert">';
            echo '  Ta nazwa uytkownika jest ju zajeta. Prosze wybrac inna.';
            echo '</div>';
        header("refresh:5;url=register.php");
    }
    }
    $conn->close();
    ?>