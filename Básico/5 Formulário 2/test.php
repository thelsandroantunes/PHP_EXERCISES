<!DOCTYPE>
<html xmlns="http://www.w3.org/">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulário 2</title>
</head>

<body>

<div id="main">
  <h1>PHP Formulário 2 - Resposta </h1>

  <p>
  <?php

    if(isset($_POST['contact__name']))
    {
      $name = $_POST['contact__name'];
      echo "Seu Nome: ".$name."<br>";
    }

    if(isset($_POST['contact__country_id']))
    {
      $state = $_POST['contact__country_id'];
      echo "Seu Estado: ".$state."<br>";
    }

    if(isset($_POST['contact__phone']))
    {
      $phone = $_POST['contact__phone'];
      echo "Seu Telefone: ".$phone."<br>";
    }

    if(isset($_POST['contact__email']))
    {
      $email = $_POST['contact__email'];
      echo "Seu Email: ".$email."<br>";
    }

    if(isset($_POST['gender']))
    {
      $gender = $_POST['gender'];
      echo "Seu gênero: ".$gender."<br>";
    }

    if(isset($_POST['rv']))
    {
      $rv = $_POST['rv'];
      echo "Linguagem: ".$rv."<br>";
    }

    ?>
  </p>

</body>

</html>
