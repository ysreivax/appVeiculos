@extends('padrao')
@section('content')
 <!-- --------------------------------------------- CALHA 1 -------------------------------------------------- -->

 <footer class="homefooter1">
  <div class="container px-1 text-center">
    <div class="row gx-5">
      <div class="col">
       <div class="p-2 border bg-red">Seja Bem-Vindo</div>
      </div>
      <div class="col">
        <div class="p-2 border bg-red">História e Modelos</div>
      </div>
    </div>
  </div>
</footer>

  <!-- -------------------------------------- FIM DA CALHA 1 -------------------------------------------------- -->


  <!-- ------------------------------------------- CARROSEL 1 ------------------------------------------------- -->

  <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{'/img/caminhao7.jpg'}}" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{'/img/carro.jpg'}}" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- -------------------------------------- FIM DO CARROSEL 1 ---------------------------------------------- -->


  <!-- --------------------------------------------- SPACING 1 ----------------------------------------------- -->

  <footer class="homefooter2">
  <div class="d-grid gap-6">
    <div class="homep3 p-3 bg-black border text-center">DE ONDE SURGIRAM OS CAMINHÕES?</div>
  </div>
  </footer>

  <!-- -------------------------------------- FIM DO SPACING 1 ----------------------------------------------- -->
  
  
  <!-- ------------------------------------------- COLUMS 1 -------------------------------------------------- -->


  <footer class="homefooter3">
  <div class="clearfix">
    <img src="{{'/img/historiacaminhoes.png'}}" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
  
    <p class="homep1">Essenciais para a vida moderna, responsáveis pela distribuição e pelo transporte de praticamente tudo que se usa e vê, o caminhão é uma peça muito importante na História da Humanidade. Seu advento permitiu que o homem fosse mais longe, construísse maior, consumisse mais, ousasse mais em sua aventura de existência. E o começo dessa história passa por uma das maiores revoluções da humanidade: a invenção do motor a combustão interna. Com o advento do motor a combustão, capaz de tracionar muitas vezes o peso que um cavalo de carga é capaz, esse período fica marcado como o grande nascimento do transporte por caminhões no mundo. Claro que o transporte de cargas já existia, mas era feito por meio de tração animal e a Revolução Industrial permitiu o desenvolvimento da tecnologia a vapor, surgindo o primeiro veículo que não precisava da força de homens ou cavalos para se mover.
    </p>
  
    <p class="homep2">
      Em 1895 o alemão Karl Benz desenhou e construiu o primeiro caminhão da história que usava um motor de combustão interna (diferente do motor a vapor do fartier). No mesmo ano o ele modificou o projeto e criou o primeiro ônibus motorizado da história. No ano seguinte Gottlied Daimler criou outro veículo de carga a combustão interna. O caminhão tinha um motor ciclo Otto (não movido a diesel e sim a gasolina), de 4 cavalos e dois cilindros. Tinha duas marchas a frente e uma atrás. Sua capacidade de carga era de 1,5 toneladas. Foi vendido no dia 1o de outubro de 1896 para o British Motor Syndicate Ltd, na Inglaterra.
    </p>
  
    <p class="homep9">
      A necessidade o fez criar o que podemos chamar de primeiro caminhão cegonha do mundo. Uma espécie de carroça/ plataforma, mas ao invés de ser acoplada em um cavalo, era acoplada em um veículo já motorizado. Em menos de um ano, além do uso próprio, já vendia seu “implemento” para outras empresas. Depois disso, a evolução e a necessidade de carregar cada vez mais cargas fizeram com que chegássemos ao que temos atualmente, uma indústria em pleno vigor, que já está passando para uma nova era, a era dos motores elétricos e que usam energia limpa. É o próximo capítulo desta história.
    </p>

  </div>
