<?php 
    require_once("CONTROLLER/usuarioController.php");
    require_once("nav.php");
?>

<title>CONTATO | ArglaMotors</title>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Breadcrumb Begin -->
<div class="breadcrumb-option set-bg" data-setbg="ASSETS/img/breadcrumb-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>FALE CONOSCO</h2>
                    <div class="breadcrumb__links">
                        <a href="index.php"><i class="fa fa-home"></i> Início</a>
                        <span>Contato</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 100px;">
            <div class="col-lg-5 col-md-6">
                <div class="call__text">
                    <div class="section-title">
                        <h2>Dúvidas? Comentários?</h2>
                        <p>Entre em contato! Nossa equipe está disponível para ajudar.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1 col-md-6">
                <!-- Botão para acionar modal -->
                <button type="button" class="btn btn-outline-secondary" data-toggle="modal" data-target="#ExemploModalCentralizado" style="margin-left: 400px;">
                  Mensagem Argla para você
                </button>

                <!-- Modal -->
                <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="TituloModalCentralizado">Mensagem da equipe:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Caro visitante,</p>
        <p>Agradecemos por explorar nosso site!</p>
        <p>Na nossa concessionária, dedicamo-nos a oferecer uma experiência única. Estamos aqui para ajudar você a encontrar o carro dos seus sonhos. Esperamos vê-lo em breve em nossa concessionária para mostrar tudo o que temos a oferecer pessoalmente.</p>
        <p>Atenciosamente,</p>
        <div style="text-align: center;">
          <a href="#" class="btn btn-secondary" style="background-color: #000000; border-radius: 100%;"><img src="ASSETS/img/logo png.png" alt="Logo Argla" style="width: 90px; m"></a>
        </div>
        <p align="right">Equipe Argla</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__text">
                    <div class="section-title">
                        <h2>Vamos trabalhar juntos!</h2>
                        <p>Para solicitar mais informações, entre em contato conosco através de nossas redes sociais.</p>
                    </div>
                    <ul>
                        <li><span>Seg. a sexta:</span> 08:00 às 18:00</li>
                        <li><span>Sábado:</span> 10:00 às 16:00</li>
                        <li><span>Domingo:</span> Fechado</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__form">
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Nome" id="nome" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control form-control-lg" placeholder="cliente@argla.com" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1">Telefone:</span>
                            </div>
                            <input type="tel" maxlength="15" onkeyup="handlePhone(event)" placeholder="(xx) 9.xxxx-xxxx" class="form-control" required autocomplete="off" name="telefone" id="telefone">
                        </div>

                        <div class="col-lg-6" style="margin-left: -15px;">
                            <select id="serviceIssue" onchange="handleIssueChange()" required>
                                <option value="">Está com problema em qual serviço? </option>
                                <option value="pagamento">Problemas no pagamento</option>
                                <option value="acesso">Não consigo acessar minha conta</option>
                                <option value="outro">Outro</option>
                            </select>
                        </div>

                        <div id="otherIssue" style="display: none; margin-top: 15px;">
                            <textarea id="otherIssueText" placeholder="Descreva seu problema..." style="margin-top: 15px;" required></textarea>
                        </div>

                        <br><br><br>

                        <button type="button" class="btn btn-danger" onclick="submitForm()" style="margin-left: 420px;">Envie agora</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal de Resposta -->
<div class="modal fade" id="responseModal" tabindex="-1" role="dialog" aria-labelledby="responseModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="responseModalLabel">Sua dúvida foi enviada com sucesso!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalBody">
        <!-- A mensagem será inserida aqui pelo JavaScript -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    const handlePhone = (event) => {
        let input = event.target;
        input.value = phoneMask(input.value);
    }

    const phoneMask = (value) => {
        if (!value) return "";
        value = value.replace(/\D/g, '');
        value = value.replace(/(\d{2})(\d)/, "($1) $2");
        value = value.replace(/(\d)(\d{4})$/, "$1-$2");
        return value;
    }

    function handleIssueChange() {
        const issueSelect = document.getElementById('serviceIssue');
        const otherIssue = document.getElementById('otherIssue');
        const otherIssueText = document.getElementById('otherIssueText');

        if (issueSelect.value === 'outro') {
            otherIssue.style.display = 'block';
            otherIssueText.required = true;
        } else {
            otherIssue.style.display = 'none';
            otherIssueText.required = false;
        }
    }

    function submitForm() {
        const nome = document.getElementById('nome').value;
        const email = document.getElementById('email').value;
        const telefone = document.getElementById('telefone').value;
        const issueSelect = document.getElementById('serviceIssue');
        const otherIssueText = document.getElementById('otherIssueText').value;
        let message = '';

        if (nome && email && telefone && issueSelect.value) {
            switch(issueSelect.value) {
                case 'pagamento':
                    message = 'Nossa equipe entrará em contato para ajudar com sua dúvida sobre pagamento. Verifique seu e-mail para mais informações.';
                    break;
                case 'acesso':
                    message = 'Nossa equipe ajudará você a resolver o problema de acesso. Verifique seu e-mail para mais instruções.';
                    break;
                case 'outro':
                    message = 'Nossa equipe analisará sua mensagem e retornará em breve.';
                    break;
                default

:
                    message = 'Por favor, selecione uma opção válida.';
                    break;
            }

            showMessageModal(message);
        } else {
            alert("Por favor, preencha todos os campos obrigatórios.");
        }
    }

    function showMessageModal(message) {
        // Configura e exibe o modal com a mensagem
        const modal = new bootstrap.Modal(document.getElementById('responseModal'));
        const modalBody = document.getElementById('modalBody');
        modalBody.innerText = message;
        modal.show();
    }

    document.querySelectorAll('.modal .close, .modal-footer button').forEach(button => {
        button.addEventListener('click', () => {
            const modal = bootstrap.Modal.getInstance(document.getElementById('responseModal'));
            modal.hide();
        });
    });
</script>

<!-- Footer Section Begin -->
<?php
    include("rodape.php");
?>
<!-- Footer Section End -->

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
