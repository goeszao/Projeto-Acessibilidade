<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <?php include './includes/bootstrap-css.php'; ?>
    <link rel="stylesheet" href="./css/paginas/checagem.css">
    <title>Checagem | Seu site mais acessível</title>
</head>

<body>
    <?php include './includes/header.php'; ?>
    <main class="container position-relative">
        <article>
            <section>
                <h1 id="principal">Metodos de Checagem</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id lacinia massa, vel sodales mi. Morbi
                    placerat dolor nec leo tempus dapibus. Mauris urna dui, molestie vel vehicula et, commodo vel magna. Etiam
                    eget nisl a tortor molestie facilisis sed ac tellus. Quisque nec interdum elit, at volutpat elit. Proin
                    facilisis ultrices venenatis. Mauris ut libero consequat, rhoncus massa sed, feugiat turpis. Aliquam at orci
                    laoreet, convallis risus at, tristique arcu. Cras auctor condimentum augue, nec dictum purus maximus ac. In
                    non diam lobortis magna vestibulum efficitur. Proin lectus lorem, rutrum sit amet suscipit sit amet,
                    lobortis vel dolor. Curabitur nulla eros, venenatis a nisl a, porta fringilla diam. Duis ultricies vehicula
                    nisl a efficitur. Integer nibh felis, malesuada sit amet erat ut, lobortis ultrices ipsum. Praesent mattis
                    eros metus, eu aliquet augue scelerisque sed.</p>
            </section>

            <section>
                <h2>Recursos Utilizados</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id lacinia massa, vel sodales mi. Morbi
                    placerat dolor nec leo tempus dapibus. Mauris urna dui, molestie vel vehicula et, commodo vel magna. Etiam
                    eget nisl a tortor molestie facilisis sed ac tellus. Quisque nec interdum elit, at volutpat elit. Proin
                    facilisis ultrices venenatis. Mauris ut libero consequat, rhoncus massa sed, feugiat turpis. Aliquam at orci
                    laoreet, convallis risus at, tristique arcu. Cras auctor condimentum augue, nec dictum purus maximus ac. In
                    non diam lobortis magna vestibulum efficitur. Proin lectus lorem, rutrum sit amet suscipit sit amet,
                    lobortis vel dolor. Curabitur nulla eros, venenatis a nisl a, porta fringilla diam. Duis ultricies vehicula
                    nisl a efficitur. Integer nibh felis, malesuada sit amet erat ut, lobortis ultrices ipsum. Praesent mattis
                    eros metus, eu aliquet augue scelerisque sed.</p>
            </section>

            <section>
                <h3>Funcionamento do NVDA</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean id lacinia massa, vel sodales mi. Morbi
                    placerat dolor nec leo tempus dapibus. Mauris urna dui, molestie vel vehicula et, commodo vel magna. Etiam
                    eget nisl a tortor molestie facilisis sed ac tellus. Quisque nec interdum elit, at volutpat elit. Proin
                    facilisis ultrices venenatis. Mauris ut libero consequat, rhoncus massa sed, feugiat turpis. Aliquam at orci
                    laoreet, convallis risus at, tristique arcu. Cras auctor condimentum augue, nec dictum purus maximus ac. In
                    non diam lobortis magna vestibulum efficitur. Proin lectus lorem, rutrum sit amet suscipit sit amet,
                    lobortis vel dolor. Curabitur nulla eros, venenatis a nisl a, porta fringilla diam. Duis ultricies vehicula
                    nisl a efficitur. Integer nibh felis, malesuada sit amet erat ut, lobortis ultrices ipsum. Praesent mattis
                    eros metus, eu aliquet augue scelerisque sed.</p>
            </section>
        </article>
        <aside class="position-fixed checklist active">
            <button aria-label="Clique para fechar o checklist">
                <img src="./img/menu/seta.png" alt="seta na cor branca">
            </button>
            <div class="conteudo">
                <h3>confira se você já fez os seguintes passos:</h3>
                <div class="box-selecionar">
                    <input type="checkbox" id="check1" name="check1">
                    <label for="check1">Check 1</label>
                </div>
                <div class="box-selecionar">
                    <input type="checkbox" id="check2" name="check2">
                    <label for="check2">Check 2</label>
                </div>
                <div class="box-selecionar">
                    <input type="checkbox" id="check3" name="check3">
                    <label for="check3">Check 3</label>
                </div>
            </div>
        </aside>
    </main>

    <?php include './includes/footer.php'; ?>
    <script src="./js/checagem.js"></script>
</body>

</html>