</footer>

  <!-- -------------------------------------- FIM DO COLUMS 1 ---------------------------------------------- -->


  <!-- ---------------------------------------- SEPARADOR 1 ------------------------------------------------ -->

  <footer><p class="homep5">A linha R tem uma combinação exclusiva de luxo dentro e fora, com a resistência para suportar todas as condições. Dirigir um Scania é uma declaração de estilo, orgulho e capacidade absoluta. Persistente e versátil, a linha R adapta-se perfeitamente à sua vida na estrada.</p>
  </footer>

  <!-- ------------------------------------ FIM DO SEPARADOR 1 -------------------------------------------- -->


  <!-- ----------------------------------------   CLEARFIX 1 ---------------------------------------------- -->

  <div class="div1 bg-black clearfix">
    <button type="button" class="btn btn-secondary float-start bg-black"><p class="homep4">MODELOS DE CAMINHÕES</p></button>
    <button type="button" class="btn btn-secondary float-end bg-black"><p class="homep4">MODELOS DE CAMINHÕES</p></button>
  </div>

  <!-- ------------------------------------  FIM DO CLEARFIX 1 ------------------------------------------- -->

    

  <!-- ------------------------------------------  CARD 1 ------------------------------------------------ -->

  <footer class="homefooter4">
  <div class="row bg-red row-cols-1 row-cols-md-2 g-4">
    <div class="col bg-red">
      <div class="card bg-black">
        <img src="{{'/img/v82.jpg'}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Caminhão Scania V8</h5>
          <p class="card-text">Bem-vindo a uma maneira melhor de dirigir. O poderoso V8 transforma cada subida, cada ultrapassagem, cada horário apertado em algo tranquilo e prazeroso. O caminhão faz o trabalho duro, para que você possa permanecer confortável, alerta e totalmente no controle do seu trabalho.
          </p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card bg-black">
        <img src="{{'/img/linha R2.jpg'}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Caminhão Scania Linha R</h5>
          <p class="card-text">A linha R tem uma combinação exclusiva de luxo dentro e fora, com a resistência para suportar todas as condições. Dirigir um Scania é uma declaração de estilo, orgulho e capacidade absoluta. Persistente e versátil, a linha R adapta-se perfeitamente à sua vida na estrada.</p>
        </div>
      </div>
    </div>
    <div class="col bg-red">
      <div class="card bg-black">
        <img src="{{'/img/linha G2.jpg'}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Caminhão Scania Linha G</h5>
            <p class="card-text">Os caminhões da linha G são altamente adaptáveis e têm grande visibilidade e dirigibilidade. É uma cabine premium versátil e bem balanceada. Com um amplo conjunto de opções, você agora pode personalizar a linha G para adequá-la às necessidades específicas de sua empresa.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card bg-black">
        <img src="{{'/img/linha P2.jpg'}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center">Caminhão Scania Linha P</h5>
          <p class="card-text">Com os caminhões da linha P, você tem uma cabine de pouco peso com grande visibilidade, dirigibilidade e bom balanceamento para atender às suas necessidades específicas. A linha P é nossa linha de cabines mais versátil, ideal para operações urbanas e regionais e aprovada em construção e outras condições exigentes.

          </p>
        </div>
      </div>
    </div>
  </div>
