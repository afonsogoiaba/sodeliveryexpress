<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SóDelivery - Painel administrativo</title>
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="public/css/administrativo.css">
    <link rel="stylesheet" href="public/css/fonts&color.css">
    <link rel="shortcut icon" href="public/img/logo.png" />
  </head>
  <body>
    <header>
      <div class="logo-config">
        <div class="logo">
          <a href="index.html">
            <img src="public/img/logo.png" alt="logo Só delivery">
          </a>
          <h2>Painel Administrativo</h2>
        </div>

        <div class="config">
          <img id="blank" src="public/img/icons/settings-work-tool.svg">
          <img src="public/img/icons/settings-work-tool-dark.svg">
          <span>Configurações</span>
        </div>
      </div>
    </header>

    <main>

      <div class="clear"></div>

      <div class="informacoes-topo content">
        <div class="info-servico">
          <div class="info-name">
            <h3>Informações Serviço</h3>
            <img src="public/img/icons/service.svg">
          </div>

          <div class="info">
            <ul>
              <li><b>Veículos: </b><span>00</span> Cadastrados</li>
              <li><b>Fretes: </b><span>00</span> Cadastrados</li>
              <li class="destaque_info amarelo-forte"><b>Valor total dos Fretes: </b>R$: <span>00,00</span></li>
            </ul>
          </div>
        </div>

        <div class="info-conta">
          <div class="info-name">
            <h3>Informações Conta</h3>
            <img src="public/img/icons/accoun.svg">
          </div>

          <div class="info">
            <ul>
              <li><b>Usuário: </b><span>Nome_usuario</span></li>
              <li><b>Empresa: </b><span>Nome_empresa</span></li>
              <li class="destaque_info azul-forte"><b>Próxima Fatura: </b><span> 00/00/0000</span> <a href="#">ver extrato</a></li>
            </ul>
          </div>
        </div>
      </div>

      <div class="clear"></div>
      <div class="clear"></div>

      <div class="quadro-areas content">
        <div class="quadro-avisos">
          <h3>Avisos</h3>
          <div class="clear"></div>
          <ul class="sequencia">
            <li><span>Usuário 01 </span> lançou um preço para o seu frete.</li>
            <li><span>Usuário 01 </span> lançou um preço para o seu frete.</li>
            <li><span>Usuário 01 </span> lançou um preço para o seu frete.</li>
            <li><span>Usuário 01 </span> lançou um preço para o seu frete.</li>
            <li><span>Usuário 01 </span> lançou um preço para o seu frete.</li>
            <li><span>Usuário 01 </span> lançou um preço para o seu frete.</li>
          </ul>
        </div>

        <div class="areas content">
          <div class="area1">
            <div class="area-nome">
              <h3>Área de cadastramento</h3>
            </div>

            <div class="area-container">
              <div class="container">

                <a href="areacadastro.html#cadastramentoVeiculos">
                  <img src="public/img/icons/veiculosADM.png">
                  Cadastrar veículos
                </a>
              </div>

              <div class="container">

                <a href="areacadastro.html#cadastramentoFretes">
                  <img src="public/img/icons/freteADM.png">
                  Cadastrar Fretes
                </a>
              </div>
            </div>
          </div>

          <div class="area2">
            <div class="area-nome">
              <h3>Área de monitoramento</h3>
            </div>

            <div class="area-container">
              <div class="container">

                <a href="areavizualizacao.html#verEstatisticas">
                  <img src="public/img/icons/verEstatisticasADM.png">
                  Ver estatísticas empresariais
                </a>
              </div>

              <div class="container">

                <a href="areavizualizacao.html#verVeiculos">
                  <img src="public/img/icons/verVeiculosADM.png">
                  Ver meus veículos
                </a>
              </div>

              <div class="container">

                <a href="areavizualizacao.html#verFretes">
                  <img src="public/img/icons/verFretesADM.png">
                  Ver meus fretes
                </a>
              </div>
            </div>
          </div>

          <div class="area3">
            <div class="area-nome">
              <h3>Área administrativa</h3>
            </div>

            <div class="area-container">
              <div class="container">

                <a id="percent" href="areaadministrativa.html#editarEmpresa">
                  <img src="public/img/icons/editarEmpresaADM.png">
                  Editar empresa
                </a>
              </div>

              <div class="container">
                <a href="areaadministrativa.html#verEditaVeiculos">
                  <img src="public/img/icons/verEditarPagamentoADM.png">
                  Ver/Editar pagamento
                </a>
              </div>
              <div class="container">
                <a href="areaadministrativa.html#verEditaVeiculos">
                  <img src="public/img/icons/verEditarPagamentoADM.png">
                   pagamento
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="borderred"></div>
    </main>

    <footer>
      <div class="copyright">
        <p>&copy; <b>Loop Soft</b> Internet Serviços LTDA</p>
      </div>
    </footer>
  </body>
</html>
