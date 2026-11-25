<section class="forgot-page">

    <div class="forgot-container">

        <h1>ESQUECI MINHA SENHA</h1>

        <p>
            Informe o e-mail cadastrado e enviaremos instruções
            para recuperar sua senha.
        </p>

        <form method="post" action="<?= url('auth/forgot') ?>">

            <label for="email">E-mail</label>

            <input
                type="email"
                id="email"
                name="email"
                placeholder="Digite seu e-mail"
                required
            >

            <button type="submit">
                Enviar instruções
            </button>

        </form>

        <a href="<?= url('auth/login') ?>" class="back-login">
            ← Voltar para entrar
        </a>

    </div>

</section>