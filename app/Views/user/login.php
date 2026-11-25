<div class="cadastro-page">

    <div class="cadastro-imagem">
        <img src="<?= asset('img/imagemprato.png') ?>" alt="UP Nutri com alimentos frescos">
    </div>

    <div class="cadastro-container">

        <div class="cadastro-tabs">
            <a href="<?= url('login') ?>" class="tab active">Entrar</a>
            <a href="<?= url('user/create') ?>" class="tab">Criar conta</a>
        </div>

        <div class="cadastro-titulo">
            <h1>BEM-VINDO DE VOLTA</h1>
            <p>Entre para acessar sua conta.</p>
        </div>

        <form method="post" action="<?= url('login') ?>">

            <div class="campo-cadastro">
                <label for="email">E-mail</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Digite seu e-mail"
                    required
                >
            </div>

            <div class="campo-cadastro">
                <label for="password">Senha</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Digite sua senha"
                    required
                >
            </div>

            <button type="submit" class="btn-cadastro">
                Entrar
            </button>

        </form>

    </div>

</div>