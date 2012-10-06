<?php
mysql_connect('a.db.shared.orchestra.io','user_88bccaf2','cNtuYr5vMA$M&t');
mysql_select_db('db_88bccaf2');

if (isset($_POST['nome'])) {
	$nome = $_POST['nome'];
	$insert = "INSERT INTO teste(nome) VALUES ('".$nome."')";

	if (mysql_query($insert)) {
		echo 'Nome inserido com sucesso!';
	} else {
		echo 'Erro! :/';
	}
}
?>

<form method="post" action="">

<label for="nome">Nome:</label>
<input type="text" name="nome"/>

</form>