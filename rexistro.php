<html>
<head>
<title>Rexistro</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>
<body>
<?php

include './database.php';

$lectura = "SELECT * FROM habitos;";
$habitos = mysqli_query($conn, $lectura);
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Habitos</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="habitos.php">Habitos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<table class="table">
<tr>
<td></td>
<?php 
$hoxe = mktime(0,0,0);
for ($diasAntes=4;$diasAntes>=0;$diasAntes=$diasAntes-1) {
echo "<td>" . date('j/n/Y', $hoxe-$diasAntes*24*60*60) . "</td>";
}
?>
</tr>
<?php
while ($hab = mysqli_fetch_array($habitos)) {
echo "<tr><td>" . $hab['Nome'] . "</td>";
for ($i=1; $i<=5; $i++) {
echo "<td><button type=\"button\" class=\"btn btn-light\"><i class=\"far fa-check-circle\"></i></button></td>";
}
echo "</tr>";

}
?>
<tr>
<td>Durmir</td>
<td><button type="button" class="btn btn-light"><i class="far fa-check-circle"></i></button></td>
<td>Deporte</td>
<td>Estudo</td>
<td>Jugar</td>
</tr>

</table>
</body>
</html>
