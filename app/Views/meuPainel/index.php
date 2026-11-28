<section class="painel-container">

    <div class="painel-intro">
        <span class="painel-eyebrow">MEU PAINEL</span>
        <h1>Ol&aacute;, Emilly!</h1>
        <p>Acompanhe seus h&aacute;bitos e veja seu progresso em dire&ccedil;&atilde;o a uma rotina mais saud&aacute;vel.</p>
    </div>

    <div class="painel-indicadores">
        <div class="painel-card">
            <span class="painel-card-titulo">H&Aacute;BITOS</span>
            <h2>0</h2>
            <p>registrados hoje</p>
        </div>
        <div class="painel-card">
            <span class="painel-card-titulo">HIDRATA&Ccedil;&Atilde;O</span>
            <h2>0</h2>
            <p>registros de &aacute;gua</p>
        </div>
        <div class="painel-card">
            <span class="painel-card-titulo">REFEI&Ccedil;&Otilde;ES</span>
            <h2>0</h2>
            <p>registradas hoje</p>
        </div>
        <div class="painel-card">
            <span class="painel-card-titulo">MOVIMENTO</span>
            <h2>0</h2>
            <p>atividades registradas</p>
        </div>
        <div class="painel-card">
            <span class="painel-card-titulo">BEM-ESTAR</span>
            <h2>0</h2>
            <p>momentos registrados</p>
        </div>
    </div>

    <div class="painel-divider"></div>

    <div class="painel-dashboard-grid">
        <section class="painel-box">
            <h2>REGISTRAR REFEI&Ccedil;&Atilde;O</h2>
            <form class="painel-form">
                <div class="painel-form-row">
                    <select>
                        <option>Caf&eacute; da manh&atilde;</option>
                        <option>Almo&ccedil;o</option>
                        <option>Lanche</option>
                        <option>Jantar</option>
                        <option>Outro momento</option>
                    </select>
                    <input type="date">
                </div>
                <input type="text" placeholder="O que voc&ecirc; comeu?">
                <textarea placeholder="Observa&ccedil;&otilde;es (opcional)" rows="3"></textarea>
                <button type="button" class="painel-btn-dark">Salvar refei&ccedil;&atilde;o</button>
            </form>
        </section>

        <section class="painel-box">
            <h2>REFEI&Ccedil;&Otilde;ES DE HOJE</h2>
            <div class="painel-empty"><p>Nenhuma refei&ccedil;&atilde;o registrada hoje.</p></div>
        </section>

        <section class="painel-box">
            <h2>ACOMPANHAMENTO DE H&Aacute;BITOS</h2>
            <p class="painel-box-desc">Pequenas a&ccedil;&otilde;es que fazem parte do seu cuidado di&aacute;rio.</p>
            <div class="painel-habitos">
                <div class="painel-habito">
                    <span class="habito-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3.5s6 7 6 11a6 6 0 0 1-12 0c0-4 6-11 6-11z"/></svg>
                    </span>
                    <div><strong>Hidrata&ccedil;&atilde;o</strong><p>Registrar &aacute;gua ao longo do dia</p></div>
                </div>
                <div class="painel-habito">
                    <span class="habito-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M20 15.5A8 8 0 0 1 8.5 4 8.5 8.5 0 1 0 20 15.5z"/></svg>
                    </span>
                    <div><strong>Descanso</strong><p>Observar sua rotina de sono</p></div>
                </div>
                <div class="painel-habito">
                    <span class="habito-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="5" r="2"/><path d="m10 8-2 4 3 2-2 5m5-11 3 3-2 3M8 12H5m8 2h4"/></svg>
                    </span>
                    <div><strong>Movimento</strong><p>Registrar atividades do dia</p></div>
                </div>
                <div class="painel-habito">
                    <span class="habito-icon" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"><path d="M20 4c-8 0-14 4-14 10a6 6 0 0 0 6 6c6 0 8-8 8-16zM4 21c4-6 8-9 13-12"/></svg>
                    </span>
                    <div><strong>Bem-estar</strong><p>Reservar um momento para voc&ecirc;</p></div>
                </div>
            </div>
        </section>

       <!-- GRÁFICO DE ACOMPANHAMENTO -->
