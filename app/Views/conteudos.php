<section class="conteudos-page">

    <div class="conteudos-header">
        <span class="badge-sub">APRENDA</span>

        <h1>CONTEÚDOS EDUCATIVOS</h1>

        <p>
            Informação confiável e direta para você entender melhor a sua alimentação.
        </p>
    </div>

    <div class="conteudos-filtros">
        <button class="filtro active" data-filter="todos">Todos</button>
        <button class="filtro" data-filter="artigo">Artigos</button>
        <button class="filtro" data-filter="dica">Dicas</button>
        <button class="filtro" data-filter="video">Vídeos</button>
    </div>

    <div class="conteudos-grid">

        <article class="conteudo-card" data-category="artigo">
            <img src="<?= asset('img/prato.jpg') ?>" alt="Prato equilibrado">
            <div class="conteudo-card-body">
                <span class="conteudo-tag">Artigo</span>
                <h2>COMO MONTAR UM PRATO EQUILIBRADO</h2>
                <p>
                    Metade vegetais, um quarto proteína, um quarto carboidrato:
                    o método do prato simplifica qualquer refeição.
                </p>
            </div>
        </article>

        <article class="conteudo-card" data-category="artigo">
            <img src="<?= asset('img/alimentos.jpg') ?>" alt="Frutas e vegetais">
            <div class="conteudo-card-body">
                <span class="conteudo-tag">Artigo</span>
                <h2>POR QUE COMER DE 3 EM 3 HORAS NÃO É REGRA</h2>
                <p>
                    O que importa é a qualidade e a quantidade total do dia,
                    respeitando sua fome e sua rotina.
                </p>
            </div>
        </article>

        <article class="conteudo-card" data-category="artigo">
            <img src="<?= asset('img/frutas.jpg') ?>" alt="Frutas e iogurte">
            <div class="conteudo-card-body">
                <span class="conteudo-tag">Artigo</span>
                <h2>ENTENDENDO O IMC</h2>
                <p>
                    O Índice de Massa Corporal é um ponto de partida,
                    não um diagnóstico.
                </p>
            </div>
        </article>

        <article class="conteudo-card" data-category="dica">
            <div class="conteudo-card-numero">#04</div>
            <div class="conteudo-card-body">
                <span class="conteudo-tag">Dica</span>
                <h2>HIDRATE-SE AO LONGO DO DIA</h2>
                <p>
                    Manter-se hidratado é importante para o funcionamento do organismo.
                </p>
            </div>
        </article>

        <article class="conteudo-card" data-category="dica">
            <div class="conteudo-card-numero">#05</div>
            <div class="conteudo-card-body">
                <span class="conteudo-tag">Dica</span>
                <h2>PLANEJE AS COMPRAS DA SEMANA</h2>
                <p>
                    Uma lista feita com calma ajuda a organizar as compras
                    e facilita escolhas variadas.
                </p>
            </div>
        </article>

        <article class="conteudo-card" data-category="dica">
            <div class="conteudo-card-numero">#06</div>
            <div class="conteudo-card-body">
                <span class="conteudo-tag">Dica</span>
                <h2>LEIA O RÓTULO DOS ALIMENTOS</h2>
                <p>
                    Os ingredientes aparecem em ordem de quantidade.
                </p>
            </div>
        </article>

    </div>

</section>