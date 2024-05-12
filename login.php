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
  <div class="pudelko py-5 bg-secondary">
  <form class="container" action="loginscript.php" method="post">
<div class="form-floating mb-3">
  <input type="text" class="form-control" id="validationDefault01" placeholder="Login" name="username" required>
  <label for="validationDefault01">Login</label>
</div>
    <div class="form-floating mb-3">
        <input type="password" class="form-control" id="validationDefault02" name="password" placeholder="Haslo" required>
        <label for="validationDefault02">Haslo</label>
    </div>
<button type="submit" class="btn btn-primary mt-3">Zaloguj się</button>
<button type="button" class="btn btn-primary mt-3"><a class="link-underline-opacity-0 link-light" href="register.php">Nie masz konta? Utwórz je</a></button>
</form>
  </div>
</body>
</html>