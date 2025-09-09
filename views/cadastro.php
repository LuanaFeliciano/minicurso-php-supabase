<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">

                <div class="text-center mb-4">
                    <i class="bi bi-person-plus-fill" style="font-size: 3rem;"></i>
                    <h3 class="card-title mt-2">Criar Nova Conta</h3>
                    <p class="text-muted">Preencha os dados para se registrar no sistema.</p>
                </div>

                <form action="register_logic.php" method="POST" class="needs-validation" novalidate>

                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome completo" required>
                        <label for="nome">Nome Completo</label>
                        <div class="invalid-feedback">
                            Por favor, insira seu nome.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
                        <label for="email">Endereço de e-mail</label>
                        <div class="invalid-feedback">
                            Por favor, insira um e-mail válido.
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="fabrica" class="form-label">Sua Fábrica</label>
                        <select class="form-select" id="fabrica" name="fabrica_id" required>
                            <option value="" selected disabled>Selecione uma opção...</option>
                            
                            <?php
                            /*
                                $fabricas = $supabase->from('fabricas')->select('id, nome_fabrica')->execute()->data;

                                foreach ($fabricas as $fabrica) {
                                    echo "<option value=\"{$fabrica->id}\">{$fabrica->nome_fabrica}</option>";
                                }
                            */
                            ?>
                            <option value="1">Imbera</option>
                            <option value="2">Coca-Cola</option>

                        </select>
                        <div class="invalid-feedback">
                            É obrigatório selecionar uma fábrica.
                        </div>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Crie uma senha" required minlength="6">
                        <label for="password">Senha</label>
                        <div id="passwordHelp" class="form-text">Sua senha deve ter no mínimo 6 caracteres.</div>
                        <div class="invalid-feedback">
                            A senha é obrigatória e precisa ter no mínimo 6 caracteres.
                        </div>
                    </div>
                    
                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirme sua senha" required>
                        <label for="confirm_password">Confirme sua Senha</label>
                        <div class="invalid-feedback">
                            As senhas não conferem.
                        </div>
                    </div>

                    <div class="d-grid mt-4">
                        <button type="submit" class="btn btn-primary btn-lg">Cadastrar</button>
                    </div>
                </form>

                <hr class="my-4">

                <div class="text-center">
                    <p class="text-muted small">Já tem uma conta? <a href="index.php?page=login">Entre aqui</a></p>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
(function () {
  'use strict'
  
  const forms = document.querySelectorAll('.needs-validation');
  const password = document.getElementById('password');
  const confirm_password = document.getElementById('confirm_password');

  function validatePasswordConfirmation() {
    if (password.value !== confirm_password.value) {
      confirm_password.setCustomValidity("As senhas não conferem.");
    } else {
      confirm_password.setCustomValidity("");
    }
  }

  password.onchange = validatePasswordConfirmation;
  confirm_password.onkeyup = validatePasswordConfirmation;

  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault();
        event.stopPropagation();
      }
      form.classList.add('was-validated');
    }, false);
  });
})();
</script>