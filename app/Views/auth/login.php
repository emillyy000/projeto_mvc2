<section class="login-page">
    <div class="login-image">
        <img src="<?= asset('img/imagemprato.png') ?>" alt="Alimentos saudáveis">
    </div>

    <div class="login-container">
        <div class="login-tabs">
            <a href="<?= url('auth/login') ?>" class="tab active">Entrar</a>
            <a href="<?= url('user/create') ?>" class="tab">Criar conta</a>
        </div>

        <div class="login-content">
            <h1>BEM-VINDO DE VOLTA</h1>
            <p>Entre para acessar sua conta.</p>

            <form action="#" method="POST">
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Digite seu e-mail"
                        required
                    >
                </div>

                <div class="form-group">
                    <label for="password">Senha</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Digite sua senha"
                        required
                    >
                </div>

                <div class="forgot-password">
                    <a href="<?= url('auth/forgot') ?>">Esqueci minha senha</a>
                </div>

                <button type="submit" class="login-button">
                    Entrar
                </button>
            </form>

            <p class="register-text">
                Ainda não possui conta?
                <a href="<?= url('user/create') ?>">Criar conta</a>
            </p>
        </div>
    </div>
</section>