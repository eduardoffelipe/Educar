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
                if ($curso->modalidade === "$modalidade") :
                
              ?>  
                <option class="pesqselect" name="cursoid" value="<?= $curso->identificador ?>"><?= $curso->titulo ?></option>

                <?php endif;?>
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
            <h2 class="titlepesq">Cursos</h2>
          </div>
        </div>
        <div class="row">
          <div class="container mgtop resultado">
              <?php foreach ($cursos as $curso) :
                if ($curso->modalidade === "$modalidade") :
                
              ?>
            <a href="<?= base_url() ?>cursoindividual?cursoid=<?=$curso->identificador?>"><div class="col-md-10 cursospesq">
              <h4><?= $curso->titulo ?></h4>
            </div>
            <div class="col-md-2 cursospesqarea mgpes">
              <h4>Saiba Mais</h4></a>
            </div>
                <?php endif;?>
            <?php endforeach; ?>
          </div>
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
