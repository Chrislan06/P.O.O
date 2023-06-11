<?= $this->extend('layout/master_principal') ?>

<?= $this->section('css') ?>
    <link rel="stylesheet" href="<?= asset('pagFiltro.css','css') ?>" />
<?= $this->endSection() ?>

<?= $this->section('content') ?>
<main>
      <h1>Os resultados aparecerão abaixo</h1>
      <div class="filtro">
        <h2>Filtrar por:</h2>
        <div class="buttons">
          <button class="button">Reservados</button>
          <button class="button">Disponíveis</button>
          <button class="button">Indisponíveis</button>
          <button class="button">Suíte</button>
          <button class="button">Casal</button>
          <button class="button">Solteiro</button>
          <button class="button">Família</button>
        </div>
      </div>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="quarto" id="quartoTeste">

          <div class="col">
            <div class="card h-100">
              <img
                src="/public/assets/quartos/suíte/LondonClingon/suiteLC1.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Suíte London Clingon</h5>
                <p class="card-text">
                  Quarto espaçoso e luxuoso, projetado para proporcionar conforto e relaxamento.

                  Cama king-size com lençóis macios e travesseiros de alta qualidade para garantir uma ótima noite de sono.

                </p>
                <a href="#" class="btn btn-primary">Vizualizar quarto</a>
                <p class="tamanho"><strong>Tam: Suíte</strong></p>
                <div class="card-footer">
                  <p class="dispo">Disponível</p>
                </div>
              </div>
            </div>
          </div>


        </div>
        
        <div class="quarto" id="quartoTeste">

          <div class="col">
            <div class="card h-100">
              <img
                src="/public/assets/quartos/suíte/heavenDoor/suiteHD1.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Suíte Heaven's Door</h5>
                <p class="card-text">
                  Suíte espaçosa e moderna, projetada com um estilo contemporâneo e elegante.

                  Quarto com uma cama king-size com lençóis de algodão egípcio e travesseiros de plumas, oferecendo conforto supremo.
                  </p>
                <a href="#" class="btn btn-primary">Vizualizar quarto</a>
                <p class="tamanho"><strong>Tam: Suíte</strong></p>
                <div class="card-footer">
                  <p class="dispo">Reservado</p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="quarto" id="quartoTeste">

          <div class="col">
            <div class="card h-100">
              <img
                src="/public/assets/quartos/casal/FRoom/casalFRoom1.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Casal Franch Room</h5>
                <p class="card-text">
                  Quarto de casal acolhedor e charmoso, projetado para criar uma atmosfera romântica e relaxante.

                  Cama queen-size com colchão macio e lençóis de alta qualidade, garantindo uma noite de sono tranquila.
                </p>
                <a href="#" class="btn btn-primary">Vizualizar quarto</a>
                <p class="tamanho"><strong>Tam: Casal</strong></p>
                <div class="card-footer">
                  <p class="dispo">Indisponível</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        
        <div class="quarto" id="quartoTeste">

          <div class="col">
            <div class="card h-100">
              <img
                src="/public/assets/quartos/casal/LDeluxe/casalLD1.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Casal Love Deluxe</h5>
                <p class="card-text">
                  Quarto de casal elegante e contemporâneo, projetado com um estilo moderno e sofisticado.

                  Cama king-size com um colchão luxuoso e lençóis de alta qualidade.
                </p>
                <a href="#" class="btn btn-primary">Vizualizar quarto</a>
                <p class="tamanho"><strong>Tam: Casal</strong></p>
                <div class="card-footer">
                  <p class="dispo">Reservado</p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="quarto" id="quartoTeste">

          <div class="col">
            <div class="card h-100">
              <img
                src="/public/assets/quartos/solteiro/LHeart/solteiroLH1.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Solteiro Loneliness Heart</h5>
                <p class="card-text">
                  Quarto de solteiro aconchegante e funcional, projetado para atender às necessidades de conforto e praticidade de um único hóspede.

                  Cama de solteiro com colchão confortável e lençóis macios, proporcionando um espaço acolhedor para descanso.
                </p>
                <a href="#" class="btn btn-primary">Vizualizar quarto</a>
                <p class="tamanho"><strong>Tam: Solteiro</strong></p>
                <div class="card-footer">
                  <p class="dispo">Reservado</p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="quarto" id="quartoTeste">

          <div class="col">
            <div class="card h-100">
              <img
                src="/public/assets/quartos/solteiro/BadC/solteiroBC1.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Solteiro Bad Company</h5>
                <p class="card-text">
                  
                  Quarto de solteiro moderno e compacto, projetado para oferecer conforto e funcionalidade em um espaço otimizado.

                  Área de trabalho prática, com uma mesa compacta, uma cadeira ergonômica.
                </p>
                <a href="#" class="btn btn-primary">Vizualizar quarto</a>
                <p class="tamanho"><strong>Tam: Solteiro</strong></p>
                <div class="card-footer">
                  <p class="dispo">Reservado</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        
        <div class="quarto" id="quartoTeste">
          <div class="col">
            <div class="card h-100">
              <img
                src="/public/assets/quartos/familia/ULove/familiaUL1.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Família United Love</h5>
                <p class="card-text">
                  Quarto familiar espaçoso e acolhedor, projetado para acomodar confortavelmente famílias ou grupos.

                  Camas confortáveis e versáteis, com opções de camas de casal e camas de solteiro.
                </p>
                <a href="#" class="btn btn-primary">Vizualizar quarto</a>
                <p class="tamanho"><strong>Tam: Família</strong></p>
                <div class="card-footer">
                  <p class="dispo">Reservado</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="quarto" id="quartoTeste">

          <div class="col">
            <div class="card h-100">
              <img
                src="/public/assets/quartos/familia/GrassHome/familaGH1.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h5 class="card-title">Família Grass of Home</h5>
                <p class="card-text">
                  Quarto familiar espaçoso e luxuoso, projetado para acomodar confortavelmente famílias maiores ou grupos de amigos.

                  Camas king-size e camas de solteiro, com colchões de alta qualidade e lençóis macios.
                </p>
                <a href="#" class="btn btn-primary">Vizualizar quarto</a>
                <p class="tamanho"><strong>Tam: Família</strong></p>
                <div class="card-footer">
                  <p class="dispo">Reservado</p>
                </div>
              </div>
            </div>
          </div>

        </div>

        
      </div>
      
    </main>
 <?= $this->endSection() ?>

 <?= $this->section('js') ?>
  <script src="<?= asset('pagFiltro.js','js')?>"></script>
  <?= $this->endSection() ?>
