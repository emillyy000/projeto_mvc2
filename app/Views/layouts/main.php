<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= e($title ?? 'UpNutri - Seu site de nutrição') ?></title>

    <link rel="icon" href="<?= asset('img/logo.png') ?>">
    <link rel="stylesheet" href="<?= asset('css/estilo.css') ?>">
</head>

<?php
$urlAtual = trim($_GET['url'] ?? '', '/');
$currentPage = explode('/', $urlAtual)[0] ?? '';

if ($urlAtual === '' || $urlAtual === 'user/index') {
    $currentPage = 'inicio';
}
?>
<body class="<?= $currentPage === 'ferramentas' ? 'tools-layout' : '' ?>">

    <header class="header">
    <div class="nav-container">

        <div class="logo">
            <img src="<?= asset('img/logo_site.png') ?>" alt="UpNutri Logo">
        </div>

       <nav class="nav-links">
    <a href="<?= url('') ?>"<?= $currentPage === 'inicio' ? ' class="active" aria-current="page"' : '' ?>>Início</a>

    <a href="<?= url('conteudos') ?>"<?= $currentPage === 'conteudos' ? ' class="active" aria-current="page"' : '' ?>>Conteúdos</a>

    <a href="<?= url('ferramentas') ?>"<?= $currentPage === 'ferramentas' ? ' class="active" aria-current="page"' : '' ?>>Ferramentas</a>

    <a href="<?= url('duvidas') ?>"<?= $currentPage === 'duvidas' ? ' class="active" aria-current="page"' : '' ?>>Dúvidas</a>

    <a href="<?= url('sobre') ?>"<?= $currentPage === 'sobre' ? ' class="active" aria-current="page"' : '' ?>>Sobre</a>

    <?php if (isset($_SESSION['user'])): ?>
        <a href="<?= url('meuPainel') ?>"<?= $currentPage === 'meuPainel' ? ' class="active" aria-current="page"' : '' ?>>Meu painel</a>
    <?php endif; ?>
</nav>

       <div class="nav-auth">
    <?php if (isset($_SESSION['user'])): ?>

        <a href="<?= url('dashboard') ?>">Meu painel</a>
        <a href="<?= url('profile') ?>">Perfil</a>
        <a href="<?= url('auth/logout') ?>" class="btn-dark">Sair</a>

    <?php else: ?>

        <a href="<?= url('auth/login') ?>">Entrar</a>
        <a href="<?= url('user/create') ?>" class="btn-dark">Criar conta</a>

    <?php endif; ?>
</div>

    </div>
</header>
    <main>
        <?= $content ?? '' ?>
    </main>

    <footer class="footer">
        <div class="footer-container">

            <div class="footer-col">
                <div class="logo">
                    <img src="<?= asset('img/logo_site.png') ?>" alt="UpNutri Logo">
                    
                </div>

                <p>
                    Acompanhamento nutricional simples para jovens e adultos
                    que querem viver com mais saúde.
                </p>
            </div>

            <div class="footer-col">
                <h4>NAVEGUE</h4>
                <ul>
                    <li><a href="<?= url('') ?>">Início</a></li>
                    <li><a href="<?= url('conteudos') ?>">Conteúdos</a></li>
                    <li><a href="<?= url('duvidas') ?>">Perguntas frequentes</a></li>
                    <li><a href="<?= url('register') ?>">Criar conta</a></li>
                </ul>
            </div>

            <div class="footer-col">
                <h4>EQUIPE</h4>
                <ul>
                    <li>Emilly Laís Nunes de Freitas</li>
                    <li>Sofia Santana Cruz</li>
                    <li>Yasmim Ramos de Souza Fernandes</li>
                </ul>
            </div>

        </div>

        <div class="footer-bottom">
            <p>
                &copy; <?= date('Y') ?> NutriUp.
                As informações do site não substituem a consulta com um nutricionista.
            </p>
        </div>
    </footer>

    <script src="<?= asset('js/app.js') ?>" defer></script>

</body>
</html>
