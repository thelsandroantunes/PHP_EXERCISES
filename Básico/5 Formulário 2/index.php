<!--
*   Data: 22/12/2018
*   Autor: Thelsandro Costa Antunes
*   Técnico em Redes de Computadores - CETAM
*   Cursando Engenharia de Computação - UEA
*   Formulário versão 2 utilizando o método POST
*   2ª Versão
-->

<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Formulário 2</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet' href='http://cdn.jsdelivr.net/foundation/5.5.0/css/foundation.css'>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="form panel panel--callout">
  <div class="panel__title has-button">
    <div class="row">
      <div class="columns small-12">
        <h1 class="">PHP Formulário 2</h1>
      </div>

    </div><!-- end row -->
  </div>
  <form class="form form--contact" action="test.php" method="post">
    <div class="row">
      <div class="columns medium-6">
        <label for="contact__name">Nome *:</label>
        <input id="contact__name" name="contact__name" type="text" required>
      </div>
      <div class="columns medium-6">
        <label for="contact__country">Estado *:</label>
        <select id="contact__country" name="contact__country_id" required>
          <option value="ac">Acre</option>
      		<option value="al">Alagoas</option>
      		<option value="am">Amazonas</option>
      		<option value="ap">Amapá</option>
      		<option value="ba">Bahia</option>
      		<option value="ce">Ceará</option>
      		<option value="df">Distrito Federal</option>
      		<option value="es">Espírito Santo</option>
      		<option value="go">Goiás</option>
      		<option value="ma">Maranhão</option>
      		<option value="mt">Mato Grosso</option>
      		<option value="ms">Mato Grosso do Sul</option>
      		<option value="mg">Minas Gerais</option>
      		<option value="pa">Pará</option>
      		<option value="pb">Paraíba</option>
      		<option value="pr">Paraná</option>
      		<option value="pe">Pernambuco</option>
      		<option value="pi">Piauí</option>
      		<option value="rj">Rio de Janeiro</option>
      		<option value="rn">Rio Grande do Norte</option>
      		<option value="ro">Rondônia</option>
      		<option value="rs">Rio Grande do Sul</option>
      		<option value="rr">Roraima</option>
      		<option value="sc">Santa Catarina</option>
      		<option value="se">Sergipe</option>
      		<option value="sp">São Paulo</option>
      		<option value="to">Tocantins</option>
        </select>
      </div>
    </div><!-- end row -->
    <div class="row">
      <div class="columns medium-6">
        <label for="contact__phone">Telefone *:</label>
        <input id="contact__phone" name="contact__phone" type="text" required>
      </div>
      <div class="columns medium-6">
        <label for="contact__email">E-mail *:</label>
        <input id="contact__email" name="contact__email" type="text" required>
      </div>
    </div><!-- end row -->
    <div class="row">
      <div class="columns medium-6 large-6">
        <div>
          <label class="" for="contact--dph">Sexo *:</label>
          <input type="radio"  name="gender" value="homem" style="width:15px; height:15px;"> Homem </input>
          <input type="radio" name="gender"  value="mulher" style="width:15px; height:15px;"> Mulher </input>
        </div>

      </div>

      <div class="columns medium-6 large-6">
        <div>
          <label class="" for="contact--dph">Linguagem PHP?</label>
          <input type="checkbox"   name="rv"   value="yes" style="width:15px; height:15px;">Sim</input>
          <input type="checkbox" name="rv" value="no"  style="width:15px; height:15px;">Não</input>
        </div>
      </div>

    </div><!-- end row -->

    <br>
    <div class="row">
      <div class="columns medium-6 large-6"></div>
      <div class="columns medium-6 large-6">
        <input class="button expand" name="contact--submit" type="submit" method="post" value="Enviar">
      </div>
    </div><!-- end row -->

  </form>
</div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/vendor/jquery.js'></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/foundation/5.5.2/js/foundation.min.js'></script>



    <script  src="js/index.js"></script>




    </body>

    </html>
