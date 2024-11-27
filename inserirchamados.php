<?php
$link=mysqli_connect('helpnetcmj.mysql.dbaas.com.br','helpnetcmj','Escola@2022','helpnetcmj');
if (!$link) {
    echo 'Error: Falha ao conectar-se com o banco de dados MySQL.' . PHP_EOL;
    echo 'Debugging errno: ' . mysqli_connect_errno() . PHP_EOL;
    echo 'Debugging error: ' . mysqli_connect_error() . PHP_EOL;
    exit;
}
	$sql='insert into chamados (id_chamado, nome, anydesk, telefone, email, mensagem) values ('', ''.$_POST['nome'].'', ''.$_POST['anydesk'].'', ''.$_POST['telefone'].'',''.$_POST['email'].'', ''.$_POST['mensagem'].'')';
echo $sql;
$execucao = mysqli_query($link,$sql);
echo 'cadastro feito com sucesso!';

?>