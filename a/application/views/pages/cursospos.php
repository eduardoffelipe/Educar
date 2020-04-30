<?php
session_start();

?>
  


      <section class="cursos">
        <div class="row">
          <div class="container mgtop">
            <h2 class="titlepesq">Cursos nas Áreas de:</h2>
          </div>
        </div>
        <div class="row">


          <div class="container mgtop resultado">
             


<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
<div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="">
      <div class="panel-heading" role="tab" id="headingOne">
      <h4 class="panel-title">
        
          <i class="fa fa-arrow-right"></i>&emsp;Administração e Negócios
        
      </h4>
    </div></a>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Administração e Negócios") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>



  <div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
      <div class="panel-heading" role="tab" id="headingTwo">
      <h4 class="panel-title">
        
      <i class="fa fa-arrow-right"></i>&emsp;Educação
        
      </h4>
    </div></a>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Educação") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-10 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-2 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>



  <div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
      <div class="panel-heading" role="tab" id="headingThree">
      <h4 class="panel-title">
        
      <i class="fa fa-arrow-right"></i>&emsp;Engenharia
        
      </h4>
    </div></a>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Engenharia") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>


  <div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
      <div class="panel-heading" role="tab" id="headingFour">
      <h4 class="panel-title">
        
      <i class="fa fa-arrow-right"></i>&emsp;Saúde
        
      </h4>
    </div></a>
    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Saúde") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>

  <div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
      <div class="panel-heading" role="tab" id="headingFive">
      <h4 class="panel-title">
        
      <i class="fa fa-arrow-right"></i>&emsp;Medicina Veterinária
        
      </h4>
    </div></a>
    <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Medicina Veterinária") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>

  <div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
      <div class="panel-heading" role="tab" id="headingSix">
      <h4 class="panel-title">
        
      <i class="fa fa-arrow-right"></i>&emsp;Psicopedagogia
        
      </h4>
    </div></a>
    <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Psicopedagogia") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>



  <div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
      <div class="panel-heading" role="tab" id="headingSeven">
      <h4 class="panel-title">
        
      <i class="fa fa-arrow-right"></i>&emsp;Segurança do Trabalho
        
      </h4>
    </div></a>
    <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Segurança do Trabalho") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>

  
  <div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
      <div class="panel-heading" role="tab" id="headingEight">
      <h4 class="panel-title">
        
      <i class="fa fa-arrow-right"></i>&emsp;Comunicação e Marketing
        
      </h4>
    </div></a>
    <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Comunicação e Marketing") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>
 

  <div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
      <div class="panel-heading" role="tab" id="headingNine">
      <h4 class="panel-title">
        
      <i class="fa fa-arrow-right"></i>&emsp;Direito
        
      </h4>
    </div></a>
    <div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Direito") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>

  <div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
      <div class="panel-heading" role="tab" id="headingTen">
      <h4 class="panel-title">
        
      <i class="fa fa-arrow-right"></i>&emsp;Educação Musical
        
      </h4>
    </div></a>
    <div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Educação Musical") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>

  <div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
      <div class="panel-heading" role="tab" id="headingEleven">
      <h4 class="panel-title">
        
      <i class="fa fa-arrow-right"></i>&emsp;Finanças e Contabilidade
        
      </h4>
    </div></a>
    <div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Finanças e Contabilidade") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>

  <div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
      <div class="panel-heading" role="tab" id="headingEleven">
      <h4 class="panel-title">
        
      <i class="fa fa-arrow-right"></i>&emsp;Meio Ambiente
        
      </h4>
    </div></a>
    <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwelve">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Meio Ambiente") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>

  <div class="panel panel-default">
  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
      <div class="panel-heading" role="tab" id="headingThirteen">
      <h4 class="panel-title">
        
      <i class="fa fa-arrow-right"></i>&emsp;Segurança Pública
        
      </h4>
    </div></a>
    <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThirteen">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Segurança Pública") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p>Saiba Mais</p>
                </div>
            </a>
                <?php  endif;?>
            <?php endforeach; ?>
              
      </div>
    </div>
  </div>


</div>


            <!-- <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['id']?>">
                <div class="col-md-9 cursospesq">
                    <h4><?= $curso['titulo'] ?></h4>
                </div>
                <div class="col-md-3 cursospesqarea mgpes">
                    <p><?=$curso['area']?></p>
                </div>
            </a>
                <?php // endif;?>
            <?php //endforeach; ?>
          </div> -->
				</div>
				<div class="mgtop"></div>
      </section>



        <script>

            function submitenter(myfield,e)
            {
            var keycode;
            if (window.event) keycode = window.event.keyCode;
            else if (e) keycode = e.which;
            else return true;

            if (keycode == 13)
            {
            myfield.form.submit();
            return false;
            }
            else
            return true;
            }

        </Script>
        <script>
            $(function() {
            $("#pesquisa").keyup(function() {

        var pesquisa = $(this).val();

        if (pesquisa != '') {
            var dados = {
                palavras: pesquisa
            }
            $.post('./application/view/pages/cursos.php', dados, function(retorna) {
                $(".resultado").html(retorna)
            })
        } else {
            $(".resultado").html('')
        }

    })
})
        </script>
