<!--
*   Data: 21/12/2018
*   Autor: Thelsandro Costa Antunes
*   Técnico em Redes de Computadores - CETAM
*   Cursando Engenharia de Computação - UEA
*   Formulário Simples de Login utilizando o método POST
*   2ª Versão
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


      <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <div class="container">
  <div class="login">
  	<h1 class="login-heading">
      <strong>Login.</strong> PHP Login.</h1>
      <form method="post" action="index.php">
        <input type="text" name="user" placeholder="Usuário" required="required" class="input-txt" />
          <input type="password" name="pass" placeholder="Senha" required="required" class="input-txt" />
          <div class="login-footer">
             <a href="#" class="lnk">
              <span class="icon icon--min"></span>

            </a>
            <button type="submit" class="btn btn--right">ENTRAR  </button>

          </div>
      </form>
      <p>
      <?php

        if(isset($_POST['user']) && isset($_POST['pass']))
        {
          $user = $_POST['user'];
          $pass = $_POST['pass'];

          if(($user != "admin") && ($pass != "123123"))
          {
            echo "<b><font color='#3a4349'> Usuário e Senha estão Incorretos!</font></b>";
          }
          if(($user == "admin") && ($pass != "123123"))
          {
            echo "<b><font color='#3a4349'>Sua senha está Errada!</font></b>";
          }
          else if(($user != "admin") && ($pass == "123123"))
          {
            echo "<b><font color='#3a4349'>Sua usuário está Errado!</font></b>";
          }
          else if(($user == "admin") && ($pass == "123123"))
          {
            echo "<b><font color='f7f6ea'>Você está LOGADO!</font></b>";
          }
        }
      ?>
      </p>

  </div>
</div>




    <script  src="js/index.js"></script>




</body>

</html>
