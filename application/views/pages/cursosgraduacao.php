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
            <h2 class="titlepesq bold">Cursos de Graduação</h2>
          </div>
        </div>
        <div class="row">
          <div class="container mgtop">

            <?php foreach ($cursos as $curso) :   ?>

              <?php if($curso['area']==='bacharelado') :?>
                <div class="container mgtop">
                  <h3 class="bold">Bacharelados</h4>
                  <div class="col-xs-8 col-md-10 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                  </div>
                  <div class="col-xs-4 col-md-2 cursospesqarea">
                    <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>"><h4>Saiba Mais</h4></a>
                  </div>
                </div>
              <?php endif?>

              <?php if($curso['area']==='licenciatura') :?>
                <div class="container mgtop">
                  <h3 class="bold">Licenciaturas</h3>
                  <div class="col-xs-8 col-md-10 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                  </div>
                  <div class="col-xs-4 col-md-2 cursospesqarea">
                    <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>"><h4>Saiba Mais</h4></a>
                  </div>
                </div>
              <?php endif?>

              <?php if($curso['area']==='tecnologo') :?>
              <div class="container mgtop">
                <h3 class="bold">Tecnólogos</h3>
                <div class="col-xs-8 col-md-10 cursospesq">
                  <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-xs-4 col-md-2 cursospesqarea">
                  <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>"><h4>Saiba Mais</h4></a>
                </div>
              </div>
              <?php endif?>

              
             
              
                  <?php if($curso['area']==='r2a') :?>
                    <div class="container mgtop">
                    <h3 class="bold">Formação de Professores R2 (Cursos ofertados com base na Resolução CNE Nº 2/2019)</h3>
                    <div class="mgmedtop"></div>
                    <h4 class="titlepesq bold">A) Formação pedagógica para graduados não licenciados (Bacharéis e Tecnológos)</h4>

                    <div class="col-xs-8 col-md-10 cursospesq">
                      <h4><?= $curso['titulo'] ?></h4>
                    </div>
                    <div class="col-xs-4 col-md-2 cursospesqarea">
                      <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>"><h4>Saiba Mais</h4></a>
                    </div>
                   </div> 
                  <?php endif?>

                  <?php if($curso['area']==='r2a') :?>
                    <div class="container mgtop">
                    <h4 class="titlepesq bold">B) Formação pedagógica para graduados não licenciados (Bacharéis e Tecnológos)</h4>
                    <div class="col-xs-8 col-md-10 cursospesq">
                      <h4><?= $curso['titulo'] ?></h4>
                    </div>
                    <div class="col-xs-4 col-md-2 cursospesqarea">
                      <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>"><h4>Saiba Mais</h4></a>
                    </div>
                  <?php endif?>
       

              </div>
            

            <?php endforeach; ?>

          </div>
				</div>
				<div class="mgtop"></div>
      </section>
