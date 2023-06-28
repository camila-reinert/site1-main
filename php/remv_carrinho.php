<?php
include("../php/conectacarrinho.php");
session_start();
if (isset($_SESSION['spring_shop_carrinho'][$id_produto])){
    unset($_SESSION['spring_shop_carrinho'][$id_produto]);
}
?>