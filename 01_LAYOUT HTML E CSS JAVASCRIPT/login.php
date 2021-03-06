<!DOCTYPE html>
<html>
  <?php include('componentes/head_login.inc'); ?>
  <body>
    <div class="container">
      <div class="tab_header">
        <ul class="tabs">
            <li class="trocar_display tab_header2 active" data-tab="Assinantecontent">Central Assinante</li>
            <li class="trocar_display" data-tab="Veiculocontent">Veículo</li>
        </ul>
      </div>
      <section id="Assinantecontent" class="tirar_display trocar_display column">
        <div class="icon-home">
          <a href="index.html">
            <img src="public/img/icons/home.svg" alt="icons">
          </a>
        </div>
        <div class="icon-display">
          <img src="public/img/icons/login-dark.svg" alt="icons">
        </div>
        <form action="/logar" method="post">
            <div class="container-input">
              <label for="email_user">Email</label>
              <input type="text" name="email_user"  id="login_user" placeholder="Email">
            </div>
            <div class="container-input">
              <label for="Senha_login">Senha</label>
              <input type="text" name="Senha_login"  id="Senha_login" placeholder="Senha">
            </div>
            <div class="container-input-button">
                <input type="submit" value="Entrar">
            </div>
            <div class="container-cadastre">
              <p>Não tem uma conta? <strong><a id="btn-cadastrar" href="cadastros.html">Cadastre-se</a></strong></p>
            </div>
      </form>
    </section>
    <section id="Veiculocontent" class="tirar_display column">
      <div class="icon-home">
        <a href="index.html">
          <img src="public/img/icons/home.svg" alt="icons">
        </a>
      </div>
      <div class="icon-display">
        <img src="public/img/icons/truck-front_preto.svg" alt="icons">
      </div>
       <form action="/logar" method="post" >
            <div class="container-input">
              <label for="Placa_placa">Placa</label>
              <input type="text" name="login_user"  id="login_user" placeholder="Digite placa">
            </div>
            <div class="container-input">
              <label for="Senha_placa">Senha</label>
              <input type="text" name="Senha_placa"  id="Senha_placa" placeholder="Senha">
            </div>
            <div class="container-input-button">
                <input type="submit" value="Entrar">
            </div>
            <div class="container-cadastre">
              <p>Não tem uma conta? <strong><a id="btn-cadastrar" href="acesso_veiculo_index.html">Cadastre-se</a></strong></p>
            </div>
          </div>
      </form>
    </section>
  </body>
</html>
