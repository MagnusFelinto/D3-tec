<?php
    session_start();
    if (!isset($_SESSION['usuarioId'])) {
        header("Location: login.php");
    }
?>
<img src="https://33.media.tumblr.com/94cd6938b68418c0c8a12ddf420bbaaa/tumblr_ndkchr04mO1tzhbqno1_400.gif" alt="">
<a href="sair.php">Sair</a>