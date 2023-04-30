<?php
date_default_timezone_set('America/Sao_Paulo');
$pdo = new PDO('mysql:host=localhost;dbname=visitantes', 'root', '');

if (isset($_POST['acao'])) {
	$nome = $_POST['nome'];
	$dataNascimento = $_POST['dataNascimento'];
    $pgt1 = $_POST['pergunta1'];
    $pgt2 = $_POST['pergunta2'];
    $pgt3 = $_POST['pergunta3'];
    $pgt4 = $_POST['pergunta4'];
    $pgt5 = $_POST['pergunta5'];
    $pgt6 = $_POST['pergunta6'];
    $pgt7 = $_POST['pergunta7'];

	$sql = $pdo->prepare('INSERT INTO `respostasForm` VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?, ?)');

	$sql->execute(array($nome, $dataNascimento, $pgt1, $pgt2, $pgt3, $pgt4, $pgt5, $pgt6,$pgt7));
	echo 'Cliente inserido com sucesso';

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form method="post">
		<input type="text" name="nome" required />
        <input type="date" name="dataNascimento" required />
        <input type="text" name="pergunta1" required />
        <input type="text" name="pergunta2" required />
        <input type="text" name="pergunta3" required />
        <input type="text" name="pergunta4" required />
        <input type="text" name="pergunta5" required />
        <input type="text" name="pergunta6" required />
        <input type="text" name="pergunta7" required />
        <input type="submit" name="acao" value="Enviar" />
	</form>
</body>

</html>