</footer>

  <!-- --------------------------------------  FIM DO CARD 1 ----------------------------------------- -->


  <!-- ---------------------------------------- SEPARADOR 2 ------------------------------------------------ -->

  <footer><p class="homep5">A linha R tem uma combinação exclusiva de luxo dentro e fora, com a resistência para suportar todas as condições. Dirigir um Scania é uma declaração de estilo, orgulho e capacidade absoluta. Persistente e versátil, a linha R adapta-se perfeitamente à sua vida na estrada.</p>
  </footer>

  <!-- ------------------------------------ FIM DO SEPARADOR 2 -------------------------------------------- -->


  <!-- --------------------------------------------- SPACING 2 ----------------------------------------------- -->

  <footer class="homefooter2">
    <div class="d-grid gap-6">
      <div class="homep3 p-3 bg-black border text-center">DE ONDE SURGIRAM OS CARROS?</div>
    </div>
    </footer>
  
  <!-- -------------------------------------- FIM DO SPACING 2 ----------------------------------------------- -->
    

  <!-- ------------------------------------------- COLUMS 2 -------------------------------------------------- -->


  <footer class="homefooter3">
    <div class="clearfix">
      <img src="{{'/img/historiacarro1.jpg'}}" class="col-md-6 float-md-end mb-3 ms-md-3" alt="...">
    
      <p class="homep1">O primeiro meio de transporte a fazer uso de um motor a gasolina para se locomover foi um automóvel que continha somente três rodas e foi criado no ano de 1885 por um alemão de nome Karl Benz. Com o passar do tempo foram sendo idealizados outros exemplares, muitos deles com o que era chamado na época de “motor de dois tempos”, idealizado em 1884 por Gottlieb Daimbler. A partir de então teve início a corrida pela produção e venda de automóveis, iniciada por uma empresa francesa conhecida pelo nome de Panhard et Levassor. No ano de 1892, o conhecido Henry Ford fabricou seu primeiro carro, o Ford, na América do Norte.
      </p>
    
      <p class="homep2"> Os ingleses entraram na concorrência um pouco mais tarde, se comparado aos outros países europeus, devido a uma lei vigente na época, conhecida como “bandeira vermelha” – o automóvel não poderia ultrapassar os 10 km por hora e deveria levar na frente uma pessoa segurando uma bandeira vermelha para sinalizar aos pedestres que o automóvel estava passando, a pelo menos 60 metros de distância, a noite costumava-se utilizar uma lanterna.O primeiro carro inglês a ser produzido foi o Lanchester (vide foto), seguido pelo Subean, Swift, Humber, Riley, Singer, Lagonda, entre outos.    
      </p>
    
      <p class="homep9">
        Após a produção dos automóveis para passeio e das camionetas teve início a produção dos Volkswagem, DKW-Vemag, Willys-Overland, Simca, Galaxie, Corcel (então pertencente a Ford), Opala (da frota da Chevrolet), Esplanada, Regente e Dart (marca da Chrysler). Apesar de todos estes automóveis serem armados no Brasil, suas plantas eram idealizadas nas sedes européias e norte-americanas, sendo que grande parta de peças e equipamentos necessários eram importados. Completamente distinto do que era antigamente, o automóvel contemporâneo têm particularidades das quais nós só podemos desfrutar hoje, como conforto e agilidade, sem dizer que hoje a maioria deles são muito mais silenciosos e seguros. No decorrer dos anos os automóveis vêm se transformando, passando a ser objeto de desejo de milhares de pessoas, sem dizer que o processo que envolve a produção proporciona emprego a milhares de pessoas no mundo inteiro agitando bilhões de dólares e trazendo amplos lucros para as grandes empresas fabricantes.
      </p>
  
    </div>
  </footer>
  
  <!-- -------------------------------------- FIM DO COLUMS 2 ---------------------------------------------- -->


  <!-- ---------------------------------------- SEPARADOR 3 ------------------------------------------------ -->

  <footer><p class="homep5">A linha R tem uma combinação exclusiva de luxo dentro e fora, com a resistência para suportar todas as condições. Dirigir um Scania é uma declaração de estilo, orgulho e capacidade absoluta. Persistente e versátil, a linha R adapta-se perfeitamente à sua vida na estrada.</p>
  </footer>

  <!-- ------------------------------------ FIM DO SEPARADOR 3 -------------------------------------------- -->


  <!-- ----------------------------------------   CLEARFIX 2 ---------------------------------------------- -->

  <div class="div1 bg-black clearfix">
    <button type="button" class="btn btn-secondary float-start bg-black"><p class="homep4">MODELOS DE CARROS</p></button>
    <button type="button" class="btn btn-secondary float-end bg-black"><p class="homep4">MODELOS DE CARROS</p></button>
  </div>

  <!-- ------------------------------------  FIM DO CLEARFIX 2 ------------------------------------------- -->

  
  <!-- ------------------------------------------  CARD 2 ------------------------------------------------ -->

  <footer class="homefooter4">
    <div class="row bg-red row-cols-1 row-cols-md-2 g-4">
      <div class="col bg-red">
        <div class="card bg-black">
          <img src="{{'/img/BMW_SÉRIE_2_COUPÉ1.jpg'}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">BMW SÉRIE 2 COUPÉ</h5>
            <p class="card-text">A arquitetura de tração traseira do novo BMW Série 2 Coupé oferece uma sensação de condução desportiva. Combinada com a opcional direção desportiva variável com Servotronic, possibilita características de condução diretas e ágeis, com um esforço de viragem mínimo.
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card bg-black">
          <img src="{{'img/BMW_M6_COMVERTIBLE5.jpg'}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">BMW M6 CONVERTIBLE</h5>
            <p class="card-text">Não é apenas um olhar, é uma declaração: Com seu estilo muscular, o BMW M6 Conversível enfatiza impressionantemente sua silhueta poderosa. Arcos de roda queimados e outros detalhes característicos e atraentes servem para confirmar seu potencial de potência latente. 
            </p>
          </div>
        </div>
      </div>
      <div class="col bg-red">
        <div class="card bg-black">
          <img src="{{'/img/BMW_M6_CABRIO.jpg'}}" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">BMW M6 CABRIO</h5>
              <p class="card-text">O BMW M6 Cabrio trava até à imobilização total quase instantaneamente, graças ao opcional sistema de travagem em cerâmica e carbono M. Equipado com o diferencial ativo M, a direção M Servotronic indexada à velocidade e a transmissão de embraiagem dupla M com Drivelogic para uma máxima agilidade, o BMW M6 Cabrio é, definitivamente, um verdadeiro topo de gama.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card bg-black">
          <img src="{{'/img/BMW_M2_CS.jpg'}}" class="card-img-top " alt="...">
          <div class="card-body">
            <h5 class="card-title text-center">BMW M2 CS</h5>
            <p class="card-text">O BMW M2 CS se diferencia da Competition em alguns aspectos. A começar pelo S55, o motor seis cilindros 3.0 biturbo. Em vez de 410 cv, no M2 CS a potência é de 40 cv acima e ainda 56,1 kgfm. O carro ainda tem válvula no escapamento para ampliar a sinfonia.O modelo com câmbio manual de seis marcha faz: zero a 100 km/h em 4,0 segundos cravados.
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  
    <!-- -----------------------------------------  FIM DO CARD 2 ------------------------------------------ -->


    <!-- ---------------------------------------- SEPARADOR 4 ---------------------------------------------- -->

  <footer><p class="homep5">A linha R tem uma combinação exclusiva de luxo dentro e fora, com a resistência para suportar todas as condições. Dirigir um Scania é uma declaração de estilo, orgulho e capacidade absoluta. Persistente e versátil, a linha R adapta-se perfeitamente à sua vida na estrada.</p>
  </footer>

    <!-- ------------------------------------ FIM DO SEPARADOR 4 -------------------------------------------- -->

     <!-- ----------------------------------------- AGRADECIMENTO 1 ---------------------------------------------- -->

     <footer class="homefooter5 ">
      <footer class="homefooter6">
        <p>oiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>
          <footer class="homefooter8">
            <p>oiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>
            <p>oiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>
            <p>oiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>
          <footer class="homefooter7">
            <p class="homep7 text-center">EXPRESS CARS</p>
          <p class="homep7 text-center">___ BMW patrocinios ___</p>
          <p class="homep7 text-center">___ Scania patrocinios ___</p>
          </footer>
            <p>oiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>
            <p>oiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>
            <p>oiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>
          </footer>
        <p>oiiiiiiiiiiiiiiiiiiiiiiiiiiii</p>
      </footer>
      </footer>
      
     <!-- --------------------------------- FIM DO AGRADECIMENTO 1 -------------------------------------------- -->
@endsection