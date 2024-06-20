<?php
require_once("db_connect.php");


function cadastrar_colaborador($connect)
{
    if (isset($_POST['cadastrar'])) {
        $nome = mysqli_real_escape_string($connect, $_POST['nome']);
        $funcao = mysqli_real_escape_string($connect, $_POST['funcao']);
        $departamento = mysqli_real_escape_string($connect, $_POST['departamento']);
        $chefia = mysqli_real_escape_string($connect, $_POST['chefia']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $perfil = $_POST['email'];
        $senha = "teste@123";
        $dataAdinicao = date("d/m/Y");
        if (!empty($nome) and !empty($funcao) and !empty($departamento) and !empty($chefia) and !empty($email)) {
            $query = "INSERT INTO colaborador (NOME, FUNCAO, DEPARTAMENTO, CHEFIA, PERFIL, DATA_ADMISSAO, SENHA, EMAIL) VALUES ('$nome', '$funcao', '$departamento', '$chefia', '$perfil','$dataAdinicao', '$senha', '$email')";
            $execute = mysqli_query($connect, $query);
            if ($execute) {
                echo "<div class= 'retornoSucceso'><h3 class='msg'>Colaborador cadastrado com sucesso.</h3></div>";
            } else {
                echo "<div class= 'retornoErro'><h3 class='msg'>Erro ao cadastrar o Colaborador.</h3></div>";
            }
        } else {
            echo "<div class= 'retornoErro'><h3 class='msg'>Campos não foram preenchidos</h3></div>";
        }
    }
}
