<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <?php include './includes/bootstrap-css.php'; ?>
    <link rel="stylesheet" href="./css/paginas/index.css">
    <title>Home | Seu site mais acessível</title>
</head>
<body class="index">
    <section class="banner container">
        <?php include './includes/header.php'; ?>
        <div class="cont row d-flex align-items-center">
            <div class="col_botoes col-12 col-sm-6">
                <h1>Seu site mais acessível.</h1>
                <h3>Desde a semântica até o design mais recomendado de cada componente</h3>

                <div class="row">
                    <a class="btn-banner" href="#conceito"><button>conceitos</button></a>
                    <a class="btn-banner" href="#topicos"><button>tópicos</button></a>
                </div>
            </div>
            <div class="col-12 col-sm-6">
                <img  src="./img/index/banner-main.svg" class="img-fluid" alt="Dois personagens, um homem e outro mulher com camisas na cor amarela, perto de uma tela segurando ferramentas e montando um website">
            </div>
        </div>
    </section>

    <main class="container">
        <article class="row d-flex align-items-center" id="principal">
            <section class="col-12 col-sm-12 col-lg-5" id="conceito">
                <h2>Acessibilidade, o que é?</h2>
                <p>Pode ser entendido como algo de fácil acesso. Para isso, é necessário que ações sejam feitas para garantir que cada vez mais haja acesso de diferentes públicos.</p>
            </section>
            <section class="col-12 col-sm-12  col-lg-5" id="beneficio">
                <h2>Benefícios da Acessibilidade</h2>
                <p>Além de você estar contribuindo com um mundo mais justo, seu site estará se adequando a um público esquecido por muitos outros sites. Além disso, seu site terá uma User Experience mais amigável e consequentemente terá mais sucesso no algoritmo do Google.</p>
            </section>
        </article>

        <section class="row grid-section" id="topicos">
            <div class="col-6 col-sm-4 col-lg-3 justify-content-center">
                <div><img src="./img/index/icon-design.png" alt="um lápis e uma régua estão se cruzando">
                <a href="design.php" title="Ir para a página de design">Design</a></div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 justify-content-center">
                <div><img src="./img/index/icon-menu.svg" alt="Três barras horrizontais na cor azul, representando um menu">
                <a href="menu.php" title="Ir para a página de Menu">Menu</a></div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 justify-content-center">
                <div><img src="./img/index/check-icon.png" alt="uma barra horrizontal com um check ao lado, abaixo dela tem outra barra horrizontal também com um check ao lado e abaixo dessa tem uma barra horizontal com um x na cor vermelha">
                <a href="checagem.php" title="Ir para a página de Checagem">Checagem</a></div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 justify-content-center">
                <div><img src="./img/index/icon-erro.png" alt="">
                <a href="principais_falhas.php" title="Ir para a página de Principais Falhas">Principais falhas</a></div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 justify-content-center mx-auto">
                <div><img src="./img/index/icon-form.png" alt="Formulário com 2 campos de texto e um botão na cor azul">
                <a href="formulario.php" title="Ir para a página de Formulários">Formulários</a></div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 justify-content-center mx-auto">
                <div><img src="./img/index/icon-imagem.png" alt="um retangulo maior com um sol, nuvens e montanha dentro. Representando uma imagem">
                <a href="imagem.php" title="Ir para a página de imagens">Imagens</a></div>
            </div>
            <div class="col-6 col-sm-4 col-lg-3 justify-content-center mx-auto">
                <div><img src="./img/index/icon-tabela.png" alt="linhas e colunas representando uma tabela">
                <a href="tabelas.php" title="Ir para a página de tabelas">Tabelas</a></div>
            </div>
        </section>
    </main>
    <?php include './includes/footer.php'; ?>
</body>
</html>