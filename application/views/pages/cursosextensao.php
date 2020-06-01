<?php
session_start();

?>
  
  <section class="pesquisa">
  <div class="row">
    <div class="container mgtop">
      <h2 class="titlepesq">Faça sua pesquisa</h2>
    </div>
    <div class="container conpesq">
      <form action="<?=base_url('resultado') ?>" method="post">
        <div class="col-md-8">
          <h5>Buscar por nome</h5>
          <input type="text" placeholder="Digite o curso" class="inputpesq" name="resultado" id="resultado"/>
        </div>
        <div class="col-md-4">
          <button type="submit" class="btn btn-pesquisar">Pesquisar</button>
        </div>
      </form>
    </div>
  </div>
  </div>
</section>
      <section class="cursos">
        <div class="row">
          <div class="container mgtop">
            <h2 class="titlepesq">Cursos de Extensão</h2>
          </div>
        </div>
        <div class="row">
          <div class="container mgtop">
              <?php foreach ($cursos as $curso) :   ?>
            <div class="col-xs-8 col-md-10 cursospesq">
              <h4><?= $curso['titulo'] ?></h4>
            </div>
            <div class="col-xs-4 col-md-2 cursospesqarea">
              <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>"><h4>Saiba Mais</h4></a>
            </div>
            <?php endforeach; ?>
          </div>
				</div>
				<div class="mgtop"></div>
      </section>
