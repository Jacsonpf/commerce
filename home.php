<!doctype html>
<html lang="pt-br">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Commerce de Jacson</title>     
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    </head>

    <body>
        <nav class="navbar navbar-light bg-light justify-content-between">
            <a id="menu" class="navbar-brand" style="margin:0 10px"><strong>Commerce de Jacson</strong></a>   
            <a class="btn btn-success" style="margin:1px" href="?pagina=sacola">Compras <i class="bi bi-cart4"></i>
                <?php if (isset($_SESSION['sacola'])) {
                    echo '(' . count($_SESSION['sacola']) . ')';
                } ?>
            </a>

            <?php if (isset($_SESSION['autenticado'])) { 
            ?> 
            <?php } 
            ?>
        </nav>
        <div class="container" style="margin-left:0;">
            <div class="row">
                </div>
                <div class="col-9" style="margin-top: 10px;"> 
                    <br><br><br><br><br><br><br><br><br><br><br><br><a>Produtos esgotados</a><br><br><br><br><br><br><br><br><br>
                    <?php if (isset($_GET['pagina'])) {
                        if ($_GET['pagina'] == 'produtos') {
                            include 'produtos_home.php';
                        }
                        if ($_GET['pagina'] == 'produto') {
                            include 'produto_detalhe.php';
                        }
                        if ($_GET['pagina'] == 'sacola') {
                            include 'sacola.php';
                        if ($_GET['pagina'] == 'realizar_pedido') {
                            if (!isset($_SESSION['autenticado'])) {
                                include 'login.php';
                            } else {
                                include 'realizar_pedido.php';
                            }
                        }
                    } else {
                        include 'produtos_destaque.php';
                    } ?>
                </div>
            </div>
        </div>

        <a id="to_bar" href="#menu"><i class="bi bi-arrow-up-square-fill"></i></a>

        <footer class="text-center text-lg-start bg-light text-muted">
            <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
                <div class="me-5 d-none d-lg-block">
                <span>Acompanhe-nos nas Redes Sociais</span>
                </div>

                <div>
                <a href="https://www.instagram.com" target="_blank" class="me-4 text-reset">
                        <i class="bi bi-instagram"></i>
                </a>
                <a href="https://www.facebook.com" target="_blank" class="me-4 text-reset">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="https://www.linkedin.com/" target="_blank" class="me-4 text-reset">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="https://github.com/" target="_blank" class="me-4 text-reset">
                    <i class="bi bi-github"></i>
                </a>
                </div>
            </section>
        </footer>
    </body>

</html>