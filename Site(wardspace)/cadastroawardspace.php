<!--Início do script em php-->
<?php
//1) Vamos receber os dados que foram preenchidos no formulario

//atribuição do campo nome vindo do form para a variavel $nome
$nome=$_POST["nome"]; 

//atribuição do campo email vindo do form para a variavel $email
$email=$_POST["email"];

//atribuição do campo telefone vindo do form para a variavel $telefone
$telefone=$_POST["telefone"];

//atribuição do campo cidade vindo do form para a variavel $cidade
$cidade=$_POST["cidade"];

//2)Persistir no Banco de Dados
//2.1)conectar com o localhost - servidor

$conexao=mysqli_connect("fdb16.awardspace.net","3234172_cadastro", "senai112","3234172_cadastro");
if (!$conexao)
	die ("Ocorreu o seguinte erro -> ".mysqli_error());

//2.2)instrucao sql insert
$query="INSERT INTO `3234172_cadastro`.`dadosawardspace` (`nome`, `telefone`, `email`, `cidade`, `id`) VALUES('".$nome."', '".$telefone."', '".$email."','".$cidade."', default)";

//2.3)executar a instrucao acima
mysqli_query($conexao,$query);

//2.4)se o cadastro deu certo
echo "Seu cadastro foi realizado com sucesso! <br>Agradecemos a atenção.";
?>
<!--Fim do script em php-->