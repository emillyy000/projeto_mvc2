<div class="cadastro-page">

    <div class="cadastro-imagem">
        <img src="<?= asset('img/alimentos.png') ?>" alt="Alimentos frescos">
    </div>

    <div class="cadastro-container">

        <div class="cadastro-tabs">
            <a href="<?= url('login') ?>" class="tab">Entrar</a>
            <a href="<?= url('user/create') ?>" class="tab active">Criar conta</a>
        </div>

        <div class="cadastro-titulo">
            <h1>CRIE SUA CONTA</h1>
            <p>Leva menos de dois minutos.</p>
        </div>

        <form method="post" action="<?= url('user/store') ?>" data-validate>

            <input type="hidden" name="csrf" value="<?= e($csrf) ?>">

            <div class="campo-cadastro">
                <label for="name">Nome completo</label>
                <input
                    type="text"
                    id="name"
                    name="name"
                    value="<?= e($old['name'] ?? '') ?>"
                    placeholder="Digite seu nome completo"
                >
            </div>

            <?php if (isset($errors['name'])): ?>
                <p class="erro"><?= e($errors['name']) ?></p>
            <?php endif; ?>

            <div class="campo-cadastro">
                <label for="email">E-mail</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="<?= e($old['email'] ?? '') ?>"
                    placeholder="Digite seu e-mail"
                >
            </div>

            <?php if (isset($errors['email'])): ?>
                <p class="erro"><?= e($errors['email']) ?></p>
            <?php endif; ?>

            <button type="submit" class="btn-cadastro">
                Criar conta
            </button>

        </form>

    </div>

</div>