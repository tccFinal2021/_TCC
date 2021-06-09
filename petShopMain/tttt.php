<?php 
include_once 'header.php';
?>

<section id="home-info" class="back-light">
        <div class="info-img"></div>
        <div class="info-content">
          <h2><span id="textPrimary">Visite</span> nosso blog</h2>
          <br>
          <h5> Fique por dentro das noticias do mundo dos pets e confira as novidades quais podem ajudar você cuidar do seu pet.</h5>
          <a href="VIEW/blog.php" class="btn btn-light">Visite o blog</a>
        </div>
      </section>

      <section id="sell-info" class="back-light">
        <div class="info-content">
          <h2><span id="textPrimary">Melhores</span> produtos</h2>
          <br>
          <h5>Confira os melhores produtos para alimentar, entreter e cuidar da saude do seu pet.</h5>
          <a href="VIEW/vendas.php" class="btn btn-light"
            >Compre nossos produtos para seu pet</a
          >
        </div>
        <div class="info-img"></div>
      </section>

      <div class="" id="footerPetShopHome">
        <div class="">
          <nav
            class="d-flex justify-content-center navbar navbar-expand-lg navbar-dark bg-primary"
>
            <h3>Receba Nossas Novidades</h3>
            <div class="text-center">
              <form action="/petShopDesign-main2/CONTROLLER/navegacao.php" class="form-inline">
                <div class="input-group">
                  <input
                    type="text"
                    name="nome"
                    class="form-control m-2"
                    placeholder="Nome"
                    aria-label="Username"
                    aria-describedby="basic-addon1"
                  />
                  <input
                    type="text"
                    name="email"
                    class="form-control m-2"
                    placeholder="Email"
                    aria-label="Username"
                    aria-describedby="basic-addon1"
                  />
                  <button class="btn btn-outline-success" type="button" name="btnReceberNovdd">
                    Cadastrar
                  </button>
                </div>
              </form>
            </div>
          </nav>
        </div>
      </div>
    </main>

<?php 
include_once 'VIEW/bota.php';
?>