<section class="painel-box painel-grafico">

    <h2>ACOMPANHAMENTO DA ROTINA</h2>

    <p class="painel-box-desc">
        Visualize seus registros ao longo da semana.
    </p>

    <div class="grafico-container">

        <svg viewBox="0 0 600 300" class="grafico-svg">

            <!-- Linhas horizontais -->
            <line x1="55" y1="40" x2="570" y2="40"
                  stroke="#eadbce" stroke-dasharray="5 5"/>

            <line x1="55" y1="95" x2="570" y2="95"
                  stroke="#eadbce" stroke-dasharray="5 5"/>

            <line x1="55" y1="150" x2="570" y2="150"
                  stroke="#eadbce" stroke-dasharray="5 5"/>

            <line x1="55" y1="205" x2="570" y2="205"
                  stroke="#eadbce" stroke-dasharray="5 5"/>

            <line x1="55" y1="260" x2="570" y2="260"
                  stroke="#eadbce"/>

            <!-- Linha do gráfico -->
            <polyline
                points="75,220 155,185 235,205 315,130 395,160 475,95 555,120"
                fill="none"
                stroke="#c83c35"
                stroke-width="3"
                stroke-linecap="round"
                stroke-linejoin="round"
            />

            <!-- Pontos -->
            <circle cx="75" cy="220" r="5" fill="#c83c35"/>
            <circle cx="155" cy="185" r="5" fill="#c83c35"/>
            <circle cx="235" cy="205" r="5" fill="#c83c35"/>
            <circle cx="315" cy="130" r="5" fill="#c83c35"/>
            <circle cx="395" cy="160" r="5" fill="#c83c35"/>
            <circle cx="475" cy="95" r="5" fill="#c83c35"/>
            <circle cx="555" cy="120" r="5" fill="#c83c35"/>

            <!-- Dias -->
            <text x="75" y="285" text-anchor="middle">Seg</text>
            <text x="155" y="285" text-anchor="middle">Ter</text>
            <text x="235" y="285" text-anchor="middle">Qua</text>
            <text x="315" y="285" text-anchor="middle">Qui</text>
            <text x="395" y="285" text-anchor="middle">Sex</text>
            <text x="475" y="285" text-anchor="middle">Sáb</text>
            <text x="555" y="285" text-anchor="middle">Dom</text>

        </svg>

    </div>

    <div class="grafico-legenda">
        <span class="grafico-legenda-ponto"></span>
        <span>Registros de hábitos</span>
    </div>

</section>
    </div>

 <!-- SUGESTÕES -->
<!-- SUGESTÕES -->
<section class="painel-sugestoes">

    <div class="painel-sugestoes-header">

        <div>
            <h2>SUGESTÕES PARA VOCÊ</h2>
            <p>Acompanhe seus hábitos e cuide de você no dia a dia.</p>
        </div>

        <a href="<?= url('conteudos') ?>" class="painel-btn-dark">
            Ver relatório →
        </a>

    </div>

    <div class="painel-sugestoes-grid">

        <div class="sugestao-card">
            <h3>Café da manhã</h3>
            <p>
                Pão integral com queijo branco,
                café com leite e uma fruta.
            </p>
        </div>

        <div class="sugestao-card">
            <h3>Almoço</h3>
            <p>
                Arroz, feijão, uma opção de proteína
                e legumes variados.
            </p>
        </div>

        <div class="sugestao-card">
            <h3>Lanche</h3>
            <p>
                Banana com aveia e pasta de amendoim.
            </p>
        </div>

        <div class="sugestao-card">
            <h3>Jantar</h3>
            <p>
                Wrap integral com frango, alface e tomate.
            </p>
        </div>

    </div>

</section>
</section>
