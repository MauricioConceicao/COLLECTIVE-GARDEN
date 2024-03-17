<?php
    session_start();
    //print_r($_REQUEST);
    if(isset($_POST['submit'])&& !empty($_POST['email'])&& !empty($_POST['password']))
    {
        include_once('config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        //print_r('email: '.$email);
        //print_r('<br>');
        //print_r('senha: '.$password);
        
        //verificar se existe no banco
        $sql = "SELECT * FROM cadastro_usuario WHERE email = '$email' and senha = '$password'";
        $result = $conexao->query($sql);
        
        if(mysqli_num_rows($result) < 1){
            //se não tiver cadastro recarrega o login.
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('location: index.php');

        }else{
            //se tiver cadastro libera o home do site.
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('location: home.php');


        }

    }
    else
    {
        header('location: index.php');
    }
?>