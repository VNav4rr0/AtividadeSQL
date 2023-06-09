<?php
 $nomeForm = $_POST['nome'];
 $enderecoForm = $_POST['endereco'];
 $bairroForm = $_POST['bairro'];
 $cepForm = $_POST['cep'];
 $cidadeForm = $_POST['cidade'];
 $estadoForm = $_POST['estado'];

define('MYSQL_HOST','localhost:3306');
define('MYSQL_USER','root');
define('MYSQL_PASSWORD','');
define('MYSQL_DB_NAME','bd_oficina');

try{

    $PDO = new PDO('mysql:host=' . MYSQL_HOST . ';dbname=' . MYSQL_DB_NAME, MYSQL_USER, MYSQL_PASSWORD);

}catch(PDOException $e){

    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();

}
$sql = "INSERT INTO `clientes`( `nome`, `endereco`, `bairro`, `cep`, `cidade`, `estado`) VALUES ('$nomeForm','$enderecoForm','$bairroForm','$cepForm', '$cidadeForm','$estadoForm')";

$cadastrarCliente = $PDO->prepare($sql);
$cadastrarCliente->execute();
?>

<!DOCTYPE html >
<html lang="en" data-bs-theme="dark">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="style.css">
        <title>PHP - Sistema de Acesso ao Banco de Dados</title>
</head>
<body>
<?php
    $sql = "SELECT * FROM clientes";
    $result = $PDO->query( $sql );
    $rows = $result->fetchAll();
?>

<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand text-white" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a style="color:#fff;" class="nav-link active" aria-current="page" href="index.php">Cadastrar</a>
        <a class="nav-link disabled">Consultar</a>
      </div>
    </div>
  </div>
</nav>
<br>
    <div class="table-responsive ">
    <table class="table text-white" >
  <thead>
    <tr>
      <th class=" border-0"scope="col"><span class="material-symbols-outlined">table_chart</span></th>
      <th class=" border-0"scope="col">Nome</th>
      <th class=" border-0"scope="col">Endereço</th>
      <th class=" border-0"scope="col">Bairro</th>
      <th class=" border-0"scope="col">Cep</th>
      <th class=" border-0"scope="col">Cidade</th>
      <th class=" border-0"scope="col">Estado</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th class="th  border-0" scope="row"></th>
    
      
        <td class=" border-0">
        <?php
         for ($i=0; $i < count($rows); $i++) {
            echo $rows[$i]['nome'] . "<br><br>";
         }
        ?>
        </td>
      <td class=" border-0">
        <?php
         for ($i=0; $i < count($rows); $i++) {
            echo $rows[$i]['endereco']. "<br><br>";
         }
        ?>
        </td>
      <td class=" border-0">
      <?php
         for ($i=0; $i < count($rows); $i++) {
            echo $rows[$i]['bairro']. "<br><br>";
         }
        ?>
      </td>
      <td class=" border-0">
      <?php
         for ($i=0; $i < count($rows); $i++) {
            echo $rows[$i]['cep']. "<br><br>";
         }
        ?>
      </td>
      <td class=" border-0">
      <?php
         for ($i=0; $i < count($rows); $i++) {
            echo $rows[$i]['cidade']. "<br><br>";
         }
        ?>
      </td>
      <td class=" border-0">
      <?php
         for ($i=0; $i < count($rows); $i++) {
            echo $rows[$i]['estado']. "<br><br>";
         }
        ?>
      </td>
    </tr>
  </tbody>
</table>
</div>
</div>
</body>
</html>