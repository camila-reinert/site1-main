<?php
include("../php/conectacarrinho.php");
session_start();
if (isset($_SESSION['spring_shop_carrinho'])){
    foreach ($_SESSION['spring_shop_carrinho'] as $id_produto => $produto) {
        echo "Produto:" .$produto['nome']."<br>";
        echo "Quantidade:".$produto['quantidade']. "<br>";
        echo "Preço:".$produto['preco']."<br>";
        echo "<br>";

    }
} else {
    echo "Carrinho Vazio."
}
?>