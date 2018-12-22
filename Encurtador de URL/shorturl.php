<!--
*   Data: 22/12/2018
*   Autor: Thelsandro Costa Antunes
*   Técnico em Redes de Computadores - CETAM
*   Cursando Engenharia de Computação - UEA
*   Encurtador de URL, mas sem gerar link aprendido no curso de PHP by Mr.Naeem Hussain
*   1ª Versão baseado no template index.php de Michael Schwartz (https://codepen.io/michaelsboost/pen/jGRGGB)
-->

<!DOCTYPE>
<html lang="en">
<head>

 <title>URL shortener</title>
  <link rel="stylesheet" href="style.css" type="text/css"  />
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

<?php

  include_once  "dbconfig.php";

  if(isset($_GET['cp']))
  {
    $rd= $_GET["cp"];
    $stmt = $db_con -> prepare( "select * from red where shrt = '$rd' " );
    $stmt -> execute();
    $result = $stmt -> fetch();
    $res= $result["url"];
    header('HTTP/1.1 301 Moved Permanently');
    header("location:".$res);

  }
?>

<div id="main">
  <form id="form1" method="post" action="" >
    <table>
      <tbody>
        <tr >
          <td><h1 align=center>Gerador de Link URL Curto</h1></td>
        </tr>
        <tr>
          <td>   <input id="txt_field" type="text" value= "http://"  name="url"/></td>
        </tr>
        <tr>
          <td><input class="button" type="submit" name="submit" value="Gerar" />
  </form>
          </td>
        </tr>
        <tr>
          <tr>
            <td>
<?php
  if(isset($_POST['submit']))
  {
    require_once 'dbconfig.php';
    if (!$_POST['url'])
    {
      die('<p><font  color="red" size="36" >Não deixe vazio os campos obrigatórios!</span><p>');
    }

    if(isset($_POST['url']))
    {
      $c = $_POST['url'];

      $id=rand(10000,99999);
      $shorturl=base_convert($id,20,36);
      $stmt = $db_con->prepare("INSERT INTO red(url,shrt)
      VALUES(:eurl, :eshrt)");
      $stmt->bindParam(":eurl", $c);
      $stmt->bindParam(":eshrt", $shorturl);

      if($stmt->execute())
      {
        echo "";
      }

      echo '<p>Short URL: <a  target="_blank" href="index.php?cp='.$shorturl.'">q.com/'.$shorturl.'</a></p>';

      exit;

    }
    else
    {
		  die('<p><font color="red" size="38"><strong> Desculpe não está correto. </strong> </font></p>' );
    }

  }
?>
            </td>
    </tr>
  </tbody>
</table>

</div>

</body>
</html>
