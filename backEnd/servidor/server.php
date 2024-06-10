<?php
$server = "localhost";
$userDb = "root";
$passDb = "";
$database = "monarc02_superacao";

$connect = mysqli_connect($server, $userDb, $passDb, $database);

function login($connect)
{
    if (isset($_POST['logar'])) {
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $senha = mysqli_real_escape_string($connect, $_POST['senha']);
        if (!empty($email) and !empty($senha)) {
            $query = "SELECT * FROM colaborador WHERE EMAIL = '$email' AND SENHA = '$senha' ";

            $execute = mysqli_query($connect, $query);
            //retorna array associativo (apenas resultado)
            $result = mysqli_fetch_assoc($execute);

            if (!empty($result['EMAIL'])) {
                session_start();
                $_SESSION['id_colaborador'] = $result['ID_COLABORADOR'];
                $_SESSION['nome'] = $result['NOME'];
                $_SESSION['email'] = $result['EMAIL'];
                $_SESSION['ativa'] = true;
                header("location: frontEnd/pages/home.php");
            } else {
                echo "<p>Email ou senha não encontrados</p>";
            }
        } else {
            echo "<p>E-mail ou senha incorretos!</p>";
        }
    }
}

function buscaAvaliador360($connect)
{
    if (isset($_GET['buscaAvaliador360'])) {
        $nome =  mysqli_real_escape_string($connect, $_GET['nome']);
        $query = "SELECT * FROM colaborador WHERE NOME = '$nome'";
        $action = mysqli_query($connect, $query);
        $results = mysqli_fetch_assoc($action);
        if (!empty($results)) {
            //echo "<p>".$results["NOME"]."  ".$results["FUNCAO"]."</p>";
            return $results;
        } else {
            echo "<p>Colaborador não encontrado</p>";
        }
    }
}

function solicitaAvaliador($connect, $id_colaborador_avaliado, $departamento, $id_colaborador_avaliador)
{

    $query = "INSERT INTO avaliador (ID_COLABORADOR_AVALIADO, DEPARTAMENTO, ID_COLABORADOR_AVALIADOR) VALUES ( ' $id_colaborador_avaliado', '$departamento', '$id_colaborador_avaliador')";
    $execute = mysqli_query($connect, $query);
    if ($execute) {
        echo "<h2 class='msg'>Usuário inserido com sucesso.</h2>";
        header("location: ../../frontEnd/pages/telaEscolerAvaliadores360.php");
    } else {
        echo "<h2 class='msg'>Erro ao inserir.</h2>";
    }
}

function  meusAvaliadores($connect, $id_colaborador)
{
    $query = "SELECT colaborador.NOME FROM colaborador, avaliador WHERE avaliador.ID_COLABORADOR_AVALIADO = '$id_colaborador' and colaborador.ID_COLABORADOR = avaliador.ID_COLABORADOR_AVALIADOR;";
    $action = mysqli_query($connect, $query);
    $results = mysqli_fetch_all($action, MYSQLI_ASSOC);
    return $results;
}

function addObjetivos($connect, $id_colaborador)
{
    if (isset($_GET['adicionar'])) {
        $limiteDeObjetivos = quantidadeDeObjetivos($connect, $id_colaborador);
        if ($limiteDeObjetivos >= 5) {
            echo "<h3 class='retornoAlerta'>Maxino de objetivos atingidos .</h3>";
        } else {
            $nomeOjetivo = mysqli_real_escape_string($connect, $_GET['objetivo']);
            $decricaoOjetivo = mysqli_real_escape_string($connect, $_GET['descricao']);
            $peso = $_GET['peso'];
            $query = "INSERT objetivo (DESCRICAO_OBJETIVO, ID_COLABORADOR, NOME_OBJETIVO, PESO) VALUES ('$decricaoOjetivo', '$id_colaborador', '$nomeOjetivo', '$peso')";
            $execute = mysqli_query($connect, $query);
            if ($execute) {
                echo "<div class= 'retornoSucceso'><h3 class='msg'>Objetivo adicionado com sucesso.</h3></div>";
                //header("location: ../../frontEnd/pages/telaEscolerAvaliadores360.php");
            } else {
                echo "<h3 class='retornoErro'>Erro ao adicionar.</h3>";
            }
        }
    }
}

function mostrarMeusObjetivos($connect, $id_colaborador)
{
    $query = "SELECT NOME_OBJETIVO, DESCRICAO_OBJETIVO, PESO FROM objetivo WHERE ID_COLABORADOR = '$id_colaborador'";
    $action = mysqli_query($connect, $query);
    $results = mysqli_fetch_all($action, MYSQLI_ASSOC);
    return $results;
}

function quantidadeDeObjetivos($connect, $id_colaborador)
{
    $query = "SELECT DESCRICAO_OBJETIVO FROM objetivo WHERE ID_COLABORADOR = '$id_colaborador'";
    $action = mysqli_query($connect, $query);
    $results = mysqli_fetch_all($action, MYSQLI_ASSOC);
    return count($results);
}

function mostrarAvaliados($connect, $id_colaborador)
{
    $query = "SELECT colaborador.NOME, avaliador.ID_COLABORADOR_AVALIADOR FROM colaborador, avaliador WHERE avaliador.ID_COLABORADOR_AVALIADOR = '$id_colaborador' and colaborador.ID_COLABORADOR = avaliador.ID_COLABORADOR_AVALIADO";
    $action = mysqli_query($connect, $query);
    $results = mysqli_fetch_all($action, MYSQLI_ASSOC);
    return $results;
}

function addFeedBack360($connect,$idAvaliado,$idAvaliador){
    $comecar = mysqli_real_escape_string($connect, $_POST['comecar']);
    $parar = mysqli_real_escape_string($connect, $_POST['parar']);
    $continuar = mysqli_real_escape_string($connect, $_POST['continuar']);
    $query = "INSERT INTO `resultado` (`ID_RESULTADO`, `ID_CALENDARIO`, `ID_COLABORADOR`, `ID_OBJETIVO`, `ID_AVALIACAO`, `ID_AVALIADOR`, `STATUS`, `ANO`, `MES`, `DATA_CRIACAO`, `DATA_LIBERACAO`, `DATA_APROVACAO`, `DATA_AVALIACAO`, `JUSTIFICATIVA`, `COMECAR`, `PARAR`, `CONTINUAR`, `NOTA_RESULTADO`, `JUSTIFICATIVA_NAO_CONTRATACAO`) VALUES (NULL, '', '$idAvaliador', '', '', '$idAvaliado', '', NULL, NULL, NULL, NULL, NULL, NULL, '', '$comecar', '$parar', '$continuar', NULL, NULL)";
    $execute = mysqli_query($connect, $query);
    if($execute){
        echo "<div class= 'retornoSucceso'><h3 class='msg'>Objetivo adicionado com sucesso.</h3></div>";
    } else{
        echo "<h3 class='retornoErro'>Erro ao adicionar.</h3>";
    }
}
