<?php
session_start();

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in']!== true) {
    header('Location:../index.php');
    exit;
}

// Verificar se o usuário tem permissão para acessar a pasta
if (!has_permission('access_protected_folder')) {
    header('Location:../index.php');
    exit;
}

// Se o usuário tiver permissão, permitir acesso à pasta
?>