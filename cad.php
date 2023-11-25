<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
   <header>
     <h1>Cadastro de clientes | Padaria Santa Ceia</h1>
   </header>
   
   <main>
        <?php
           $nome = $_GET["nome"];
           $sobrenome = $_GET["sobrenome"];
           $telefone = $_GET["telefone"];


           echo "É um prazer te conhecer, a Padaria Santa Ceia agradece $nome $sobrenome! Entraremos em contato com você";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para página anterior</a></p>
   </main>
  
</body>
</html>