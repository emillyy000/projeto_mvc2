
<div class="auth-page">

    <div class="auth-image">
        <img src="<?= asset('img/grupos.jpg') ?>" alt="Alimentos">

       
    </div>

    <div class="auth-form-area">

        <div class="auth-tabs">
            <a href="<?= url('auth/login') ?>" class="auth-tab">Entrar</a>
            <a href="<?= url('user/create') ?>" class="auth-tab active">Criar conta</a>
        </div>

        <h1>CRIE SUA CONTA</h1>
        <p class="auth-subtitle">Leva menos de dois minutos.</p>

        <form method="post" action="<?= url('user/store') ?>" class="auth-form" data-validate>

            <input type="hidden" name="csrf" value="<?= e($csrf) ?>">

            <!-- Nome -->
            <label>
                Nome completo
                <input
                    type="text"
                    name="name"
                    value="<?= e($old['name'] ?? '') ?>"
                    placeholder="Digite seu nome completo"
                    required
                >
            </label>

            <?php if (isset($errors['name'])): ?>
                <p class="erro"><?= e($errors['name']) ?></p>
            <?php endif; ?>

            <!-- E-mail -->
            <label>
                E-mail
                <input
                    type="email"
                    name="email"
                    value="<?= e($old['email'] ?? '') ?>"
                    placeholder="Digite seu e-mail"
                    required
                >
            </label>

            <?php if (isset($errors['email'])): ?>
                <p class="erro"><?= e($errors['email']) ?></p>
            <?php endif; ?>

            <!-- Senha -->
            <label>
                Senha
                <input
                    type="password"
                    name="password"
                    placeholder="Crie uma senha"
                    required
                >
            </label>

            <!-- Nascimento e Sexo -->
            <div class="auth-fields-row">

                <label>
                    Nascimento
                    <input
                        type="date"
                        name="birth_date"
                        value="<?= e($old['birth_date'] ?? '') ?>"
                    >
                </label>

                <label>
                    Sexo
                    <select name="sex">
                        <option value="">Selecione</option>
                        <option value="Feminino">Feminino</option>
                        <option value="Masculino">Masculino</option>
                        <option value="Outro">Outro</option>
                        <option value="Prefiro não informar">Prefiro não informar</option>
                    </select>
                </label>

            </div>

            <!-- Peso e Altura -->
            <div class="auth-fields-row">

                <label>
                    Peso (kg)
                    <input
                        type="number"
                        name="weight"
                        step="0.1"
                        placeholder="Ex.: 65,5"
                    >
                </label>

                <label>
                    Altura (cm)
                    <input
                        type="number"
                        name="height"
                        step="1"
                        placeholder="Ex.: 168"
                    >
                </label>

            </div>

            <!-- Endereço -->
            <label>
                Endereço
                <textarea
                    name="address"
                    rows="3"
                    placeholder="Digite seu endereço"
                ></textarea>
            </label>

            <button type="submit" class="auth-submit">
                Criar conta
            </button>

        </form>

    </div>

</div>
