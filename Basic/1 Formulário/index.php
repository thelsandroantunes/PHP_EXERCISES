<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Formulário</title>


  <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css'>

      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      textarea {
	resize: none;
}
.form-label {
	font-size: 12px;
	color: #5e9bfc;
	margin: 0;
	display: block;
	opacity: 1;
	-webkit-transition: .333s ease top, .333s ease opacity;
	transition: .333s ease top, .333s ease opacity;
}
.form-control {
	border-radius: 0;
	border-color: #ccc;
   	border-width: 0 0 2px 0;
   	border-style: none none solid none;
   	box-shadow: none;
}
.form-control:focus {
	box-shadow: none;
	border-color: #5e9bfc;
}
.js-hide-label {
	opacity: 0;
}
.js-unhighlight-label {
	color: #999
}
.btn-start-order {
	background: 0 0 #ffffff;
    border: 1px solid #2f323a;
    border-radius: 3px;
    color: #2f323a;
    font-family: "Raleway", sans-serif;
    font-size: 16px;
    line-height: inherit;
    margin: 30px 0;
    padding: 10px 50px;
    text-transform: uppercase;
    transition: all 0.25s ease 0s;
}
.btn-start-order:hover,.btn-start-order:active, .btn-start-order:focus {
	border-color: #5e9bfc;
	color: #5e9bfc;
}
    </style>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>

  <div class="container">
  <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
        <h2>PHP Contato</h2>
      </div>
  </div>
  <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xs-offset-3">
          <form id="contact-form" class="form" action="test.php" method="POST" role="form">
              <div class="form-group">
                  <label class="form-label" for="name">Seu Nome</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Seu Nome" tabindex="1" required>
              </div>
              <div class="form-group">
                  <label class="form-label" for="email">Seu Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Seu Email" tabindex="2" required>
              </div>
              <div class="form-group">
                  <label class="form-label" for="subject">Assunto</label>
                  <input type="text" class="form-control" id="subject" name="subject" placeholder="Assunto" tabindex="3">
              </div>
              <div class="form-group">
                  <label class="form-label" for="message">Mensagem</label>
                  <textarea rows="5" cols="50" name="message" class="form-control" id="message" placeholder="Mensage..." tabindex="4" required></textarea>
              </div>
              <p>
              <?php
                if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message']))
                {
                  $name = $_POST['name'];
                  $email = $_POST['email'];
                  $subject = $_POST['subject'];
                  $message = $_POST['message'];

                  echo "Seu nome é ".$name;
                  echo "Seu email é ".$email;
                  echo "Seu asunto é ".$subject;
                  echo "Sua mensagem é ".$message;
                }
              ?>
              </p>
              <div class="text-center">
                  <button type="submit" class="btn btn-start-order">Enviar</button>
              </div>
          </form>
          <h6 align=center>Copyright (c) 2018 by Stefan Rusu </h6>
      </div>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>



    <script  src="js/index.js"></script>




</body>

</html>
