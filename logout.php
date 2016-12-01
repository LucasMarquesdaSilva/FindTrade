<?php require_once("logica-usuario.php");
logout();
// $_SESSION["success"] = "Deslogado com s  ucesso.";
header("Location: index.php");
die();
