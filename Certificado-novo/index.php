<?php
    require("config.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="cache-control" content="public" />
    <meta http-equiv="Pragma" content="public">


    <meta name="author" content="Agência Bamboo">
    <meta name="description" content="" />
    <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">

    <meta property="og:locale" content="pt_BR" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />

    <title>Faculdade FAMA - Certificados</title>
    <link rel="stylesheet" href="<?php echo site_url(); ?>login-box.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/main.css">

    
<body>
<?php if(!$gerar){ ?>
<div class="login-page">
<img src="images/LOGO1.png" class="logo"  />
  <div class="form">
  <form class="login-form" method="post" action=""> 
   
  <p class="message"> Digite seu nome:</p>
    <input type="text" name="nome" id="nome" placeholder="Nome"/>
      <button>Gerar Certificado</button>
    </form>
  </div>
</div>

<?php } ?>

    <script src="<?php echo site_url(); ?>javascript/jquery.min.js"></script>
    <script src="<?php echo site_url(); ?>javascript/jquery.maskedinput.js"></script>
    <script src="<?php echo site_url(); ?>javascript/script.min.js"></script>


</body>
</html>
