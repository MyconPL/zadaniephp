<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body class="bg-secondary">
    <?php include("navbar.php")?>
    <div class="pudelko py-5 bg-secondary">
    <form class="container" action="registerscript.php" method="post">
    <div class="form-floating mb-3">
  <input type="text" class="form-control" id="validationDefault01" placeholder="Login" name="imie" required>
  <label for="validationDefault01">Imie</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="validationDefault01" placeholder="Login" name="nazwisko" required>
  <label for="validationDefault01">Nazwisko</label>
</div>
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="validationDefault01" placeholder="Login" name="adres" required>
  <label for="validationDefault01">Adres</label>
</div><div class="form-floating mb-3">
  <input type="text" class="form-control" id="validationDefault01" placeholder="Login" name="email" required>
  <label for="validationDefault01">Email</label>
</div><div class="form-floating mb-3">
  <input type="text" class="form-control" id="validationDefault01" placeholder="Login" name="miasto" required>
  <label for="validationDefault01">Miasto</label>
</div><div class="form-floating mb-3">
  <input type="text" class="form-control" id="validationDefault01" placeholder="Login" name="username" required>
  <label for="validationDefault01">Login</label>
</div>
<div class="form-floating">
<div class="form-floating mb-3">
        <input type="password" class="form-control" id="validationDefault02" name="password" placeholder="Haslo" required>
        <label for="validationDefault02">Haslo</label>
    </div>
<button type="submit" class="btn btn-primary mt-3">Utwórz konto</button>
<button type="button" class="btn btn-primary mt-3"><a class="link-underline-opacity-0 link-light" href="login.php">Masz już konto? Zaloguj się</a></button>
<div class="position-absolute bottom-10 start-50 translate-middle-x p-5 rounded-5"><iframe width="110" height="200" src="https://www.myinstants.com/instant/deg-deg-44362/embed/" frameborder="0" scrolling="no"></iframe></div>
</form>
    </div>
</body>
</html>