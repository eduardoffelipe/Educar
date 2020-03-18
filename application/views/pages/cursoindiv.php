<?php
session_start();
    if (isset($_GET['cursoid']))
    $cursoid = $_GET['cursoid'];
else
    $tcursoid = null;


?>

<div class="indiv">
    <div class="row">
      <div class="container mgtop">
          <?php
            foreach ($cursos as $curso) :

                if ($curso['identificador'] === $cursoid) :
            
          ?>
        <h2 class="bold"><?= $curso['titulo'] ?></h2>
        <div class="container topbar mgtop">
          <div class="col-md-4 col-xs-6">
            <h5>Duração:</h5>
            <p><?= $curso['duracao'] ?> meses</p>
          </div>
          <div class="col-md-4 col-xs-6 mgpes">
            <h5>Valor:</h5>
            <p>R$999,99</p>
          </div>
          <div class="col-md-4">
            <button>Matricule-se</button>
          </div>
        </div>
        <div class="container mgtop">
          <h3 class="bold">Objetivos do curso</h3>
          <p class="mgtop txtcursosind"><?= $curso['objetivo'] ?></p>
          <hr class="mgtop" />
        </div>
        <div class="container mgtop">
          <h3 class="bold">Público-Alvo</h3>
          <p class="mgtop txtcursosind"><?= str_replace(array("\r\n", ""),array("<br>","*"),$curso['publico']) ?></p>
          <hr class="mgtop" />
        </div>

        <div class="container mgtop">
          <h3 class="bold">Pré requisitos do curso</h3>
          <p class="mgtop txtcursosind">
          <?=  str_replace(array("\r\n", ""),array("<br>","*"),$curso['pre_requisito']) ?>
          </p>
          <hr class="mgtop" />
        </div>

        <div class="container mgtop">
          <h3 class="bold">Metodologia do curso</h3>
          <p class="mgtop txtcursosind"><?= str_replace(array("\r\n", ""),array("<br>","*"),$curso['metodologia']) ?></p>
          <hr class="mgtop" />
        </div>

        <div class="container mgtop">
          <h3 class="bold">Programa</h3>
          <p class="mgtop txtcursosind"><?=str_replace(array("\r\n", ""),array("<br>","*"),$curso['programa']) ?></p>
          <!-- <div class="container mgtop borders1" style="background-color: rgba(180, 24, 17, 0.7)">
            <div class="col-xs-8">
              <p class="txtcursosind">Didática no Ensino Superior</p>
            </div>
            <div class="col-xs-4" style="text-align: right;">
              <p class="txtcursosind">40hrs</p>
            </div>

          </div>
          <div class="container borders" style="background-color:#f0f0f0">
            <div class="col-xs-8">
              <p class="txtcursosind">Metodologia de Pesquisa</p>
            </div>
            <div class="col-xs-4" style="text-align: right;">
              <p class="txtcursosind">40hrs</p>
            </div>
          </div>

          <div class="container borders" style="background-color: rgba(180, 24, 17, 0.7)">
            <div class="col-xs-8">
              <p class="txtcursosind">Orientação e Trabalho de Conclusão de Curso (TCC)</p>
            </div>
            <div class="col-xs-4" style="text-align: right;">
              <p class="txtcursosind">40hrs</p>
            </div>

          </div>
          <div class="container borders" style="background-color:#f0f0f0">
            <div class="col-xs-8">
              <p class="txtcursosind">Pessoas no Processo de Mudança</p>
            </div>
            <div class="col-xs-4" style="text-align: right;">
              <p class="txtcursosind">40hrs</p>
            </div>

          </div>

          <div class="container borders" style="background-color: rgba(180, 24, 17, 0.7)">
            <div class="col-xs-8">
              <p class="txtcursosind">Gestão de Custos e Finanças</p>
            </div>
            <div class="col-xs-4" style="text-align: right;">
              <p class="txtcursosind">40hrs</p>
            </div>

          </div>
          <div class="container borders" style="background-color:#f0f0f0">
            <div class="col-xs-8">
              <p class="txtcursosind">Psicologia Social nas Organizações</p>
            </div>
            <div class="col-xs-4" style="text-align: right;">
              <p class="txtcursosind">40hrs</p>
            </div>
          </div> -->
          <hr class="mgtop" />


          <div class="container mgtop">
            <h3 class="bold">Carga horária e duração</h3>
            <p class="mgtop txtcursosind"><?= str_replace(array("\r\n", ""),array("<br>","*"),$curso['carga_horaria']) ?></p>
            <hr class="mgtop" />
          </div>

          <div class="container mgtop">
            <h3 class="bold">Certificação</h3>
            <p class="mgtop txtcursosind"><?= str_replace(array("\r\n", ""),array("<br>","*"),$curso['certificacao']) ?></p>
            <hr class="mgtop" />
          </div>

          <!-- <div class="container mgtop">
            <h3 class="bold">Planos de Pagamento</h3>
            <p class="mgtop txtcursosind">Certificado de pós-graduação lato sensu expedido pela Faculdade Educamais. A
              Faculdade Educamais é credenciada pela Portaria MEC Nº 1.247/2008, de 14/10/2008, e credenciada para
              oferta de cursos a distância pela Portaria MEC Nº 1.168/2018, de 09/11/2018. Os certificados expedidos
              pela Faculdade Educamais têm garantia de validade nacional.</p>
          </div> -->
          <div class="mgtop"></div>
 

        </div>
      
    
            <?php endif; ?>
        <?php endforeach; ?>
    </div>
      

                </div>

  