<link rel="stylesheet" type="text/css" href="../css/produtos.css">
</head>
<body>
    <div class="cabecalho">
        <div class="springshop">
            <div class="texto2">Produtos</div>
        </div>
    
        <div class="navigation">
            <div class="toggle"><span></span></div>
            <ul>
                <li style="--i:1;"><a href="index.html">Inicio</a></li>
                <li style="--i:2;"><a href="../pages/sobre.html">Sobre</a></li>
                <li style="--i:3;"><a href="../pages/carrinho.html">Carrinho</a></li>
                <li style="--i:4;"><a href="#">Favoritos</a></li>
                <li style="--i:5;"><a href="../pages/cadastro.html">Cadastre-se</a></li>
                <li style="--i:5;"><a href="#">Produtos</a></li>
   
            </ul>
           
        </div>
        <script>
            let navigation = document.querySelector('.navigation');
            document.querySelector('.toggle').onclick = function()
            {
                this.classList.toggle('active');
                navigation.classList.toggle('active');
   
            }
        </script>
      
          
    </div>
    <div class="Fotos" >
        $id_produto = $_GET
        <div><img src="../images/1.png" width="300px"></div>
    
    <div class="Texto">Este é um produto Nacional. Diferentes Locais Terão diferentes taxas de frete, prazo de entrega e atividades.</div>
    </div>   
    
<div class="Produtos">Shorts com Zíper Desbotado Gráfico <br> <br>  R$65,99 <br> <br>  3x de R$21,99 sem juros <br> <br> <br> Tamanho (BR)
    <div class="Opcoes">
    <input type="radio" name="Tamanho"> P
    <input type="radio" name="Tamanho"> M
    <input type="radio" name="Tamanho"> G
    <input type="radio" name="Tamanho"> GG
    </div>
</div>
<button class="botaofavoritos"> ADICIONAR AO CARRINHO </button>
<div class="Folha"><img src="../images/Folha.png" width="630px"></div>




    <a class= "whatsapp-link" href="https://web.whatsapp.com/send?phone=5547992810642" target="_blank">
        <i class="fa fa-whatsapp"></i>
    </a>

    
    
</body>
</html>