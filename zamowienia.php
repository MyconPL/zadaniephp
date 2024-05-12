<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="nav.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> 
    <title>Document</title>
</head>
<body class="bg-secondary">
  <?php include("navbar.php")?> 
  <div class="pudelko py-5">
  <div class="container">
        <h1>Zamówienia</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Imie i nazwisko</th>
                    <th scope="col">Kwota</th>
                    <th scope="col">Data Zamówienia</th>
                    <th scope="col">Szczegóły zamówienia</th>
                </tr>
            </thead>
            <tbody>
            <?php
                require_once "connect.php";
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $sql = "SELECT concat(klient.imie,' ',klient.nazwisko) as 'imieinazwisko', zamowienie.kwota as 'kwota', zamowienie.data_zamowienia as 'data', concat(produkty.typ,' ',produkty.producent,' ',produkty.model) as 'szczegoly' FROM zamowienie LEFT JOIN klient ON zamowienie.klient_id = klient.id INNER JOIN szczegoly_zamowienia ON zamowienie.id = szczegoly_zamowienia.id_zamowienia INNER JOIN produkty ON szczegoly_zamowienia.id_produktu = produkty.id;";


                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>". $row["imieinazwisko"]. "</td>";
                        echo "<td>". $row["kwota"]. "</td>";
                        echo "<td>". $row["data"]. "</td>";
                        echo "<td>". $row["szczegoly"]. "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>Brak danych</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
  </div>
</body>
</html>
