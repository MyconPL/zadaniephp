<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
<?php
session_start();
require_once "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM klient WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION["username"] = $username;
echo '<div class="alert alert-success container justify-content-center mt-5" role="alert">';
echo '  Sukces! Za chwilę przeniesiemy Cię na stronę główną.';
echo '</div>';
        header( "refresh:5;url=index.php" );
    } else {
        header("location: login.php");
    }
}

$conn->close();
?>