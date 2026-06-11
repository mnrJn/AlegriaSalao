<?php
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '123456789';
$dbName = 'academia';

$conexao= new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
if ($conexao->connect_errno){
die("ERRO NA CONEXÃ:" . $conexao->connect_error);

}
$idcliente =$_POST['id_cliente'];
$nome=$_POST['nome'];
$cpf=$_POST['cpf'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$datacadastro=$_POST['data_cadastro'];
$sql= "INSERT INTO clientes (id_cliente,nome,cpf,telefone,email,data_cadastro) VALUES ('$idcliente','$nome','$cpf','$telefone','$email','$datacadastro')";
if($conexao->query($sql)===TRUE){
    echo "Aluno Cadastrado com sucesso!!!";
}
else{
    echo "Erro ao Cadastrar: ". $conexao->error;
}
$conexao->close();
?>


