<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="container">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
  <a class="navbar-brand text-white" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a style="color:#fff;" class="nav-link active" aria-current="page" href="#">Cadastrar</a>
        <a class="nav-link disabled">Consultar</a>
      </div>
    </div>
  </div>
</nav>
<br>
    <form action="">
    <div class="mb-3">
  <label for="exampleFormControlInput1"  class="form-label text-white">Nome</label>
  <input type="email" class="form-control bg-secondary text-white" id="exampleFormControlInput1" ><br>

  <label for="exampleFormControlInput1" class="form-label text-white">Endereço</label>
  <input type="email" class="form-control bg-secondary text-white" id="exampleFormControlInput1" ><br>

  <label for="exampleFormControlInput1" class="form-label text-white">Bairro</label>
  <input type="email" class="form-control bg-secondary text-white" id="exampleFormControlInput1" ><br>

  <label for="exampleFormControlInput1" class="form-label text-white">CEP</label>
  <input type="email" class="form-control bg-secondary text-white" id="exampleFormControlInput1" ><br>

  <label for="exampleFormControlInput1" class="form-label text-white">Cidade</label>
  <input type="email" class="form-control bg-secondary text-white" id="exampleFormControlInput1" ><br>

  <label for="exampleFormControlInput1" class="form-label text-white">Estado</label>
  <select class="form-select bg-secondary text-white" aria-label="Default select example">

  <option  value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select><br>
<button type="button" class="btn btn-primary">Cadastrar <span class="material-symbols-outlined">
done
</span></button>
</div>
    </form>
</div>
</body>
</html>