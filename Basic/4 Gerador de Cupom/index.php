<!DOCTYPE >
<html xmlns="http://www.w3.org/">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Cupom</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>

<div class="c-coupon">

	<?php

		if(isset($_GET['cp']))
		{
			$code = $_GET['cp'];
	?>

  <h1 > Kit de Ferramentas + Desconto de <strong color="#f1c40f"> <?php echo $code ?> </strong><br/></h1>

	<p>
	<?php

			if($code == "30%")
			{
				echo " <h2 align=center><b> Código: ".rand()." </b></h2>";
			}
			if($code == "40%")
			{
				echo " <h2 align=center><b> Código: ".rand()." </b></h2>";
			}
		}
	?>
	</p>
  <div class="c-coupon__tearaway"></div>
</div>

<div id="main">
	<h1 align=center>PHP Gerador de Cupom</h1>

	<p>  <button class="button" > <a href="index.php?cp=30%"> 30% Cupom </button></p>
	<p>	<button class="button" > <a href="index.php?cp=40%"> 40% Cupom </button></p>
</div>
</body>

</html>
