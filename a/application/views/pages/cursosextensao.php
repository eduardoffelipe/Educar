<?php
session_start();

?>
  

    <!-- <section class="pesquisa">
      <div class="row">
        <div class="container mgtop">
          <h2 class="titlepesq">Faça sua pesquisa</h2>
        </div>
        <div class="container conpesq">
          <div class="">
            <div class="col-md-4">
              <h5>Buscar por nome</h5>
              <input type="text" placeholder="Curso x" class="inputpesq"/>
            </div>
            <div class="col-md-4">
              <h5>Busca 2</h5>
              <input type="text" placeholder="Curso x" class="inputpesq"/>
            </div>
            <div class="col-md-4">
              <h5>Busca 3</h5>
              <input type="text" placeholder="Curso x" class="inputpesq"/>
            </div>
          </div>
        </div>
      </div> -->
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
