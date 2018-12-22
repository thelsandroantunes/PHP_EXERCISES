<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>URL Encurtada</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://bootswatch.com/darkly/bootstrap.min.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.2.0/css/mdb.css'>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Serviço de url shortener</a>
    </div>
  </div>
  </nav>

<p class="text-center">Insira qualquer URL Longo. Vamos encurtá-lo!</p>

<div class="form-group" style="
                               width: 50%;
                               margin-left: 25%;
                               text-align: -webkit-center;
                               ">
  <input class="form-control" type="text" id="shortenURL" placeholder="Enter URL"> <br>
  <button class="btn btn-success" type="submit" id="shorten">ENCURTAR</button>
</div>

<script src='https://code.jquery.com/jquery-3.1.1.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js'></script>
<script  src="js/index.js"></script>

</body>

</html>
