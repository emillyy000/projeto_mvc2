<section class="hero-section">
    <div class="hero-content">
        <span class="badge-sub">SEU SITE DE NUTRIÇÃO</span>
        <h1>MAIS EQUILÍBRIO, MAIS SAÚDE, MAIS VOCÊ.</h1>
        <p>O NutriUp acompanha sua alimentação, calcula seus indicadores e mostra sua evolução — para você criar hábitos saudáveis sem complicação.</p>
        <div class="hero-buttons">
    <a href="<?= url('user/create') ?>" class="hero-btn-primary">
        Começar agora <span>→</span>
    </a>

    <a href="<?= url('conteudos') ?>" class="hero-btn-secondary">
        Ver conteúdos
    </a>
</div>
    </div>
    <div class="hero-image-card">
        <div class="image-wrapper">
            <img src="<?= asset('img/imagem_principal.png') ?>" alt="Refeição saudável">
        </div>
        <div class="floating-badge">
            <span class="imc-value">22,9</span>
            <span class="imc-label">IMC • Peso adequado</span>
        </div>
    </div>
</section>

<section class="features-section">

    <span class="section-subtitle">O QUE VOCÊ ENCONTRA</span>

    <h2>TUDO PARA CUIDAR DA SUA ALIMENTAÇÃO</h2>

<div class="features-grid">

    <!-- CARD 1 -->
    <div class="feature-card">
        <div class="icon-box">
            <img src="<?= asset('img/utensils.png') ?>" alt="">
        </div>
        <h3>DIÁRIO ALIMENTAR</h3>
        <p>Anote cada refeição do dia com calorias e nutrientes em poucos toques.</p>
    </div>

    <!-- CARD 2 -->
    <div class="feature-card">
        <div class="icon-box">
            <img src="<?= asset('img/chart-line.png') ?>" alt="">
        </div>
        <h3>INDICADORES AUTOMÁTICOS</h3>
        <p>IMC, gasto calórico e meta diária recalculados a cada novo dado.</p>
    </div>

    <!-- CARD 3 -->
    <div class="feature-card">
        <div class="icon-box">
            <img src="<?= asset('img/locate-fixed.png') ?>" alt="">
        </div>
        <h3>METAS E PROGRESSO</h3>
        <p>Defina seu objetivo e acompanhe sua evolução em gráficos claros.</p>
    </div>

    <!-- CARD 4 -->
    <div class="feature-card">
        <div class="icon-box">
            <img src="<?= asset('img/soup.png') ?>" alt="">
        </div>
        <h3>SUGESTÕES DE REFEIÇÕES</h3>
        <p>Conheça diferentes alimentos e ideias para montar refeições variadas e equilibradas.</p>
    </div>

    <!-- CARD 5 -->
    <div class="feature-card">
        <div class="icon-box">
            <img src="<?= asset('img/book-open.png') ?>" alt="">
        </div>
        <h3>CONTEÚDO EDUCATIVO</h3>
        <p>Artigos e dicas para entender melhor a alimentação e o cuidado com a saúde.</p>
    </div>

    <!-- CARD 6 -->
    <div class="feature-card">
        <div class="icon-box">
            <img src="<?= asset('img/notebook-pen.png') ?>" alt="">
        </div>
        <h3>RELATÓRIOS</h3>
        <p>Visualize um resumo das informações registradas e acompanhe seus dados.</p>
    </div>

</div>
</section>

<!-- COMO FUNCIONA -->
<section class="how-section">

    <div class="how-images">
        <div class="how-image image-one">
            <img src="<?= asset('img/refeiçao_saudavel.png') ?>" alt="Refeição equilibrada">
        </div>

        <div class="how-image image-two">
            <img src="<?= asset('img/alimentos.png') ?>" alt="Alimentos variados">
        </div>
    </div>

    <div class="how-content">
        <span class="section-subtitle">COMO FUNCIONA</span>

        <h2>TRÊS PASSOS PARA COMEÇAR</h2>

        <div class="step">
            <span class="step-number">01</span>
            <div>
                <h3>CRIE SUA CONTA</h3>
                <p>Cadastre suas informações para começar a usar o NutriUp.</p>
            </div>
        </div>

        <div class="step">
            <span class="step-number">02</span>
            <div>
                <h3>CONHEÇA SEUS OBJETIVOS</h3>
                <p>Explore as ferramentas e informações disponíveis para você.</p>
            </div>
        </div>

        <div class="step">
            <span class="step-number">03</span>
            <div>
                <h3>REGISTRE E APRENDA</h3>
                <p>Acompanhe seus registros e aprenda sobre hábitos saudáveis.</p>
            </div>
        </div>
    </div>

</section>

<!-- CHAMADA PARA CRIAR CONTA -->
<section class="cta-section">
    <div class="cta-content">
        <div class="cta-text">
            <h2>VAMOS SUBIR DE NÍVEL?</h2>
            <p>Crie sua conta gratuita e faça seu primeiro registro hoje.</p>
        </div>

        <a href="<?= url('user/create') ?>" class="cta-button">
            Criar minha conta <span>→</span>
        </a>
    </div>
</section>