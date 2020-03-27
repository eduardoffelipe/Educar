<?php
session_start();

?>
  

    <div class="pesquisa">
      
        <div class="row">
        <div class="container mgtop">
          <h2 class="titlepesq">Faça sua pesquisa</h2>
        </div>
        <div class="container conpesq">
          <div class="">
           
            <div class="col-md-4">
              <h5>Buscar por nome</h5>
              
              <select type="text" placeholder="Curso x" class="inputpesq" onKeyPress="return submitenter(this,event)">
              <?php foreach ($cursos as $curso) :
                // if ($curso->modalidade === "$modalidade") :
                
              ?>  
                <option class="pesqselect" name="cursoid" value="<?= $curso['identificador'] ?>"><?= $curso['titulo'] ?></option>

                <!-- endif -->
            <?php endforeach; ?>

              </select>
            </div>
            <div class="col-md-4">
              <!-- <h5>Busca 2</h5>
              <input type="text" placeholder="Curso x" class="inputpesq"/> -->
            </div>
            <div class="col-md-4">
              <h5>Busca 3</h5>
              <input type="submit" class="inputpesq">
            </div>

          </div>
        </div>
      </div>
 
      </div>
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
        
          <i class="fa fa-arrow-right"></i>&emsp;Direito
        
      </h4>
    </div></a>
    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Direito") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['identificador']?>">
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
        
      <i class="fa fa-arrow-right"></i>&emsp;Engenharia
        
      </h4>
    </div></a>
    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Engenharia") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['identificador']?>">
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
        
      <i class="fa fa-arrow-right"></i>&emsp;Educação
        
      </h4>
    </div></a>
    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
      <div class="panel-body">
      <?php foreach ($cursos as $curso) :
                 if ($curso['area'] === "Educação") :
                
        ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['identificador']?>">
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


            <!-- <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso['identificador']?>">
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
