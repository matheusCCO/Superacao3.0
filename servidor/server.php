<?php
$server = "localhost";
$userDb = "root";
$passDb = "";
$database = "monarc02_superacao";

$connect = mysqli_connect($server, $userDb, $passDb, $database);

function login($connect){
    if(isset($_POST['logar'])){
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $senha = mysqli_real_escape_string($connect, $_POST['senha']);
        if(!empty($email) and !empty($senha)){
            $query = "SELECT * FROM colaborador WHERE EMAIL = '$email' AND SENHA = '$senha' ";
            
			$execute = mysqli_query($connect, $query);
			//retorna array associativo (apenas resultado)
			$result = mysqli_fetch_assoc($execute);
          
            if ( !empty($result['EMAIL']) ) {
                session_start();
                $_SESSION['nome'] = $result['NOME'];
                $_SESSION['email'] = $result['EMAIL'];
                $_SESSION['ativa'] = true;
                header("location: ../home/home.php");
            } else{
                echo "<p>Email ou senha não encontrados</p>";
            }

        } else {
            echo "<p>E-mail ou senha incorretos!</p>";
        }
    }

}

?>