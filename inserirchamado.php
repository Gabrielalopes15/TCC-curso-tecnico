<?php
$link=mysqli_connect('helpnetcmj.mysql.dbaas.com.br','helpnetcmj','Escola@2022','helpnetcmj');
	$sql='insert into chamados (id_chamados, nome, anydesk, telefone, email, mensagem) values ('', ''.$_POST['nome'].'', ''.$_POST['anydesk'].'', ''.$_POST['telefone'].'',''.$_POST['email'].'', ''.$_POST['mensagem'].'')';
echo $sql;
$execucao = mysqli_query($link,$sql);
echo 'cadastro feito com sucesso!';

?>