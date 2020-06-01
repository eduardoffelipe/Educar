<div class="container">
  <div class="row">
    <div class="col-xs-12 mgtop titlePrice">
      <h1 class="uppercase center red titlePrice"><span class="bold">Pós Graduação</span>EAD</h1>
      <h2 class="center bold uppercase txtAreasPrecos">Áreas</h2>
    </div>
    <div class="mgtop"></div>
    <?php foreach ($cursos as $curso) : ?>
      <?php if ($curso['area'] != "Engenharia" && $curso['area'] != '') : ?>
        <div class="col-lg-3">
          <h4 class="uppercase center btnCursosPrecos bold mgbt"><?= $curso['area'] ?></h4>
        </div>
      <?php endif ?>
    <?php endforeach ?>
  </div>
  <div class="row flex center">
    <div class="col-xs-12 col-sm-12 col-md-8">
      <img src="./assets/images/botao_preco_59.png" alt="Preco Areas Gerais">
    </div>
  </div>
  <div class="mgbt"></div>
  <!-- <div class="row flex center">
    <div class="col-lg-3">
      <h4 class="uppercase center btnCursosPrecos bold mgbt">Engenharia</h4>
    </div>
  </div>
  <div class="row flex center">
    <div class="col-xs-12 col-sm-12 col-md-8">
      <img src="./assets/images/botao_preco_79.png" alt="Preco Areas Gerais">
      <div class="mgbt"></div>
    </div>
    <div class="mgbt"></div>
  </div> -->
  <div class="row flex center">
  <div class="col-lg-3">
      <h4 class="uppercase center btnCursosPrecos bold mgbt">Engenharia</h4>
    </div>
    <div class="col-lg-3">
      <h4 class="uppercase center btnCursosPrecos bold mgbt">Farmácia</h4>
    </div>
  </div>
  <div class="row flex center">
    <div class="col-xs-12 col-sm-12 col-md-8">
      <img src="./assets/images/botao_preco_99.png" alt="Preco Areas Gerais">
      <div class="mgbt"></div>
    </div>
  </div>
</div>