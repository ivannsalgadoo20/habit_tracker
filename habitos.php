<html>
<head>
<title>Hábitos</title>
</head>
<body>
<h1>Hábitos</h1>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

<form name="habito" method="post" action="habitos.php">
<input type="text" id="nome" name="nome">
<button id="gardar" type="submit">Gardar</button>
</form>
<?php
include './database.php';

// Crear novo hábito (resposta ao POST)
if (isset($_POST["nome"])){
$insert= "INSERT INTO habitos (NOME) VALUES ('" . $_POST["nome"] . "');";
$result = mysqli_query($conn, $insert);
echo $result;
echo "<p>Hábito " . $_POST["nome"] . " creado</p>";

}

//Borrar hábito (resposta ao GET con parámetros)
if (isset($_REQUEST["borrar"])) {
$delete="DELETE FROM Habitos WHERE ID=" . 
$_REQUEST["borrar"] .";";
$result= mysqli_query($conn, $delete);
echo $result;
echo "Hábito borrado";

}

?>
<h1>Hábitos</h1>
<?php
$lectura = "SELECT * FROM habitos;";
$habitos = mysqli_query($conn, $lectura);
echo "Número de hábitos: " . mysqli_num_rows($habitos) . "<br>";
if (mysqli_num_rows_($habitos) >0){
while($hab = mysqli_fetch_array($habitos)){
echo $hab['ID'] . " - " . $hab['Nome'] . "<a
href=\"/habitos.php?borrar=" . $hab['ID'] . "\">Borrar</a><br>";

}
{else{
echo "Ainda non se creou ningun hábito";

?>
<p>
<button type="button" class="btn btn-primary">Primary</button>

</body>
</html>
