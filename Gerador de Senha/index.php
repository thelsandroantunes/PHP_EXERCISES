<!--
*   Data: 22/12/2018
*   Autor: Thelsandro Costa Antunes
*   Técnico em Redes de Computadores - CETAM
*   Cursando Engenharia de Computação - UEA
*   Aplicação: Gerador de Senha
*   2ª Versão
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Gerador de senha</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="style.css" type="text/css"  />
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url("https://fonts.googleapis.com/css?family=Roboto");
@import url("https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css");
body {
  background-color: #1a8fb4;
  font-family: 'Roboto', sans-serif;
  font-size: 14px;
}
.owl {
  margin: auto;
  width: 211px;
  height: 108px;
  background-image: url("https://dash.readme.io/img/owl-login.png");
  position: relative;
}
.owl .hand {
  width: 34px;
  height: 34px;
  border-radius: 40px;
  background-color: #472d20;
  transform: scaleY(0.6);
  position: absolute;
  left: 14px;
  bottom: -8px;
  transition: 0.3s ease-out;
}
.owl .hand.off {
  transform: translateX(42px) translateY(-15px) scale(0.7);
}
.owl .hand.hand-r {
  left: 170px;
}
.owl .hand.hand-r.off {
  transform: translateX(-42px) translateY(-15px) scale(0.7);
}
.owl .arms {
  position: absolute;
  top: 58px;
  height: 41px;
  width: 100%;
  overflow: hidden;
}
.owl .arms .arm {
  width: 40px;
  height: 65px;
  background-image: url("https://dash.readme.io/img/owl-login-arm.png");
  position: absolute;
  left: 20px;
  top: 40px;
  transition: 0.3s ease-out;
}
.owl .arms .arm.off {
  transform: translateX(40px) translateY(-40px);
}
.owl .arms .arm.arm-r {
  left: 158px;
  transform: scaleX(-1);
}
.owl .arms .arm.arm-r.off {
  transform: translateX(-40px) translateY(-40px) scaleX(-1);
}
.form {
  margin: auto;
  margin-top: -9px;
  padding: 30px;
  background-color: #fff;
  width: 175px;
}
.form .control {
  margin-bottom: 10px;
  position: relative;
}
.form .control label {
  position: absolute;
  font-size: 16px;
  top: 11px;
  left: 9px;
  color: rgba(0,0,0,0.3);
}
.form .control input {
  padding: 9px 6px 9px 30px;
  border-radius: 4px;
  border: 1px solid #ccc;
  font-size: 14px;
}

    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
    <script type="text/javascript">
    function myFunction() {
      var copyText = document.getElementById("myInput");
      copyText.select();
      document.execCommand("Copy");
      alert("Sua senha copiada: " + copyText.value);
    }
    </script>

</head>

<body>

  <div class="owl">
  <div class="hand"></div>
  <div class="hand hand-r"></div>
  <div class="arms">
    <div class="arm"></div>
    <div class="arm arm-r"></div>
  </div>
</div>

<div id="main2">
  <h1 align=center>PHP Gerador de Senha</h1>
  <form action="index.php" method="post" enctype="multipart/form-data">
    <select name="limit">
      <option value="16" >16 Recomendado </option>
      <option value="18" >18</option>
      <option value="20" >20</option>
    </select>
    <input class="button" id="off" type="submit"  value="GERAR SENHA" >
  </form>

  <?php
  if(isset($_POST['limit'])){

    function randomPassword()
    {
      $limit = $_POST['limit'];
      $alphabet = 'abcdefghijklmnopqrstuvwxyz!@#$%^&*()_+?>;<:"ABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
      $pass = array();
      $alphaLength = strlen($alphabet) - 1;

      for ($i = 0; $i < $limit; $i++)
      {
          $n = rand(0, $alphaLength);
          $pass[] = $alphabet[$n];
      }
      return implode($pass);
  }

  $p = randomPassword();


  echo '<p><input type="text" value="'.$p.'"  id="myInput"/></p>';
  echo '<p><button class="button" onclick="myFunction()">COPIAR</button></p>';

  } // If End
   ?>


</div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="js/index.js"></script>




</body>

</html>
