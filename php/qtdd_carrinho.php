<?php
include("../php/conectacarrinho.php");
session_start();
if(isset($_SESSION['spring_shop_carrinho'][$id_produto])){
    $_SESSION['spring_shop_carrinho'][$id_produto]['quantidade'] = $nova_quantidade;
}
?>